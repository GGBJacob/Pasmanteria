import os.path
import json
import time
import requests
from bs4 import BeautifulSoup


PRODUCT_IMAGE_DIRECTORY = './scrapedData/images'
PRODUCT_DATA_DIRECTORY = './scrapedData/data'
WEBSITES_DIRECTORY = './scrapedData/websites.json'
MAIN_PAGE = 'https://nadodatek.pl/'
SESSION = requests.Session()

class ProductPage:
    def __init__(self, category='', link=''):
        self.category = category
        self.link = link

    def to_dict(self):  # używamy do serializacji stron
        return {
            'category': self.category,
            'link': self.link
        }

    def from_dict(self, data):
        self.category = data['category']
        self.link = data['link']
        return self


def get_all_products_subpages(request):
    print('Looking for products...')
    if request.status_code != 200:  # edge case jakby się strona nie załadowała poprawnie
        return None

    if os.path.isfile(WEBSITES_DIRECTORY):  # deserializacja danych wcześniej znalezionych (szukanie długo trwa)
        with open(WEBSITES_DIRECTORY, encoding='utf-8') as file:
            data = json.load(file)
            print(f'Found {len(data)} saved pages')
            return [ProductPage().from_dict(subpage) for subpage in data]

    print('Scanning all pages...')
    parsedPage = BeautifulSoup(request.content, 'html.parser')  # parsujemy request by wyłuskać załadowanego htmla

    menu = parsedPage.find('div', class_="dropdown")  # wyszukujemy menu (akurat tu taką klasę ma menu)
    menu = menu.find_all(class_="dropdown-item list-group-item-action")  # wyszukujemy wszystkie elementy z linkami

    subpages = []
    stack = []
    for link in menu:  # dodajemy wszystkie główne strony, a potem je rozbijamy na głębsze podstrony
        category = link.text
        stack.append(ProductPage(category, link.get('href')))

    pageNo = 1
    while len(stack) > 0:
        currentPage = stack.pop()
        pageRequest = SESSION.get(currentPage.link)

        if pageRequest.status_code != 200:
            continue

        parsedPage = BeautifulSoup(pageRequest.content, 'html.parser')
        cardDeck = parsedPage.find('div', class_='card-deck')  # komponent który zawiera kolejne podkategorie
        if cardDeck is None:
            print(f"Found page #{pageNo}")
            pageNo += 1
            subpages.append(currentPage)
            continue

        for page in cardDeck.find_all('div', class_='card'):
            subcategory = page.find('span').text
            link = page.find('a').get('href')
            stack.append(ProductPage(currentPage.category+'/'+subcategory, link))

    with open(WEBSITES_DIRECTORY, 'w', encoding='utf-8') as file:  # Serializacja tabeli, bo wyszukiwanie 150 stron trwa długo
        json.dump([subpage.to_dict() for subpage in subpages], file)

    return subpages


def save_product_photos(directory, productNo, imagePages):  # zwraca czy się udało zapisać

    imageCount = 0
    for imagePage in imagePages:
        imagePage = 'https://nadodatek.pl/' + imagePage.get('src')  # wycigamy sam link i łączymy ze stroną
        image = SESSION.get(imagePage)  # wysyłamy request do strony zawierającej sam obrazek
        if image.status_code != 200:
            return False

        with open(f'{directory}/{str(productNo)}_{str(imageCount)}.jpg', 'wb') as file:  # zapis zdjęcia w formacie x_y (x- numer artykułu, y- numer zdjęcia x artykułu)
            file.write(image.content)
            imageCount += 1

    return True


def save_product_info(infoDir, productNo, productPage):  # zwraca czy się udało zapisać
    if not productPage.find('h1'):
        return False
    title = productPage.find('h1').text
    price = productPage.find('span', class_='productPrice').text
    description = productPage.find('div', class_='nadodatek-cm-full-content-description').text.strip()

    with open(f'{infoDir}/{productNo}.txt', 'w', encoding='utf-8') as file:
        file.write(f"{title}\n\n")
        file.write(f"{price}\n\n")
        file.write(f"{description}\n\n")

    return True


def save_product(category, productNo, productPage):  # zwraca czy się udało zapisać

    infoDir = f'{PRODUCT_DATA_DIRECTORY}/{category}'
    if not os.path.exists(infoDir):
        os.makedirs(infoDir)

    photoDir = f'{PRODUCT_IMAGE_DIRECTORY}/{category}'
    if not os.path.exists(photoDir):
        os.makedirs(photoDir)

    parsedProductPage = BeautifulSoup(productPage.content, 'html.parser')
    carouselDiv = parsedProductPage.find('div', class_='carousel slide')
    imagePages = carouselDiv.find_all('img') if carouselDiv else []

    return (save_product_info(infoDir, productNo, parsedProductPage)
            and save_product_photos(photoDir, productNo, imagePages))


def scrape_subpages(subpages):
    print('Starting scraping...')
    productCount = 0
    pageCount = 1
    for subpage in subpages:
        print(f'Scraping progress: {round(pageCount/len(subpages)*100, 2)}% ({pageCount}/{len(subpages)})')
        subpageRequest = SESSION.get(subpage.link)
        pageCount += 1
        if subpageRequest.status_code != 200:
            continue

        subpageParsed = BeautifulSoup(subpageRequest.content, 'html.parser')

        body = subpageParsed.find('div', id='bodyContent')  # znajdujemy gdzie są produkty
        if not body:
            continue

        products = body.find_all('a', href=True, id=False)  # wyciągamy linki produktów (produkty nie mają ustawionego ID, pdfy mają)
        for product in products:

            product = product.get('href')  # wyciągamy link do jednego produktu

            if MAIN_PAGE not in product:
                continue

            productRequest = SESSION.get(product)
            if productRequest.status_code != 200:
                continue

            if save_product(subpage.category, productCount, productRequest):
                productCount += 1  # zliczamy by zapisywać odpowiednio produkty


if __name__ == '__main__':
    start = time.time()
    request = SESSION.get(MAIN_PAGE)  # wysyłamy request do strony głównej
    subpages = get_all_products_subpages(request)  # wyciągamy wszystkie podstrony z menu
    scrape_subpages(subpages)
    end = time.time()
    print(f'Scraping finished in: {round(end-start, 2)}s')

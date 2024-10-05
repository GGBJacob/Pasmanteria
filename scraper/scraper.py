import os.path

import requests
from bs4 import BeautifulSoup


IMAGE_DIRECTORY = './scrapedData/images'
DATA_DIRECTORY = './scrapedData/data'
MAIN_PAGE = 'https://nadodatek.pl/'

class MenuItem():
    def __init__(self, category, subcategory, link):
        self.category = category
        self.subcategory = subcategory
        self.link = link


def get_all_menu_subpages(request):
    if request.status_code != 200:  # edge case jakby się strona nie załadowała poprawnie
        return None

    soup = BeautifulSoup(request.content, 'html.parser')  # parsujemy request by wyłuskać załadowanego htmla

    menu = soup.find(id='menu-id')  # wyszukujemy menu (page sensitive - akurat takie id ma ta strona dla menu)
    menu = menu.find_all(class_="dropdown-item list-group-item-action menu-action")  # wyszukujemy wszystkie elementy z linkami
    subpages = []

    category = ''
    subcategory = ''
    for link in menu:
        if link.find('strong'):  # odrzucamy strony, które zawierają kolejne podstrony (i tak wszystkie są w menu)
            category = link.find('strong').text
            continue
        subpages.append(MenuItem(category, link.text, link.get('href')))  # dodajemy valid stronkę zawierającą produkty (lub nie, jeśli ich tam brak)

    return subpages


def save_product_photos(directory, productNo, imagePages):

    imageCount = 0
    for imagePage in imagePages:
        imagePage = 'https://nadodatek.pl/' + imagePage.get('src')  # wycigamy sam link i łączymy ze stroną
        image = requests.get(imagePage)  # wysyłamy request do strony zawierającej sam obrazek
        if image.status_code != 200:
            return None

        with open(f'{directory}/{str(productNo)}_{str(imageCount)}.jpg', 'wb') as file:  # zapis zdjęcia w formacie x_y (x- numer artykułu, y- numer zdjęcia x artykułu)
            file.write(image.content)
            imageCount += 1



def save_product(category, subcategory,productNo, productPage):

    infoDir = f'{DATA_DIRECTORY}/{category}/{subcategory}'
    if not os.path.exists(infoDir):
        os.makedirs(infoDir)

    photoDir = f'{IMAGE_DIRECTORY}/{category}/{subcategory}'
    if not os.path.exists(photoDir):
        os.makedirs(photoDir)

    parsedProductPage = BeautifulSoup(productPage.content, 'html.parser')
    carouselDiv = parsedProductPage.find('div', class_='carousel slide')
    imagePages = carouselDiv.find_all('img') if carouselDiv else []

    save_product_photos(photoDir, productNo, imagePages)

    save_product_info(infoDir, productNo, parsedProductPage)


def save_product_info(infoDir, productNo, productPage):
    title = productPage.find('h1').text  # TODO Naprawić to jakoś funkcję wyżej, czasami wywala się, bo nie znajdzie h1, ale policzy zapisanie produktu.
    price = productPage.find('span', class_='productPrice').text
    description = productPage.find('div', class_='nadodatek-cm-full-content-description').text.strip()

    with open(f'{infoDir}/{productNo}.txt', 'w', encoding='utf-8') as file:
        file.write(f"{title}\n\n")
        file.write(f"{price}\n\n")
        file.write(f"{description}\n\n")


def scrape_subpages(subpages):
    productCount = 0
    for subpage in subpages:
        subpageRequest = requests.get(subpage.link)

        if subpageRequest.status_code != 200:
            continue

        subpageParsed = BeautifulSoup(subpageRequest.content, 'html.parser')
        #print(subpageParsed.prettify())
        body = subpageParsed.find('div', id='bodyContent')  # znajdujemy gdzie są produkty
        if not body:
            continue

        # print(body.prettify())
        products = body.find_all('a', href=True)  # wyciągamy linki produktów
        for product in products:

            product = product.get('href')  # wyciągamy link do jednego produktu

            if MAIN_PAGE not in product:
                continue

            productRequest = requests.get(product)
            if productRequest.status_code != 200:
                continue

            if productCount == 30:
                pass

            save_product(subpage.category, subpage.subcategory, productCount, productRequest)

            productCount += 1  # zliczamy by zapisywać odpowiednio produkty


if __name__ == '__main__':
    request = requests.get(MAIN_PAGE)  # wysyłamy request do strony głównej
    subpages = get_all_menu_subpages(request)  # wyciągamy wszystkie podstrony z menu
    scrape_subpages(subpages)

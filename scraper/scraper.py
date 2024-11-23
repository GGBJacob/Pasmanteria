import concurrent
import os.path
import json
import time
from concurrent.futures import ThreadPoolExecutor

import requests
from bs4 import BeautifulSoup

PRODUCT_IMAGE_DIRECTORY = '../scrapedData/images'
PRODUCT_DATA_DIRECTORY = '../scrapedData/data'
WEBSITES_DIRECTORY = '../scrapedData/websites.json'
CATEGORIES_DIRECTORY = '../scrapedData/categories.json'
MAIN_PAGE = 'https://nadodatek.pl/'
SESSION = requests.Session()


def add_to_nested_dict(nested_dict, path):
    current_level = nested_dict  # Startujemy od głównej tablicy
    parent = None  # Przechowuje referencję do rodzica
    last_key = None  # Ostatni klucz użyty przez parent

    for key in path[:-1]:  # Iterujemy przez wszystkie klucze oprócz ostatniego
        if isinstance(current_level, list):  # Jeśli current_level jest listą
            # Tworzymy nowy słownik i podmieniamy w rodzicu
            new_dict = {item: [] for _, item in enumerate(current_level)}
            if parent is not None:  # Jeśli mamy rodzica, aktualizujemy go
                parent[last_key] = new_dict
            else:  # Jeśli nie ma rodzica, oznacza to, że to główny poziom
                nested_dict = new_dict
            current_level = new_dict

        # Jeśli klucz nie istnieje, dodajemy nową listę na poziomie słownika
        if key not in current_level:
            current_level[key] = []

        # Ustawiamy parent i last_key na kolejny poziom
        parent = current_level
        last_key = key
        current_level = current_level[key]  # Schodzimy głębiej
    value = path[-1]
    current_level.append(value)
    return nested_dict


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
    categories_dict = []
    for link in menu:  # dodajemy wszystkie główne strony, a potem je rozbijamy na głębsze podstrony
        category = link.text
        if "WYPRZEDAŻ" in category:
            continue
        category = category[:-1] if category.endswith('.') else category  # Usuwanie zbędnych kropek na końcu
        categories_dict = add_to_nested_dict(categories_dict, category.split('/'))
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
            subcategory = subcategory[:-1] if subcategory.endswith('.') else subcategory  # Usuwanie zbędnych kropek na końcu
            link = page.find('a').get('href')
            categories_dict = add_to_nested_dict(categories_dict, (currentPage.category+'/'+subcategory).split('/'))
            stack.append(ProductPage(currentPage.category + '/' + subcategory, link))

    if not os.path.exists(os.path.dirname(CATEGORIES_DIRECTORY)):
        os.makedirs(os.path.dirname(CATEGORIES_DIRECTORY))

    if not os.path.exists(os.path.dirname(WEBSITES_DIRECTORY)):
        os.makedirs(os.path.dirname(WEBSITES_DIRECTORY))

    with open(WEBSITES_DIRECTORY, 'w',
              encoding='utf-8') as file:  # Serializacja tabeli, bo wyszukiwanie 150 stron trwa długo
        json.dump([subpage.to_dict() for subpage in subpages], file, ensure_ascii=False)

    with open(CATEGORIES_DIRECTORY, 'w', encoding='utf-8') as catFile:
        json.dump(categories_dict, catFile, ensure_ascii=False, indent=4)

    return subpages


def save_product_photos(directory, productNo, imagePages):  # zwraca czy się udało zapisać

    imageCount = 0
    for imagePage in imagePages:
        imagePage = 'https://nadodatek.pl/' + imagePage.get('src')  # wycigamy sam link i łączymy ze stroną
        image = SESSION.get(imagePage)  # wysyłamy request do strony zawierającej sam obrazek
        if image.status_code != 200:
            return False

        with open(f'{directory}/{str(productNo)}_{str(imageCount)}.jpg',
                  'wb') as file:  # zapis zdjęcia w formacie x_y (x- numer artykułu, y- numer zdjęcia x artykułu)
            file.write(image.content)
            imageCount += 1

    return True

def remove_special_characters_from_end(text):
    return text.rstrip(''.join([ch for ch in text if not ch.isalnum()]))


def extract_weight(text):
    words = text.split()

    for i in range(len(words)):
        # Sprawdzamy, czy słowo to liczba
        if words[i].isdigit() and i + 1 < len(words):
            # Oczyszczamy jednostki z niepotrzebnych znaków
            unit = remove_special_characters_from_end(words[i + 1])
            # Sprawdzamy jednostki "g", "gr", "gramów"
            if unit in ["g", "gr", "gramów"]:
                return words[i]

        # Sprawdzamy przypadki, gdy jednostka jest już częścią słowa
        if words[i].endswith("g") or words[i].endswith("gr") or words[i].endswith("gramów"):
            # Usuwamy jednostke, aby sprawdzić, czy przed nią znajduje się liczba
            if words[i][:-1].isdigit() or words[i][:-2].isdigit() or words[i][:-5].isdigit():
                return words[i]

    return None


def save_product_info(infoDir, productNo, productPage):  # zwraca czy się udało zapisać
    if not productPage.find('h1'):
        return False
    title = productPage.find('h1').text
    price = productPage.find('span', class_='productPrice').text
    description = productPage.find('div', class_='nadodatek-cm-full-content-description').text.strip()
    weight = extract_weight(title) or extract_weight(description)

    product_data = {
        "title": title,
        "price": price,
        "description": description,
        "weight": weight
    }

    with open(f'{infoDir}/{productNo}.json', 'w', encoding='utf-8') as file:
        json.dump(product_data, file, ensure_ascii=False, indent=4)

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
    total_products_processed = 0

    # Tworzymy wątek dla każdej podstrony
    with concurrent.futures.ThreadPoolExecutor(max_workers=10) as executor:
        # Rozdzielamy na wątki
        future_to_subpage = {
            executor.submit(scrape_subpage, subpage, productCount): subpage
            for subpage in subpages
        }

        # Czekamy na zakończenie wszystkich wątków
        for future in concurrent.futures.as_completed(future_to_subpage):
            processed = future.result()
            total_products_processed += processed

    print(f'Total products: {total_products_processed}')


def scrape_subpage(subpage, productCount):
    print(f'Scraping: {subpage.category}')

    subpageRequest = SESSION.get(subpage.link)
    if subpageRequest.status_code != 200:
        return 0  # Jeśli strona nie została poprawnie załadowana

    subpageParsed = BeautifulSoup(subpageRequest.content, 'html.parser')

    body = subpageParsed.find('div', id='bodyContent')  # znajdujemy gdzie są produkty
    if not body:
        return 0  # Jeśli nie znaleziono produktów, zwróć 0

    products = body.find_all('a', href=True, id=False)  # wyciągamy linki produktów
    productProcessed = 0  # Zliczamy przetworzone produkty

    for product in products:
        productLink = product.get('href')  # wyciągamy link do jednego produktu

        if MAIN_PAGE not in productLink:
            continue

        productRequest = SESSION.get(productLink)
        if productRequest.status_code != 200:
            continue

        # Przetwarzamy i zapisujemy produkt
        if save_product(subpage.category, productCount, productRequest):
            productProcessed += 1  # Zliczamy przetworzone produkty
            productCount += 1  # Zwiększamy globalny licznik produktów

    return productProcessed  # Zwracamy liczbę przetworzonych produktów

# def scrape_subpages(subpages):
#     print('Starting scraping...')
#     productCount = 0
#     pageCount = 1
#     for subpage in subpages:
#         print(f'Scraping progress: {round(pageCount / len(subpages) * 100, 2)}% ({pageCount}/{len(subpages)})')
#         subpageRequest = SESSION.get(subpage.link)
#         pageCount += 1
#         if subpageRequest.status_code != 200:
#             continue
#
#         subpageParsed = BeautifulSoup(subpageRequest.content, 'html.parser')
#
#         body = subpageParsed.find('div', id='bodyContent')  # znajdujemy gdzie są produkty
#         if not body:
#             continue
#
#         products = body.find_all('a', href=True,
#                                  id=False)  # wyciągamy linki produktów (produkty nie mają ustawionego ID, pdfy mają)
#         for product in products:
#
#             product = product.get('href')  # wyciągamy link do jednego produktu
#
#             if MAIN_PAGE not in product:
#                 continue
#
#             productRequest = SESSION.get(product)
#             if productRequest.status_code != 200:
#                 continue
#
#             if save_product(subpage.category, productCount, productRequest):
#                 productCount += 1  # zliczamy by zapisywać odpowiednio produkty


if __name__ == '__main__':
    start = time.time()
    request = SESSION.get(MAIN_PAGE)  # wysyłamy request do strony głównej
    subpages = get_all_products_subpages(request)  # wyciągamy wszystkie podstrony z menu
    scrape_subpages(subpages)
    end = time.time()
    print(f'Scraping finished in: {round(end - start, 2)}s')

import os.path

import requests
from bs4 import BeautifulSoup


IMAGE_DIRECTORY = './scrapedData/images'
DATA_DIRECTORY = './scrapedData/data'

def get_all_menu_subpages(request):
    if request.status_code != 200:  # edge case jakby się strona nie załadowała poprawnie
        return None

    soup = BeautifulSoup(request.content, 'html.parser')  # parsujemy request by wyłuskać załadowanego htmla

    menu = soup.find(id='menu-id')  # wyszukujemy menu (page sensitive - akurat takie id ma ta strona dla menu)
    menu = menu.find_all(class_="dropdown-item list-group-item-action menu-action")  # wyszukujemy wszystkie elementy z linkami
    subpages = []

    for link in menu:
        if link.find('strong'):  # odrzucamy strony, które zawierają kolejne podstrony (i tak wszystkie są w menu)
            continue
        subpages.append(link.get('href'))  # dodajemy valid stronkę zawierającą produkty (lub nie, jeśli ich tam brak)

    return subpages


def save_product_photos(productNo, productPage):

    parsedPage = BeautifulSoup(productPage.content, 'html.parser')
    carousel = parsedPage.find('div', class_='carousel slide')  # szukamy komponentu ze zdjęciami

    if not carousel:
        return None

    imagePages = carousel.find_all('img')  # wyciągamy linki do zdjęć

    images = 0
    for imagePage in imagePages:
        imagePage = 'https://nadodatek.pl/' + imagePage.get('src')  # wycigamy sam link i łączymy ze stroną
        image = requests.get(imagePage)  # wysyłamy request do strony zawierającej sam obrazek
        if image.status_code != 200:
            return None

        if not os.path.exists(IMAGE_DIRECTORY):  # tworzymy folder jakby nie było
            os.makedirs(IMAGE_DIRECTORY)

        with open(f"{IMAGE_DIRECTORY}/{str(productNo)}_{str(images)}.jpg", 'wb') as file:  # zapis zdjęcia w formacie x_y (x- numer artykułu, y- numer zdjęcia x artykułu)
            file.write(image.content)
            images += 1



def save_product(productNo, productPage):
    # TODO: używać tej funkcji, zamiast save photos/info osobno
    pass



def save_product_info(productNo, product):
    # TODO
    pass


def scrape_subpages(subpages):
    productCount = 0
    for subpage in subpages:
        subpage = requests.get(subpage)

        if subpage.status_code != 200:
            continue

        subpage = BeautifulSoup(subpage.content, 'html.parser')
        body = subpage.find('div', id='bodyContent')  # znajdujemy gdzie są produkty
        if not body:
            continue

        # print(body.prettify())
        products = body.find_all('a', href=True)  # wyciągamy linki produktów
        for product in products:

            product = product.get('href')  # wyciągamy link do produktu
            productRequest = requests.get(product)
            if productRequest.status_code != 200:
                continue

            save_product_photos(productCount, productRequest)
            save_product_info(productCount, product)
            productCount += 1  # zliczamy by zapisywać odpowiednio produkty


if __name__ == '__main__':
    request = requests.get('https://nadodatek.pl/')  # wysyłamy request do strony głównej
    subpages = get_all_menu_subpages(request)  # wyciągamy wszystkie podstrony z menu
    scrape_subpages(subpages)

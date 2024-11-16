import requests
from requests.auth import HTTPBasicAuth
import xml.etree.ElementTree as ET
import json
import re
import os
import base64
from categories_loader import *

API_URL = "http://localhost:8080/api/products"
API_URL_IMAGES = "http://localhost:8080/api/images/products"
API_TOKEN = "VQPNJWXPSYG3G2SWJWPBGNXVBVE3CAXS"


def add_product(name, price, description, category_name, quantity=1):
    category_id = categories[category_name]
    prestashop = ET.Element("prestashop", {"xmlns:xlink": "http://www.w3.org/1999/xlink"})
    product = ET.SubElement(prestashop, "product")

    name_elem = ET.SubElement(product, "name")
    name_lang = ET.SubElement(name_elem, "language", {"id": "1"})
    name_lang.text = name
    ET.SubElement(product, "price").text = str(price)

    description_elem = ET.SubElement(product, "description")
    description_lang = ET.SubElement(description_elem, "language", {"id": "1"})
    description_lang.text = description

    meta_description_elem = ET.SubElement(product, "meta_description")
    meta_description_lang = ET.SubElement(meta_description_elem, "language", {"id": "1"})
    meta_description_lang.text = description

    meta_keywords_elem = ET.SubElement(product, "meta_keywords")
    meta_keywords_lang = ET.SubElement(meta_keywords_elem, "language", {"id": "1"})
    meta_keywords_lang.text = "tag"

    meta_title_elem = ET.SubElement(product, "meta_title")
    meta_title_lang = ET.SubElement(meta_title_elem, "language", {"id": "1"})
    meta_title_lang.text = "title"

    ET.SubElement(product, "id_category_default").text = str(category_id)
    associations = ET.SubElement(product, "associations")
    categoriess = ET.SubElement(associations, "categories")
    category = ET.SubElement(categoriess, "category")
    ET.SubElement(category, "id").text = str(category_id)

    ET.SubElement(product, "active").text = "1"
    ET.SubElement(product, "visibility").text = "both"

    # Konwertujemy drzewo XML do stringa
    product_data = ET.tostring(prestashop, encoding="utf-8", method="xml").decode("utf-8")

    # Kodowanie klucza API w formacie Base64
    encoded_key = base64.b64encode(f"{API_TOKEN}:".encode()).decode()

    headers = {
        'Authorization': f'Basic {encoded_key}',  # Klucz API w Base64 w nagłówku
        'Content-Type': 'application/xml'
    }
    response = requests.post(API_URL, headers=headers, data=product_data)

    if response.status_code == 201:
        print("Sukces: Produkt dodany.")
        return response.json()  # Zwróć odpowiedź, aby sprawdzić ID nowego produktu
    else:
        print(f"Błąd: {response.status_code} - {response.text}")
        print("Nagłówki żądania:", response.request.headers)
        print("Dane wysłane:", product_data)


def upload_image(image_path):
    with open(image_path, 'rb') as image_file:
        image_data = image_file.read()

    # Kodowanie obrazka w Base64
    encoded_image = base64.b64encode(image_data).decode()

    # Przygotowanie danych do przesyłania
    image_payload = {
        "image": {
            "content": encoded_image  # Użyj zakodowanego obrazka
        }
    }

    # Debugowanie: Wyświetl dane przed wysłaniem
    print("Dane wysyłane do PrestaShop w celu przesłania obrazka:", json.dumps(image_payload, indent=2))

    # Kodowanie klucza API w formacie Base64
    encoded_key = base64.b64encode(f"{API_TOKEN}:".encode()).decode()

    headers = {
        "Authorization": f"Basic {encoded_key}",
        "Content-Type": "application/json",
    }

    # Wysłanie żądania POST do API w celu przesłania obrazka
    response = requests.post(f"{API_URL}", headers=headers, json=image_payload)

    if response.status_code == 201:
        return response.json()['image']['id']  # Zwróć ID przesyłanego obrazka
    else:
        print(f"Błąd przesyłania obrazka: {response.status_code} - {response.text}")
        return None


def add_products(directory, images_directory):
    files = [f for f in os.listdir(directory) if os.path.isfile(os.path.join(directory, f))]
    for file_name in files:
        file_path = os.path.join(directory, file_name)
        with open(file_path, 'r', encoding='utf-8') as file:
            lines = file.readlines()
            if len(lines) >= 3:  # Upewniamy się, że mamy co najmniej 3 linie
                product_name = lines[0].strip()  # Nazwa
                price_str = lines[2].strip()  # Cena, zamieniamy na float
                try:
                    # Usunięcie jednostki walutowej i zamiana przecinka na kropkę
                    price = float(price_str.replace('zł', '').replace(',', '.').strip())
                except ValueError as e:
                    print(f'Błąd konwersji ceny w pliku {file_name}: {e}')
                    continue  # Przechodzimy do następnego pliku, jeśli wystąpił błąd
                description = lines[4].strip()  # Opis
                image_name = file_name.replace('.txt', '_0.jpg')
                image_directory = os.path.join(images_directory, image_name)
                category_name = os.path.basename(directory)
                add_product(product_name, price, description, category_name, image_directory)
    sub_directories = [f for f in os.listdir(directory) if os.path.isdir(os.path.join(directory, f))]
    for sub_directory in sub_directories:
        sub_directory_path = os.path.join(directory, sub_directory)
        images_sub_directory_path = os.path.join(images_directory, sub_directory)
        add_products(sub_directory_path, images_sub_directory_path)


base_data_dir = r"C:\Users\micha\PycharmProjects\BE\scrapedData\data"
base_images_dir = r"C:\Users\micha\PycharmProjects\BE\scrapedData\images"
categories = get_categories()
add_product("ffff", 10, "bbb", "FILC")
add_products(base_data_dir, base_images_dir)

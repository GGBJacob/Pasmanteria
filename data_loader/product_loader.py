import requests
from requests.auth import HTTPBasicAuth
import xml.etree.ElementTree as ET
import json
import re
import os
import base64
from categories_loader import *

API_URL = "http://localhost:8080/api"
API_URL_IMAGES = "http://localhost:8080/api/images/products"
API_TOKEN = "VQPNJWXPSYG3G2SWJWPBGNXVBVE3CAXS"


def add_product(name, price, description, category_name, image_path):
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

    product_data = ET.tostring(prestashop, encoding="utf-8", method="xml").decode("utf-8")

    encoded_key = base64.b64encode(f"{API_TOKEN}:".encode()).decode()

    headers = {
        'Authorization': f'Basic {encoded_key}',  # Klucz API w Base64 w nagłówku
        'Content-Type': 'application/xml'
    }
    response = requests.post(API_URL+"/products", headers=headers, data=product_data)

    if response.status_code == 201:
        root = ET.fromstring(response.text)
        product_id = root.find('.//id').text
        print("Sukces: Produkt dodany.")
        upload_product_image(API_URL, API_TOKEN, product_id, image_path)
    else:
        print(f"Błąd: {response.status_code} - {response.text}")
        print("Nagłówki żądania:", response.request.headers)
        print("Dane wysłane:", product_data)


def upload_product_image(prestashop_url, api_key, product_id, image_path):
    """
    Uploads an image to a specific product in PrestaShop.

    :param prestashop_url: Base URL of the PrestaShop instance (e.g., 'https://your-shop.com').
    :param api_key: API key for authentication.
    :param product_id: ID of the product to which the image will be uploaded.
    :param image_path: Path to the image file on your local system.
    :return: Response object from the API.
    """
    endpoint = f"{prestashop_url}/api/images/products/{product_id}"
    headers = {
        'Authorization': f'Basic {api_key}'
    }
    try:
        with open(image_path, 'rb') as image_file:
            files = {
                'image': (image_path.split('/')[-1], image_file, 'image/jpeg')  # Adjust MIME type if not JPEG
            }
            response = requests.post(endpoint, headers=headers, files=files)

        # Check for success
        if response.status_code == 201:
            print("Image uploaded successfully.")
        else:
            print(f"Failed to upload image: {response.status_code} - {response.text}")

        return response

    except FileNotFoundError:
        print(f"File not found: {image_path}")
    except Exception as e:
        print(f"An error occurred: {e}")


def add_products(directory, images_directory):
    files = [f for f in os.listdir(directory) if os.path.isfile(os.path.join(directory, f))]
    for file_name in files:
        file_path = os.path.join(directory, file_name)
        with open(file_path, 'r', encoding='utf-8') as file:
            lines = file.readlines()
            product_name = lines[0].strip()
            price_str = lines[2].strip()
            try:
                price = float(price_str.replace('zł', '').replace(',', '.').strip())
            except ValueError as e:
                print(f'Błąd konwersji ceny w pliku {file_name}: {e}')
                continue
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
add_products(base_data_dir, base_images_dir)

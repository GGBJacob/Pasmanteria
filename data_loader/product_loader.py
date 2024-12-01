import copy
import random

import requests
from requests.auth import HTTPBasicAuth
import xml.etree.ElementTree as ET
import json
import re
import os
import base64
import json

API_URL = "https://localhost/api"
API_URL_IMAGES = "https://localhost/api/images/products"


def get_categories(API_TOKEN):
    response = requests.get(API_URL + '/categories', auth=HTTPBasicAuth(API_TOKEN, ''), verify=False)
    if response.status_code == 200:
        ids = extract_category_ids(response.text)
        categories = {get_category_name(category_id): category_id for category_id in ids if int(category_id) > 2}
        return categories
    else:
        print(f"Failed to retrieve categories: {response.status_code}")


def get_category_name(category_id, lang_id=1):
    try:
        url = f"{API_URL}/categories/{category_id}"
        response = requests.get(url, auth=HTTPBasicAuth(API_TOKEN, ""), verify=False)
        if response.status_code == 200:
            root = ET.fromstring(response.text)
            for language in root.findall(".//category/name/language"):
                if int(language.get("id")) == lang_id:
                    text = language.text
                    return text
    except Exception as e:
        print(f"Wystąpił błąd: {e}")
        return None


def extract_category_ids(response_text):
    root = ET.fromstring(response_text)
    category_ids = [category.get('id') for category in root.findall('.//category')]
    return category_ids


def add_product(name, price, description, categories_names, image_path, weight, vat_category="1", lang="1"):
    categories_ids = [1, 2]
    for category_name in categories_names:
         categories_ids.append(categories[category_name])
    prestashop = ET.Element("prestashop", {"xmlns:xlink": "http://www.w3.org/1999/xlink"})
    product = ET.SubElement(prestashop, "product")

    name_elem = ET.SubElement(product, "name")
    name_lang = ET.SubElement(name_elem, "language", {"id": lang})
    name_lang.text = name
    ET.SubElement(product, "price").text = str(price)

    if weight is not None:
        ET.SubElement(product, "weight").text = weight
    else:
        weight_str = str(round(random.uniform(0.1, 1), 2))
        ET.SubElement(product, "weight").text = weight_str
    description_elem = ET.SubElement(product, "description")
    description_lang = ET.SubElement(description_elem, "language", {"id": lang})
    description_lang.text = description

    meta_description_elem = ET.SubElement(product, "meta_description")
    meta_description_lang = ET.SubElement(meta_description_elem, "language", {"id": lang})
    meta_description_lang.text = description

    meta_keywords_elem = ET.SubElement(product, "meta_keywords")
    meta_keywords_lang = ET.SubElement(meta_keywords_elem, "language", {"id": lang})
    meta_keywords_lang.text = "tag"

    meta_title_elem = ET.SubElement(product, "meta_title")
    meta_title_lang = ET.SubElement(meta_title_elem, "language", {"id": lang})
    meta_title_lang.text = "title"

    ET.SubElement(product, "id_category_default").text = str(categories_ids[len(categories_ids)-1])
    associations = ET.SubElement(product, "associations")
    categoriess = ET.SubElement(associations, "categories")
    for category_id in categories_ids:
        category = ET.SubElement(categoriess, "category")
        ET.SubElement(category, "id").text = str(category_id)

    ET.SubElement(product, "active").text = "1"
    ET.SubElement(product, "visibility").text = "both"
    ET.SubElement(product, "state").text = "1"

    ET.SubElement(product, "available_for_order").text = "1"
    ET.SubElement(product, "minimal_quantity").text = "1"
    ET.SubElement(product, "reference").text = name.replace(" ", "_")
    ET.SubElement(product, "id_tax_rules_group").text = vat_category
    ET.SubElement(product, "indexed").text = "1"

    product_data = ET.tostring(prestashop, encoding="utf-8", method="xml").decode("utf-8")

    encoded_key = base64.b64encode(f"{API_TOKEN}:".encode()).decode()

    headers = {
        'Authorization': f'Basic {encoded_key}',
        'Content-Type': 'application/xml'
    }
    response = requests.post(API_URL + "/products", headers=headers, data=product_data, verify=False)

    if response.status_code == 201:
        root = ET.fromstring(response.text)
        product_id = root.find('.//id').text
        print("Sukces: Produkt dodany.")
        upload_product_image(API_URL, product_id, image_path)
        set_product_stock(API_URL, API_TOKEN, product_id, random.randint(0, 10))
    else:
        print(f"Błąd: {response.status_code} - {response.text}")
        print("Nagłówki żądania:", response.request.headers)
        print("Dane wysłane:", product_data)


def set_product_stock(api_url, api_key, product_id, new_quantity):
    encoded_key = base64.b64encode(api_key.encode()).decode()
    headers = {
        'Authorization': f'Basic {encoded_key}',
        'Content-Type': 'application/xml'
    }

    stock_url = f"{api_url}/stock_availables"

    # Parametry do filtrowania rekordu stock_available
    params = {
        "filter[id_product]": product_id,
        "display": "full"
    }

    # Użycie HTTP Basic Auth
    response = requests.get(stock_url, params=params, auth=(api_key, ''), verify=False)

    if response.status_code != 200:
        raise Exception(f"Błąd podczas pobierania stock_available: {response.status_code}, {response.text}")

    # Parsowanie odpowiedzi XML
    root = ET.fromstring(response.content)
    stock_id = root.find(".//stock_available/id").text
    id_shop = root.find(".//stock_available/id_shop").text
    id_product_attribute = root.find(".//stock_available/id_product_attribute").text
    id_shop_group = root.find(".//stock_available/id_shop_group").text
    depends_on_stock = root.find(".//stock_available/depends_on_stock").text
    location = root.find(".//stock_available/location").text
    if not stock_id:
        raise Exception(f"Nie znaleziono stock_available dla produktu o ID {product_id}")

    # Krok 2: Zaktualizuj ilość w magazynie
    update_url = f"{api_url}/stock_availables/{stock_id}"

    # Tworzenie XML do aktualizacji
    prestashop = ET.Element("prestashop", {"xmlns:xlink": "http://www.w3.org/1999/xlink"})
    stock_available = ET.SubElement(prestashop, "stock_available")
    ET.SubElement(stock_available, "id").text = str(stock_id)
    ET.SubElement(stock_available, "id_product").text = str(product_id)
    ET.SubElement(stock_available, "id_product_attribute").text = str(id_product_attribute)
    ET.SubElement(stock_available, "id_shop").text = str(id_shop)
    ET.SubElement(stock_available, "quantity").text = str(new_quantity)
    ET.SubElement(stock_available, "id_shop_group").text = str(id_shop_group)
    ET.SubElement(stock_available, "depends_on_stock").text = str(depends_on_stock)
    ET.SubElement(stock_available, "out_of_stock").text = "0"
    ET.SubElement(stock_available, "location").text = str(location)

    # Serializacja XML
    update_data = ET.tostring(prestashop, encoding="utf-8", method="xml").decode("utf-8")

    update_response = requests.put(update_url, headers=headers, data=update_data, auth=(api_key, ''), verify=False)

    if update_response.status_code not in [200, 204]:
        raise Exception(
            f"Błąd podczas aktualizacji stock_available: {update_response.status_code}, {update_response.text}")

    return {"status": "success", "stock_id": stock_id, "new_quantity": new_quantity}


def upload_product_image(prestashop_url, product_id, image_path):
    endpoint = f"{prestashop_url}/images/products/{product_id}"
    headers = {
        'Authorization': f'Basic {base64.b64encode(f"{API_TOKEN}:".encode()).decode()}'
    }
    try:
        with open(image_path, 'rb') as image_file:
            files = {
                'image': (image_path.split('/')[-1], image_file, 'image/jpeg')  # Adjust MIME type if not JPEG
            }
            response = requests.post(endpoint, headers=headers, files=files, verify=False)

        # Check for success
        if response.status_code < 300 or response.status_code == 500:
            print("Image uploaded successfully.")
        else:
            print(f"Failed to upload image: {response.status_code} - {response.text}")

        return response

    except FileNotFoundError:
        print(f"File not found: {image_path}")
    except Exception as e:
        print(f"An error occurred: {e}")


def add_products(directory, images_directory, categories_names):
    files = [f for f in os.listdir(directory) if os.path.isfile(os.path.join(directory, f))]
    category_name = os.path.basename(directory)
    if category_name != 'data':
        categories_names.append(category_name)
    for file_name in files:
        file_path = os.path.join(directory, file_name)
        with open(file_path, 'r', encoding='utf-8') as file:
            try:
                data = json.load(file)
            except json.JSONDecodeError as e:
                print(f"Błąd dekodowania JSON w pliku {file_path}: {e}")
                continue
            # hardcoded vat conditions:
            product_name = data.get("title", "").strip()
            vat_category = "1"
            if category_name.startswith("książki"):
                vat_category = "3"
            if category_name == "książki i publikacje":
                if product_name[0] == "M" or product_name[0] == "m":
                    vat_category = "2"
                if product_name[0] == "X" or product_name[0] == "x":
                    vat_category = "1"
            price_str = data.get("price", "").strip()
            description = data.get("description", "").strip()

            try:
                price = float(price_str.replace('zł', '').replace(',', '.').strip())
            except ValueError as e:
                print(f'Błąd konwersji ceny w pliku {file_path}: {e}')
                continue
            if vat_category == "1":
                price = price / 1.23
            elif vat_category == "2":
                price = price / 1.08
            elif vat_category == "3":
                price = price / 1.05
            price = round(price, 2)
            weight_str = data.get("weight")
            if weight_str is not None:
                weight = str(int(re.sub(r'\D', '', weight_str)) / 1000)
            else:
                weight = None
            image_name = file_name.replace('.json', '_0.jpg')
            image_directory = os.path.join(images_directory, image_name)
            add_product(product_name, price, description, categories_names, image_directory, weight, vat_category, "1")
    sub_directories = [f for f in os.listdir(directory) if os.path.isdir(os.path.join(directory, f))]
    for sub_directory in sub_directories:
        sub_directory_path = os.path.join(directory, sub_directory)
        images_sub_directory_path = os.path.join(images_directory, sub_directory)
        add_products(sub_directory_path, images_sub_directory_path, copy.deepcopy(categories_names))


base_data_dir = r"..\scrapedData\data"
base_images_dir = r"..\scrapedData\images"
API_TOKEN = input("Enter the token:")
categories = get_categories(API_TOKEN)
add_products(base_data_dir, base_images_dir, [])

import requests
from requests.auth import HTTPBasicAuth
import xml.etree.ElementTree as ET
import json
import re

# Replace these variables with your API details
API_URL = "http://localhost:8080/api/categories"


def get_highest_category_id():
    response = requests.get(API_URL, auth=HTTPBasicAuth(API_TOKEN, ''))
    if response.status_code == 200:
        print("Odpowiedź API:", response.text)
        try:
            root = ET.fromstring(response.content)
            categories = root.findall('.//category')
            max_id = 0
            for category in categories:
                category_id = int(category.get('id'))
                if category_id > max_id:
                    max_id = category_id

            if max_id != -1:
                print(f"Kategoria o najwyższym ID: {max_id}")
                return max_id  # Zwracanie najwyższego ID

            print("Nie znaleziono żadnych kategorii.")
            return None

        except ET.ParseError as e:
            print(f"Błąd parsowania odpowiedzi XML: {e}")
            return None
    else:
        print(f"Błąd podczas pobierania kategorii. Kod statusu: {response.status_code}")
        return None


def create_category(url, api_key, category_name, parent_category_id):
    link_rewrite = re.sub(r'\W+', '-', category_name.lower()).strip('-')
    category_data = f"""<?xml version="1.0" encoding="UTF-8"?>
        <prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
            <category>
                <id_parent>{parent_category_id}</id_parent>
                <active>1</active>
                <name>
                    <language id="1">{category_name}</language>
                </name>
                <link_rewrite>
                    <language id="1">{link_rewrite}</language>
                </link_rewrite>
            </category>
        </prestashop>"""

    headers = {
        'Content-Type': 'application/xml',
    }

    # Wysyłanie żądania POST do API
    response = requests.post(
        url,
        headers=headers,
        data=category_data,
        auth=(api_key, '')
    )

    # Sprawdzenie, czy kategoria została utworzona pomyślnie
    if response.status_code == 201:
        print("Kategoria została utworzona pomyślnie.")
    else:
        print("Błąd przy tworzeniu kategorii:", response.status_code, response.text)

def add_categories(data, parent_id=2):
    if isinstance(data, dict):
        for category_name, subcategories in data.items():
            create_category(API_URL, API_TOKEN, category_name, parent_id)
            add_categories(subcategories, get_highest_category_id())
    else:
        for category_name in data:
            create_category(API_URL, API_TOKEN, category_name, parent_id)


if __name__ == "__main__":
    API_TOKEN = input("Enter the token:")
    with open(r"categories.json", 'r', encoding='utf-8') as f:
        categories_data = json.load(f)
    add_categories(categories_data)

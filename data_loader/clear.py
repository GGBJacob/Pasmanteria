import requests
from requests.auth import HTTPBasicAuth
import xml.etree.ElementTree as ET

# Ustawienia API
BASE_URL = 'http://localhost:8080/api/'  # Wprowadź adres URL swojego sklepu
API_KEY = 'DW821ATFC7X5K8FX8XTD89LUNZA6J7ZM'  # Wprowadź swój klucz API

def delete_all_categories():
    # Pobranie listy kategorii
    response = requests.get(BASE_URL + 'categories', auth=HTTPBasicAuth(API_KEY, ''))

    # Sprawdzenie statusu odpowiedzi
    if response.status_code == 200:
        # Analiza XML
        root = ET.fromstring(response.content)
        categories = root.find('categories')

        if categories is not None:
            # Usunięcie każdej kategorii
            for category in categories.findall('category'):
                category_id = category.get('id')
                print(f'Próbuję usunąć kategorię o ID: {category_id}')  # Logowanie ID kategorii
                delete_response = requests.delete(BASE_URL + f'categories/{category_id}', auth=HTTPBasicAuth(API_KEY, ''))

                if delete_response.status_code == 204:  # 204 No Content - oznacza sukces
                    print(f'Kategoria o ID {category_id} została usunięta.')
                else:
                    print(f'Błąd podczas usuwania kategorii o ID {category_id}: {delete_response.text}')
        else:
            print("Nie znaleziono kategorii w odpowiedzi.")
    else:
        print(f'Błąd podczas pobierania kategorii: {response.status_code} - {response.text}')

if __name__ == '__main__':
    delete_all_categories()

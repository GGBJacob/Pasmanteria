import requests
from bs4 import BeautifulSoup

if __name__ == '__main__':
    """
    Wstępny kod w którym sprawdzałem
    jak działają biblioteki, resztą zajmę 
    się później <3
    """
    request = requests.get('https://nadodatek.pl/index.php?cPath=838_189_170')  # podobno strona z której korzystamy
    soup = BeautifulSoup(request.content, 'html.parser')  #parsowanie strony
    temp = soup.find_all('div', class_='col-sm-2 card card-product border-0 is-product text-center')  # wyszukuje wszystkie produkty (mają crazy klasę)
    print(temp)


FROM prestashop/prestashop:1.7.8
COPY ./src /var/www/html
COPY ./config/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod ssl
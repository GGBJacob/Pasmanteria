FROM prestashop/prestashop:1.7.8

COPY src/ /var/www/html
COPY ssl/ /etc/ssl/certs
COPY config/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y gettext-base

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html

RUN a2enmod ssl

CMD ["bash", "-c", "envsubst '${PORT}' < /etc/apache2/sites-available/000-default.conf > /etc/apache2/sites-available/000-default-processed.conf && mv /etc/apache2/sites-available/000-default-processed.conf /etc/apache2/sites-available/000-default.conf && apache2-foreground"]
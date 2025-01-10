FROM prestashop/prestashop:1.7.8

COPY src/ /var/www/html
COPY ssl/ /etc/ssl/certs
COPY config/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN a2enmod ssl

CMD ["apache2-foreground"]
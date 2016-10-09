FROM php:7.0-apache
COPY *.php /var/www/html/
COPY ./include /var/www/html/include/
COPY ./vendor /var/www/html/vendor/
RUN chown www-data:www-data /var/www/html; \
  touch /var/www/html/last_host.txt; \
  chown www-data:www-data /var/www/html/last_host.txt

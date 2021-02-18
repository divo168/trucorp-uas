FROM php:7.4-apache

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www
RUN chmod o+r /var/www

COPY uas.php /var/www/html

EXPOSE 80

FROM php:7.4-apache

RUN apt-get update
# apt-get install -y git zip unzip

COPY ../ /var/www/html

#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN cd /var/www/html && composer install --no-dev --optimize-autoloader

EXPOSE 8080
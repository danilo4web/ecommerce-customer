FROM php:7.4.4-fpm
WORKDIR /var/www/html

RUN apt-get update && apt-get upgrade -y \
    && docker-php-ext-install opcache
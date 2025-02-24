FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

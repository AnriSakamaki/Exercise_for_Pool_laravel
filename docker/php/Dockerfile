FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    zip unzip curl git libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

WORKDIR /var/www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

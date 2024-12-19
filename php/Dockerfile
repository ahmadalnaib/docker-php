FROM php:8.3.14-fpm-alpine3.21

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app

COPY . /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install
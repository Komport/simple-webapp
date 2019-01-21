FROM php:apache

WORKDIR /var/www/html

COPY index.php index.php

RUN docker-php-ext-install mysqli

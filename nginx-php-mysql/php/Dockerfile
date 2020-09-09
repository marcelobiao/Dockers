FROM php:5.4-apache

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    wget

RUN docker-php-ext-install mysql mbstring

RUN wget https://getcomposer.org/download/1.2.4/composer.phar -O /usr/local/bin/composer && \
    chmod a+rx /usr/local/bin/composer

COPY config/php.ini /usr/local/etc/php/

RUN pecl install xdebug-2.4.1 && docker-php-ext-enable xdebug

COPY config/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

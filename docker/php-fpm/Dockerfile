FROM php:7.3-fpm

RUN usermod -u 1000 www-data

RUN apt-get update \
&& docker-php-ext-install pdo pdo_mysql && \
apt-get install -y libzip-dev zlib1g-dev && \
docker-php-ext-install zip

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git && \
    apt-get install -y unzip && \
    apt-get install -y nodejs && \
    apt-get install -y npm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

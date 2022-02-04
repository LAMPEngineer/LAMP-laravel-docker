# docker/php/Dockerfile
FROM php:8.1-fpm


RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli


RUN apt-get install -y autoconf pkg-config libssl-dev
RUN pecl install mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini
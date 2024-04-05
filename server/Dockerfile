FROM php:8.2-apache
# declares the base image we want to customize
WORKDIR /var/www/html
# default web root for apache
RUN apt-get update && apt-get install -y git zip unzip vim
# install git, zip, unzip, and vim
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# install composer
EXPOSE 80
FROM php:8.2-apache

RUN docker-php-ext-install mysqli

RUN useradd -m amorrie

COPY . /var/www/html/

RUN chown -R amorrie:amorrie /var/www/html

USER amorrie

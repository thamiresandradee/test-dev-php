FROM php:7.2-apache

RUN a2enmod rewrite

COPY ./ /xampp/htdocs/

RUN service apache2 restart
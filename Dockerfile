FROM php:5.6-apache

# Install PDO and MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

COPY ./src /var/www/html

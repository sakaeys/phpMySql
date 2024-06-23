FROM php:8.1-apache
RUN apt-get update  \
  && apt-get install -y libonig-dev \
  && docker-php-ext-install pdo_mysql mysqli mbstring

COPY ./config/php.ini /usr/local/etc/php/

WORKDIR /var/www/html
EXPOSE 80

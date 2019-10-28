FROM php:7.1-fpm

WORKDIR /var/www/html
COPY . /var/www/html

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN apt-get update
RUN apt-get install -y libmemcached-dev zlib1g-dev
RUN pecl install redis-4.3.0 && pecl install xdebug-2.6.0 && pecl install memcached-3.1.4
RUN docker-php-ext-enable memcached redis xdebug
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get clean

RUN chmod -R 777 storage

RUN php artisan key:generate
RUN php artisan migrate --seed

RUN cp .env.example .env
RUN chown -R $(id -u):$(id -g) .

CMD ["php-fpm"]

EXPOSE 9000

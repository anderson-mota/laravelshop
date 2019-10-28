FROM composer

WORKDIR /app

COPY composer.json /app/composer.json
COPY composer.lock /app/composer.lock
COPY ./vendor /app/vendor

RUN composer install

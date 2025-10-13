FROM php:8.0-fpm-alpine
ENV XDEBUG_VERSION 3.4.0

RUN apk add --update --no-cache linux-headers nano icu-dev $PHPIZE_DEPS
RUN pecl install xdebug-${XDEBUG_VERSION}

RUN docker-php-ext-enable xdebug

CMD ["php-fpm"]

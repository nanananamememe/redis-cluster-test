FROM php:7-fpm

ADD ./app.ini /usr/local/etc/php/conf.d

# Install redis
RUN pecl channel-update pecl.php.net \
    && pecl install redis-3.1.2 \
    && docker-php-ext-enable redis

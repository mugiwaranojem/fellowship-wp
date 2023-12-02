FROM php:7.4.3-fpm-alpine3.11

RUN docker-php-ext-install tokenizer mysqli pdo_mysql

COPY ./library/wp-cli.phar /usr/local/bin/wp
RUN chmod +x /usr/local/bin/wp

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

COPY ./docker/php/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

RUN addgroup -S appgroup && adduser -S appuser -G appgroup

USER appuser

# Copy the application code
COPY . /app

VOLUME ["/app"]sss
FROM php:7.3-alpine
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www/html/project
WORKDIR /var/www/html/project
ENTRYPOINT ["docker/entrypoint.sh"]

FROM php:fpm-alpine



WORKDIR /rails

ADD docker/entrypoint.sh /entrypoint.sh
ADD docker/nginx-default.conf /etc/nginx/http.d/default.conf
ADD docker/supervisord.conf /etc/supervisord.conf

ENV USER "api"

RUN adduser -S -h /rails -s /bin/bash -G www-data -u 1000 api api \
    && apk add --no-cache --virtual .build-deps curl gnupg tar autoconf dpkg-dev dpkg file pkgconf re2c pcre-dev \
    && apk add --no-cache sqlite-dev postgresql-dev libzip-dev libsodium-dev gmp-dev dcron bash sudo libstdc++ nginx redis supervisor make gcc g++ python3  \
    && sed -i -e "s/bin\/ash/bin\/bash/" /etc/passwd \
    && echo 'api ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers \
    && docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-configure pdo_pgsql --with-pdo-pgsql \
    && docker-php-ext-configure exif \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure gmp \
    && docker-php-ext-configure intl \
    && docker-php-ext-install bcmath pcntl pdo_pgsql exif zip gmp intl \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apk del .build-deps \ 
    && rm -rf /tmp/*

USER api 
ENTRYPOINT ["bash", "-c", "/entrypoint.sh \"$@\"", "--"]

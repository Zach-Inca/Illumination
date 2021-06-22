FROM php:7.3.28-apache-stretch

RUN apt-get update -yqq && \
    apt-get install -y apt-utils zip unzip && \
    apt-get install -y nano && \
    apt-get install -y libzip-dev libpq-dev && \
    a2enmod rewrite && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-configure zip --with-libzip && \
    docker-php-ext-install zip && \
    rm -rf /var/lib/apt/lists/*

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR /var/www
RUN chown -hR www-data .

COPY server/default.conf /etc/apache2/sites-enabled/000-default.conf
COPY backend/. /var/www/

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

EXPOSE 80
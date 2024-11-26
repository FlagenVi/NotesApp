FROM php:8.1-fpm

# Установка Composer
RUN apt-get update && apt-get install -y \
    git unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка расширений PHP
RUN docker-php-ext-install pdo pdo_mysql

# Установка рабочего каталога
WORKDIR /var/www/html

# Установка прав на папки
RUN chown -R www-data:www-data /var/www/html

CMD ["php-fpm"]

FROM php:8.4.0beta5-alpine

# Устанавливаем необходимые зависимости и расширения для PHP
RUN apk add --no-cache \
    icu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    bash \
    && docker-php-ext-install intl pdo_mysql zip opcache \
    && apk del bash

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Настраиваем рабочую директорию
WORKDIR /var/www/html

# Открываем порт
EXPOSE 9000

# Запуск PHP-FPM
CMD ["php-fpm"]

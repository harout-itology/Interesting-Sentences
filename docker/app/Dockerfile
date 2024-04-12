# Use PHP FPM base image
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update --fix-missing \
    && apt-get install -y curl git cron supervisor libssl-dev libpng-dev libz-dev libpq-dev libzip-dev libjpeg-dev libmemcached-dev unzip zip redis-server mariadb-server \
    && apt-get clean && apt-get autoremove && rm -rf /var/lib/apt/lists/*

# Add docker-php-extension-installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install php extensions
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo pdo_mysql mysqli gd exif zip mcrypt mbstring openssl pcntl memcached

# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY . .

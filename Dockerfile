# Gunakan PHP 7.3 dengan Apache
FROM php:7.3-apache

# Install ekstensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip libpng-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd

# Aktifkan Apache mod_rewrite (supaya routing Laravel jalan)
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy semua file project
COPY . .

# Install dependencies via composer
RUN composer install --no-dev --optimize-autoloader

# Set permission supaya Laravel bisa nulis ke storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]

FROM php:7.3-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip git libpng-dev libonig-dev libxml2-dev libzip-dev zip curl \
    && docker-php-ext-configure zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . /var/www

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port
EXPOSE 8080

# Run Laravel with artisan serve
CMD php artisan serve --host=0.0.0.0 --port=${PORT}

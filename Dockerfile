FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/laravel

# Copy source code into container
COPY . /var/www/laravel

# Update DocumentRoot to Laravel public directory
RUN sed -i 's|/var/www/html|/var/www/laravel/public|g' /etc/apache2/sites-available/000-default.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/laravel/storage /var/www/laravel/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]

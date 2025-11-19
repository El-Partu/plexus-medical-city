# ----------------------------
# Stage 1: Build assets + vendor
# ----------------------------
FROM php:8.3-fpm AS build

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    zip \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install JS dependencies and build assets
RUN npm install && npm run build

# ----------------------------
# Stage 2: Production Image
# ----------------------------
FROM php:8.3-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# Enable Apache rewrite
RUN a2enmod rewrite

# Copy Laravel files from build
COPY --from=build /var/www /var/www

# Set correct permissions
RUN chown -R www-data:www-data /var/www

# Set the working directory
WORKDIR /var/www

# Expose port for Railway
EXPOSE 8080

# Run migrations automatically at startup
CMD php artisan migrate --force && apache2-foreground

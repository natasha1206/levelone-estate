FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libpq-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions (Kept Postgres, removed unnecessary mysql)
RUN docker-php-ext-install mbstring exif pcntl bcmath gd zip pdo_pgsql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Create ALL necessary directories
RUN mkdir -p /var/www/html/bootstrap/cache \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/views \
    && mkdir -p /var/www/html/storage/framework/cache/data \
    && mkdir -p /var/www/html/storage/logs \
    && mkdir -p /var/www/html/storage/app/public

# Fix ownership and permissions BEFORE installing dependencies
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# --- FIX INTERCEPTOR FOR LARAVEL CLOUD BUILD ---
# Force PostgreSQL placeholder configuration during build stage so it matches your extensions
ARG APP_KEY="base64:d2dfbW9iaWxlYm90Y2hhbmdldGhpczMydW5pcXVla2V5bW9yZQ=="
ENV APP_KEY=${APP_KEY}
ENV APP_ENV=production
ENV DB_CONNECTION=pgsql
ENV DB_HOST=127.0.0.1
ENV DB_PORT=5432
ENV DB_DATABASE=forge
ENV DB_USERNAME=forge
ENV DB_PASSWORD=
# -----------------------------------------------

# Install dependencies safely
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Expose port
EXPOSE 80
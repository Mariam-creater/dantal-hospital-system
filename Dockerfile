# Isticmaal nuqul PHP ah oo leh Apache
FROM php:8.1-apache

# Ku rakib extensions-ka Laravel u baahan yahay
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Nadiifi cache-ga
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Rakib PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Kordhi awoodda Apache (Enable Rewrite)
RUN a2enmod rewrite

# Nuqul ka samee koodhkaaga
COPY . /var/www/html

# Ku rakib Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Sii ogolaanshaha folder-yada Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Beddel meesha Apache ka bilaawdo (Document Root)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Fur Port-ka 80
EXPOSE 80

CMD ["apache2-foreground"]
# Gunakan base image resmi PHP 8.2 dengan Apache
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli pdo pdo_mysql zip

# Instal Composer (dependency manager untuk PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Atur direktori kerja di dalam container
WORKDIR /var/www/html

# Salin file konfigurasi Apache yang sudah dibuat
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Aktifkan mod_rewrite untuk URL yang bersih (diperlukan oleh CodeIgniter)
RUN a2enmod rewrite
RUN a2enmod status

# Salin semua file proyek ke direktori kerja di dalam container
COPY . .

# Jalankan composer install untuk menginstal dependensi proyek
RUN composer install

# Ubah kepemilikan direktori 'writable' agar Apache bisa menulis log dan cache
RUN chown -R www-data:www-data /var/www/html/writable

# Expose port 80 untuk web server
EXPOSE 80

# ==================================================
# Imagen base
# ==================================================
FROM php:8.3-apache

# ==================================================
# Actualizar paquetes
# ==================================================
RUN apt-get update

# ==================================================
# Instalar librerías necesarias para Moodle
# ==================================================
RUN apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libxml2-dev \
    libonig-dev \
    libcurl4-openssl-dev

# ==================================================
# Instalar extensiones PHP
# ==================================================
RUN docker-php-ext-install \
    mysqli \
    pdo_mysql \
    intl \
    zip \
    soap \
    exif \
    opcache

# ==================================================
# Configurar GD
# ==================================================
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

RUN docker-php-ext-install gd

# ==================================================
# Activar mod_rewrite de Apache
# ==================================================
RUN a2enmod rewrite
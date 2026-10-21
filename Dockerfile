FROM php:8.4-apache


# जरूरी एक्सटेंशन इंस्टॉल करना
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Apache Rewrite मॉड्यूल चालू करना (Laravel URL के लिए)
RUN a2enmod rewrite

# Apache का रूट डायरेक्टरी बदलना (public फ़ोल्डर पर सेट करना)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN echo '<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf
# कंपोजर इंस्टॉल करना
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# प्रोजेक्ट फ़ाइलों को कॉपी करना
WORKDIR /var/www/html
COPY . .

# डिपेंडेंसी इंस्टॉल करना
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs


# स्टोरेज फ़ोल्डर को परमिशन देना
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache


RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf
EXPOSE 8080

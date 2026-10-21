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

# कंपोजर इंस्टॉल करना
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# प्रोजेक्ट फ़ाइलों को कॉपी करना
WORKDIR /var/www/html
COPY . .

# डिपेंडेंसी इंस्टॉल करना
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# स्टोरेज फ़ोल्डर को परमिशन देना
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 🟢 Apache को Laravel के public फ़ोल्डर से चलाने के लिए क्लीन सेटअप
RUN echo '<VirtualHost *:8080>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# पोर्ट बदलना
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf
EXPOSE 8080

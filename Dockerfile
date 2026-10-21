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

# 🟢 बिना किसी '\n\' के सीधे फ़ाइल लिखना (अपाचे इसे बिल्कुल सही पढ़ेगा)
RUN printf "<VirtualHost *:10000>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
        RewriteEngine On\n\
        RewriteCond %%{REQUEST_FILENAME} !-d\n\
        RewriteCond %%{REQUEST_FILENAME} !-f\n\
        RewriteRule ^ index.php [L]\n\
    </Directory>\n\
    ErrorLog \${APACHE_LOG_DIR}/error.log\n\
    CustomLog \${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>\n" > /etc/apache2/sites-available/000-default.conf

# पोर्ट बदलना और साइट को एक्टिव करना
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf
RUN a2ensite 000-default.conf
EXPOSE 10000

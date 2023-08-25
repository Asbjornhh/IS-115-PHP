# Use the PHP image with Apache
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www

# Install system dependencies and enable PHP extensions
RUN apt-get update -y && \
    apt-get install -y vim git zlib1g-dev mariadb-client libzip-dev && \
    docker-php-ext-install zip mysqli pdo_mysql && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    a2enmod rewrite && \
    echo 'xdebug.remote_enable=on' >> /usr/local/etc/php/conf.d/xdebug.ini && \
    echo 'xdebug.remote_host=host.docker.internal' >> /usr/local/etc/php/conf.d/xdebug.ini && \
    echo 'xdebug.remote_port=9000' >>  /usr/local/etc/php/conf.d/xdebug.ini && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    echo "AllowEncodedSlashes On" >> /etc/apache2/apache2.conf

# Change Apache DocumentRoot to /var/www/public
RUN sed -i 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/000-default.conf && \
    mv /var/www/html /var/www/public

# Copy application source code to container
COPY . /var/www/public

# Expose port 80 and start Apache server
EXPOSE 80
CMD ["apache2-foreground"]

#!/bin/bash
# Set ownership
chown -R www-data:www-data /var/www/bootstrap /var/www/storage

# Start PHP-FPM
exec php-fpm

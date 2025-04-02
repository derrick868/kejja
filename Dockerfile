# Use an official PHP image with Apache
FROM php:8.0-apache

# Copy your project files to the Apache web root directory
COPY . /var/www/html/

# Expose port 80 (default for HTTP)
EXPOSE 80

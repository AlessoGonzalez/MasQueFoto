# Usa una imagen oficial de PHP con servidor web (Apache)
FROM php:8.2-apache

# Habilitar mod_rewrite para URLs amigables (por si acaso)
RUN a2enmod rewrite

# Copia tus archivos al directorio del servidor web
COPY . /var/www/html/

# Permite que Apache pueda leer el directorio
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expone el puerto 80 (HTTP)
EXPOSE 80

# Inicia el servidor Apache
CMD ["apache2-foreground"]
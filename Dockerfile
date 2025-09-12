# 1. Imagen base: PHP 8.2 con Apache
FROM php:8.2-apache

# 2. Copiar todo el proyecto al contenedor
COPY . /var/www/html/

# 3. Activar mod_rewrite si lo necesitas
RUN a2enmod rewrite

# 4. Exponer el puerto 80
EXPOSE 80

# 5. Comando por defecto: Apache en primer plano
CMD ["apache2-foreground"]

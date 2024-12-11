FROM php:8.2-apache

# Habilitar la extensión SOAP
RUN apt-get update && apt-get install -y libxml2-dev && docker-php-ext-install soap

# Copiar los archivos del proyecto al contenedor
COPY public/ /var/www/html/
COPY wsdl/ /var/www/wsdl/

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html /var/www/wsdl

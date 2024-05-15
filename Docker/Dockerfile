#Imagen PHP con servidor web Apache 
FROM php:7.4-apache

#Actualizacion e instalacion de dependencias 
RUN apt-get update && \
    apt-get install -y \
    && docker-php-ext-install mysqli

#Copia de archivos de nuestra aplicación web al directorio de trabajo del contenedor
COPY ./AppTask /var/www/html

#Exponer el puerto 80
EXPOSE 80

#Configuracion del contenedor para que inicie Apache cuando se ejecute
CMD ["apache2-foreground"]

# Etiqueta de versión
LABEL version="1.0"
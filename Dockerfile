FROM php:8.2-apache [cite: 54]
RUN docker-php-ext-install mysqli
# Creamos tu usuario sin privilegios [cite: 55]
RUN useradd -m amorrie071 [cite: 23]
# Cambiamos dueño del directorio web [cite: 56]
RUN chown -R amorrie071:amorrie071 /var/www/html [cite: 23, 56]
USER amorrie071 [cite: 58]

FROM php:apache
LABEL maintainer="CityGate <webmaster@citygate.io>"
COPY public /srv
COPY vhost.conf /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite remoteip
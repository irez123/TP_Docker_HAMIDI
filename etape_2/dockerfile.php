# Dockerfile.php
FROM php:7.4-fpm

# Installer l'extension MySQL pour PHP
RUN docker-php-ext-install mysqli

# Copier le contenu de l'application dans le conteneur
COPY . /app

# Définir le répertoire de travail
WORKDIR /app

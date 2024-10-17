# Dockerfile.php
FROM php:7.4-fpm

# Copier le contenu de l'application dans le répertoire de travail du conteneur
COPY . /app

# Définir le répertoire de travail
WORKDIR /app

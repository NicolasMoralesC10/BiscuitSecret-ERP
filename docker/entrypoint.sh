#!/bin/bash

# Esperar a que MySQL esté listo
echo "Esperando base de datos..."
until php artisan db:monitor --databases=mysql 2>/dev/null || \
      mysqladmin ping -h"$DB_HOST" -u"$DB_USERNAME" -p"$DB_PASSWORD" --silent 2>/dev/null; do
    sleep 2
done

echo "Base de datos lista."

# Crear symlink de storage
php artisan storage:link --force

# Crear carpetas necesarias
mkdir -p storage/app/public/productos
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Correr migraciones automáticamente
php artisan migrate --force --seed

echo "App lista en http://localhost:8080"

# Iniciar Apache
exec apache2-foreground

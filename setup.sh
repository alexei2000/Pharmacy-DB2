#!/usr/bin/bash

# Generar archivo de variables de entorno.
cp .env.example .env

# Instalar dependencias de PHP Composer.
composer install

# Instalar dependencias npm y compilar.
npm install
npm run dev

# Generar la clave de cifrado de la aplicación
php artisan key:generate

# Aplicar migraciones de la base de datos
# y ejecutar seeders para generar datos
php artisan migrate:fresh --seed

# para cear usuario con persmisos de administrador
php artisan user:create admin admin@admin.com 123456 --admin

php artisan serve

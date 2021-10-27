@ECHO OFF
rem Generar archivo de variables de entorno.
copy ".env.example" ".env"

rem Instalar dependencias de PHP Composer.
composer install

rem Instalar dependencias npm y compilar.
npm install
npm run dev

rem Generar la clave de cifrado de la aplicación
php artisan key:generate

rem Aplicar migraciones de la base de datos
rem y ejecutar seeders para generar datos
php artisan migrate:fresh --seed

rem para cear usuario con persmisos de administrador
php artisan user:create admin admin@admin.com 123456 --admin

php artisan serve

# Farmaplay

## Requisitos:

-   PHP & PHP Composer
-   Laravel 8.0
-   MySQL
-   NPM

## Pasos para el uso de la aplicación

1. Iniciar en Xampp o Wampp los servidores Apache y MySQL
2. Dirigirse a la dirección del proyecto en consola
3. Correr los siguientes comandos.

**Windows:**

```bat
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
```

**Linux:**

```bash
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
```

4. Una vez dentro una lista de las direcciones a usar son:
   `/employees` para el index de empleados
   `/medicinas` para el index de medicinas
   `/laboratorios` para el index de laboratorios.

    Una vez dentro de las mismas tendra la opción de crear y agregar una instancia a la base de datos o podra seleccionar cualquiera de las instancias para unas vistas de detalle donde tambien tendra la opción de editar y borrar.

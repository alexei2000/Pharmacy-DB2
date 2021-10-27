Pasos para el uso de la aplicación

Para la realización del mismo se uso Laravel 8

1. Iniciar en Xampp o Wampp los servidores Apache y MySQL
2. Dirigirse a la dirección del proyecto en consola
3. Correr los siguientes comandos
	3.1 ren ".env.example" ".env"
	3.2 composer install
	3.3 npm install
	3.4 php artisan generate:key
	3.5 php artisan migrate:fresh --seed
	3.6 php artisan user:create admin admin@admin.com 123456 --admin para un usuario con persmisos de administrador
	3.6 php artisan runserver

4. Una vez dentro una lista de las direcciones a usar son:
	/employees para el index de empleados
	/medicinas para el index de medicinas
	/laboratorios para el index de laboratorios

	Una vez dentro de las mismas tendra la opción de crear y agregar una instancia a la base de datos o podra seleccionar cualquiera de las instancias para unas vistas de detalle donde tambien tendra la opción de editar y borrar
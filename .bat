@ECHO OFF
ren ".env.example" ".env"
composer install
npm install
php artisan key:generate
php artisan migrate:fresh --seed
php artisan user:create admin admin@admin.com 123456 --admin
php artisan serve

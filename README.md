
## PHP-JWT Ejemplo de iniciar sesión con lavarel usando middleware php-jwt.

Necesitas ejecutar las migraciones para crear 3 bases de datos, users, user_metadata, perfil

Tambien se adjunta base de datos 

Requiere:

php artisan migrate

composer install 

composer require firebase/php-jwt

Instalación de php-jwt
https://github.com/firebase/php-jwt

Usuario en la base de datos: 
user: test@test.com

pass: 123456789

pass de la bd: $2y$10$mhQUsQSmihM93E32dUpKuOBna6kIOz9EUPjj3ZNcqJIhGxl81kfVW

http://127.0.0.1:8000/login/table  GET 

Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjb3JyZW8iOiJ0ZXN0QHRlc3QuY29tIiwicGFzc3dvcmQiOiIxMjM0NTY3ODkiLCJpYXQiOjE2NzczNjQwMTl9.d8fwgMWu_p6VFbH_IPyCwo_P5-BmIaibpxHAcpNRiNA

EL usuario tienes que agregarlo a la base de datos users para poder entrar. 

PHP 7.4.30 (cli) (built: Jun  7 2022 16:24:55) ( ZTS Visual C++ 2017 x64 )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
Laravel 9 

## License
https://jwt.io/

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

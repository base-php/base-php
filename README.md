# Base
Estructura base para proyectos PHP

## Instalación
Crear base de datos y agregar credenciales al archivo '/app/config.php'
~~~
git clone https://github.com/nisa6delgado/base.git
cd base
composer install
npm install
php base create-database
php base run-sql
php base server
~~~

## Doumentación
Utilizamos varios paquetes detrás de escenas para que todo funcione como queremos:

- [Rutas](https://laravel.com/docs/8.x/routing)
- [Middleware](https://laravel.com/docs/8.x/middleware)
- [Controladores](https://laravel.com/docs/8.x/controllers)
- [Vistas](https://laravel.com/docs/8.x/views)
- [Plantillas Blade](https://laravel.com/docs/8.x/blade)
- [Base de datos](https://laravel.com/docs/8.x/database)
- [Paginación](https://laravel.com/docs/8.x/pagination)
- [Eloquent ORM](https://laravel.com/docs/8.x/eloquent)
- [Generar PDF](https://github.com/dompdf/dompdf)
- [Envío de correos electrónicos](https://github.com/PHPMailer/PHPMailer)
- [Escribir/leer Excel](https://phpspreadsheet.readthedocs.io/en/latest/)

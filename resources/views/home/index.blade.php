<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
<meta charset="{{ config('charset') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Nisa Delgado">
<meta name="theme-color" content="#212529">

<title>{{ config('application_name') }}</title>

<link rel="icon" href="{{ asset('img/app/favicon.ico') }}">

<link rel="stylesheet" href="{{ node('bootstrap/dist/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

<div class="col-lg-8 mx-auto p-3 py-md-4">
    <header class="d-flex align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <i class="fa fa-shapes me-2"></i> 
            <span class="fs-4 font-weight-bold">{{ config('application_name') }}</span>
        </a>
    </header>

    <main>
        <p class="fs-5 col-md-8">Comience rápido y fácilmente su nuevo proyecto con esta estructura base que tiene todo lo requerido para realizar una aplicación web moderna.</p>

        <hr class="col-3 col-md-2 mb-5 mt-5">

        <div class="row g-5">
            <div class="col-md-6">
                <h2>Explora</h2>

                <p>Descubre las características que vienen con el proyecto y ya están listas para su eso.</p>

                <ul class="icon-list">
                	@if(auth())
	                    <li>
                            <a class="text-decoration-none text-dark" href="/dashboard">Inicio</a>
                        </li>
                    @else
                        <li>
                            <a class="text-decoration-none text-dark" href="/login">Inicio de sesión</a>
                        </li>
                        
                        <li>
                            <a class="text-decoration-none text-dark" href="/register">Registro</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="col-md-6">
                <h2>Documentación</h2>

                <p>Lea instrucciones y documentación más detalladas sobre el uso de cada uno de sus componentes.</p>

                <ul class="icon-list">
                    <li>
                        <a class="text-decoration-none text-dark" target="_blank" href="https://base-php.com/documentacion/rutas">Rutas</a>
                    </li>

                    <li>
                        <a class="text-decoration-none text-dark" target="_blank" href="https://base-php.com/documentacion/controladores">Controladores</a>
                    </li>

                    <li>
                        <a class="text-decoration-none text-dark" target="_blank" href="https://base-php.com/documentacion/vistas">Vistas</a>
                    </li>

                    <li>
                        <a class="text-decoration-none text-dark" target="_blank" href="https://base-php.com/documentacion/datos">Base de datos</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="pt-3 mt-5 text-muted border-top">
        &copy; 2021
    </footer>
</div>

</body>
</html>

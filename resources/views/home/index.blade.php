<!DOCTYPE html>
<html lang="{{ config('language') }}">

<head>

<meta charset="{{ config('charset') }}">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="author" content="Nisa Delgado">
<meta name="theme-color" content="#212529">

<title>{{ config('application_name') }}</title>

<link rel="icon" href="{{ asset('img/app/favicon.ico') }}">

<link rel="stylesheet" href="{{ node('/tailwindcss/dist/tailwind.css') }}">
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">

</head>
<body class="font-sans leading-normal tracking-normal">
    <div class="w-10/12 mx-auto">
        <h1 class="text-4xl font-semibold mt-10">
            <i class="fa fa-shapes"></i> {{ config('application_name') }}
        </h1>

        <hr class="mb-10 mt-10">

        <div class="flex">
            <div class="w-6/12">
                <p class="text-2xl">Comience rápido y fácilmente su nuevo proyecto con esta estructura base que tiene todo lo requerido para realizar una aplicación web moderna.</p>
            </div>
        </div>

        <hr class="mb-10 mt-10">

        <div class="flex">
            <div class="w-6/12">
                <h2 class="text-3xl font-semibold">Explora</h2>

                <div class="mt-5">
                    <a href="/login" class="block">
                        <i class="fa fa-arrow-right"></i> Iniciar sesión
                    </a>

                    <a href="/register" class="block">
                        <i class="fa fa-arrow-right"></i> Registro
                    </a>
                </div>
            </div>

            <div class="w-6/12">
                <h2 class="text-3xl font-semibold">Más información</h2>

                <div class="mt-5">
                    <a target="_blank" href="https://twitter.com/nisa6delgado" class="block">
                        <i class="fab fa-twitter"></i> Twitter
                    </a>

                    <a target="_blank" href="https://www.youtube.com/channel/UCTgu94owdYN98yBZQnW0ihA" class="block">
                        <i class="fab fa-youtube"></i> Youtube
                    </a>

                    <a target="_blank" href="https://nisadelgado.com" class="block">
                        <i class="fas fa-globe-americas"></i> Sitio web
                    </a>

                    <a target="_blank" href="mailto:nisadelgado@gmail.com" class="block">
                        <i class="fas fa-envelope"></i> Correo electrónico
                    </a>
                </div>
            </div>
        </div>

        <hr class="mb-10 mt-10">

        <div class="text-center">
            <p>&copy; 2021</p>
        </div>
    </div>
</body>
</html>

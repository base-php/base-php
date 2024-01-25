<!DOCTYPE html>
<html lang="{{ config('language') }}">

<head>

<meta charset="{{ config('charset') }}">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="author" content="Nisa Delgado">
<meta name="theme-color" content="#212529">

<title>{{ config('application_name') }}</title>

<link rel="icon" href="{{ asset('img/favicon.svg') }}">

<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">

<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="font-sans leading-normal tracking-normal">
    <div class="w-10/12 mx-auto">
        <h1 class="text-4xl font-semibold mt-10">
            <i class="fa fa-shapes"></i> {{ config('application_name') }}
        </h1>

        <small>[Framework: {{ config('version') }} | PHP: {{ phpversion() }}]</small>

        <hr class="mb-10 mt-10">

        <div class="flex">
            <div class="w-6/12">
                <p class="text-2xl">
                    {{ lang('Quickly and easily start your new project with this base framework that has everything required to make a modern web application.') }}
                </p>
            </div>
        </div>

        <hr class="mb-10 mt-10">

        <div class="flex">
            @if(class_exists('App\Controllers\AuthController'))
                <div class="w-6/12">
                    <h2 class="text-3xl font-semibold">{{ lang('home.explorer') }}</h2>

                    <div class="mt-5">
                        @if(auth())
                            <a href="/dashboard" class="block">
                                <i class="fa fa-arrow-right"></i> {{ lang('Dashboard') }}
                            </a>
                        @else
                            <a href="/login" class="block">
                                <i class="fa fa-arrow-right"></i> {{ lang('Login') }}
                            </a>

                            <a href="/register" class="block">
                                <i class="fa fa-arrow-right"></i> {{ lang('Register') }}
                            </a>
                        @endif
                    </div>
                </div>
            @endif

            <div class="w-6/12">
                <h2 class="text-3xl font-semibold">{{ lang('More info') }}</h2>

                <div class="mt-5">
                    <a target="_blank" href="https://github.com/base-php" class="block">
                        <i class="fab fa-github"></i> Github
                    </a>

                    <a target="_blank" href="https://wa.me/123456789" class="block">
                        <i class="fab fa-whatsapp"></i> Whataspp
                    </a>

                    <a target="_blank" href="https://twitter.com/base-php" class="block">
                        <i class="fab fa-x-twitter"></i> X
                    </a>

                    <a target="_blank" href="https://youtube.com/base-php" class="block">
                        <i class="fab fa-youtube"></i> Youtube
                    </a>

                    <a target="_blank" href="https://base-php.com" class="block">
                        <i class="fas fa-globe-americas"></i> {{ lang('Web site') }}
                    </a>

                    <a target="_blank" href="mailto:info@base-php.com" class="block">
                        <i class="fas fa-envelope"></i> {{ lang('Email') }}
                    </a>
                </div>
            </div>
        </div>

        <hr class="mb-10 mt-10">

        <div class="text-center">
            <p>&copy; {{ now('Y') }}</p>
        </div>
    </div>
</body>
</html>

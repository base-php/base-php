<!DOCTYPE html>
<html lang="{{ config('language') }}">

<head>

<meta charset="{{ config('charset') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Nisa Delgado">
<meta name="theme-color" content="#212529">

<title>{{ config('application_name') }}</title>

<link rel="icon" href="{{ asset('img/favicon.svg') }}">

<link rel="stylesheet" href="{{ node('flowbite/dist/flowbite.css') }}">
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-2 px-2 md:px-0 bg-gray-100">
    <header class="max-w-lg mx-auto">
        <a href="/login">
            <h1 class="text-4xl font-bold text-center">
                <i class="fa fa-shapes"></i> Base PHP
            </h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-1 md:p-5 my-5 rounded-lg shadow-2xl">
        <section>
            {{ $slot }}
        </section>
    </main>
</body>

</html>

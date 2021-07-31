<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
<meta charset="{{ config('charset') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Nisa Delgado">
<meta name="theme-color" content="#212529">

<title>{{ config('application_name') }}</title>

<link rel="icon" href="{{ asset('img/app/favicon.ico') }}">

<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
<link rel="stylesheet" href="{{ node('bootstrap/dist/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

</head>

<body class="text-center">
    <main class="form-signin">
        <form method="POST" action="{{ $action }}">
            <i class="fa fa-shapes mb-4"></i>
            
            {{ $slot }}
            
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>
</body>
</html>

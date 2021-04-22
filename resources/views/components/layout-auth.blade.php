<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
    <meta charset="{{ config('charset') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('application_name') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/app/favicon.ico') }}">

    <link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ node('bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{ $slot }}

    <script src="{{ node('jquery/dist/jquery.js') }}"></script>
    <script src="{{ node('bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
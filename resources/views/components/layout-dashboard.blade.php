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
<link rel="stylesheet" href="{{ node('datatables.net-bs5/css/dataTables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">
        <i class="fa fa-shapes"></i>
        {{ config('application_name') }}
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="/logout">Cerrar sesión</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active == 'home') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                            <i class="fa fa-home"></i>
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ ($active == 'users') ? 'active' : '' }}" href="/dashboard/users">
                            <i class="fa fa-users"></i>
                            Usuarios
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">{{ $title }}</h1>
            </div>

            {{ $slot }}
        </main>
    </div>
</div>

<script src="{{ node('jquery/dist/jquery.js') }}"></script>

<script src="{{ node('bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

<script src="{{ node('datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ node('datatables.net-bs5/js/dataTables.bootstrap5.js') }}"></script>

<script src="{{ node('sweetalert2/dist/sweetalert2.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

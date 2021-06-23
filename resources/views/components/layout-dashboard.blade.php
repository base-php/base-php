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
	<link rel="stylesheet" href="{{ node('datatables.net-bs5/css/dataTables.bootstrap5.css') }}">
	<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">
            <b>
            	<i class="fa fa-shapes"></i> 
            	{{ config('application_name') }}
            </b>
        </a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active == 'home') ? 'active' : '' }}" href="/dashboard">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active == 'users') ? 'active' : '' }}" href="/dashboard/users">
                        Usuarios
                    </a>
                </li>
            </ul>
            <div class="d-flex">
            	<ul class="navbar-nav">
				    <li class="nav-item dropdown">
				        <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDarkDropdownMenuLink" role="button">
				        	<img class="nav-img-profile" src="{{ auth()->photo }}" alt="">
				            {{ auth()->name }}
				        </a>
				       	<ul aria-labelledby="navbarDarkDropdownMenuLink" class="dropdown-menu dropdown">
				            <li><a class="dropdown-item" href="{{ '/dashboard/users/edit/' . auth()->id }}">Perfil</a></li>
				            <li><a class="dropdown-item confirm" data-text="¿Está seguro que desea cerrar sesión?" href="/logout">Cerrar sesión</a></li>
				        </ul>
				    </li>
				</ul>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-2 mb-5">
	<div class="row p-2">
		<div class="col-md-12">
			<x-alert></x-alert>

			<div class="card">
				<div class="card-header">
					<h3>{{ $title }}</h3>
				</div>

				<div class="card-body">
					{{ $slot }}
				</div>
			</div>
		</div>
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
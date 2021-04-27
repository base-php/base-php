<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
<meta charset="{{ config('charset') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ config('application_name') }}</title>
<link rel="shortcut icon" type="image/png" href="{{ asset('img/app/favicon.ico') }}">

<link rel="stylesheet" href="{{ node('bootstrap/dist/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
	@if(auth())
		<div class="top">
			<div class="float-end">
				<a class="me-3" href="/dashboard">Inicio</a>
				<a class="confirm me-3" data-href="/logout" data-text="¿Está seguro que desea cerrar sesión?" href="/logout">Salir</a>
			</div>
		</div>
	@else
		<div class="top">
			<div class="float-end">
				<a class="me-3" href="/login">Iniciar sesión</a>
				<a href="/register">Registrarse</a>
			</div>
		</div>		
	@endif

	<br>

	<div class="content">
		<h1 class="text-center text-center-home">
			<div class="fa fa-shapes"></div> 
			{{ config('application_name') }}
		</h1>
	</div>

	<script src="{{ node('jquery/dist/jquery.js') }}"></script>
    <script src="{{ node('bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ node('sweetalert2/dist/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
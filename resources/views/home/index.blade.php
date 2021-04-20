<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('application_name') }}</title>

<link rel="stylesheet" href="{{ node('bootstrap/dist/css/bootstrap.css') }}">

<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">

<style>
	.content {
		margin-top: 33vh;
	}

	.top {
		margin-top: 15px;
		margin-right: 30px;
	}

	a, a:hover, a:focus {
		text-decoration: none;
		color: black;
	}
</style>

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
		<h1 class="text-center">{{ config('application_name') }}</h1>
	</div>

	<script src="{{ node('jquery/dist/jquery.js') }}"></script>
    <script src="{{ node('bootstrap/dist/js/bootstrap.js') }}"></script>

    <script src="{{ node('sweetalert2/dist/sweetalert2.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
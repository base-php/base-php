<!DOCTYPE html>
<html lang="en">
<head>

<!-- Metadata -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('img/app/favicon.png" ') }}">

<title>Base</title>

<!-- Custom fonts for this template-->
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- SweetAlert -->
<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">

<!-- Custom styles for this template-->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-gradient-primary">

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                                    <p class="mb-4">Lo entendemos, son cosas que pasan. Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña.</p>
                                </div>

                                <form class="user" method="POST">
                                    <b-alert></b-alert>

                                    <div class="form-group">
                                        <input type="email" required name="email" class="form-control" placeholder="Correo electrónico...">
                                    </div>

                                    <button class="btn btn-primary btn-block submit" type="submit">Recuperar contraseña</button>
                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="/register">Crea una cuenta</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="/login">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ node('jquery/dist/jquery.js') }}"></script>
<script src="{{ node('bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ node('jquery.easing/jquery.easing.js') }}"></script>

<!-- SweetAlert -->
<script src="{{ node('sweetalert2/dist/sweetalert2.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('js/forgot.js') }}"></script>

{{ components() }}

</body>
</html>

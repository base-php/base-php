<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('application_name') }}</title>

    <link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">

    <link rel="stylesheet" href="{{ node('bootstrap/dist/css/bootstrap.css') }}">

    <style>
        body {
            background-color: #f4f5f7;
        }

        .card {
            box-shadow: 0px 3px 3px 0px silver;
        }

        .row {
            margin-top: 20vh;
        }

        .btn-primary, .btn-primary:hover, .btn-primary:focus {
            background-color: black;
            border-color: black;
        }

        a, a:hover, a:focus {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h2 class="text-center">{{ config('application_name') }}</h2>
                <div class="card">
                    <div class="card-body">
                        @component('components.alert')
                        @endcomponent

                        <form action="/login" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="email">Correo electrónico</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <input type="checkbox"> Recuérdame
                            </div>

                            <div>
                                <button class="btn btn-primary float-end" type="submit">
                                    <i class="fas fa-sign-in-alt"></i> Iniciar sesión
                                </button>
                                <a href="/forgot-password" class="float-end me-3">¿Olvidaste tu contraseña?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ node('jquery/dist/jquery.js') }}"></script>
    <script src="{{ node('bootstrap/dist/js/bootstrap.js') }}"></script>
</body>
</html>
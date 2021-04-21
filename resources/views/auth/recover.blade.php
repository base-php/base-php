<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('application_name') }}</title>

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
                    <form method="POST" action="/forgot-password">
                        <div class="card-body">
                            <x-alert></x-alert>

                            <p>Escribe tu nueva contraseña para recuperar tu cuenta</p>

                            <div class="mb-3 mt-3">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="confirm_password">Confirmar contraseña</label>
                                <input type="password" name="confirm_password" class="form-control" required>
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}">

                            <div>
                                <button type="submit" class="btn btn-primary float-end mb-3">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ node('jquery/dist/jquery.js') }}"></script>
    <script src="{{ node('bootstrap/dist/js/bootstrap.js') }}"></script>
</body>
</html>
<x-layout-auth>
    <div class="container">
        <div class="row row-login d-flex justify-content-center">
            <div class="col-md-5">
                <h2 class="text-center">
                    <i class="fa fa-shapes"></i> 
                    {{ config('application_name') }}
                </h2>

                <div class="card card-auth mt-5">
                    <div class="card-body">
                        <x-alert></x-alert>

                        <form action="/login" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="email">Correo electrónico</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="password">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" required>
                                    <button type="button" class="btn btn-light show-password" data-input="password">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
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
</x-layout-auth>
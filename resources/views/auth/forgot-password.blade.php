<x-layout-auth>
    <div class="container">
        <div class="row-forgot d-flex justify-content-center">
            <div class="col-md-5">
                <h2 class="text-center">
                    <div class="fa fa-shapes"></div> 
                    {{ config('application_name') }}
                </h2>

                <div class="card card-auth mt-5">
                    <form method="POST" action="/forgot-password">
                        <div class="card-body">
                            <x-alert></x-alert>

                            <p>¿Olvidaste tu contraseña? No hay problema. Simplemente díganos su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.</p>

                            <div class="mb-3 mt-3">
                                <label for="email">Correo electrónico</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary float-end mb-3">
                                    <i class="fas fa-unlock-alt"></i> 
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout-auth>
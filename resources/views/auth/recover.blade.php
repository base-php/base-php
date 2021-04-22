<x-layout-auth>
    <div class="container">
        <div class="row-recover d-flex justify-content-center">
            <div class="col-md-5">
                <h2 class="text-center">
                    <i class="fa fa-shapes"></i> 
                    {{ config('application_name') }}
                </h2>

                <div class="card card-auth mt-5">
                    <form method="POST" action="/forgot-password">
                        <div class="card-body">
                            <x-alert></x-alert>

                            <p>Escribe tu nueva contraseña para recuperar tu cuenta</p>

                            <div class="mb-3 mt-3">
                                <label for="password">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" required>
                                    <button type="button" class="btn btn-light show-password" data-input="password">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="confirm_password">Confirmar contraseña</label>
                                <div class="input-group">
                                    <input type="password" name="confirm_password" class="form-control" required>
                                    <button type="button" class="btn btn-light show-password" data-input="confirm_password">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}">

                            <div>
                                <button type="submit" class="btn btn-primary float-end mb-3">
                                    <span class="fa fa-save"></span> 
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
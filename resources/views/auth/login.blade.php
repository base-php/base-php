<x-layout-auth action="/login">
    <div>
        <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>

        <div class="form-floating">
            <x-alert></x-alert>
        </div>

        <div class="form-floating">
            <input required name="email" type="email" class="form-control" id="floatingInput">
            <label for="floatingInput">Correo electrónico</label>
        </div>

        <div class="form-floating">
            <input required name="password" type="password" class="form-control" id="floatingPassword">
            <label for="floatingPassword">Contraseña</label>
        </div>

        <div class="form-floating mt-3">
            <a href="/forgot-password">Recuperar contraseña</a>
        </div>

        <button class="mt-3 w-100 btn btn-lg btn-primary bg-dark border-dark" type="submit">Iniciar sesión</button>
    </div>
</x-layout-auth>
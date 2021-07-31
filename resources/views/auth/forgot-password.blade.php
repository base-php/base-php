<x-layout-auth action="/forgot-password">
    <div>
        <h1 class="h3 mb-3 fw-normal">Recuperar contraseña</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Correo electrónico</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary bg-dark border-dark mt-5" type="submit">Enviar</button>
    </div>
</x-layout-auth>
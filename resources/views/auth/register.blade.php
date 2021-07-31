<x-layout-auth action="/forgot-password">
	<h1 class="h3 mb-3 fw-normal">Registro</h1>

    <div class="form-floating">
        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Name Last">
        <label for="floatingInput">Nombre</label>
    </div>

    <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput">
        <label for="floatingInput">Correo electrónico</label>
    </div>

    <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword">
        <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="form-floating">
        <input name="confirm_password" type="password" class="form-control" id="floatingPassword">
        <label for="floatingPassword">Confirmar contraseña</label>
    </div>

    <button class="mt-3 w-100 btn btn-lg btn-primary bg-dark border-dark" type="submit">Iniciar sesión</button>
</x-layout-auth>
<x-layout-auth action="/forgot-password">
	<h1 class="h3 mb-3 fw-normal">Cambiar contraseña</h1>

    <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="form-floating">
        <input name="confirm_password" type="password" class="form-control" id="floatingPassword">
        <label for="floatingPassword">Confirmar contraseña</label>
    </div>

    <input type="hidden" name="id" value="{{ $id }}">

    <button class="w-100 btn btn-lg btn-primary bg-dark border-dark mt-5" type="submit">Enviar</button>
</x-layout-auth>
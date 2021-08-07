<x-layout-auth action="/forgot-password">
	<h1 class="h3 mb-3 fw-normal">Registro</h1>

    <div class="form-floating">
        <input name="name" type="text" class="form-control" id="floatingInput" required>
        <label for="floatingInput">Nombre</label>
    </div>

    <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" required>
        <label for="floatingInput">Correo electrónico</label>
    </div>

    <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" required>
        <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="form-floating">
        <input name="confirm_password" type="password" class="form-control" id="floatingPassword" required>
        <label for="floatingPassword">Confirmar contraseña</label>
    </div>

    <button class="mt-3 w-100 btn btn-lg btn-primary bg-dark border-dark" type="submit">Iniciar sesión</button>

    @if(config('facebook', 'app_id'))
        <a href="{{ facebook() }}" class="mt-1 w-100 btn btn-lg btn-primary bg-primary border-primary" type="submit"><i class="fab fa-facebook"></i> Iniciar sesión</a>
    @endif

    @if(config('google', 'client_id'))        
        <a href="{{ google() }}" class="mt-1 w-100 btn btn-lg btn-primary bg-danger border-danger" type="submit"><i class="fab fa-google"></i> Iniciar sesión</a>
    @endif
</x-layout-auth>
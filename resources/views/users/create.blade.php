<x-layout-dashboard title="Crear usuario" active="users">
	<form action="/dashboard/users/store" enctype="multipart/form-data" method="POST">
		<div class="row p-2">
			<div class="col-md-4">
				<h3>Información del perfil</h3>
				<p>Asigne la foto y la dirección de correo electrónico de tu cuenta.</p>
			</div>

			<div class="col-md-8">
				<div class="card">
					<div class="card-body pe-3 ps-3">
						<div>
							<label for="photo">Foto</label>
							<div>
								<img class="img-profile img-profile-edit" src="{{ asset('img/app/user.png') }}" alt="">
							</div>

							<button type="button" class="btn btn-light btn-photo mt-3">Seleccione una foto</button>

							<input class="input-file" type="file" name="photo">
						</div>

						<div class="form-group mt-5">
							<label for="name">Nombre</label>
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
						</div>

						<div class="form-group mt-3">
							<label for="email">Correo electrónico</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row p-2 mt-5">
			<div class="col-md-4">
				<h3>Contraseña</h3>
				<p>Asegure su cuenta utilizando una contraseña larga y aleatoria, luego guardela en un lugar seguro.</p>
			</div>

			<div class="col-md-8">
				<div class="card">
					<div class="card-body pe-3 ps-3">
						<div class="form-group mt-5">
							<label for="password">Contraseña</label>
							<div class="input-group">
                                <input type="password" name="password" class="form-control" required>
                                <button type="button" class="btn btn-light show-password" data-input="password">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
						</div>

						<div class="form-group mt-5">
							<div class="input-group">
                                <input type="password" name="confirm_password" class="form-control" required>
                                <button type="button" class="btn btn-light show-password" data-input="confirm_password">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-5 float-end">
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-save"></i> Guardar
			</button>

			<a href="/dashboard/users" class="btn btn-danger">
				<span class="fa fa-times"></span> Cancelar
			</a>
		</div>
	</form>
</x-layout-dashboard>

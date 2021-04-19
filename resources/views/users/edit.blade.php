@component('components.layout')
	@slot('title', 'Editar usuario')

	@slot('active', 'users')

	@slot('body')
		<div class="row p-2">
			<div class="col-md-4">
				<h3>Información del perfil</h3>
				<p>Edita la foto y la dirección de correo electrónico de tu cuenta.</p>
			</div>

			<div class="col-md-8">
				<div class="card">
					<div class="card-body pe-3 ps-3">
						<div>
							<label for="photo">Foto</label>
							<div>
								<img class="img-profile-edit" src="{{ auth()->photo }}" alt="">
							</div>

							<button class="btn btn-light btn-photo mt-3">Seleccione una foto</button>

							<input class="input-file" type="file" name="photo">
						</div>

						<div class="form-group mt-5">
							<label for="name">Nombre</label>
							<input type="text" class="form-control" name="name" value="{{ auth()->name }}" required>
						</div>

						<div class="form-group mt-3">
							<label for="email">Correo electrónico</label>
							<input type="email" class="form-control" name="email" value="{{ auth()->email }}" required>
						</div>

						<div class="mt-5 float-end">
							<button type="button" class="btn btn-primary">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row p-2 mt-5">
			<div class="col-md-4">
				<h3>Actualizar contraseña</h3>
				<p>Asegure su cuenta utilizando una contraseña larga y aleatoria, luego guardela en un lugar seguro.</p>
			</div>

			<div class="col-md-8">
				<div class="card">
					<div class="card-body pe-3 ps-3">
						<div class="form-group">
							<label for="current_password">Contraseña actual</label>
							<input type="password" class="form-control" name="current_password" required>
						</div>

						<div class="form-group mt-5">
							<label for="new_password">Nueva contraseña</label>
							<input type="password" class="form-control" name="new_password" required>
						</div>

						<div class="form-group mt-5">
							<label for="confirm_new_password">Confirmar contraseña</label>
							<input type="password" class="form-control" name="confirm_new_password" required>
						</div>

						<div class="mt-5 float-end">
							<button type="button" class="btn btn-primary">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row p-2 mt-5">
			<div class="col-md-4">
				<h3>Eliminar cuenta</h3>
				<p>Elimina tu cuenta permanentemente</p>
			</div>

			<div class="col-md-8">
				<div class="card">
					<div class="card-body pe-3 ps-3">
						<p>Una vez que elimine su cuenta, todos los datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conversar.</p>

						<button class="btn btn-danger">Eliminar cuenta</button>
					</div>
				</div>
			</div>
		</div>
	@endslot
@endcomponent
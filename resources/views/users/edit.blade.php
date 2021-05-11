<x-layout-dashboard title="Editar usuario" active="users">
	<form action="/dashboard/users/update" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $user->id }}">

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
								<img class="img-profile img-profile-edit" src="{{ $user->photo }}" alt="">
							</div>

							<button type="button" class="btn btn-light btn-photo mt-3">Seleccione una foto</button>

							<input class="input-file" type="file" name="photo">
						</div>

						<div class="form-group mt-5">
							<label for="name">Nombre</label>
							<input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
						</div>

						<div class="form-group mt-3">
							<label for="email">Correo electrónico</label>
							<input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
						</div>

						<div class="mt-5 float-end">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-save"></i>
								Guardar
							</button>
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
							<label for="confirm_password">Confirmar contraseña</label>
							<div class="input-group">
                                <input type="password" name="confirm_password" class="form-control" required>
                                <button type="button" class="btn btn-light show-password" data-input="confirm_password">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
						</div>

						<div class="mt-5 float-end">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-save"></i>
								Guardar
							</button>
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

						<a data-text="¿Está seguro que desea realizar esta acción?" href="{{ '/dashboard/users/delete/' . $user->id }}" class="confirm btn btn-danger">
							<div class="fa fa-trash"></div> Eliminar
						</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</x-layout-dashboard>

<x-layout title="Crear usuario" active="users">
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
							<input type="text" class="form-control" name="name" value="" required>
						</div>

						<div class="form-group mt-3">
							<label for="email">Correo electrónico</label>
							<input type="email" class="form-control" name="email" value="" required>
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
							<input type="password" class="form-control" name="password" required>
						</div>

						<div class="form-group mt-5">
							<label for="confirm_password">Confirmar contraseña</label>
							<input type="password" class="form-control" name="confirm_password" required>
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
</x-layout>

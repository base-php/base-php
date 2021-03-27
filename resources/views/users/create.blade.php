@extends('layouts/index')

@section('content')
	<div class="container-fluid">
		<h1 class="h3 mb-4 text-gray-800">
			Crear usuario
		</h1>

		<b-alert></b-alert>

		<form class="store mb-5" enctype="multipart/form-data" action="/users/store" method="POST">
			<div class="row">
				<div class="col-md-12 mb-4 text-center">
					<label for="user">
						<img src="{{ asset('img/app/user.png') }}" class="user_photo">
					</label>

					<input type="file" name="photo" id="user">
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" name="name" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Correo electrónico</label>
						<input type="email" class="form-control" name="email" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="password">Contraseña</label>
						<div class="input-group">
							<input type="password" class="form-control" name="password" required>
							<div class="input-group-append">
								<button type="button" class="btn btn-secondary password">
									<i class="fa fa-eye"></i>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="confirm_password">Confirmar contraseña</label>
						<div class="input-group">
							<input type="password" class="form-control" name="confirm_password" required>
							<div class="input-group-append">
								<button type="button" class="btn btn-secondary password">
									<i class="fa fa-eye"></i>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<button type="submit" class="btn btn-primary submit">
						<i class="fa fa-save"></i> Crear usuario
					</button>

					<a href="/users" class="btn btn-danger cancel">
						<i class="fa fa-times"></i> Cancelar
					</a>
				</div>
			</div>
		</form>
	</div>
@endsection

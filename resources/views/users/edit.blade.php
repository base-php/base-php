@extends('layouts/index')

@section('content')
	<div class="container-fluid">
		<h1 class="h3 mb-4 text-gray-800">
			Editar usuario
		</h1>

		<b-alert></b-alert>

		<form method="POST" enctype="multipart/form-data" action="/users/update" class="update mb-5">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							Foto
						</div>

						<div class="col-md-8 text-center">
							<label for="user">
								<img src="{{ ($user->photo != '') ? $user->photo : asset('img/app/user.png') }}" class="user_photo">
							</label>

							<input type="file" name="photo" id="user">
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-4">
							<label for="name">Nombre</label>
						</div>

						<div class="col-md-8">
							<input type="text" class="form-control" name="name" required value="{{ $user->name }}">
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-4">
							<label for="email">Correo electrónico</label>
						</div>

						<div class="col-md-8">
							<input type="email" class="form-control" name="email" required value="{{ $user->email }}">
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-4">
							<label for="password">Contraseña</label>
						</div>

						<div class="col-md-8">
							<div class="input-group">
								<input type="password" class="form-control" name="password">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary password">
										<i class="fa fa-eye"></i>
									</button>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-4">
							<label for="confirm_password">Confirmar contraseña</label>
						</div>

						<div class="col-md-8">
							<div class="input-group">
								<input type="password" class="form-control" name="confirm_password">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary password">
										<i class="fa fa-eye"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="row mt-4">
				<input type="hidden" name="id" value="{{ $user->id }}">

				<div class="col-md-12">
					<button type="submit" class="btn btn-primary submit">
						<i class="fa fa-save"></i> Editar usuario
					</button>

					<a href="/users" class="btn btn-danger cancel">
						<i class="fa fa-times"></i> Cancelar
					</a>
				</div>
			</div>
		</form>
	</div>
@endsection

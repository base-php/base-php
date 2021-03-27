@extends('layouts/index')

@section('content')
	<div class="container-fluid">
		<h1 class="h3 mb-4 text-gray-800">
			Usuarios

			<a href="/users/create" class="btn btn-primary btn-sm float-right create">
				<i class="fa fa-copy"></i> 
				Crear
			</a>
		</h1>

		<b-alert></b-alert>

		@if($users->count())
			<table class="table" width="100%" id="datatables">
				<thead>
					<tr>
						<th data-priority="1">ID</th>
						<th>Foto</th>
						<th data-priority="2">Nombre</th>
						<th>Correo electrónico</th>
						<th>Opciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td><img class="user_list" src="{{ $user->photo }}" alt=""></td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<a href="{{ '/users/edit/' . $user->id }}" class="btn btn-secondary btn-sm edit">
									<i class="fa fa-edit"></i> Editar
								</a>

								@if ($user->id != auth()->id)
									<a href="{{ '/users/delete/' . $user->id }}" class="btn btn-danger btn-sm delete">
										<i class="fa fa-trash"></i> Eliminar
									</a>
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="alert alert-info">No se han registrado usuarios</div>
		@endif
	</div>
@endsection

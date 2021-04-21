<x-layout active="users">
	<x-slot name="title">
		Usuarios

		<a href="/dashboard/users/create" class="float-end mt-1">
			<i class="fa fa-plus"></i>
		</a>
	</x-slot>

	@if($users->count())
		<table class="datatable table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Foto</th>
					<th>Nombre</th>
					<th>Correo electrónico</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td><img class="img-profile-list" src="{{ $user->photo }}" alt=""></td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a href="{{ '/dashboard/users/edit/' . $user->id }}">
								<span class="far fa-edit"></span>
							</a>

							<a class="confirm" data-text="¿Está seguro que desea eliminar este elemento?" data-href="{{ '/dashboard/users/delete/' . $user->id }}" href="{{ '/dashboard/users/delete/' . $user->id }}">
								<i class="ms-2 fa fa-trash-alt"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<div class="alert alert-info">No se han registrado usuarios</div>
	@endif
</x-layout>
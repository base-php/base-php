@component('components.layout')
	@slot('title', 'Inicio')

	@slot('active', 'home')

	@slot('body')
		<div class="alert alert-info">¡Has iniciado sesión!</div>
	@endslot
@endcomponent
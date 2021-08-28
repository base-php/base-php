@if(errors())
	<div class="bg-red-200 p-4 mb-3 rounded">
		@foreach(errors() as $error)
			<li>{{ error($error) }}</li>
		@endforeach
	</div>
@else
	@if(messages('error'))
	    <div class="bg-red-200 p-4 mb-3 rounded text-center">{{ message('error') }}</div>
	@endif

	@if(messages('info'))
		<div class="bg-green-200 p-4 mb-3 rounded text-center">{{ message('info') }}</div>
	@endif
@endif
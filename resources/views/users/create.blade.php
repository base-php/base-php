<x-layout-dashboard active="users">
	<div class="w-full p-3">
		<form action="/dashboard/users/store" method="POST" enctype="multipart/form-data">
	        <h1 class="text-4xl">Crear usuario</h1>

	        <hr class="my-5">

	        <x-alert></x-alert>

	        <div class="flex">
	            <div class="w-5/12 p-3">
	                <h1 class="font-semibold text-2xl mb-3">Información del perfil</h1>
	                <h2>Agregue el nombre y correo electrónico.</h2>
	            </div>

	            <div class="w-7/12 rounded bg-white p-7">                
	                <div>
	                    <label for="photo">Foto</label>
	                    <input class="hidden" id="photo" type="file" name="photo">
	                    <img id="photo-preview" class="rounded-full mb-2 block w-1/4" src="http://simpleicon.com/wp-content/uploads/user1.png" alt="">

	                    <div>
	                        <button type="button" id="open-file-selector" class="inline-flex items-center p-2 appearance-none bg-white border border-gray-200 border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-white active:bg-white focus:outline-none focus:border-white focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
	                            <i class="fa fa-upload mr-2"></i>
	                            Seleccionar nueva foto
	                        </button>

	                        <button type="button" class="hidden inline-flex items-center p-2 appearance-none bg-red-500 border border-gray-200 border-red-500 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-500 focus:outline-none focus:border-red-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
	                            <i class="fa fa-upload mr-2"></i>
	                            Eliminar foto
	                        </button>
	                    </div>
	                </div>

	                <div class="mt-5">
	                    <label for="name">Nombre</label>
	                    <input name="name" value="{{ old('name') }}" required type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>

	                <div class="mt-5">
	                    <label for="email">Correo electrónico</label>
	                    <input name="email" value="{{ old('email') }}" required type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>
	            </div>
	        </div>

	        <hr class="my-5">

	        <div class="flex">
	            <div class="w-5/12 p-3">
	                <h1 class="font-semibold text-2xl mb-3">Cambia contraseña</h1>
	                <h2>Asegúrate de que tu cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.</h2>
	            </div>

	            <div class="w-7/12 rounded bg-white p-7">
	                <div class="mt-5">
	                    <label for="password">Contraseña</label>
	                    <input name="password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>

	                <div class="mt-5">
	                    <label for="confirm_password">Confirmar contraseña</label>
	                    <input name="confirm_password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>
	            </div>
	        </div>

	        <div class="mt-5 text-right">
	            <button type="submit" class="inline-flex items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
	                <i class="fa fa-save mr-2"></i> 
	                Guardar
	            </button>
	        </div>
        </form>
    </div>
</x-layout-dashboard>

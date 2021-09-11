<x-layout-dashboard title="Editar usuario" active="users">
	<div>
		<div class="w-full p-3">
            <h1 class="text-4xl">Crear usuario</h1>

            <hr class="my-5">

            <x-alert></x-alert>

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">Información del perfil</h1>
                    <h2>Actualiza el nombre y correo electrónico.</h2>
                </div>

                <div class="w-7/12 rounded bg-white p-7">
                    <form action="/dashboard/users/update" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <div
                            x-init="$watch('photo', value => preview(value))"
                            x-data="{
                                photo: '',
                                preview (value) {
                                    input = document.getElementById('photo');

                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (event) {
                                            document.getElementById('photo-preview').setAttribute('src', event.target.result);
                                        }

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            }"
                        >
                            <label for="photo">Foto</label>
                            <input class="hidden" x-model="photo" id="photo" type="file" name="photo">
                            <img id="photo-preview" class="rounded-full mb-2 block w-1/4" src="{{ $user->photo }}" alt="">

                            <div>
                                <button x-on:click="document.getElementById('photo').click()" type="button" id="open-file-selector" class="inline-flex items-center p-2 appearance-none bg-white border border-gray-200 border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-white active:bg-white focus:outline-none focus:border-white focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                    <i class="fa fa-upload mr-2"></i>
                                    Seleccionar nueva foto
                                </button>
                            </div>
                        </div>

                        <div class="mt-5">
                            <label for="name">Nombre</label>
                            <input value="{{ $user->name }}" name="name" required type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-5">
                            <label for="email">Correo electrónico</label>
                            <input value="{{ $user->email }}" name="email" required type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="inline-flex items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                <i class="fa fa-save mr-2"></i> 
                                Guardar
                            </button>
                        </div>

                        <input type="hidden" name="password" value="">
                        <input type="hidden" name="confirm_password" value="">
                    </form>
                </div>
            </div>

            <hr class="my-5">

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">Cambia contraseña</h1>
                    <h2>Asegúrate de que tu cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.</h2>
                </div>

                <div class="w-7/12 rounded bg-white p-7">
                    <form action="/dashboard/users/update" method="POST">
                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <div class="mt-5">
                            <label for="password">Contraseña</label>
                            <input name="password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-5">
                            <label for="confirm_password">Confirmar contraseña</label>
                            <input name="confirm_password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="inline-flex items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                <i class="fa fa-save mr-2"></i> 
                                Guardar
                            </button>
                        </div>

                        <input type="hidden" name="name" value="{{ $user->name }}">
                        <input type="hidden" name="email" value="{{ $user->email }}">
                    </form>
                </div>
            </div>

            <hr class="my-5">

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">Eliminar cuenta</h1>
                    <h2>Eliminar tu cuenta permanentemente.</h2>
                </div>

                <div class="w-7/12 rounded bg-white p-7">                    
                    <div>
                        <p>Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información  que desee conservar.</p>
                    </div>

                    <div class="mt-5">
                        <a href="{{ '/users/delete/' . $user->id }}" class="inline-flex items-center p-3 appearance-none bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-500 focus:outline-none focus:border-red-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            <i class="fa fa-trash mr-2"></i> 
                            Eliminar cuenta
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
	</div>
</x-layout-dashboard>

<x-layout-dashboard active="users">
	<div class="w-full p-3">
		<form action="/dashboard/users/store" method="POST" enctype="multipart/form-data">
	        <h1 class="text-4xl">{{ __('users.create') }}</h1>

	        <hr class="my-5">

	        <x-alert></x-alert>

	        <div class="flex">
	            <div class="w-5/12 p-3">
	                <h1 class="font-semibold text-2xl mb-3">{{ __('users.profile_info') }}</h1>
	                <h2>{{ __('users.add_name_email') }}</h2>
	            </div>

	            <div class="w-7/12 rounded bg-white p-7">                
	                <div x-init="$watch('photo', value => preview(value))">
	                    <label for="photo">{{ __('users.photo') }}</label>
	                    <input class="hidden" x-model="photo" id="photo" type="file" name="photo">
	                    <img id="photo-preview" class="rounded-full mb-2 block w-1/4" src="{{ asset('img/user.png') }}" alt="">

	                    <div>
	                        <button type="button" x-on:click="document.getElementById('photo').click()" class="inline-flex items-center p-2 appearance-none bg-white border border-gray-200 border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-white active:bg-white focus:outline-none focus:border-white focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
	                            <i class="fa fa-upload mr-2"></i>
	                            {{ __('users.select_photo') }}
	                        </button>
	                    </div>
	                </div>

	                <div class="mt-5">
	                    <label for="name">{{ __('users.name') }}</label>
	                    <input name="name" value="{{ old('name') }}" required type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>

	                <div class="mt-5">
	                    <label for="email">{{ __('users.email') }}</label>
	                    <input name="email" value="{{ old('email') }}" required type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>
	            </div>
	        </div>

	        <hr class="my-5">

	        <div class="flex">
	            <div class="w-5/12 p-3">
	                <h1 class="font-semibold text-2xl mb-3">{{ __('users.change_password') }}</h1>
	                <h2>{{ __('users.change_password_text') }}</h2>
	            </div>

	            <div class="w-7/12 rounded bg-white p-7">
	                <div class="mt-5">
	                    <label for="password">{{ __('users.password') }}</label>
	                    <input name="password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>

	                <div class="mt-5">
	                    <label for="confirm_password">{{ __('users.confirm_password') }}</label>
	                    <input name="confirm_password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
	                </div>
	            </div>
	        </div>

	        <div class="mt-5 text-right">
	            <button type="submit" class="inline-flex items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
	                <i class="fa fa-save mr-2"></i> 
	                {{ __('users.save') }}
	            </button>
	        </div>
        </form>
    </div>
</x-layout-dashboard>

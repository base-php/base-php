<x-layout-auth>
	<div>
        <form class="flex flex-col" method="POST" action="{{ '/recover/' . $id }}">
            <input type="hidden" name="id" value="{{ $id }}">

            <div class="mt-3 mb-5">
                <label for="password">{{ __('auth.password') }}</label>
                <input name="password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mt-3 mb-5">
                <label for="confirm_password">{{ __('auth.confirm_password') }}</label>
                <input name="confirm_password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <button type="submit" class="mt-5 text-center items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <i class="fas fa-sign-in-alt mr-2"></i> 
                {{ __('auth.reset') }}
            </button>
        </form>
    </div>
</x-layout-auth>
<x-layout-auth>
    <div>
        <x-alert></x-alert>
        
        <form class="flex flex-col" method="POST" action="/login">
            <div>
                <label for="email">{{ lang('auth.email') }}</label>
                <input name="email" required type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="mt-5">
                <label for="password">{{ lang('auth.password') }}</label>
                <input name="password" required type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            @if(get('redirect'))
                <input type="hidden" name="redirect" value="{{ get('redirect') }}">
            @endif

            <div class="text-center p-5">
                <a href="/forgot-password" class="text-sm text-black hover:text-black hover:underline mb-6">{{ lang('auth.recover') }}</a>
            </div>

            <button type="submit" class="text-center items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <i class="fas fa-sign-in-alt mr-2"></i> 
                {{ lang('auth.login') }}
            </button>

            @if(config('facebook')->app_id)
                <a href="{{ facebook() }}" class="mt-3 text-center items-center p-3 appearance-none bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-600 focus:outline-none focus:border-blue-600 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    <i class="fab fa-facebook mr-2"></i> 
                    {{ lang('auth.login') }}
                </a>
            @endif

            @if(config('google')->client_id)
                <a href="{{ google() }}" class="mt-3 text-center items-center p-3 appearance-none bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    <i class="fab fa-google mr-2"></i> 
                    {{ lang('auth.login') }}
                </a>
            @endif
        </form>
    </div>
</x-layout-auth>

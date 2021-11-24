<x-layout-auth>
    <x-alert></x-alert>

    <div>
        <form class="flex flex-col" method="POST" action="/forgot-password">
            <div>
                <p class="text-justify">{{ lang('auth.text') }}</p>
            </div>

            <div class="mt-3 mb-5">
                <label for="email">{{ lang('auth.email') }}</label>
                <input name="email" required type="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <button type="submit" class="text-center items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                <i class="fas fa-link mr-2"></i> 
                {{ lang('auth.send_link') }}
            </button>
        </form>
    </div>
</x-layout-auth>

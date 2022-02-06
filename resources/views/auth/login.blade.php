<x-template-auth>
    <div>
        <x-alert/>
        
        <form class="flex flex-col" method="POST" action="/login">
            <div>
                <x-label for="email" text="{{ lang('auth.email') }}"/>
                <x-input name="email" required type="email"/>
            </div>

            <div class="mt-5">
                <label for="password">{{ lang('auth.password') }}</label>
                <x-input name="password" required type="password"/>
            </div>

            @if(request('redirect'))
                <x-input name="redirect" required type="hidden" value="{{ request('redirect') }}"/>
            @endif

            <div class="text-center p-5">
                <a href="/forgot-password" class="text-sm text-black hover:text-black hover:underline mb-6">{{ lang('auth.recover') }}</a>
            </div>

            <x-button color="black">
                <i class="fas fa-sign-in-alt mr-2"></i>
                {{ lang('auth.login') }}
            </x-button>

            @if(config('facebook')->app_id)
                <x-social-button url="{{ facebook()->url() }}" color="blue-600">
                    <i class="fab fa-facebook mr-2"></i>
                    {{ lang('auth.login') }}
                </x-social-button>
            @endif

            @if(config('google')->client_id)
                <x-social-button url="{{ google()->url() }}" color="red-600">
                    <i class="fab fa-google mr-2"></i>
                    {{ lang('auth.login') }}
                </x-social-button>
            @endif
        </form>
    </div>
</x-template-auth>

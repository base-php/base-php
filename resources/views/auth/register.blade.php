<x-template-auth>
    <div>
        <x-alert/>

        <form class="flex flex-col" method="POST" action="/register">
            <div>
                <x-label for="name" text="{{ lang('auth.name') }}"/>
                <x-input name="name" required/>
            </div>

            <div class="mt-3">
                <x-label for="email" text="{{ lang('auth.email') }}"/>
                <x-input name="email" required type="email"/>
            </div>

            <div class="mt-3">
                <x-label for="password" text="{{ lang('auth.password') }}"/>
                <x-input name="password" required type="password"/>
            </div>

            <div class="mt-3 mb-5">
                <x-label for="confirm_password" text="{{ lang('auth.confirm_password') }}"/>
                <x-input name="confirm_password" required type="password"/>
            </div>

            <x-button color="black">
                <i class="fas fa-sign-in-alt mr-2"></i>
                {{ lang('auth.register') }}
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

<x-template-auth>
    <x-alert/>

    <div>
        <form class="flex flex-col" method="POST" action="/forgot-password">
            <div>
                <p class="text-justify">{{ lang('auth.text') }}</p>
            </div>

            <div class="mt-3 mb-5">
                <x-label for="email" text="{{ lang('auth.email') }}"/>
                <x-input name="email" required type="email"/>
            </div>

            <x-button color="black">
                <i class="fas fa-link mr-2"></i>
                {{ lang('auth.send_link') }}
            </x-button>
        </form>
    </div>
</x-template-auth>

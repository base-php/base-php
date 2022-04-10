<x-template-auth>
	<div>
        <form class="flex flex-col" method="POST" action="{{ '/recover/' . $id }}">
            <input type="hidden" name="id" value="{{ $id }}">

            <div class="mt-3 mb-5">
                <x-label for="password" text="{{ lang('auth.password') }}"/>
                <x-input name="password" required type="password"/>
            </div>

            <div class="mt-3 mb-5">
                <x-label for="confirm_password" text="{{ lang('auth.confirm_password') }}"/>
                <x-input name="confirm_password" required type="password"/>
            </div>

            <x-button color="black">
                <i class="fas fa-sign-in-alt mr-2"></i>
                {{ lang('auth.reset') }}
            </x-button>
        </form>
    </div>
</x-template-auth>

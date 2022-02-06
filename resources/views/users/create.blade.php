<x-template-dashboard active="users">
    <div class="w-full p-3">
        <form action="/dashboard/users/store" method="POST" enctype="multipart/form-data">
            <h1 class="text-4xl">{{ lang('users.create') }}</h1>

            <hr class="my-5">

            <x-alert/>

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">{{ lang('users.profile_info') }}</h1>
                    <h2>{{ lang('users.add_name_email') }}</h2>
                </div>

                <input type="hidden" id="photo-url" value="{{ asset('img/user.png') }}">

                <div class="w-7/12 rounded bg-white p-7">
                    <div x-init="$watch('photo', value => preview(value))">
                        <x-label for="photo" text="{{ lang('users.photo') }}"/>
                        <input class="hidden" x-model="photo" id="photo" type="file" name="photo">
                        <img id="photo-preview" class="rounded-full mb-2 block w-1/4" src="{{ asset('img/user.png') }}" alt="">

                        <div>
                            <x-file-button show="photo == ''" click="document.getElementById('photo').click()" id="open-file-selector" background="white" text="black">
                                <i class="fa fa-upload mr-2"></i>
                                {{ lang('users.select_photo') }}
                            </x-file-button>

                            <x-file-button show="photo != ''" click="removePhoto()" background="red-500" text="white">
                                <i class="fa fa-trash mr-2"></i>
                                {{ lang('users.delete_photo') }}
                            </x-file-button>
                        </div>
                    </div>

                    <div class="mt-5">
                        <x-label for="name" text="{{ lang('users.name') }}"/>
                        <x-input name="name" value="{{ old('name') }}" required/>
                    </div>

                    <div class="mt-5">
                        <x-label for="email" text="{{ lang('users.email') }}"/>
                        <x-input name="email" value="{{ old('email') }}" required type="email"/>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">{{ lang('users.change_password') }}</h1>
                    <h2>{{ lang('users.change_password_text') }}</h2>
                </div>

                <div class="w-7/12 rounded bg-white p-7">
                    <div class="mt-5">
                        <x-label for="password" text="{{ lang('users.password') }}"/>
                        <x-input name="password" required type="password"/>
                    </div>

                    <div class="mt-5">
                        <x-label for="confirm_password" text="{{ lang('users.confirm_password') }}"/>
                        <x-input name="confirm_password" required type="password"/>
                    </div>
                </div>
            </div>

            <div class="mt-5 text-right">
                <x-button color="black">
                    <i class="fa fa-save mr-2"></i>
                    {{ lang('users.save') }}
                </x-button>
            </div>

            <x-input type="hidden" name="redirect" value="/dashboard/users/create"/>
        </form>
    </div>
</x-template-dashboard>

<x-template-dashboard title="Editar usuario" active="users">
    <div x-init="$watch('photo', value => preview(value))">
        <div class="w-full p-3">
            <h1 class="text-4xl">{{ lang('users.edit') }}</h1>

            <hr class="my-5">

            <x-alert/>

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">{{ lang('users.profile_info') }}</h1>
                    <h2>{{ lang('users.edit_name_email') }}</h2>
                </div>

                <input type="hidden" id="photo-url" value="{{ $user->photo }}">

                <div class="w-7/12 rounded bg-white p-7">
                    <form action="/dashboard/users/update" method="POST" enctype="multipart/form-data">
                        <x-input type="hidden" name="id" value="{{ $user->id }}"/>

                        <div>
                            <label for="photo">Foto</label>
                            <input class="hidden" x-model="photo" id="photo" type="file" name="photo">
                            <img id="photo-preview" class="rounded-full mb-2 block w-1/4" src="{{ $user->photo }}" alt="{{ $user->name }}">

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
                            <x-input name="name" value="{{ $user->name }}" required/>
                        </div>

                        <div class="mt-5">
                            <x-label for="email" text="{{ lang('users.email') }}"/>
                            <x-input name="email" value="{{ $user->email }}" required type="email"/>
                        </div>

                        <div class="mt-5">
                            <x-button color="black">
                                <i class="fa fa-save mr-2"></i>
                                {{ lang('users.save') }}
                            </x-button>
                        </div>

                        <input type="hidden" name="password" value="">
                        <input type="hidden" name="confirm_password" value="">
                    </form>
                </div>
            </div>

            <hr class="my-5">

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">{{ lang('users.change_password') }}</h1>
                    <h2>{{ lang('users.change_password_text') }}</h2>
                </div>

                <div class="w-7/12 rounded bg-white p-7">
                    <form action="/dashboard/users/update" method="POST">
                        <x-input type="hidden" name="id" value="{{ $user->id }}"/>

                        <div class="mt-5">
                            <x-label for="password" text="{{ lang('users.password') }}"/>
                            <x-input name="password" type="password" required/>
                        </div>

                        <div class="mt-5">
                            <x-label for="confirm_password" text="{{ lang('users.confirm_password') }}"/>
                            <x-input name="confirm_password" type="password" required/>
                        </div>

                        <div class="mt-5">
                            <x-button color="black">
                                <i class="fa fa-save mr-2"></i>
                                {{ lang('users.save') }}
                            </x-button>
                        </div>

                        <input type="hidden" name="name" value="{{ $user->name }}">
                        <input type="hidden" name="email" value="{{ $user->email }}">
                    </form>
                </div>
            </div>

            @if(class_exists('PragmaRX\Google2FA\Google2FA') && class_exists('Endroid\QrCode\QrCode'))
                <hr class="my-5">

                <div class="flex">
                    <div class="w-5/12 p-3">
                        <h1 class="font-semibold text-2xl mb-3">{{ lang('users.2fa_title') }}</h1>
                        <h2>{{ lang('users.2fa_subtitle') }}</h2>
                    </div>

                    @if($user->two_fa)
                        <div class="w-7/12 rounded bg-white p-7">
                            <div>
                                <h1 class="font-semibold text-2xl mb-3">{{ lang('users.2fa_enable_warning') }}</h1>

                                <p>{{ lang('users.2fa_enable_text') }}</p>

                                <div>{!! two_fa()->qr($user->two_fa) !!}</div>

                                <p>{{ two_fa()->key() }}</p>

                                <div class="mt-5">
                                    <x-button-link href="{{ '/dashboard/users/2fa/' . $user->id }}" color="red-500">
                                        <i class="fa fa-times mr-2"></i>
                                        {{ lang('users.2fa_disable') }}
                                    </x-button-link>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="w-7/12 rounded bg-white p-7">
                            <div>
                                <h1 class="font-semibold text-2xl mb-3">{{ lang('users.2fa_disable_warning') }}</h1>

                                <p>{{ lang('users.2fa_disable_text') }}</p>
                            </div>

                            <div class="mt-5">
                                <x-button-link href="{{ '/dashboard/users/2fa/' . $user->id }}" color="black">
                                    <i class="fa fa-check mr-2"></i>
                                    {{ lang('users.2fa_enable') }}
                                </x-button-link>
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            <hr class="my-5">

            <div class="flex">
                <div class="w-5/12 p-3">
                    <h1 class="font-semibold text-2xl mb-3">{{ lang('users.delete_account') }}</h1>
                    <h2>{{ lang('users.delete_account_permanently') }}</h2>
                </div>

                <div class="w-7/12 rounded bg-white p-7">
                    <div>
                        <p>{{ lang('users.delete_account_text') }}</p>
                    </div>

                    <div class="mt-5">
                        <x-button-link click="confirmDelete(event, $el)" href="{{ '/dashboard/users/delete/' . $user->id }}" color="red-500">
                            <i class="fa fa-trash mr-2"></i>
                            {{ lang('users.delete_account') }}
                        </x-button-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template-dashboard>

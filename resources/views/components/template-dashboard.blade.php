<!DOCTYPE html>
<html lang="{{ config('language') }}">
<head>
<meta charset="{{ config('charset') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Nisa Delgado">
<meta name="theme-color" content="#212529">

<title>{{ config('application_name') }}</title>

<link rel="icon" href="{{ asset('img/favicon.svg') }}">

<link rel="stylesheet" href="{{ node('flowbite/dist/flowbite.css') }}">
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body x-data="app()" class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white fixed w-full z-10 top-0 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="/dashboard">
                    <i class="fa fa-shapes"></i> {{ config('application_name') }}
                </a>
            </div>

            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">
                    <div class="relative text-sm">
                        <button x-on:click="showUserMenu = !showUserMenu" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="{{ auth()->photo }}" alt="Avatar of User"> 
                            <span class="hidden md:inline-block">{{ auth()->name }}</span>

                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z">
                                </g>
                            </svg>
                        </button>

                        <div x-show="showUserMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30">
                            <ul class="list-reset">
                                <li>
                                    <a href="{{ '/dashboard/users/edit/' . auth()->id }}" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">{{ lang('dashboard.profile') }}</a>
                                </li>

                                <li>
                                    <a href="/logout" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">{{ lang('dashboard.logout') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="block lg:hidden pr-4">
                        <button x-on:click="showMainMenu = !showMainMenu" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>{{ lang('dashboard.menu') }}</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="showMainMenu" class="mainMenu w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block mt-2 lg:mt-0 bg-white z-20">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="/dashboard" class="{{ ($active == 'home') ? 'block py-1 md:py-3 pl-1 align-middle text-silver-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600' : 'block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-silver-500' }}">
                            <i class="fas fa-home fa-fw mr-3 text-silver-600"></i> <span class="pb-1 md:pb-0 text-sm">{{ lang('dashboard.home') }}</span>
                        </a>
                    </li>

                    <li class="mr-6 my-2 md:my-0">
                        <a href="/dashboard/users" class="{{ ($active == 'users') ? 'block py-1 md:py-3 pl-1 align-middle text-silver-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600' : 'block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-silver-500' }}">
                            <i class="fas fa-users fa-fw mr-3"></i> <span class="pb-1 md:pb-0 text-sm">{{ lang('dashboard.users') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <div class="flex flex-wrap">
                {{ $slot }}
            </div>
        </div>
    </div>    

    <input type="hidden" id="confirm_delete_text" value="{{ lang('users.confirm_delete_text') }}">
    <input type="hidden" id="confirm_delete_accept" value="{{ lang('users.confirm_delete_accept') }}">
    <input type="hidden" id="confirm_delete_cancel" value="{{ lang('users.confirm_delete_cancel') }}">

    <script src="{{ node('flowbite/dist/flowbite.js') }}" defer></script>
    <script src="{{ node('alpinejs/dist/cdn.js') }}" defer></script>
    <script src="{{ node('sweetalert2/dist/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

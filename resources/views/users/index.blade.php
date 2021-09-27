<x-layout-dashboard active="users">
	<div class="w-full p-3">
        <h1 class="text-3xl mb-4">{{ __('users.users') }}</h1>

        <div class="grid grid-cols-2 mb-5">
            <div>
                <input x-on:keyup="search($el)" autofocus type="text" placeholder="{{ __('users.search') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="text-right">
                <a href="/dashboard/users/create" class="inline-flex items-center p-3 appearance-none bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black active:bg-black focus:outline-none focus:border-black focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    <i class="fa fa-plus mr-2"></i> 
                    {{ __('users.create') }}
                </a>
            </div>
        </div>

        <x-alert></x-alert>

        <div class="bg-white border rounded shadow p-5 text-lg">
            <table id="table" class="w-full">
                <thead class="border-b-2">
                    <tr class="hover:bg-gray-100">
                        <th class="text-left p-2 hidden sm:table-cell">{{ __('users.id') }}</th>
                        <th class="text-left p-2">{{ __('users.photo') }}</th>
                        <th class="text-left p-2">{{ __('users.name') }}</th>
                        <th class="text-left p-2 hidden sm:table-cell">{{ __('users.email') }}</th>
                        <th class="text-left p-2"></th>
                    </tr>
                </thead>

                <tbody>
                	@foreach($users as $user)
                    <tr class="hover:bg-gray-100">
                        <td class="p-2 hidden sm:table-cell">{{ $user->id }}</td>
                        <td class="p-2">
                            <img class="w-8 h-8 rounded-full mr-4" src="{{ $user->photo }}" alt="{{ $user->name }}"> 
                        </td>
                        <td class="p-2">{{ $user->name }}</td>
                        <td class="p-2 hidden sm:table-cell">{{ $user->email }}</td>
                        <td class="p-2 text-right">
                            <a class="hover:text-blue-600 p-1" href="{{ '/dashboard/users/edit/' . $user->id }}" title="{{ __('users.edit') }}">
                                <fa class="fa fa-edit"></fa>
                            </a>

                            <a x-on:click="confirmDelete(event, $el)" class="hover:text-red-600 p-1" href="{{ '/dashboard/users/delete/' . $user->id }}" title="{{ __('users.delete') }}">
                                <fa class="fa fa-trash"></fa>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout-dashboard>
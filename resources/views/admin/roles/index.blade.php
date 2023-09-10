<x-layouts.admin.app>

    <x-slot:title>Roles</x-slot:title>

    <div id="last-users">
        <h1 class="font-bold py-4 uppercase">Roles 
            <a type="submit" href="{{ route('roles.create') }}" class="rounded-xl ml-5 border-2 border-green-500 px-5 py-1 text-base mb-3 font-medium text-green-500 transition duration-200 hover:bg-green-600/5 active:bg-green-700/5">
                Create role
            </a></h1>
        <div class="overflow-x-scroll">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-black/60">
                    <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
                    <th class="text-left py-3 px-2">Users</th>
                    <th class="text-left py-3 px-2">Created At</th>
                    <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
                </thead>
                @foreach ($roles as $role)
                <tr class="border-b border-gray-700">
                    <td class="py-3 px-2 font-bold">
                        <div class="inline-flex space-x-3 items-center">
                            <span class="text-indigo-400 uppercase">{{ $role->name }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-2">{{ $role->users->count() }}</td>
                    <td class="py-3 px-2">{{ $role->created_at->format('d-m-Y') }}</td>
                    <td class="py-3 px-2">
                        <div class="inline-flex items-center space-x-3">
                            <a href="{{ route('roles.edit', $role->id) }}" title="Edit" class="hover:text-white text-yellow-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                              </svg>                              
                            </a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">@csrf @method('DELETE')
                                <button type="submit" title="Delete" class="hover:text-white text-red-600" onclick="return confirm('Are you sure you want to delete this item?');"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                              
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</x-layouts.admin.app>
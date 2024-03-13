<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Managers') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="py-6">
                        <a href="{{ route('managers.create') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Create New manager
                        </a>
                    </div>
                    <table class="w-full text-left table-auto min-w-max">
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Manager ID
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Manager Name
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Manager Email Address
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Actions
                                </p>
                            </th>
                        </tr>
                        @foreach ($managers as $manager)
                        <tr>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $manager->id}}
                                </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $manager->manager_name}}
                                </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $manager->manager_email }}
                                </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex">
                                    <a href="{{ route('managers.show', $manager->id) }}" class="mr-2 text-blue-400 hover:text-blue-600 flex justify-items-center items-center">
                                        <span class="material-symbols-outlined">
                                            info
                                            </span></a>
                                    <a href="{{ route('managers.edit', $manager->id) }}" class="mr-2 text-gray-600 hover:text-gray-800 flex justify-items-center items-center">
                                        <span class="material-symbols-outlined">
                                            edit
                                            </span>
                                    </a>
                                    <form id="deleteForm" action="{{ route('managers.destroy', $manager->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 flex justify-items-center items-center">
                                            <span class="material-symbols-outlined">
                                                delete
                                                </span>
                                        </button>
                                    </form>
                                    <script>
                                        document.getElementById('deleteForm').addEventListener('submit', function(event) {
                                            var confirmation = confirm("Are you sure you want to delete?");
                                            if (!confirmation) {
                                                event.preventDefault();
                                            }
                                        });
                                    </script>
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Line Managers') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="py-6">
                        <a href="{{ route('line-managers.create') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Create New Line manager
                        </a>
                    </div>
                    <table class="w-full text-left table-auto min-w-max">
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    ID
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Line Manager Name
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Line Manager Email Address
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Actions
                                </p>
                            </th>
                        </tr>
                        @foreach ($line_managers as $line_manager)
                        <tr>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $line_manager->id}}
                                </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $line_manager->line_manager_name}}
                                </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{ $line_manager->line_manager_email }}
                                </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex">
                                    <a href="{{ route('line-managers.show', $line_manager->id) }}" class="mr-2 text-blue-400 hover:text-blue-600 flex justify-items-center items-center">
                                        <span class="material-symbols-outlined">
                                            info
                                            </span></a>
                                    <a href="{{ route('line-managers.edit', $line_manager->id) }}" class="mr-2 text-gray-600 hover:text-gray-800 flex justify-items-center items-center">
                                        <span class="material-symbols-outlined">
                                            edit
                                            </span>
                                    </a>
                                    <form id="deleteForm" action="{{ route('line-managers.destroy', $line_manager->id) }}" method="POST" class="inline">
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
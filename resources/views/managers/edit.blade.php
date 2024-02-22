<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('managers.update', $manager->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="manager_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager Name</label>
                            <input type="text" name="manager_name" id="manager_name" value="{{ $manager->manager_name }}" class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Manager name" required>
                        </div>
                        <div class="mb-4">
                            <label for="manager_email" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager Email Address</label>
                            <input type="email" name="manager_email" id="manager_email" value="{{ $manager->manager_email }}" class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Email address" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('managers.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

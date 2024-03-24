<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create Line Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('line-managers.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="line_manager_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Line Manager Name</label>
                            <input type="text" name="line_manager_name" id="line_manager_name" class="mt-1 p-2 border rounded-md w-full" placeholder="Manager name" required>
                        </div>
                        <div class="mb-4">
                            <label for="line_manager_email" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Line Manager Email Address</label>
                            <input type="email" name="line_manager_email" id="line_manager_email" class="mt-1 p-2 border rounded-md w-full" placeholder="Email address" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Create
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('line-managers.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

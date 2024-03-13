<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Manager Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager ID: {{ $manager->id }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager Name: {{ $manager->manager_name }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager Email: {{ $manager->manager_email }}</p>
                    </div>
                    <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                        <a href="{{ route('managers.index') }}" class="">Back</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

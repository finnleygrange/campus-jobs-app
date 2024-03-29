<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Report Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Report ID: {{ $report->id }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Date and Time: {{ $report->created_at }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager Name: {{ $report->manager_name }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job title: {{ $report->job_title }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Hours requested: {{ $report->hours_requested }}</p>
                    </div>
                    <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                        <a href="{{ route('reports.index') }}" class="">Back</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

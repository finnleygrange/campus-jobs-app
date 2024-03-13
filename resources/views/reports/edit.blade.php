<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if (isset($report))
                {{ __('Edit Report') }}
            @else
                {{ __('Create Report') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form
                        @if (isset($report)) action="{{ route('reports.update', $report->id) }}" 
                        @else
                            action="{{ route('reports.store') }}" @endif
                        method="POST">
                        @csrf
                        @if (isset($report))
                            @method('PUT')
                        @endif
                        <div class="mb-4">
                            <label for="date"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Date
                            </label>
                            <input type="date" name="date" id="date"
                                value="{{ isset($report) ? $report->date : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Date"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="manager_name"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager name
                            </label>
                            <input type="text" name="manager_name" id="manager_name"
                                value="{{ isset($report) ? $report->manager_name : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white"
                                placeholder="Manager name" required>
                        </div>
                        <div class="mb-4">
                            <label for="job_id"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job title
                            </label>
                            <input type="text" name="job_id" id="job_id"
                                value="{{ isset($report) ? $report->job_id : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="job id"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="hours_requested"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Hours requested
                            </label>
                            <input type="int" name="hours_requested" id="hours-requested"
                                value="{{ isset($report) ? $report->hours_requested : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white"
                                placeholder="Hours requested" required>
                        </div>  
                        <div>
                            <button type="submit"
                                class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-gray-700 hover.bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('reports.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Report') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('reports.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="employee_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Date</label>
                            <input type="date" name="date" id="date" class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Date" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Line manager Name</label>
                            <input type="text" name="manager_name" id="manager_name" class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Manager Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="job_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job Title</label>
                            <input type="text" name="job_id" id="job_id" class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Job ID" required>
                        </div>
                        <div class="mb-4">
                            <label for="pay_rate" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Requested hours</label>
                            <input type="int" name="hours_requested" id="hours_requested" class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Requested hours" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('reports.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

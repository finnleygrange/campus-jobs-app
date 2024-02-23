<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if (isset($timesheet))
                {{ __('Edit Timesheet') }}
            @else
                {{ __('Create Timesheet') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form
                        @if (isset($timesheet)) action="{{ route('timesheets.update', $timesheet->id) }}" 
                        @else
                            action="{{ route('timesheets.store') }}" @endif
                        method="POST">
                        @csrf
                        @if (isset($timesheet))
                            @method('PUT')
                        @endif
                        <div class="mb-4">
                            <label for="job_id"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job
                                ID</label>
                            <input type="text" name="job_id" id="job_id"
                                value="{{ isset($timesheet) ? $timesheet->job_id : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Job ID"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="job_title"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job
                                Title</label>
                            <input type="text" name="job_title" id="job_title"
                                value="{{ isset($timesheet) ? $timesheet->job_title : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Job Title"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="student_id"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student
                                ID</label>
                            <input type="text" name="student_id" id="student_id"
                                value="{{ isset($timesheet) ? $timesheet->student_id : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white"
                                placeholder="Student ID" required>
                        </div>
                        <div class="mb-4">
                            <label for="pay_rate"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Pay
                                Rate</label>
                            <input type="text" name="pay_rate" id="pay_rate"
                                value="{{ isset($timesheet) ? $timesheet->pay_rate : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" placeholder="Pay Rate"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Worked
                                Hours</label>
                            <input type="text" name="worked_hours" id="worked_hours"
                                value="{{ isset($timesheet) ? $timesheet->worked_hours : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white"
                                placeholder="Worked Hours" required>
                        </div>
                        <div class="mb-4">
                            <label for="date_worked"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Date
                                Worked</label>
                            <input type="date" name="date_worked" id="date_worked"
                                value="{{ isset($timesheet) ? $timesheet->date_worked : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white" required>
                        </div>
                        <div class="mb-4">
                            <label for="manager_id"
                                class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager
                                ID</label>
                            <input type="text" name="manager_id" id="manager_id"
                                value="{{ isset($timesheet) ? $timesheet->manager_id : '' }}"
                                class="mt-1 p-2 border rounded-md w-full bg-gray-700 text-white"
                                placeholder="Manager ID" required>
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-gray-700 hover.bg-gray-600 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('timesheets.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

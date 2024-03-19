<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create Timesheet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <form action="{{ route('timesheets.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="employee_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Employee ID</label>
                            <input type="text" name="employee_id" id="employee_id"  class="mt-1 p-2 border rounded-md w-full" placeholder="Employee ID" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student ID</label>
                            <input type="text" name="student_id" id="student_id"  class="mt-1 p-2 border rounded-md w-full" placeholder="Student ID" required>
                        </div>
                        <div class="mb-4">
                            <label for="job_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job ID</label>
                            <input type="text" name="job_id" id="job_id"  class="mt-1 p-2 border rounded-md w-full" placeholder="Job ID" required>
                        </div>
                        <div class="mb-4">
                            <label for="pay_rate" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Pay Rate</label>
                            <input type="text" name="pay_rate" id="pay_rate"  class="mt-1 p-2 border rounded-md w-full" placeholder="Pay Rate" required>
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Worked Hours</label>
                            <input type="text" name="worked_hours" id="worked_hours"  class="mt-1 p-2 border rounded-md w-full" placeholder="Worked Hours" required>
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Date Worked </label>
                            <input type="date" name="date_worked" id="date_worked"  class="mt-1 p-2 border rounded-md w-full" placeholder="Date Worked" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('timesheets.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

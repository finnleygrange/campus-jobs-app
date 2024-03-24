<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Add to Tracker') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                    <form action="{{ route('trackers.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Number</label>
                            <input type="int" name="student_id" id="student_id" class="mt-1 p-2 border rounded-md w-full" placeholder="Student id" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Name</label>
                            <input type="text" name="student_name" id="student_name" class="mt-1 p-2 border rounded-md w-full" placeholder="Student Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_email_address" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student email address</label>
                            <input type="text" name="student_email_address" id="student_email_address" class="mt-1 p-2 border rounded-md w-full" placeholder="Student email address" required>
                        </div>
                        <div class="mb-4">
                            <label for="visa_end_date" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Visa end date</label>
                            <input type="date" name="visa_end_date" id="visa_end_date" class="mt-1 p-2 border rounded-md w-full" placeholder="Visa end date" >
                        </div>
                        <div class="mb-4">
                            <label for="manager_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Engaging manager Name</label>
                            <input type="text" name="manager_name" id="manager_name" class="mt-1 p-2 border rounded-md w-full" placeholder="Manager Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Hours worked</label>
                            <input type="int" name="worked_hours" id="worked_hours" class="mt-1 p-2 border rounded-md w-full" placeholder="Hours per week" required>
                        </div>
                        <div class="mb-4">
                            <label for="notes" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Notes</label>
                            <input type="text" name="notes" id="notes" class="mt-1 p-2 border rounded-md w-full" placeholder="Notes">
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                  <a href="{{ route('trackers.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

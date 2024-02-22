<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="student_number" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Number</label>
                            <input type="text" name="student_number" id="student_number" value="{{ $student->id }}" class="mt-1 p-2 border rounded-md w-full text-black" placeholder="Student number" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_first_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student First Name</label>
                            <input type="text" name="student_first_name" id="student_first_name" value="{{ $student->student_first_name }}" class="mt-1 p-2 border rounded-md w-full text-black" placeholder="First name" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_last_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Last Name</label>
                            <input type="text" name="student_last_name" id="student_last_name" value="{{ $student->student_last_name }}" class="mt-1 p-2 border rounded-md w-full text-black" placeholder="Last Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_email_address" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Email Address</label>
                            <input type="email" name="student_email_address" id="student_email_address" value="{{ $student->student_email_address }}" class="mt-1 p-2 border rounded-md w-full text-black" placeholder="Email address" required>
                        </div>
                        <div class="mb-4">
                            <label for="visa_end_date" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Visa End Date</label>
                            <input type="date" name="visa_end_date" id="visa_end_date" value="{{ $student->visa_end_date }}" class="mt-1 p-2 border rounded-md w-full text-black" required>
                        </div>
                        <div class="flex justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update
                            </button>
                            <a href="{{ route('students.index') }}" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

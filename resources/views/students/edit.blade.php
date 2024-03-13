<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
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
                            <label for="student_number" class="block font-sans text-sm antialiased font-normal leading-none">Student Number</label>
                            <input type="text" name="student_number" id="student_number" value="{{ $student->id }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Student number" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_first_name" class="block font-sans text-sm antialiased font-normal leading-none">Student First Name</label>
                            <input type="text" name="student_first_name" id="student_first_name" value="{{ $student->student_first_name }}" class="mt-1 p-2 border rounded-md w-full" placeholder="First name" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_last_name" class="block font-sans text-sm antialiased font-normal leading-none">Student Last Name</label>
                            <input type="text" name="student_last_name" id="student_last_name" value="{{ $student->student_last_name }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Last Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_email_address" class="block font-sans text-sm antialiased font-normal leading-none">Student Email Address</label>
                            <input type="email" name="student_email_address" id="student_email_address" value="{{ $student->student_email_address }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Email address" required>
                        </div>
                        <div class="mb-4">
                            <label for="visa_end_date" class="block font-sans text-sm antialiased font-normal leading-none">Visa End Date</label>
                            <input type="date" name="visa_end_date" id="visa_end_date" value="{{ $student->visa_end_date }}" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('students.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

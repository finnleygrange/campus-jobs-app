<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Student Casual Worker Student Visa Tracker') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <div class="mb-4">
                        <p><strong>Student Visa Tracker for on campus working students. Students cannot exceed 15 hours per week during term time. The working week is Monday to Sunday</strong></p>
                    </div>
                    <form id="confirmForm" action="{{ route('form.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <p><em>Please submit one tracker per week due to work. Students cannot exceed more than 15 hours per week during term time. The working week is Monday to Sunday. Please Note: If a student believes they are out of term time and can therefore work more hours they will need to request a letter from Immigration-Operations@shu.ac.uk and provide this to yourself and the campus jobs team before more hours can be allocated.</em></p>
                        </div>
                        <div class="mb-4">
                            <label for="engaging_manager_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Engaging Manager Name</label>
                            <input type="text" name="engaging_manager_name" id="engaging_manager_name" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="engaging_manager_email_address" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Engaging Manager Email Address</label>
                            <input type="email" name="engaging_manager_email_address" id="engaging_manager_email_address" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="enaging_manager_department" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Engaging Manager Department</label>
                            <input type="text" name="enaging_manager_department" id="enaging_manager_department" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Name</label>
                            <input type="text" name="student_name" id="student_name" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_number" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Number</label>
                            <input type="text" name="student_number" id="student_number" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_email_address" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student email address if known</label>
                            <input type="email" name="student_email_address" id="student_email_address" class="mt-1 p-2 border rounded-md w-full">
                        </div>
                        <div class="mb-4">
                            <label for="week_commencing" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Week Commencing (Please select the date this student is due to work within this assignment)</label>
                            <input type="date" name="week_commencing" id="week_commencing" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Submit
                        </button>
                    </form>
                    <script>
                        document.getElementById('confirmForm').addEventListener('submit', function(event) {
                            var confirmation = confirm("Student Visa Tracker for on campus working students. Students cannot exceed 15 hours per week during term time. The working week is Monday to Sunday");
                            if (!confirmation) {
                                event.preventDefault();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

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
                    <form id="confirmForm" action="{{ route('submitForm') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Name</label>
                            <select name="student_id" id="student_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Student</option>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->student_first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="job_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job</label>
                            <select name="job_id" id="job_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Job</option>
                                @foreach($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->job_title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="week_commencing" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Week Commencing (Please select the date this student is due to work within this assignment)</label>
                            <input type="date" name="week_commencing" id="week_commencing" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="assignment" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student Assignment i.e. Open Day/ Clearing/ Research Work</label>
                            <input type="text" name="assignment" id="assignment" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="hours_requested" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Planned amount of hours to be worked per working week (Please enter the amount of hours this student will work on the selected day/ week. Students cannot work more than 15 hours per week) </label>
                            <input type="text" name="hours_requested" id="hours_requested" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="line_manager_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Line Manager</label>
                            <select name="line_manager_id" id="line_manager_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Line Manager</option>
                                @foreach($line_managers as $line_manager)
                                    <option value="{{ $line_manager->id }}">{{ $line_manager->line_manager_name }}</option>
                                @endforeach
                            </select>
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

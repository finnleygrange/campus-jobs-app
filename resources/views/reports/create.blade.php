<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create Report') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <form action="{{ route('reports.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student</label>
                            <select name="student_id" id="student_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->student_first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="job_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job Title</label>
                            <select name="job_id" id="job_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Job</option>
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->job_title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="week_commencing" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Week Commencing</label>
                            <input type="date" name="week_commencing" id="week_commencing" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="assignment" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Assignment</label>
                            <input type="text" name="assignment" id="assignment" class="mt-1 p-2 border rounded-md w-full" placeholder="Assignment" required>
                        </div>
                        <div class="mb-4">
                            <label for="hours_requested" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Requested Hours</label>
                            <input type="number" name="hours_requested" id="hours_requested" class="mt-1 p-2 border rounded-md w-full" placeholder="Requested Hours" required>
                        </div>
                        <div class="mb-4">
                            <label for="line_manager_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Line Manager</label>
                            <select name="line_manager_id" id="line_manager_id" class="mt-1 p-2 border rounded-md w-full" required>
                                @foreach($lineManagers as $lineManager)
                                    <option value="{{ $lineManager->id }}">{{ $lineManager->line_manager_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('reports.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

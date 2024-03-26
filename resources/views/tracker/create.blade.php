<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create Tracker Entry') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <form action="{{ route('tracker.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student</label>
                            <select name="student_id" id="student_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Student</option>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->student_first_name }} {{ $student->student_last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="manager_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager</label>
                            <select name="manager_id" id="manager_id" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="">Select Manager</option>
                                @foreach($managers as $manager)
                                    <option value="{{ $manager->id }}">{{ $manager->manager_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="week_commencing" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Week Commencing</label>
                            <input type="date" name="week_commencing" id="week_commencing" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="visa_end_date" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Visa End Date</label>
                            <input type="date" name="visa_end_date" id="visa_end_date" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Worked Hours</label>
                            <input type="text" name="worked_hours" id="worked_hours" class="mt-1 p-2 border rounded-md w-full" placeholder="Worked Hours" required>
                        </div>
                        <div class="mb-4">
                            <label for="notes" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Notes</label>
                            <textarea name="notes" id="notes" class="mt-1 p-2 border rounded-md w-full" placeholder="Notes"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('tracker.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

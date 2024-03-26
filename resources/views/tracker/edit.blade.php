<!-- edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Tracker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('tracker.update', $tracker->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="student_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Student ID</label>
                            <select name="student_id" id="student_id" class="mt-1 p-2 border rounded-md w-full" required>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}" {{ $student->id == $tracker->student_id ? 'selected' : '' }}>{{ $student->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="manager_id" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Manager ID</label>
                            <select name="manager_id" id="manager_id" class="mt-1 p-2 border rounded-md w-full" required>
                                @foreach($managers as $manager)
                                    <option value="{{ $manager->id }}" {{ $manager->id == $tracker->manager_id ? 'selected' : '' }}>{{ $manager->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="week_commencing" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Week Commencing</label>
                            <input type="date" name="week_commencing" id="week_commencing" class="mt-1 p-2 border rounded-md w-full" value="{{ $tracker->week_commencing }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="visa_end_date" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Visa End Date</label>
                            <input type="date" name="visa_end_date" id="visa_end_date" class="mt-1 p-2 border rounded-md w-full" value="{{ $tracker->visa_end_date }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Worked Hours</label>
                            <input type="number" name="worked_hours" id="worked_hours" class="mt-1 p-2 border rounded-md w-full" value="{{ $tracker->worked_hours }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="notes" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Notes</label>
                            <textarea name="notes" id="notes" class="mt-1 p-2 border rounded-md w-full" rows="4">{{ $tracker->notes }}</textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">Save</button>
                            <a href="{{ route('tracker.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

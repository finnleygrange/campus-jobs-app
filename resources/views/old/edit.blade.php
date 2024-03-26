<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
                {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('trackers.update', $tracker->id) }}" method="POST">
                    @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="student_name" class="block font-sans text-sm antialiased font-normal leading-none">Student Name</label>
                            <input type="text" name="student_name" id="student_name" value="{{ $tracker->student_name }}" class="mt-1 p-2 border rounded-md w-full" >
                        </div>
                        <div class="mb-4">
                            <label for="student_email_address" class="block font-sans text-sm antialiased font-normal leading-none">Student Email Address</label>
                            <input type="text" name="student_email_address" id="student_email_address" value="{{ $tracker->student_email_address }}" class="mt-1 p-2 border rounded-md w-full" >
                        </div>
                        <div class="mb-4">
                            <label for="visa_end_date" class="block font-sans text-sm antialiased font-normal leading-none">Visa End Date</label>
                            <input type="date" name="visa_end_date" id="visa_end_date" value="{{ $tracker->visa_end_date }}" class="mt-1 p-2 border rounded-md w-full" >
                        </div>
                        <div class="mb-4">
                            <label for="manager_name" class="block font-sans text-sm antialiased font-normal leading-none">Manager Name</label>
                            <input type="text" name="manager_name" id="manager_name" value="{{ $tracker->manager_name }}" class="mt-1 p-2 border rounded-md w-full" >
                        </div>
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none">Hours Worked</label>
                            <input type="int" name="hours_worked" id="hours_worked" value="{{ $tracker->worked_hours }}" class="mt-1 p-2 border rounded-md w-full" >
                        </div>
                        <div class="mb-4">
                            <label for="notes" class="block font-sans text-sm antialiased font-normal leading-none">Add Notes</label>
                            <input type="text" name="notes" id="notes" value="{{ $tracker->notes }}" class="mt-1 p-2 border rounded-md w-full"  >
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

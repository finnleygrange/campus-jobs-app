<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit Timesheet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('timesheet.update', $timesheet->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="worked_hours" class="block font-sans text-sm antialiased font-normal leading-none">Worked Hours</label>
                            <input type="int" name="worked_hours" id="worked_hours" value="{{ $timesheet->worked_hours }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Worked Hours" required>
                        </div>
                        <div class="mb-4">
                            <label for="date_worked" class="block font-sans text-sm antialiased font-normal leading-none">Date Worked</label>
                            <input type="date" name="date_worked" id="date_worked" value="{{ $timesheet->date_worked }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Date worked" required>
                        </div>
                        <div class="mb-4">
                            <label for="line_manager" class="block font-sans text-sm antialiased font-normal leading-none">Line Manager Name</label>
                            <input type="text" name="manager_id" id="manager_id" value="{{ $timesheet->manager_id }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Manager Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="submited_on" class="block font-sans text-sm antialiased font-normal leading-none">Submited on</label>
                            <input type="date" name="submited_on" id="submited_on" value="{{ $timesheet->created_at }}" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('timesheet.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

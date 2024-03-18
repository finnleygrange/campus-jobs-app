<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
                {{ __('Edit Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('reports.update', $report->id) }}" method="POST">
                    @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="report_Id" class="block font-sans text-sm antialiased font-normal leading-none">Report Id</label>
                            <input type="text" name="report_id" id="report_id" value="{{ $report->id }}" class="mt-1 p-2 border rounded-md w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="manager_name" class="block font-sans text-sm antialiased font-normal leading-none">Manager Name</label>
                            <input type="text" name="manager_name" id="manager_name" value="{{ $report->manager_name }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="job_title" class="block font-sans text-sm antialiased font-normal leading-none">Job Title</label>
                            <input type="text" name="job_title" id="job_title" value="{{ $report->job_title }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Job Title" required>
                        </div>
                        <div class="mb-4">
                            <label for="requested_hours" class="block font-sans text-sm antialiased font-normal leading-none">Hours Requested</label>
                            <input type="int" name="hours_requested" id="hours_requested" value="{{ $report->hours_requested }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Hours requested" required>
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

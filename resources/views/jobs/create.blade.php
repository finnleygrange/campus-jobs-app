<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('jobs.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="job_title" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Job Title</label>
                            <input type="text" name="job_title" id="job_title" class="mt-1 p-2 border rounded-md w-full" placeholder="Job title" required>
                        </div>
                        <div class="mb-4">
                            <label for="post_number" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Post Number</label>
                            <input type="text" name="post_number" id="post_number" class="mt-1 p-2 border rounded-md w-full" placeholder="Post number" required>
                        </div>
                        <div class="mb-4">
                            <label for="cost_code" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Cost Code</label>
                            <input type="text" name="cost_code" id="cost_code" class="mt-1 p-2 border rounded-md w-full" placeholder="Cost code" required>
                        </div>
                        <div class="mb-4">
                            <label for="pay_rate_to_oct_23" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Pay Rate To October 23rd</label>
                            <input type="text" name="pay_rate_to_oct_23" id="pay_rate_to_oct_23" class="mt-1 p-2 border rounded-md w-full" placeholder="Pay rate" required>
                        </div>
                        <div class="mb-4">
                            <label for="pay_rate_after_oct_23" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Pay Rate After October 23rd</label>
                            <input type="text" name="pay_rate_after_oct_23" id="pay_rate_after_oct_23" class="mt-1 p-2 border rounded-md w-full" placeholder="Pay rate" required>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('jobs.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

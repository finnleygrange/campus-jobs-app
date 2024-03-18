<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <p>{{ __("You're logged in!") }}</p>
                    <div class="mt-4 flex flex-col w-1/4 mx-auto">
                        <!-- admin controls -->
                        <a href="{{ route('students.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Manage Students
                        </a>
                        <a href="{{ route('managers.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Manage Managers
                        </a>
                        <a href="{{ route('jobs.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Manage Jobs
                        </a>

                        <!-- manager controls -->
                        <a href="{{ route('form.create') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                            Student Visa - Hours Tracker Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

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
                    
                    <!-- Conditional Content based on User Role -->
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <!-- Admin-specific Controls -->
                            <div class="mt-4 flex flex-col w-1/4 mx-auto">
                                <a href="{{ route('users.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Users
                                </a>
                                <a href="{{ route('students.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Students
                                </a>
                                <a href="{{ route('managers.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Managers
                                </a>
                                <a href="{{ route('line-managers.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Line Managers
                                </a>
                                <a href="{{ route('jobs.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Jobs
                                </a>
                                <!-- Add other Admin controls here -->
                            </div>
                        @elseif(auth()->user()->role === 'user')
                            <!-- User-specific Controls -->
                            <div class="mt-4 flex flex-col w-1/4 mx-auto">
                                <a href="{{ route('form.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Form
                                </a>
                                <!-- Add other User controls here -->
                                <!-- For example: -->
                                <!-- <a href="{{ route('profile.edit') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                    Edit Profile
                                </a> -->
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

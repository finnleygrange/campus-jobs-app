<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 p-2 border rounded-md w-full" placeholder="Full name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Email Address</label>
                            <input type="email" name="email" id="email" class="mt-1 p-2 border rounded-md w-full" placeholder="Email address" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Password</label>
                            <input type="password" name="password" id="password" class="mt-1 p-2 border rounded-md w-full" placeholder="Password" required>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 p-2 border rounded-md w-full" placeholder="Confirm password" required>
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Role</label>
                            <select name="role" id="role" class="mt-1 p-2 border rounded-md w-full">
                                <option value="user" selected>User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Create
                            </button>
                            <button class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                <a href="{{ route('users.index') }}" class="">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

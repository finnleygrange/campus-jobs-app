<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block font-sans text-sm antialiased font-normal leading-none">Name</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block font-sans text-sm antialiased font-normal leading-none">Email Address</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="mt-1 p-2 border rounded-md w-full" placeholder="Email address" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block font-sans text-sm antialiased font-normal leading-none">Password</label>
                            <input type="password" name="password" id="password" class="mt-1 p-2 border rounded-md w-full" placeholder="Leave blank to keep current password">
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block font-sans text-sm antialiased font-normal leading-none">Role</label>
                            <select name="role" id="role" class="mt-1 p-2 border rounded-md w-full" required>
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">
                                Save
                            </button>
                            <a href="{{ route('users.index') }}" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

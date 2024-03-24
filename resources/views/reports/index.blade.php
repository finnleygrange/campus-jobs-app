<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <form action="{{ route('reports.index') }}" method="GET" class="">
                        @csrf
                        <input type="week" name="week" id="week" value="{{ $selectedWeek }}" required>
                        <button type="submit"
                            class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded justify-end">
                            Show Report
                        </button>
                    </form> --}}
                    <div class="py-6">
                        <form action="{{ route('reports.create') }}" method="GET" class="">
                            @csrf
                            <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 my-2 rounded ">
                                Create New Report
                            </button>
                        </form>
                        <div class="py-6">
                            <form action="{{ route('reports.index') }}" method="GET" class="flex items-center">
                                @csrf
                                <label for="status" class="mr-2">Filter by Status:</label>
                                <select name="status" id="status" class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md py-2 px-4 mx-2">
                                    <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                                </select>
                                <button type="submit" class="bg-custom2 text-white font-bold py-2 px-4 ml-2 rounded">
                                    Apply Filter
                                </button>
                            </form>
                        </div>
                    </div>
                    <table class="w-full text-left table-auto min-w-max">
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    ID
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Student Number
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Student Name
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Week Commencing
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Assignment
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Hours Requested
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Line Manager Name
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Status
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    idk
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Actions
                                </p>
                            </th>
                        </tr>
                        @foreach ($reports as $report)
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->id }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->student->student_number }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->student->student_first_name }}
                                        {{ $report->student->student_last_name }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->week_commencing }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->assignment }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->hours_requested }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->line_manager->line_manager_name }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $report->status }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        <span>{{ $report->created_at->diffForHumans() }}</span>
                                    </p>
                                </td>
                                {{-- <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex">
                                        <a href="{{ route('reports.show', $report->id) }}"
                                            class="mr-2 text-blue-400 hover:text-blue-600 flex justify-items-center items-center">
                                            <span class="material-symbols-outlined">
                                                info
                                            </span>
                                        </a>
                                    </div>
                                </td> --}}
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex">
                                        <form action="{{ route('reports.approve', $report->id) }}" method="POST"
                                            class="mr-2">
                                            @csrf
                                            <button type="submit"
                                                class="text-green-600 hover:text-green-800 flex justify-items-center items-center">
                                                <span class="material-symbols-outlined">
                                                    check_circle
                                                </span>
                                            </button>
                                        </form>
                                        <!-- Close button -->
                                        <form action="{{ route('reports.close', $report->id) }}" method="POST"
                                            class="mr-2">
                                            @csrf
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-800 flex justify-items-center items-center">
                                                <span class="material-symbols-outlined">
                                                    close
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <script>
                                    document.getElementById('deleteForm{{ $report->id }}').addEventListener('submit', function(event) {
                                        var confirmation = confirm("Are you sure you want to delete?");
                                        if (!confirmation) {
                                            event.preventDefault();
                                        }
                                    });
                                </script>
                    </div>
                </td>
                </tr>
                @endforeach

                </table>
                @if ($reports->isEmpty())
                    <span>No reports found for the selected week.</span>
                @endif
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

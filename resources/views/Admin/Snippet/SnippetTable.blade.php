@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    @if (session()->has('success'))
        <div class="notification">
            Snippet Deleted!
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="notification">
            Failed to Delete!
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('publish'))
        <div class="notification">
            {{ session('publish') }}
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('reject'))
        <div class="notification">
            {{ session('reject') }}
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    <div class="overflow-x-auto">
        <div
            class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="flex justify-between">
                    <div class="w-full">
                        <input type="text" name="" id="searchQuery"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            style="width: 95%;" placeholder="Search...">
                        <label class="inline-flex items-center mt-3 mr-12">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" name="searchOption_1"
                                id="byTitle" value="byTitle"><span class="ml-2 text-gray-700">Title</span>
                        </label>
                        <label class="inline-flex items-center mt-3 mr-12">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" name="searchOption_2"
                                id="byCategory" value="byCategory"><span class="ml-2 text-gray-700">Category</span>
                        </label>
                        <label class="inline-flex items-center mt-3 mr-12">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" name="searchOption_3"
                                id="byStatus" value="byStatus"><span class="ml-2 text-gray-700">Status</span>
                        </label>
                    </div>
                    <a class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-2 text-base font-semibold text-white outline-none"
                        style="width: 10%;text-align:center;height:50px" href="{{ route('SnippetForm') }}">
                        Add snippet
                    </a>
                </div>
                <div class="bg-white shadow-md rounded my-6" id="ajax_search_result">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Publisher</th>
                                <th class="py-3 px-6 text-left">Title</th>
                                <th class="py-3 px-6 text-left">Category</th>
                                <th class="py-3 px-6 text-cemter">Status</th>
                                <th class="py-3 px-6 text-center">Created-At</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($snippets as $snippet)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center text-center">
                                            <p class="font-bold">{{ ++$iteration }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <p class="font-bold">{{ $snippet->user->name }}</p>
                                    </td>
                                    <td class="py-3 px-6 ">
                                        <p class="font-bold">{{ $snippet->title }}</p>
                                    </td>
                                    <td class="py-3 px-6 ">
                                        <p class="font-bold">{{ $snippet->category }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        @if ($snippet->status == 'pending')
                                            <p class="text-yellow-500 p-1 rounded-full text-sm font-bold">
                                                {{ $snippet->status }}</p>
                                        @endif

                                        @if ($snippet->status == 'published')
                                            <p class="text-green-500 p-1 rounded-full text-sm font-bold">
                                                {{ $snippet->status }}</p>
                                        @endif

                                        @if ($snippet->status == 'rejected')
                                            <p class="text-red-500 p-1 rounded-full text-sm font-bold">
                                                {{ $snippet->status }}</p>
                                        @endif

                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <p class="font-bold">{{ $snippet->created_at->diffForHumans() }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center gap-5">
                                            <div
                                                class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                                                <a href="{{ route('SnippetEdit', $snippet->id) }}">
                                                    <i class="ri-edit-fill" style="font-size: 30px;"></i> </a>
                                            </div>
                                            <div
                                                class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                                                <form method="POST" action="{{ route('SnippetDelete', $snippet->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <i class="ri-delete-bin-fill" style="font-size: 30px;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div
                                                class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                                                <a href="{{ route('SnippetCheck', $snippet->id) }}">
                                                    <i class="ri-eye-line" style="font-size: 30px"></i> </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <p class="pl-12"> {{ $snippets->links() }}
                </p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('input[type="checkbox"]').on('click', function() {
                if ($(this).prop('checked')) {
                    $('input[type="checkbox"]').not(this).prop('checked', false);
                }
            });

            $('#searchQuery').on('keyup', function() {
                var query = $(this).val().trim();
                var token = "{{ csrf_token() }}";

                if (query === '') {
                    return
                } else {
                    $.ajax({
                        url: "{{ route('search_Snippet') }}",
                        method: "GET",
                        headers: {
                            "X-CSRF-Token": token
                        },
                        data: {
                            _token: token,
                            query: query,
                            searchOption_1: $('#byTitle').is(':checked') ? 'byTitle' : '',
                            searchOption_2: $('#byCategory').is(':checked') ? 'byCategory' : '',
                            searchOption_3: $('#byStatus').is(':checked') ? 'byStatus' : '',

                        },
                        success: function(data) {
                            $('#ajax_search_result').html(data);
                        }
                    });
                }
            });
        });
    </script>
@endsection

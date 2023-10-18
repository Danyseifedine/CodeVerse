@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    @if (session()->has('success'))
        <div class="notification">
            Post Deleted!
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

    @if (session()->has('success1'))
        <div class="notification">
            Post Updated
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('error1'))
        <div class="notification">
            Failed To Update Post
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
                    <input type="text" name="" id="searchQuery"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                        style="width: 90%;" placeholder="Search...">

                    <a class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-3 text-base font-semibold text-white outline-none"
                        href="{{ route('BlogForm') }}">
                        Add Post
                    </a>

                </div>
                <div class="bg-white shadow-md rounded my-6" id="ajax_search_result">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Author</th>
                                <th class="py-3 px-6 text-left">Title</th>
                                <th class="py-3 px-6 text-center">Created-At</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($posts as $post)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p class="font-bold">{{ ++$iteration }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <p class="font-bold">{{ $post->user->name }}</p>
                                    </td>
                                    <td class="py-3 px-6 ">
                                        <p class="font-bold">{{ $post->title }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <p class="font-bold">{{ $post->created_at->diffForHumans() }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center gap-5">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                                                <a href="{{ route('EditBlog', $post->id) }}">
                                                    <i class="ri-edit-fill" style="font-size: 30px;"></i> </a>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 duration-500 hover:scale-110">
                                                <form method="POST" action="{{ route('DeleteBlogPost', $post->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <i class="ri-delete-bin-fill" style="font-size: 30px;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <p class="pl-12"> {{ $posts->links() }}
                </p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#searchQuery').on('keyup', function() {
                var query = $(this).val().trim();
                var token = "{{ csrf_token() }}";

                if (query === '') {
                    return
                } else {
                    $.ajax({
                        url: "{{ route('search_Blog') }}",
                        method: "GET",
                        headers: {
                            "X-CSRF-Token": token
                        },
                        data: {
                            _token: token,
                            query: query,
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

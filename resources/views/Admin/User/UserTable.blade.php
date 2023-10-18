@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    @if (session()->has('success'))
        <div class="notification">
            User deactivated!
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('success1'))
        <div class="notification">
            User activated!
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('success2'))
        <div class="notification">
            Info Updated!
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('fail'))
        <div class="notification">
            Failed To Update!
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    <div class="overflow-x-auto">
        <div
            class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <input type="text" id="searchQuery"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                    placeholder="Search...">
                <label class="inline-flex items-center mt-3 mr-12">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" name="searchOption_1"
                        id="byEmail" value="byEmail"><span class="ml-2 text-gray-700">Email</span>
                </label>
                <div class="bg-white shadow-md rounded my-6" id="ajax_search_result">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Created-At</th>
                                <th class="py-3 px-6 text-center">Role</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($users as $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <p>{{ ++$iteration }}</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <p class="font-bold">{{ $user->name }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <p class="font-bold">{{ $user->email }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <p class="font-bold">{{ $user->created_at->diffForHumans() }}</p>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-sm font-bold">
                                            @if ($user->role == '0')
                                                User
                                            @endif
                                            @if ($user->role == '1')
                                                Moderator
                                            @endif
                                            @if ($user->role == '2')
                                                Admin
                                            @endif
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-sm font-bold">
                                            @if ($user->status == 'active')
                                                active
                                            @else
                                                Inactive
                                            @endif
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center gap-5">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{ route('UserEdit', $user->id) }}">
                                                    <i class="ri-pencil-line" style="font-size: 30px"></i>
                                                </a>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <form method="POST" action="{{ route('updateUserStatus', $user->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        @if ($user->status == 'active')
                                                            <i class="ri-pause-circle-fill" style="font-size: 30px;"></i>
                                                        @else
                                                            <i class="ri-play-circle-fill" style="font-size: 30px;"></i>
                                                        @endif
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
                <p class="pl-12"> {{ $users->links() }}
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
                        url: "{{ route('search') }}",
                        method: "GET",
                        headers: {
                            "X-CSRF-Token": token
                        },
                        data: {
                            _token: token,
                            query: query,
                            searchOption_1: $('#byEmail').is(':checked') ? 'byEmail' : '',
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

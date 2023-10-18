@extends('layouts.master')

@section('title', 'Home')


@section('content')

    <link rel="stylesheet" href="{{ asset('./css/Home.css') }}">

    <div class="container mx-auto py-40 p-1">
        <h1 class="text-white text-3xl mb-5">All components</h1>
        <div class="all_component flex justify-between flex-col gap-2">
            <input type="text" name="" id="searchQuery"
                class="input block w-full px-5 py-3 rounded-md appearance-none" style="width: 100%;" placeholder="Search...">
            <div>
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
                        id="byType" value="byType"><span class="ml-2 text-gray-700">Status</span>
                </label>
            </div>
        </div>
        <div class="lg:grid grid-cols-1 lg:grid-cols-2 mb-10 gap-10 mt-10 mx-3 lg:mx-10 xl:mx-0" id="ajax_search_result">

            @foreach ($snippets as $snippet)
                <a href="{{ route('GetSnippet', ['name' => $snippet->user->name, 'id' => $snippet->id]) }}"
                    class="transform duration-500 hover:scale-105 mt-12 p-4">
                    <div class="col-span-1 outsideDiv py-3 px-0 cursor-pointer rounded-md">
                        <div class="lg:relative relaDiv changeColor lg:h-72 w-full px-3 rounded-md">
                            <div class="insideDiv lg:absolute lg:grid -top-5 -left-5 gap-3 w-full">

                                <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded"
                                    style="height: 300px !important;    background-image: url('{{ asset('Snippet_file/' . $snippet->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                                    class="h-full w-full object-fill rounded-md"> --}}
                                </div>
                                <div class="flex justify-between gap-2 mt-5 lg:mt-0">
                                    <div class="flex items-center text-white gap-2">
                                        @if ($snippet->user->image)
                                            <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded-full"
                                                style="height: 50px !important;width:50px;background-image: url('{{ asset('Profile_img/' . $snippet->user->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                                    class="h-full w-full object-fill rounded-md"> --}}
                                            </div>
                                        @else
                                            <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded-full"
                                                style="height: 40px !important;width:40px;background-image: url('{{ asset('images/default.jpg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                                class="h-full w-full object-fill rounded-md"> --}}
                                            </div>
                                        @endif
                                        <div>
                                            <p>{{ $snippet->user->name }}</p>
                                            <p class="text-gray-300 opacity-70">{{ $snippet->title }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-gray-300 opacity-70">{{ $snippet->created_at->diffForHumans() }}
                                        </div>
                                        <div class="text-white opacity-90 text-right">{{ $snippet->description }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach



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
                        url: "{{ route('search_compenent') }}",
                        method: "GET",
                        headers: {
                            "X-CSRF-Token": token
                        },
                        data: {
                            _token: token,
                            query: query,
                            searchOption_1: $('#byTitle').is(':checked') ? 'byTitle' : '',
                            searchOption_2: $('#byCategory').is(':checked') ? 'byCategory' : '',
                            searchOption_3: $('#byType').is(':checked') ? 'byType' : '',

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

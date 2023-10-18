@extends('layouts.master')

@section('title', 'Home')


@section('content')

    <link rel="stylesheet" href="{{ asset('./css/profile.css') }}">

    <div class="h-full">
        <div class="profile_card rounded-lg shadow-xl pb-8 mb-12">
            <div class="profile_bg w-full h-[320px]">
            </div>
            <div class="flex flex-col items-center -mt-20">
                @if ($user->image)
                    {{-- <img src="{{ asset('./Profile_img/' . $user->image) }}" class="profile_image border-4 rounded-full"
                        style="width: 150px;height:150px"> --}}
                    <div class="profile_image border-4 rounded-full"
                        style="background-image: url('{{ asset('./Profile_img/' . $user->image) }}');width: 150px;height:150px;background-position: center; background-size: cover; background-repeat: no-repeat;">
                    </div>
                @else
                    <img src="{{ asset('./images/default.jpg') }}" class="profile_image border-4 rounded-full"
                        style="width: 150px;height:150px">
                @endif
                <a href="{{ route('ProfileEdit') }}" class="edit_profile_btn"><i
                        class="ri-pencil-line hover:text-pink-500 mt-12"></i></a>
                <div class="flex items-center justify-center space-x-2 mt-2">
                    <p class="text-2xl">{{ $user->name }}</p>
                </div>
                <p class="text-gray-400">{{ $snippetCount }} component</p>
                <p class="text-sm text-gray-400">Member since {{ $user->created_at->diffForHumans() }}</p>
            </div>
        </div>

        <div class="col-span-1 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mb-20 gap-20 mt-20 mx-3 lg:mx-10 xl:mx-0"
            id="BigContainer">

            @foreach ($snippets as $snippet)
            <a href="{{ route('GetSnippet', ['name' => $user->name, 'id' => $snippet->id]) }}"
                    class="transform duration-500 hover:scale-105">
                    <div class="col-span-1 outsideDiv py-3 px-0 cursor-pointer rounded-md">
                        <div class="lg:relative relaDiv changeColor lg:h-72 w-full px-3 rounded-md">
                            <div class="insideDiv lg:absolute grid -top-5 -left-5 gap-3 w-full">
                                <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded"
                                    style="height: 300px !important;    background-image: url('{{ asset('Snippet_file/' . $snippet->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                    {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                                    class="h-full w-full object-fill rounded-md"> --}}
                                </div>
                                <div class="flex justify-between gap-2">
                                    <div class="grid">
                                        <h1 class="font-semibold">{{ $snippet->title }}</h1>
                                        <p class="nameOwned cursor-pointer text-sm opacity-80">{{ $snippet->description }}
                                        </p>
                                    </div>
                                    <div class="text-gray-300 opacity-70">{{ $snippet->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach



        </div>

    @endsection

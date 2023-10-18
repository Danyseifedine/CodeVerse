@extends('layouts.master')

@section('title', 'Home')


@section('content')

    {{-- links --}}
    <link rel="stylesheet" href="{{ asset('./css/Blog.css') }}">

    <div class="container mx-auto py-40 px-5 md:px-0">
        <h1 class="title text-xl mb-8 font-semibold animate-bounce">What's New!</h1>
        <div class="grid grid-cols-3 gap-5 md:gap-10 xl:gap-24">
            <div class="col-span-3 md:col-span-2">
                @foreach ($posts as $post)
                    <div class="col-span-3 md:col-span-2 grid grid-cols-2 gap-3">
                        <div class="blogs col-span-2 xl:col-span-2">
                            <div class="profileOwned flex items-center justify-between mb-5 w-full">
                                <div class="flex items-center gap-2">
                                    {{-- <img src="{{ asset('Profile_img/' . $post->user->image) }}" alt=""
                                        class="h-7 w-7 rounded-full cursor-pointer"> --}}
                                    <div class="rounded-full"
                                        style="background-image: url('{{ asset('Profile_img/' . $post->user->image) }}');width:40px;height:40px;background-position: center;
                                        background-repeat: no-repeat;
                                        background-size: cover;">
                                    </div>
                                    <p class="nameOwned cursor-pointer">{{ $post->user->name }}</p>
                                </div>
                                <svg class="cursor-pointer" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                    height="24" fill="none">
                                    <path fill="#fff"
                                        d="M16,7a2,2,0,1,1,2-2A2,2,0,0,1,16,7Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z" />
                                    <path fill="#fff"
                                        d="M16,18a2,2,0,1,1,2-2A2,2,0,0,1,16,18Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z" />
                                    <path fill="#fff"
                                        d="M16,29a2,2,0,1,1,2-2A2,2,0,0,1,16,29Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z" />
                                </svg>
                            </div>
                            <div class="blogsContent h-96 flex justify-center items-center rounded-xl cursor-pointer"
                                style="background: url('{{ asset('blog_img/' . $post->image) }}');">

                            </div>
                            <div class="my-2">
                                <div class="text-lg w-max grid">
                                    <p class="font-bold cursor-pointer hover:underline w-fit">{{ $post->title }}</p>
                                    <span class="text-xs opacity-50">{{ $post->created_at->DiffForHumans() }}</span>
                                </div>
                                <p class="text-sm text-justify py-4 opacity-90">
                                    {{ $post->description }}
                                </p>
                            </div>
                        </div>
                        <hr class="col-span-2 my-5">

                    </div>
                @endforeach
            </div>


            <div class="col-span-3 md:col-span-1 grid grid-cols-1 gap-8 md:h-0" style="">
                <div class="aboutUs p-5 shadow-xl rounded-md">
                    <p class="title pb-2 text-lg">Our Vision</p>
                    <p class="content text-justify text-sm opacity-90" style="line-height: 30px;">
                        Our vision is to create a supportive and inclusive community that fosters collaboration and
                        innovation. We believe that by freely sharing knowledge and resources, we can collectively elevate
                        the quality of web development projects worldwide.
                    </p>
                </div>
                <div class="categories p-5 shadow-xl rounded-md">
                    <p class="title pb-8 font-medium">Categories</p>
                    <ul class="grid gap-5">
                        @php
                            $colors = ['rgb(89, 164, 255)', 'rgb(0, 85, 255)', 'rgb(219, 31, 106)', '#ab00ab'];
                        @endphp
                        @foreach ($admins as $key => $admin)
                            @php
                                $colorIndex = $key % count($colors);
                                $chosenColor = $colors[$colorIndex];
                            @endphp
                            <a href="#" class="flex items-center justify-between cursor-pointer">
                                <div class="flex items-center gap-2">
                                    <span class="inline-block h-3 w-3 rounded-full"
                                        style="background-color: {{ $chosenColor }};"></span>
                                    <p>{{ $admin->name }}</p>
                                </div>
                                <p>{{ $admin->blog_count }}</p>
                            </a>
                            @if (!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>


        </div>
    </div>

@endsection

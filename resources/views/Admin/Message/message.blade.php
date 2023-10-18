@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    <main class="flex items-center justify-center  rounded-3xl" style="width:100%;height:50vh">

        <section class="w-6/12 px-4 flex flex-col bg-white rounded-r-3xl">
            <div class="flex justify-between items-center h-48 border-b-2 mb-8">
                <div class="flex space-x-4 items-center">
                    <div class="h-12 w-12 rounded-full overflow-hidden">
                        @if ($message->user->image)
                            {{-- <img src="{{ asset('./Profile_img/' . $user->image) }}" class="profile_image border-4 rounded-full"
                            style="width: 150px;height:150px"> --}}
                            <div class="profile_image border-4 rounded-full"
                                style="background-image: url('{{ asset('./Profile_img/' . $message->user->image) }}');width: 50px;height:50px;background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                        @else
                            <img src="{{ asset('./images/default.jpg') }}" class="profile_image border-4 rounded-full">
                        @endif
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-lg">{{ $message->user->name }}</h3>
                        <p class="text-light text-gray-400">{{ $message->user->email }}</p>
                        <p>Sent : {{ $message->created_at->diffForHumans() }}</p>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <form method="POST" action="{{ route('MessageDelete', $message->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="ri-delete-bin-fill" style="font-size: 20px;"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <h1 class="font-bold text-2xl">{{ $message->subject }}</h1>
                <article class="mt-8 text-gray-500 leading-7 tracking-wider">
                    {{ $message->message }}
                </article>
            </section>
        </section>
    </main>
@endsection

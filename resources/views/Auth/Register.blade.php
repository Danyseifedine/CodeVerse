@extends('layouts.master')

@section('title', 'Home')


@section('content')

    {{-- links --}}
    <link rel="stylesheet" href="{{ asset('./css/Auth.css') }}">


    <div class="flex flex-wrap min-h-screen w-full content-center justify-center py-10">

        <!-- Login component -->
        <div class="flex shadow-md">
            <!-- Login form -->
            <div class="Auth_card flex flex-wrap content-center justify-center rounded-l-md"
                style="width: 24rem; height: 32rem;">
                <div class="w-72">
                    <!-- Heading -->
                    <h1 class="text-xl font-semibold">Welcome back</h1>
                    <small class="text-gray-400">Please enter your details</small>

                    <!-- Form -->
                    <form action="{{ route('register') }}" method="POST" class="mt-4">

                        @csrf
                        @method('post')

                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Name</label>
                            <input type="text" placeholder="Enter your name" name="name" class="Auth_input"
                                value="{{ old('name') }}" />
                            @error('name')
                                <p class="text-red-500 font-semibold text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Email</label>
                            <input type="email" placeholder="Enter your email" name="email" class="Auth_input"
                                value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-red-500 font-semibold text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Password</label>
                            <input type="password" placeholder="*****" name="password" class="Auth_input" />
                            @error('password')
                                <p class="text-red-500 font-semibold text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="submit"
                                class="auth_btn mb-1.5 block w-full text-center text-white px-2 py-1.5 rounded-md">Sign
                                in</button>
                        </div>
                    </form>

                    <!-- Footer -->
                    <div class="text-center">
                        <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
                        <a href="{{ route('LoginPage') }}" class="auth_change text-xs">Sign up</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

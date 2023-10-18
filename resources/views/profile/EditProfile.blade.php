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
                <a href="" class="edit_profile_btn"><i class="ri-pencil-line hover:text-pink-500 mt-12"></i></a>
                <div class="flex items-center justify-center space-x-2 mt-2">
                    <p class="text-2xl">{{ $user->name }}</p>
                </div>
                <p class="text-gray-400">20 Components</p>
                <p class="text-sm text-gray-400">Member since {{ $user->created_at->diffForHumans() }}</p>
                <a href="{{ route('logout') }}" class="p-2 pl-14 pr-14 mt-5 bg-[#ab00ab] rounded" >Logout</a>

            </div>
        </div>
        @if (session()->has('password_changed'))
            <div class="notification">
                {{ session('password_changed') }}
                <div class="notification__progress">
                    <div class="notification__progress-bar"></div>
                </div>
            </div>
        @endif
        @if (session()->has('update_profile'))
            <div class="notification">
                {{ session('update_profile') }}
                <div class="notification__progress">
                    <div class="notification__progress-bar"></div>
                </div>
            </div>
        @endif
        <div class="flex items-center justify-center p-3 lg:p-12">
            <div class="mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-5">
                <form action="{{ route('UpdateProfile') }}" class="edit_profile_ col-span-1 p-4" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('post')

                    <div class="mb-5">
                        <label for="image" class="mb-6 block items-center flex-wrap text-base font-medium">
                            <p>Profile image</p>
                            <p class="text-sm opacity-70">If you save the form without selecting a new image,
                                the current profile image will be removed.</p>
                        </label>
                        <div>
                            <label for="image"
                                class="input_profile rounded-md bg-white py-4 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                Upload image
                                <input type="file" name="image" id="image"
                                    class="absolute w-full h-full rounded-md hidden">
                            </label>
                        </div>
                        @error('image')
                            <p class="text-red-500 text-sm pt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="mb-3 block text-base font-medium">
                            Full Name
                        </label>
                        <input type="text" name="name" id="name" placeholder="Full Name"
                            class="input_profile w-full rounded-md bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            value="{{ $user->name }}" />
                        @error('name')
                            <p class="text-red-500 text-sm pt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button
                            class="hover:shadow-form rounded-md bg-[#ab00ab] py-3 px-8 text-base font-semibold text-white outline-none">
                            Save
                        </button>
                    </div>
                </form>

                <form action="{{ route('ChangePassword') }}" method="POST" class="edit_profile_ p-4">

                    @csrf
                    @method('post')

                    <div class="mb-5">
                        <label for="old_password" class="mb-3 block text-base font-medium">
                            Old password
                        </label>
                        <input type="password" name="old_password" id="old_password" placeholder="Enter your old password"
                            class="input_profile w-full rounded-md bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @error('old_password')
                            <p class="text-red-500 text-sm pt-2">{{ $message }}</p>
                        @enderror
                        @if (session()->has('oldPass'))
                            <p class="text-red-500 text-sm pt-2 pb-2">{{ session('oldPass') }} </p>
                        @endif
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                        <div class="">
                            <label for="new_password" class="mb-3 block text-base font-medium">
                                New password
                            </label>
                            <input type="password" name="new_password" id="new_password"
                                placeholder="Enter your new password"
                                class="input_profile w-full rounded-md  bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('new_password')
                                <p class="text-red-500 text-sm pt-2 mb-2">{{ $message }}</p>
                            @enderror
                            @if (session()->has('passwordMismatch'))
                                <p class="text-red-500 text-sm pt-2 pb-2">{{ session('passwordMismatch') }} </p>
                            @endif
                        </div>
                        <div class="mb-5">
                            <label for="confirm_password" class="mb-3 block text-base font-medium">
                                Confirm password
                            </label>
                            <input type="password" name="confirm_password" id="confirm_password"
                                placeholder="Confirm your new password"
                                class="input_profile w-full rounded-md  bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('confirm_password')
                                <p class="text-red-500 text-sm pt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button
                            class="hover:shadow-form rounded-md bg-[#ab00ab] py-3 px-8 text-base font-semibold text-white outline-none">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection

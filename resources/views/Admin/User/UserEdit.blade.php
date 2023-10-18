@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    <div class="flex items-center justify-center p-12">
        <div class="" style="width: 70%;">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ $user->name }}" />
                </div>

                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email
                    </label>
                    <input type="text" name="email" id="email" placeholder="Email"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ $user->email }}" />
                </div>

                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Role
                    </label>
                    <input type="text" name="role" id="role" placeholder="Role"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ $user->role }}" />
                </div>

                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </form>
        @endsection

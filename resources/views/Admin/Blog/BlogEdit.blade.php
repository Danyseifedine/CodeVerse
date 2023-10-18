@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    <div class="flex items-center justify-center p-12">

        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form class="py-6 px-9" action="{{ route('EditBlogPost', $post->id) }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('POST')

                <div class="mb-5">
                    <label for="Ttile" class="mb-3 block text-base font-medium text-[#07074D]">
                        Post Title:
                    </label>
                    <input type="text" name="title" id="Title" placeholder="Enter you post's Title"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ $post->title }}" />

                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                        Post Description:
                    </label>
                    <input type="text" name="description" id="description" placeholder="What are you thinking about?"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ $post->description }}" />

                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload Image
                    </label>

                    <div class="mb-8">
                        <input type="file" name="image" id="image" class="sr-only" />
                        <label for="image"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                    Drop Image here
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    Or
                                </span>
                                <span
                                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                    Browse
                                </span>
                            </div>
                        </label>
                    </div>

                </div>

                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                        type="submit">
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

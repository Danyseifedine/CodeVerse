@extends('admin.layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/Admin/admin.css') }}">

    <div class="flex items-center justify-center p-12">

        @if (session()->has('success'))
            <div class="notification">
                {{ session('success') }}
                <div class="notification__progress">
                    <div class="notification__progress-bar"></div>
                </div>
            </div>
        @endif

        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form class="py-6 px-9" method="post" action="{{ route('UpdateSnippet', $snippet->id) }}"
                enctype="multipart/form-data">

                @csrf
                @method('POST')

                <div class="mb-5">
                    <label for="Ttile" class="mb-3 block text-base font-medium text-[#07074D]">
                        Snippet Title:
                    </label>
                    <input type="text" name="snippet_title" id="Title" placeholder="Enter you post's Title"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ $snippet->title }}" />

                    @error('snippet_title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                        Snippet Description:
                    </label>
                    <select name="snippet_type"
                        id=""class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option value="{{ $snippet->description }}" selected>{{ $snippet->description }}</option>
                        <option value="Alert">Alert</option>
                        <option value="Button">Button</option>
                        <option value="Card">Card</option>
                        <option value="Carousel">Carousel</option>
                        <option value="Checkbox">Checkbox</option>
                        <option value="Dropdown">Dropdown</option>
                        <option value="Footer">Footer</option>
                        <option value="Form">Form</option>
                        <option value="Header">Header</option>
                        <option value="Input">Input</option>
                        <option value="Menu">Menu</option>
                        <option value="Modal">Modal</option>
                        <option value="Spinner">Spinner</option>
                        <option value="Pricing">Pricing</option>
                        <option value="sidebar">Sidebar</option>
                        <option value="Switch">Switch</option>
                        <option value="Table">Table</option>
                        <option value="Timeline">Timeline</option>
                        <option value="Tooltip">Tooltip</option>
                        <option value="Pagination">Pagination</option>
                        <option value="Icon">Icon</option>
                        <option value="Dashboard">Dashboard</option>
                    </select>
                    @error('snippet_type')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload Snippet Image
                    </label>

                    <div class="mb-8">
                        <input type="file" name="snippet_image" id="image" class="sr-only" />
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
                        @error('snippet_image')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <textarea name="snippet_code" id="" cols="30" rows="10"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            placeholder="Enter your snippet code here...">{{ $snippet->code }}</textarea>
                        @error('snippet_code')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <select name="snippet_category"
                            id=""class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <option value="{{ $snippet->category }}" selected>{{ $snippet->category }}</option>
                            <option value="Tailwind">Tailwind</option>
                            <option value="Bootstrap">Bootstrap</option>
                            <option value="CSS">CSS</option>
                            <option value="Sass">Sass</option>
                            <option value="React">React</option>
                        </select>
                        @error('snippet_category')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                        type="submit">
                        Update Snippet
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

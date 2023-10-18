@extends('layouts.master')

@section('title', 'Home')



@section('content')

    <link rel="stylesheet" href="{{ asset('./css/createSnippet.css') }}">

    @if (session()->has('sent'))
        <div class="notification">
            {{ session('sent') }}
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif
    <div class="container mx-auto py-40">
        <form action="{{ route('insertSnippet') }}" method="POST" class="grid gap-28" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="w-full grid grid-cols-2 text-white gap-8 px-5 md:px-10">
                <div class="hr col-span-2 flex items-center">
                    <div class="w-1/6" style="height: 2px"></div>
                    {{-- <div class="w-1/6" style="height: 20px;width:2px"></div> --}}
                    <span class="w-36 text-center">step 1</span>
                    {{-- <div class="w-1/6" style="height: 20px;width:2px"></div> --}}
                    <div class="w-5/6 rounded-full" style="height: 2px"></div>
                </div>
                <div class="attention col-span-2 flex gap-2 items-center">
                    <svg viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" />
                        <path clip-rule="evenodd"
                            d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z"
                            fill-rule="evenodd" />
                        <path clip-rule="evenodd"
                            d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                            fill-rule="evenodd" />
                    </svg>
                    <p class="text-xs md:text-sm">Enter the title of your snippet and a description .</p>
                </div>
                <div class="col-span-2 md:col-span-1 grid gap-3 h-fit">
                    <label for="title">Title</label>
                    <input type="text" name="snippet_title" id="title" value="{{ old('snippet_title') }}"
                        placeholder="tilte" class="text-white px-5 py-3 rounded-md">
                    @error('snippet_title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-2 md:col-span-1 grid gap-3 h-fit">
                    <label for="description">Type</label>
                    <select name="snippet_type" id=""class="block w-full px-5 py-3 rounded-md appearance-none">
                        <option value="" selected>Select a type for you snippet</option>
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
            </div>
            <div class="w-full grid grid-cols-2 text-white gap-8 px-5 md:px-10">
                <div class="hr col-span-2 flex items-center">
                    <div class="w-1/2" style="height: 2px"></div>
                    <span class="w-36 text-center">step 2</span>
                    <div class="w-full" style="height: 2px"></div>
                </div>
                <div class="attention col-span-2 flex gap-2 items-center">
                    <svg viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" />
                        <path clip-rule="evenodd"
                            d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z"
                            fill-rule="evenodd" />
                        <path clip-rule="evenodd"
                            d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                            fill-rule="evenodd" />
                    </svg>
                    <p class="text-xs md:text-sm">Provide an image for your code output and select the category for your
                        code.</p>
                </div>
                <div class="col-span-2 md:col-span-1 grid gap-3 h-fit">
                    <label for="image">Image</label>
                    <label for="image" class="imgInput relative px-5 py-3 rounded-md">
                        Upload image
                        <input type="file" name="snippet_image" id="image"
                            class="absolute w-full h-full rounded-md hidden">
                    </label>
                    @error('snippet_image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-2 md:col-span-1 grid gap-3 h-fit">
                    <label for="description">Category</label>
                    <select name="snippet_category" class="block w-full px-5 py-3 rounded-md appearance-none">
                        <option class="catOptions" value="" selected>Category...</option>
                        <option value="Tailwind" class="catOptions py-1">Tailwind</option>
                        <option value="Css" class="catOptions py-1">Css</option>
                        <option value="bootstrap" class="catOptions py-1">Bootstrap</option>
                        <option value="react" class="catOptions py-1">React</option>
                    </select>
                    @error('snippet_category')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full grid grid-cols-2 text-white gap-8 px-5 md:px-10">
                <div class="hr col-span-2 flex items-center">
                    <div class="w-full" style="height: 2px"></div>
                    <span class="w-36 text-center">step 3</span>
                    <div class="w-1/2" style="height: 2px"></div>
                </div>
                <div class="attention col-span-2 flex gap-2 items-center">
                    <svg viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" />
                        <path clip-rule="evenodd"
                            d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z"
                            fill-rule="evenodd" />
                        <path clip-rule="evenodd"
                            d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                            fill-rule="evenodd" />
                    </svg>
                    <p class="text-xs md:text-sm">Enter all codes of your snippet here.</p>
                </div>
                <div class="col-span-2 grid gap-3 w-full">
                    <label for="code">Your Code</label>
                    <textarea name="snippet_code" id="code" rows="15" class="block py-3 px-5 w-full rounded-md"
                        placeholder="Your Code ..."></textarea>
                    @error('snippet_code')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full grid grid-cols-2 text-white gap-8 px-5 md:px-10">
                <div class="hr col-span-2 flex items-center">
                    <div class="w-full" style="height: 2px"></div>
                    <span class="w-36 text-center">step 4</span>
                    <div class="w-1/6" style="height: 2px"></div>
                </div>
                <div class="attention col-span-2 flex gap-2 items-center">
                    <svg viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" />
                        <path clip-rule="evenodd"
                            d="M12 6C12.5523 6 13 6.44772 13 7V13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13V7C11 6.44772 11.4477 6 12 6Z"
                            fill-rule="evenodd" />
                        <path clip-rule="evenodd"
                            d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                            fill-rule="evenodd" />
                    </svg>
                    <p class="text-xs md:text-sm">Provide all the necessary data and wait for it to be accepted. You can
                        check if it has been accepted in your profile.</p>
                </div>
                <div class="col-span-2 grid gap-3">
                    <input type="submit" value="Send" class="submit w-36 rounded-md py-2">
                </div>
            </div>
        </form>
    </div>

@endsection

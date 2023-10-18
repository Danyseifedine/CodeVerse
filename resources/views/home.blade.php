@extends('layouts.master')

@section('title','Home')


@section('content')

    {{-- links --}}
    <link rel="stylesheet" href="{{asset('./css/Home.css')}}">


    <!--=============== Home section 1 ===============-->

    <div class="section-1 container flex justify-between items-center h-screen w-full gap-12 p-5">

        @if (session()->has('create'))
        <div class="notification">
            Account created! 👋
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('welcome'))
        <div class="notification">
            Welcome back {{$user->name}} ! &#128525;
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('out'))
        <div class="notification">
            You logged out! &#128532;
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @if (session()->has('message_sent'))
        <div class="notification">
            message sent! &#x1F48C;
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @endif

    @error('subject')
        <div class="notification">
        {{$message}} &#128531;
            <div class="notification__progress">
            <div class="notification__progress-bar"></div>
                </div>
        </div>
    @enderror

    @error('messaage')
    <div class="notification">
        {{$message}} &#128531;
            <div class="notification__progress">
                <div class="notification__progress-bar"></div>
            </div>
        </div>
    @enderror

        <div class="first-section-1">
            <h1 class="title-section-1"> {{$data->with_Title_section_1}}
                <span class="magic">
                    <a href="{{ route('page') }}">go to page</a>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                            <path
                                d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                            <path
                                d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-star">
                        <svg viewBox="0 0 512 512">
                            <path
                                d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" />
                        </svg>
                    </span>
                    <span class="magic-text">{{$data->First_Title_section_1}}</span>
                </span>
                </span>

            </h1>
            <h1 class="title-section-1">{{$data->Second_Title_section_1}}</h1>
            <h1 class="title-section-1">{{$data->third_Title_section_1}}</h1>
            <h2 class="text-section-1 pt-2 text-justify" style="line-height: 30px;font-size:20px">{{$data->Description_Title_section_1}}</h2>

            <button class="cssbuttons-io mt-12 mb-12">
                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor"
                            d="M24 12l-5.657 5.657-1.414-1.414L21.172 12l-4.243-4.243 1.414-1.414L24 12zM2.828 12l4.243 4.243-1.414 1.414L0 12l5.657-5.657L7.07 7.757 2.828 12zm6.96 9H7.66l6.552-18h2.128L9.788 21z">
                        </path>
                    </svg>View Components</span>
            </button>
        </div>
        <div class="grid grid-cols-2 gap-5 items-center justify-center">
            <div class="terminal col-span-2">
                <div class="terminal-all w-full shadow-2xl subpixel-antialiased rounded h-64 p-2">
                    <div class="terminal-category items-center h-6 rounded-t text-black" id="headerTerminal">
                        <div class="flex gap-2 items-center justify-between" id="terminaltitle">
                            <div class="flex gap-2 items-center">
                                <i class="icon-terminal ri-settings-5-line text-xl"></i>
                                <p class="text-white">HTML</p>
                            </div>
                            <div>
                                <i class="icon-terminal text-xl ri-pencil-line"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-1 pt-5 h-auto text-green-200 font-mono text-xs" id="console">
                        <p class="pb-1 font-bold"><span class="text-blue-400">
                                <</span><span class="text-blue-400">!</span><span>DOCTYPE</span> <span class="text-yellow-500">html</span><span class="text-blue-400">></span></p>
                                <p class="pb-1 font-bold"><span class="text-blue-400">
                                    <</span><span>html</span> <span class="text-yellow-500">lang</span><span>=</span><span class="text-orange-500">"en"</span><span class="text-blue-400">></span></p>
                                <p class="pb-1 font-bold ml-5"><span class="text-blue-400">
                                    <</span><span>meta</span> <span class="text-yellow-500">charset</span><span>=</span><span class="text-orange-500">"UTF-8"</span><span class="text-blue-400">></span></p>
                                <p class="pb-1 font-bold ml-5"><span class="text-blue-400">
                                    <</span><span>link</span> <span class="text-yellow-500">rel</span><span>=</span><span class="text-orange-500">"stylesheet"</span> <span class="text-yellow-500">href</span><span>=</span><span class="text-orange-500">"./css/styles.css"</span><span class="text-blue-400">></span></p>
                                    <p class="pb-1 font-bold ml-5"><span class="text-blue-400">
                                        <</span><span>body</span><span class="text-blue-400">></span></p>
                                    <p class="pb-1 font-bold ml-10"><span class="text-blue-400">
                                        <</span><span>p</span><span class="text-blue-400">></span> <span class="text-white typed-2">hello world</span> <span class="text-blue-400"><</span><span class="text-blue-400">/</span><span>p</span><span class="text-blue-400">></span></p>
                                    <p class="pb-1 font-bold ml-5"><span class="text-blue-400">
                                        <</span><span class="text-blue-400">/</span><span>body</span><span class="text-blue-400">></span></p>
                                    <p class="pb-1 font-bold ml-5"><span class="text-blue-400">
                                        <</span><span>script</span> <span class="text-yellow-500">src</span><span>=</span><span class="text-orange-500">"./js/app.js"</span><span class="text-blue-400">></span><span class="text-blue-400"><</span><span class="text-blue-400">/</span><span>script</span><span class="text-blue-400">></span></p>
                                    <p class="pb-1 font-bold"><span class="text-blue-400">
                                        <</span><span class="text-blue-400">/</span><span>html</span><span class="text-blue-400">></span></p>
                                </div>
                </div>
            </div>
            <div class="terminal col-span-2 lg:col-span-1 md:col-span-1 sm:col-span-1">
                <div class="terminal-all w-full shadow-2xl subpixel-antialiased rounded h-64 p-2">
                    <div class="terminal-category items-center h-6 rounded-t text-black" id="headerTerminal">
                        <div class="flex gap-2 items-center justify-between" id="terminaltitle">
                            <div class="flex gap-2 items-center">
                                <i class="icon-terminal ri-settings-5-line text-xl"></i>
                                <p class="text-white">JS</p>
                            </div>
                            <div>
                                <i class="icon-terminal text-xl ri-pencil-line"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-1 pt-5 h-auto text-green-200 font-mono text-xs" id="console">
                        <p class="pb-1 font-bold"><span class="text-yellow-500">let</span> <span class="text-pink-500">btn </span><span class="text-white">=</span> <span class="text-pink-500">document</span><span class="text-white">.</span><span class="text-blue-400">getElementById</span><span class="text-blue-400">(</span><span class="text-orange-500">'btn'</span><span class="text-blue-400">)</span></p>
                        <p class="pb-1 font-bold"><span class="text-yellow-500">function</span> <span class="text-blue-400">message</span><span class="text-blue-400">(</span><span class="italic text-pink-500">username</span><span class="text-blue-400">)</span><span class="text-blue-400">{</span></p>
                        <p class="pb-1 ml-5 font-bold"><span class="text-yellow-500">let</span> <span class="text-pink-500">msg</span> <span class="text-white">=</span> <span class="text-orange-500">"welcome"</span> <span class="text-yellow-500">+</span> <span class="text-pink-500">username</span></p>
                        <p class="pb-1 ml-5 font-bold"><span class="text-blue-400">Alert</span><span class="text-blue-400">(</span><span class="text-pink-500">msg</span><span class="text-blue-400">)</span></p>
                        <p class="pb-1 font-bold"><span class="text-blue-400">}</span></p>
                        <p class="pb-1 font-bold"><span class="text-pink-500">btn.</span><span class="text-blue-400">onclick</span> <span class="text-white">=</span> <span class="text-blue-400">()</span> <span class="text-yellow-500">=></span> <span class="text-blue-400">{</span></p>
                        <p class="pb-1 font-bold"><span class="text-gray-400">// enter your name </span></p>
                        <p class="pb-1 font-bold"><span class="text-blue-400">CodeVerse</span><span class="text-blue-400">(</span> <span><input type="text" id="input_js" class="input_js"> </span><span class="text-blue-400">)</span></p>
                        <div class="flex justify-between items-center"><p class="pb-1 font-bold"><span class="text-blue-400">}</span></p> <button class="p-1 mb-1  font-bold bg-purple-500 hover:bg-purple-600 rounded text-white font-bold" id="btn_js">run code</button></div>

                    </div>
                </div>
            </div>
            <div class="terminal col-span-2 lg:col-span-1 md:col-span-1 sm:col-span-1">
                <div class="terminal-all w-full shadow-2xl subpixel-antialiased rounded h-64 p-2">
                    <div class="terminal-category items-center h-6 rounded-t text-black" id="headerTerminal">
                        <div class="flex gap-2 items-center justify-between" id="terminaltitle">
                            <div class="flex gap-2 items-center">
                                <i class="icon-terminal ri-settings-5-line text-xl"></i>
                                <p class="text-white">CSS</p>
                            </div>
                            <div>
                                <i class="icon-terminal text-xl ri-pencil-line"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-1 pt-1 h-auto  text-green-200 font-mono text-xs" id="console">
                        <p class="pb-1 font-bold">* {</p>
                        <p class="pb-1 font-bold ml-5">box-sizing: <span class="text-red-500">border-box</span>;</p>
                        <p class="pb-1 font-bold ml-5">padding: <span class="text-orange-300">0</span>;</p>
                        <p class="pb-1 font-bold ml-5">margin: <span class="text-orange-300">0</span>;</p>
                        <p class="pb-1 font-bold">}</p>
                        <p class="pb-1 font-bold">body {</p>
                        <p class="pb-1 font-bold ml-5">height: <span class="text-orange-300">100%</span>;</p>
                        <p class="pb-1 font-bold ml-5">display: <span class="text-red-500">flex</span>;</p>
                        <p class="pb-1 font-bold ml-5">justify-content: <span class=" text-red-500 typed"></span>;</p>
                        <p class="pb-1 font-bold"> }</p>
                        <!-- <span><span class=" span-1 typed"></span></span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============== Home section 2 ===============-->

    <section class="section-2 pb-12">
        <div class="text-white">
            <div class="content-section-2 lg:container mx-auto flex flex-col items-start lg:flex-row mt-64 lg:my-10">
                <div class="flex flex-col w-full lg:sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                    <p class="ml-2 font-bold uppercase tracking-loose text-2xl" style="color: #cb00cb;">SPECIALS</p>
                    <p class="title-section-2 text-5xl leading-normal md:leading-relaxed mb-2">{{$data->Title_section_2}}</p>
                    <p class="text-section-2 mb-4">{{$data->Description_Title_section_2}}</p>
                </div>
                <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                    <div class="container mx-auto w-full h-full">
                        <div class="relative wrap overflow-hidden pt-12 p-2 sm:p-10 h-full">
                            <div class="border-2-2 border-yellow-555 absolute h-full border"
                                style="right: 50%; border: 2px solid #cb00cb;; border-radius: 1%;"></div>
                            <div class="border-2-2 border-yellow-555 absolute h-full border"
                                style="left: 50%; border: 2px solid #cb00cb; border-radius: 1%;"></div>
                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-xl font-bold" style="color: #cb00cb;">-1-</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">{{$data->Special_Title_1_section_2}}</h4>
                                    <p class="leading-snug text-section-2">
                                        {{$data->Special_text_1_section_2}}
                                    </div>
                            </div>
                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1  w-5/12 px-1 py-4 text-left">
                                    <p class="mb-3 text-xl font-bold" style="color: #cb00cb;">-2-</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">{{$data->Special_Title_2_section_2}}</h4>
                                    <p class="leading-snug text-section-2">
                                        {{$data->Special_text_2_section_2}}
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                                <div class="order-1 w-5/12"></div>
                                <div class="order-1 w-5/12 px-1 py-4 text-right">
                                    <p class="mb-3 text-xl font-bold" style="color: #cb00cb;">-3-</p>
                                    <h4 class="mb-3 font-bold text-lg md:text-2xl">{{$data->Special_Title_3_section_2}}</h4>
                                    <p class="leading-snug text-section-2">
                                        {{$data->Special_text_3_section_2}}
                                    </p>
                                </div>
                            </div>

                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                <div class="order-1 w-5/12"></div>

                                <div class="order-1  w-5/12 px-1 py-4">
                                    <p class="mb-3 text-xl font-bold" style="color: #cb00cb;">-4-</p>
                                    <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">{{$data->Special_Title_4_section_2}}</h4>
                                    <p class="leading-snug text-section-2">
                                        {{$data->Special_text_4_section_2}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img class=" section-img-2 mx-auto -mt-36 md:-mt-36"
                        src="{{ asset($data->Special_image_section_2) }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============== Home section 3 ===============-->

    <section class="section-3 flex lg:m-44 items-center justify-center text-white mt-64">
        <div class="section-grid-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 text-center gap-5">
        <a href="" class="transform duration-500 hover:scale-105">
            <div class="card shadow">
                <img src="{{asset($data->box_1_image_section_3)}}" alt="">
                <p>{{$data->box_1_text_section_3}}</p>
            </div>
        </a>
        <a href="" class="transform duration-500 hover:scale-105">
            <div class="card">
                <img src="{{asset($data->box_2_image_section_3)}}" alt="">
                <p>{{$data->box_2_text_section_3}}</p>
            </div>
        </a>
        <a href="" class="transform duration-500 hover:scale-105">
            <div class="card">
                <img src="{{asset($data->box_3_image_section_3)}}" alt="">
                <p>{{$data->box_3_text_section_3}}</p>
            </div>
        </a>
        <a href="" class="transform duration-500 hover:scale-105">
            <div class="card">
                <img src="{{asset($data->box_4_image_section_3)}}" alt="">
                <p>{{$data->box_4_text_section_3}}</p>
            </div>
        </a>
        <a href="" class="transform duration-500 hover:scale-105">
            <div class="card">
                <img src="{{asset($data->box_5_image_section_3)}}" alt="">
                <p>{{$data->box_5_text_section_3}}</p>
            </div>
        </a>
        </div>
    </section>


    <!--=============== Contact  ===============-->
    <div  id="web3forms__widget" x-data="{ open: true }"  x-init="() => setTimeout(() => open = false, 2000)">

            <div
            id="w3f__widget--content"
            x-show="open"
            x-transition:enter-start="opacity-0 translate-y-5"
            x-transition:enter="transition duration-200 transform ease"
            x-transition:leave="transition duration-200 transform ease"
            x-transition:leave-end="opacity-0 translate-y-5"
            @click.away="open = false"
            class="fixed flex flex-col z-50 bottom-[100px] top-0 right-0 h-auto left-0 sm:top-auto sm:right-5 sm:left-auto h-[calc(100%-95px)] w-full sm:w-[350px] overflow-auto max-h-[500px] sm:h-[600px] shadow-2xl rounded-md"
            >
            <div class="contact-title flex p-5 flex-col justify-center items-center h-32">
            <h3 class="text-lg text-white">How can we help?</h3>
            <p class="text-white opacity-50">We usually respond in a few hours</p>
            </div>
            <div class="bg-gray-50 flex-grow p-6">

                <form action="{{route('SendMessage')}}" method="POST" id="form">
                    @csrf
                    @method('post')
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400"
                    >Subject</label
                    >
                    <input type="text" name="subject" id="subject" placeholder="Subject" class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    <div id="error_subject"></div>
                </div>


                <div class="mb-4">
                <label
                    for="message"
                    class="block mb-2 text-sm text-purple-600 dark:text-gray-400"
                    >Your Message</label>
                <textarea rows="4" name="message" id="message" placeholder="Your Message" class="w-full h-28 px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"></textarea>
                <div id="error_message"></div>
                </div>
                <div class="mb-3">
                @guest
                    <p class="text-red-500 text-sm">Cant send message until you create an account</p>
                @endguest
                @auth
                <button  type="submit" class="submit-contact w-full px-3 py-4 text-white rounded-md focus:outline-none">
                    Send Message
                </button>
                @endauth
                </div>
            </form>


            </div>
            </div>
            <button
            id="w3f__widget--btn"
            @click="open = !open"
            class="btn-contact fixed z-40 right-5 bottom-5 shadow-lg flex justify-center items-center w-14 h-14 rounded-full focus:outline-none transition duration-300 ease"
            >
            <svg
                class="w-6 h-6 text-white absolute"
                x-show="!open"
                x-transition:enter-start="opacity-0 -rotate-45 scale-75"
                x-transition:enter="transition duration-200 transform ease"
                x-transition:leave="transition duration-100 transform ease"
                x-transition:leave-end="opacity-0 -rotate-45"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path
                d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                ></path>
            </svg>

            <svg
                class="w-6 h-6 text-white absolute"
                x-show="open"
                x-transition:enter-start="opacity-0 rotate-45 scale-75"
                x-transition:enter="transition duration-200 transform ease"
                x-transition:leave="transition duration-100 transform ease"
                x-transition:leave-end="opacity-0 rotate-45"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
            </button>

        </div>


{{-- home script --}}

<script src="{{asset('./js/Home.js')}}"></script>

<!-- typed js  -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" src="https://cdn.skypack.dev/twind/shim"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<script>

    try {
        var typed = new Typed('.typed', {
            strings: ["center", "right", "left", "flex-start", "flex-end"],
            typeSpeed: 100,
            backSpeed: 200,
            loop: true
        });
    } catch (error) {

    }
    try {
        var typed = new Typed('.typed-2', {
            strings: ["Welcome to CodeVerse.", "Explore our coding snippets.", "Discover web development tips.",
                "Create stunning websites."
            ],
            typeSpeed: 100,
            backSpeed: 150,
            loop: true
        });
    } catch (error) {

    }

</script>
@endsection

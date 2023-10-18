@extends('layouts.master')

@section('title','Home')


@section('content')



    {{-- links --}}
    <link rel="stylesheet" href="{{asset('./css/Home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/themes/prism.css">

    <div class="container mx-auto py-20 px-3 md:px-0">
        <div class="pb-5 flex items-center justify-between flex-wrap text-white h-fit">
            <div>
            <a class="flex items-center pt-12 gap-3">
                @if ($snippet->user->image)
                {{-- <img src="{{ asset('./Profile_img/' . $user->image) }}" class="profile_image border-4 rounded-full"
                    style="width: 150px;height:150px"> --}}
                <div class="profile_image border-2 rounded-full"
                    style="background-image: url('{{ asset('./Profile_img/' . $snippet->user->image) }}');width: 50px;height:50px;background-position: center; background-size: cover; background-repeat: no-repeat;">
                </div>
            @else
                <img src="{{ asset('./images/default.jpg') }}" class="profile_image border-2 rounded-full"
                    style="width: 50px;height:50px">
            @endif
            <div>
            <p class="mx-0">{{$snippet->user->name}}</p>
            <p class="text-gray-300 opacity-70">{{$snippet->created_at->diffForHumans()}}</p>
        </div>
        </a>
        </div>
        <div class="flex flex-col">
            <h1 class="text-white pt-12 text-2xl font-semibold">{{ $snippet->title }}</h1>
            <h1 class="text-gray-200 opacity-70 text-md font-semibold">{{ $snippet->description }}</h1>
        </div>
        </div>
        <div class="compoContainer rounded-t-md">
            <div class="options flex justify-between rounded-t-md items-center p-5">
                <div class="leftOptions flex items-center gap-10">
                    <button id="xs" class="hidden md:grid gap-1">
                        <svg id="Layer_1" height="25" style="enable-background:new 0 0 100.4 100.4;" version="1.1"
                            viewBox="0 0 100.4 100.4" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M69.3,8.6H28c-5.3,0-9.7,4.3-9.7,9.6v66.2c0,5.3,4.3,9.6,9.7,9.6h41.3c5.3,0,9.7-4.3,9.7-9.6V18.2   C79,12.9,74.7,8.6,69.3,8.6z M76,84.4c0,3.7-3,6.6-6.7,6.6H28c-3.7,0-6.7-3-6.7-6.6V18.2c0-3.7,3-6.6,6.7-6.6h41.3   c3.7,0,6.7,3,6.7,6.6V84.4z" />
                            <path
                                d="M60.9,18.1H36.2c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h24.7c0.8,0,1.5-0.7,1.5-1.5S61.7,18.1,60.9,18.1z" />
                            <path
                                d="M48.6,75.4c-2.8,0-5,2.3-5,5c0,1.3,0.5,2.6,1.5,3.5c0.9,0.9,2.2,1.4,3.5,1.4c0,0,0,0,0,0c2.8,0,5-2.3,5-5   C53.6,77.6,51.4,75.4,48.6,75.4z M48.7,82.4C48.7,82.4,48.7,82.4,48.7,82.4c-0.5,0-1-0.2-1.4-0.6c-0.4-0.4-0.6-0.9-0.6-1.4   c0-1.1,0.9-2,2-2c0,0,0,0,0,0c1.1,0,2,0.9,2,2C50.7,81.5,49.8,82.4,48.7,82.4z" />
                        </svg>
                        <p>xs</p>
                    </button>
                    <button id="sm" class="hidden md:grid gap-1">
                        <svg enable-background="new 0 0 48 48" height="25px" version="1.1" viewBox="0 0 48 48"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M35,48H13c-2.757,0-5-2.243-5-5V5c0-2.757,2.243-5,5-5h22c2.757,0,5,2.243,5,5v38C40,45.757,37.757,48,35,48z M13,2     c-1.654,0-3,1.346-3,3v38c0,1.654,1.346,3,3,3h22c1.654,0,3-1.346,3-3V5c0-1.654-1.346-3-3-3H13z" />
                            <path
                                d="M39,10H9c-0.553,0-1-0.448-1-1s0.447-1,1-1h30c0.553,0,1,0.448,1,1S39.553,10,39,10z" />
                            <path
                                d="M39,40H9c-0.553,0-1-0.448-1-1s0.447-1,1-1h30c0.553,0,1,0.448,1,1S39.553,40,39,40z" />
                            <path d="M24,41c-1.104,0-2,0.896-2,2s0.896,2,2,2s2-0.896,2-2S25.104,41,24,41L24,41z" />
                        </svg>
                        <p>sm</p>
                    </button>
                    <button id="md" class="hidden md:grid gap-1">
                        <svg data-name="Layer 1" id="Layer_1" height="25" viewBox="0 0 32 32"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.5,5H2.5A2.5,2.5,0,0,0,0,7.5v17A2.5,2.5,0,0,0,2.5,27h27A2.5,2.5,0,0,0,32,24.5V7.5A2.5,2.5,0,0,0,29.5,5ZM31,24.5A1.5,1.5,0,0,1,29.5,26H2.5A1.5,1.5,0,0,1,1,24.5V7.5A1.5,1.5,0,0,1,2.5,6h27A1.5,1.5,0,0,1,31,7.5v17Z" />
                            <path d="M5,25H27V7H5V25ZM6,8H26V24H6V8Z" />
                            <circle cx="29" cy="16" r="1" />
                        </svg>
                        <p>md</p>
                    </button>
                    <button id="lg" class="hidden md:grid gap-1">
                        <svg class="bi bi-laptop" height="25" fill="currentColor" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                        </svg>
                        <p>lg</p>
                    </button>
                    <button id="xl" class="hidden md:grid gap-1">
                        <svg enable-background="new 0 0 48 48" height="25" version="1.1" viewBox="0 0 48 48"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M44,42H4c-2.206,0-4-1.874-4-4.177V8.177C0,5.874,1.794,4,4,4h40c2.206,0,4,1.874,4,4.177v29.646     C48,40.126,46.206,42,44,42z M4,6C2.897,6,2,6.977,2,8.177v29.646C2,39.023,2.897,40,4,40h40c1.103,0,2-0.977,2-2.177V8.177     C46,6.977,45.103,6,44,6H4z" />
                            <path
                                d="M38,46H10c-0.552,0-1-0.448-1-1s0.448-1,1-1h28c0.552,0,1,0.448,1,1S38.552,46,38,46z" />
                            <path
                                d="M24,46c-0.552,0-1-0.448-1-1v-4c0-0.552,0.448-1,1-1s1,0.448,1,1v4C25,45.552,24.552,46,24,46z" />
                            <rect height="3" width="46" x="1" y="32" />
                        </svg>
                        <p>xl</p>
                    </button>
                </div>
                <div class="rightOptions flex items-center gap-5 h-fit">
                    <button class="text-white px-3 py-1 rounded-md" id="show_code">Show code</button>
                    <button id="copyButton" class="w-10 h-10 rounded-full flex justify-center items-center">
                        <svg fill="#ffff" width="22" id="copySvg" version="1.1" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M15.8,3.1C15.4,2.4,14.8,2,14,2h-4C9.2,2,8.6,2.4,8.2,3.1C6.4,3.4,5,5.1,5,7v11c0,2.2,1.8,4,4,4h6c2.2,0,4-1.8,4-4V7C19,5.1,17.6,3.4,15.8,3.1z M14,4L14,4v1h-4V4L14,4z M17,18c0,1.1-0.9,2-2,2H9c-1.1,0-2-0.9-2-2V7c0-0.7,0.4-1.4,1-1.7c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0.1,0.2c0,0,0,0.1,0.1,0.1C8.2,5.9,8.3,6,8.3,6c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0,0.2,0.1,0.2,0.1c0,0,0.1,0,0.1,0C9.7,7,9.9,7,10,7h4c0.1,0,0.3,0,0.4,0c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1c0,0.1,0.1-0.1,0.1-0.2c0,0,0.1-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1c0-0.1,0-0.1,0.1-0.2c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0.6,0.3,1,1,1,1.7V18z" />
                        </svg>
                        <svg fill="#ffff" width="22" id="copiedSvg" class="hidden"
                            style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M15.8,3.1C15.4,2.4,14.8,2,14,2h-4C9.2,2,8.6,2.4,8.2,3.1C6.4,3.4,5,5.1,5,7v11c0,2.2,1.8,4,4,4h6c2.2,0,4-1.8,4-4V7    C19,5.1,17.6,3.4,15.8,3.1z M10,4l4,0v0v1h-4V4z M17,18c0,1.1-0.9,2-2,2H9c-1.1,0-2-0.9-2-2V7c0-0.7,0.4-1.4,1-1.7    c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0.1,0.2c0,0,0,0.1,0.1,0.1C8.2,5.9,8.3,6,8.3,6c0,0,0.1,0.1,0.1,0.1    c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0.1,0.2,0.1    c0,0,0.1,0,0.1,0.1c0.1,0,0.2,0.1,0.2,0.1c0,0,0.1,0,0.1,0C9.7,7,9.9,7,10,7h4c0.1,0,0.3,0,0.4,0c0,0,0.1,0,0.1,0    c0.1,0,0.2,0,0.2-0.1c0,0,0.1,0,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1    c0-0.1,0.1-0.1,0.1-0.2c0,0,0.1-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1c0-0.1,0-0.1,0.1-0.2c0-0.1,0-0.1,0-0.2    c0,0,0-0.1,0-0.1c0.6,0.3,1,1,1,1.7V18z" />
                            <path
                                d="M12.9,11.4l-1.3,2l-0.3-0.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l1.1,1.1c0.2,0.2,0.4,0.3,0.7,0.3c0,0,0.1,0,0.1,0    c0.3,0,0.6-0.2,0.7-0.4l2-3c0.3-0.5,0.2-1.1-0.3-1.4C13.8,10.9,13.2,11,12.9,11.4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="h-fit w-full bg-transparent">
                <pre class="language-html hidden h-72 px-0" id="showCode">
                        <code>
                            <textarea rows="10" readonly>
{{-- HERE IS THE CODE --}}
{{$snippet->code}}
                            </textarea>
                        </code>
                </pre>
                <textarea class="hidden" readonly id="textarea">
{{$snippet->code}}
                </textarea>
                <div id="iframeDiv" class="w-full h-fit rounded-b-md flex justify-center items-center bg-white">
                    <iframe id="Iframe" frameborder="0" class="xl rounded-b-md resize-x">
                    </iframe>
                </div>
                <div>
                </div>
            </div>
        </div>
        <div class="flex justify-center sm:h-80 md:h-60 md:w-full rounded mt-12"
                                style="height: 300px !important;width:560px;background-image: url('{{ asset('Snippet_file/' . $snippet->image) }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                {{-- <img src="{{ asset('Snippet_file/' . $snippet->image) }}" alt=""
                                    class="h-full w-full object-fill rounded-md"> --}}
                            </div>
        <div class="mt-5 flex items-center gap-6 justify-center">
        <form action="{{ route('publish_snippet', $snippet->id) }}" method="post">
            @csrf
            @method('post')
            <button type="submit" class="text-white bg-green-600 p-2 rounded">Publish</button>
        </form>
        <form action="{{ route('reject_snippet', $snippet->id) }}" method="post">
            @csrf
            @method('post')
            <button type="submit" class="text-white bg-red-600 p-2 rounded">reject</button>
        </form>
    </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/prism.min.js"></script>

<script>
    // copy code
    $(document).ready(function () {
        const copyButton = $("#copyButton");
        const textareaElement = $("#textarea");
        const copySvg = $('#copySvg');
        const copiedSvg = $('#copiedSvg');
        var click = false;


        copyButton.on("click", function () {
            try {
                navigator.clipboard.writeText(textareaElement.val()).then(function () {

                    if (click == false) {
                        setTimeout(function () {
                            copiedSvg.addClass('visible').animate({
                                opacity: 1,
                                width: 'toggle',
                                height: 'toggle'
                            }, 400);
                            copySvg.removeClass('visible').animate({
                                opacity: 0,
                                width: 'toggle',
                                height: 'toggle'
                            }, 400);
                            click = true;
                        }, 0);

                        setTimeout(function () {
                            copiedSvg.removeClass('visible').animate({
                                opacity: 0,
                                width: 'toggle',
                                height: 'toggle'
                            }, 400);
                            copySvg.addClass('visible').animate({
                                opacity: 1,
                                width: 'toggle',
                                height: 'toggle'
                            }, 400);
                            click = false;
                        }, 1500);
                    }

                });
            } catch (err) {}
        });
    });

    // color code
    Prism.highlightAll();

    // output code
    window.addEventListener('load', () => {
        const output = document.getElementById("textarea").value;

        const iframe = document.getElementById("Iframe");
        const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

        iframeDoc.open();
        iframeDoc.write(`
            <html class="flex w-full h-full">
                <head>
                    <meta charset="utf-8">
                    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
                </head>
                <body style="height: min-content; width: 1500px;">
                    ${output}
                </body>
            </html>
        `);
        iframeDoc.close();
    })

    // responsive code
    const iframe = document.getElementById("Iframe");
    const iframeDiv = document.getElementById("iframeDiv");
    const xl = document.getElementById("xl");
    const lg = document.getElementById("lg");
    const md = document.getElementById("md");
    const sm = document.getElementById("sm");
    const xs = document.getElementById("xs");

    xl.addEventListener('click', () => {
        iframeDiv.classList.add('bg-white');
        iframe.classList.add("xl");
        iframe.classList.remove("lg");
        iframe.classList.remove("md");
        iframe.classList.remove("sm");
        iframe.classList.remove("xs");
    });
    lg.addEventListener('click', () => {
        iframeDiv.classList.add('bg-white');
        iframe.classList.add("lg");
        iframe.classList.remove("xl");
        iframe.classList.remove("md");
        iframe.classList.remove("sm");
        iframe.classList.remove("xs");
    });
    md.addEventListener('click', () => {
        iframeDiv.classList.add('bg-white');
        iframe.classList.add("md");
        iframe.classList.remove("xl");
        iframe.classList.remove("lg");
        iframe.classList.remove("sm");
        iframe.classList.remove("xs");
    });
    sm.addEventListener('click', () => {
        iframeDiv.classList.add('bg-white');
        iframe.classList.add("sm");
        iframe.classList.remove("xl");
        iframe.classList.remove("lg");
        iframe.classList.remove("md");
        iframe.classList.remove("xs");
    });
    xs.addEventListener('click', () => {
        iframeDiv.classList.add('bg-white');
        iframe.classList.add("xs");
        iframe.classList.remove("xl");
        iframe.classList.remove("lg");
        iframe.classList.remove("md");
        iframe.classList.remove("sm");
    });



    // show code
    const textarea = document.getElementById("textarea");
    const show = document.getElementById("show_code")

    $(document).ready(function () {
        $(show).click(function () {
            $('#showCode').toggle('hidden')
            $('#showCode').toggleClass('showed')
            if ($('#showCode').hasClass("showed")) {
                $(this).text("Hide Code")
            } else {
                $(this).text("Show Code")
            }
        });
        $("#show_code-button").click(function () {
            $(".code-section").toggleClass("hidden");
            if ($(".code-section").hasClass("hidden")) {
                $(this).text("Show Code");
            } else {
                $(this).text("Hide Code");
            }
        });
    });
</script>


    <!--=============== Home section 1 ===============-->

@endsection

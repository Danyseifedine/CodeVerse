<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    {{-- Add your custom CSS links here --}}

    <link rel="stylesheet" href="{{asset('./css/Components/ScrollBar.css')}}">
    <link rel="stylesheet" href="{{asset('./css/Components/Cursor.css')}}">
    <link rel="stylesheet" href="{{asset('./css/Components/Navbar.css')}}">
    <link rel="stylesheet" href="{{asset('./css/Components/footer.css')}}">


    <!--=============== jquery===============-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <title>@yield('title', 'default')</title>
</head>

<body>

    <header>
        <div class="cursor-dot" data-cursor-dot></div>
        <div class="cursor-outline" data-cursor-outline></div>
        @include('layouts.partiels.navbar')
    </header>

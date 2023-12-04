@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<style>
    .confbody {
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />

    <title> {{ config('app.name', 'Laravel') }} {{ isset($title) ? '-' . $title : '' }} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <link href="style.css" rel="stylesheet" />
    @livewireScripts




    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased confbody">
    <x-banner />

    @include('layouts.partials.header')

    @yield('hero')

    <main class="container mx-auto px-5 flex flex-grow">
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')


    @stack('modals')


</body>

</html>

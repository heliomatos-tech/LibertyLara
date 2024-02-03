<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'InDev') }}</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images//favicon16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images//favicon32.pngv') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/images//favicon64.pngv') }}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('assets/images//favicon128.png') }}">
    <link rel="icon" type="image/png" sizes="256x256" href="{{ asset('assets/images//favicon256.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ asset('assets/js/3.3.5.js') }}"></script>
    <!-- css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    @livewireStyles
</header>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('header-scripts')

    <title>{{ config('app.name') }}</title>

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-amber-50">

    @include('layouts.navbar')

    <main class="container mx-auto pt-20 flex justify-between h-screen sticky">
        <div class="hidden md:block mt-4 w-64">
        @include('layouts.sidebar_left')
        </div>

        <div class="px-6 max-w-2xl overflow-auto max-h-full scrollbar">
            <div class="pt-4">
            {{ $slot }}
            </div>
        </div>

        <div class="hidden lg:block mt-4 w-64">
        @include('layouts.sidebar_right')
        </div>
    </main>

</div>
</body>
</html>

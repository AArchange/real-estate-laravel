<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Liberu Real Estate') }}</title>

    @if(config('googletagmanager.id'))
        @include('googletagmanager::head')
    @endif

    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="font-sans antialiased">
    @if(config('googletagmanager.id'))
        @include('googletagmanager::body')
    @endif

    <div class="min-h-screen bg-gray-100 flex flex-col">
        @include('components.home-navbar')

        <!-- Include Spatie Menu -->
        <nav>
            {!! \App\Menus\MainMenu::render() !!}
        </nav>

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>

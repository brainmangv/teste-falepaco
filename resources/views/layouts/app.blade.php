<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite('resources/css/app.css')
     @livewireStyles
</head>

<body class="font-sans antialiased">
    <header class="navbar .navbar-light bg-white sticky-top flex-md-nowrap p-3 shadow">
        <x-application-logo-dashboard class="logo-dashboard"/>
        <div class="d-md-flex d-none">
            <img src="{{ Vite::asset('resources/images/avatar.png') }}" alt="avatar" width="32" height="32"
                class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </div>        
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="container-fluid">
        <div class="row">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @if (isset($header))
            <header class="bg-white shadow-sm d-none">
                <div class="container py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
             @endif --}}

            <!-- Page Content -->
            <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">
                {{ $slot }}
            </main>
        </div>
    </div>
    @vite('resources/js/app.js')
     @livewireScripts
</body>

</html>

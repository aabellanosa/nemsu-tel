<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NEMSUTEL')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-wP0mlzh.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-COn20UU0.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-D0w0dLmS.css') }}"> --}}
    {{-- <script type="module" src="{{ asset('build/assets/app-D_5HpK_M.js') }}"></script> --}}
</head>
<body class="d-flex flex-column h-100">
    {{-- @include('partials.navbar') --}}
    <x-nav-bar active="rooms" />
    

    <main class="container py-4 flex-shrink-0">
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
</html>
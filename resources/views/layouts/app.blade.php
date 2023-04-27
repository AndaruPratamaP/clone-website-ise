<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script defer src="{{ asset('js/cdn.min.js') }}"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    @include('layouts.navbar')

    {{-- @yield('content') --}}
    {{ $slot }}

    @include('layouts.footer')
    @livewireScripts
</body>

</html>

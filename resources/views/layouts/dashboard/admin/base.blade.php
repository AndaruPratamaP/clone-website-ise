<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script defer src="{{ asset('js/cdn.min.js') }}"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    
    {{-- @yield('content') --}}
    {{ $slot }}
    {{-- @livewire('dashboard') --}}
    @livewireScripts
</body>

</html>

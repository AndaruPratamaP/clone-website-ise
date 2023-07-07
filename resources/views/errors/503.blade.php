<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- <script defer src="{{ asset('js/cdn.min.js') }}"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/css/aos.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
        <div class="flex flex-col justify-center items-center bg-black h-screen w-full overflow-y-hidden relative">
            <image src="{{ asset('images/blur-blue-1.png') }}" class="absolute w-full h-screen" />
            <image src="{{ asset('images/maintenance.png') }}" class="w-full absolute left-0 -translate-y-7 xs:-translate-y-4 sm:-translate-y-2" />
        <div class="flex flex-col justify-center items-center text-white relative z-50 gap-4 text-center px-4">
            <h1 class="text-5xl sm:text-7xl font-bold">Uh Oh!</h1>
            <p class="text-xl sm:text-2xl font-semibold">This site is under maintenance</p>
        </div>
    </div>

    @livewireScripts
    @if (session('toastr-toast'))
        <script defer>
            // wait for document ready
            document.addEventListener('DOMContentLoaded', function() {
                toastrToast({
                    type: "{{ session('toastr-toast')['type'] }}",
                    title: "{{ session('toastr-toast')['title'] }}",
                    text: "{{ session('toastr-toast')['text'] }}",
                })
            }, false);
        </script>
    @endif
</body>

</html>

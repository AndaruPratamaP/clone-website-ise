@section('title', 'Maintenance')
<div class="flex flex-col justify-center items-center bg-black h-screen w-full overflow-y-hidden relative">
        <image src="{{ asset('images/blur-blue-1.png') }}" class="absolute w-full h-screen" />
        <image src="{{ asset('images/maintenance.png') }}" class="w-full absolute left-0 -translate-y-7 xs:-translate-y-4 sm:-translate-y-2" />
    <div class="flex flex-col justify-center items-center text-white relative z-50 gap-4 text-center px-4">
        <h1 class="text-5xl sm:text-7xl font-bold">Uh Oh!</h1>
        <p class="text-xl sm:text-2xl font-semibold">This site is under maintenance</p>
    </div>
</div>

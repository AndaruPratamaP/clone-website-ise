@section('title', 'Redirecting')
<div class="relative bg-[#121316] flex min-h-screen w-full justify-center items-center overflow-hidden">
    <img class="absolute rounded-full bg-[#00D0FF] bg-opacity-5 blur-3xl z-0 mix-blend-screen h-[75%] w-[75%]"
        src="{{ asset('images/redirect/bg-redirect.png') }}">
    <div>
        <div class="lg:flex gap-[20px] justify-center items-center">
            <div class="flex justify-center">
                <img class="lg:w-52 w-28" src="{{ asset('images/logo-ise-color.png') }}">
            </div>
            <div class="text-[#ffffff]">
                <div class="hidden lg:font-bold lg:flex-none lg:text-6xl lg:block ">ISE! 2023</div>
                <div class="lg:hidden text-center text-3xl mt-[4px] font-bold">ISE! 2023</div>
                <div class="hidden lg:font-medium lg:text-2xl lg:flex-none lg:block">Information Systems Expo 2023</div>
                <div class="lg:hidden font-medium text-base text-center mt-[8px]">Information Systems Expo 2023</div>
            </div>
        </div>
        <div
            class="flex justify-center mt-[20px] text-[#ffffff] font-semibold text-base pl-[24px] pr-[24px] lg:pl-[75px] lg:pr-[75px] text-center">
            You are being redirected to &ThinSpace;<span
                class="underline hover:brightness-75">{{ $long_url }}</span>&ThinSpace;...</div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "{{ $long_url }}";
        }, 3000);
    </script>
</div>

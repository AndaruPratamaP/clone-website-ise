@section('title', '404 Not Found')
<div class="flex flex-col items-center justify-center h-fit lg:min-h-screen sm:min-h-screen bg-[#121316]">
    <div class="absolute rounded-full bg-[#00D0FF] bg-opacity-10 blur-2xl">
        <div class="flex">
            <img class="w-[493px] h-[496px] left-[734px] top-[231px] block" src="{{asset('/images/404/Vector.png')}}">
            <img class="w-[493px] h-[496px] left-[734px] top-[231px] hidden lg:block md:hidden xs:hidden" src="{{asset('/images/404/vector.png')}}">
        </div>
    </div>
    <div class="container relative flex flex-col items-center justify-center min-h-screen text-white">
    <div class="flex gap-4">
        <img class="w-[189px] h-[90px] xl:w-[349px] md:w-[285px] xl:h-[140px] md:h-[110px]" src="{{asset('/images/404/404.svg')}}">
    </div>
    <div class="relative max-w-full">
        <h2 class="text-white font-montserrat font-semibold text-2xl lg:text-6xl lg:leading-[96px] tracking- mt-2 xs:text-3xl md:text-5xl">Page Not Found</h2>
    </div>
    <div class="relative flex items-center justify-center h-24">
        <p class="px-4 text-sm font-semibold leading-9 text-center text-white font-montserrat lg:text-xl md:text-xl xs:px-0">Sorry, the page you are looking for was not found.</p>
    </div>

        <a href="/" class="bg-gradient-to-br from-[#006C56] to-[#AFD196] hover:to-green-500 text-white py-2 px-4 rounded mt-8">Back to Home</a>
    </div>
</div>


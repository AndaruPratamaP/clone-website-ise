<div class="flex flex-col items-center justify-center min-h-screen bg-[#121316]">
    <div class="absolute rounded-full bg-[#00D0FF] bg-opacity-10 blur-2xl">
        <div class="flex">
        <img class="w-[493px] h-[495px] left-[734px] top-[231px] block" src="{{ asset('/images/500/blur-bg.png') }}">
        <img class="w-[493px] h-[495px] left-[734px] top-[231px] hidden lg:block md:hidden xs:hidden" src="{{ asset('/images/500/blur-bg.png') }}">
        </div>
    </div>
    <div class="container flex flex-col justify-center items-center text-white xs:text-7xl md:text-8xl font-montserrat font-bold lg:text-[150px] relative">
        <div class="">
            <img class="w-[189px] h-[90px] xl:w-[349px] md:w-[285px] xl:h-[140px] md:h-[110px] items-center" src="{{asset('/images/500/500.svg')}}">
        </div>
    </div>

    <div class="relative max-w-full">
        <h2 class="text-white font-montserrat font-bold lg:font-extrabold text-2xl lg:text-7xl lg:leading-[96px] tracking-widest mt-2 xs:text-3xl md:text-5xl">Internal Server Error
        </h2>
    </div>
    <div class="relative h-36">
        <div class="text-white font-montserrat font-normal lg:font-semibold lg:text-2xl md:text-xl xs:text-0.5xl leading-9 justify-center items-center mt-6">Sorry, something went wrong.
        </div>
    </div>
    <div class="container mx-auto justify-center items-center flex">
        <button class="px-[12px] py-[8px] absolute bg-gradient-to-br from-[#006C56] to-[#AFD196] rounded-md hover:to-green-500">
            <a href="/" class="text-white font-medium text-base md:text-lg ">Back to Home</a>
        </button>
    </div>
</div>


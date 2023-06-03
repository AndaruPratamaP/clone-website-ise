<nav class="bg-[#121316] flex w-full fixed h-20 z-10 justify-end px-10 items-center">
    <div class="flex items-center md:order-2 gap-x-2">
        <x-heroicon-s-user class="w-4 xs:w-6 h-4 xs:h-6 text-white" />
        <p class="font-montserrat text-white text-xs xs:text-sm"> {{ Auth::user()->email }} </p>
    </div>
</nav>

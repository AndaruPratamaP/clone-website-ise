<div class="flex flex-col w-full space-y-6 sm:space-y-10 text-white m-4 sm:m-6 font-montserrat min-h-screen">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Halo, Selamat Datang {{ Auth::user()->full_name }}</h1>
    {{-- <div class="flex flex-col">
        <h2 class="text-xl md:text-2xl font-bold text-[#B5B3BC]">Status</h2>
        <div
            class="xl:flex flex-row grid grid-cols-2 xl:flex-nowrap xl:w-full mt-4 gap-2 sm:gap-4 pr-0 md:pr-32 xl:pr-0">
            <div
                class="flex flex-row max-w-lg w-full items-center justify-center xs:justify-start px-2 xs:px-4 gap-2 h-[80px] xs:h-[100px] md:h-[130px] bg-[#191A1E] rounded-3xl">
                <x-heroicon-s-arrow-right-on-rectangle
                    class="w-6 h-6 xs:w-8 xs:h-8 sm:w-10 sm:h-10 text-[#B5B3BC] shrink-0 " />
                <div>
                    <p class="text-[10px] xs:text-xs sm:text-base font-medium leading-none text-[#B5B3BC] tracking-wide">
                        Status pendaftaran</p>
                    <h3
                        class="text-sm xs:text-base sm:text-xl font-bold bg-gradient-green-l bg-clip-text text-transparent w-max">
                        Terdaftar</h3>
                </div>
            </div>
            <div
                class="flex flex-row max-w-lg w-full items-center justify-center xs:justify-start px-2 xs:px-4 gap-2 h-[80px] xs:h-[100px] md:h-[130px] bg-[#191A1E] rounded-3xl">
                <x-heroicon-s-folder-plus class="w-6 h-6 xs:w-8 xs:h-8 sm:w-10 sm:h-10 text-[#B5B3BC] shrink-0 " />
                <div>
                    <p
                        class="text-[10px] xs:text-xs sm:text-base font-medium leading-none text-[#B5B3BC] tracking-wide">
                        Status berkas</p>
                    <h3
                        class="text-sm xs:text-base sm:text-xl font-bold bg-gradient-green-l bg-clip-text text-transparent w-max">
                        Terverifikasi</h3>
                </div>
            </div>
            <div
                class="flex flex-row max-w-lg w-full items-center justify-center xs:justify-start px-2 xs:px-4 gap-2 h-[80px] xs:h-[100px] md:h-[130px] bg-[#191A1E] rounded-3xl">
                <x-heroicon-s-clipboard-document-check
                    class="w-6 h-6 xs:w-8 xs:h-8 sm:w-10 sm:h-10 text-[#B5B3BC] shrink-0 " />
                <div>
                    <p
                        class="text-[10px] xs:text-xs sm:text-base font-medium leading-none text-[#B5B3BC] tracking-wide">
                        Status administrasi</p>
                    <h3
                        class="text-sm xs:text-base sm:text-xl font-bold bg-gradient-green-l bg-clip-text text-transparent w-max">
                        Terverifikasi</h3>
                </div>
            </div>
            <div
                class="flex flex-row max-w-lg w-full items-center justify-center xs:justify-start px-2 xs:px-4 gap-2 h-[80px] xs:h-[100px] md:h-[130px] bg-[#191A1E] rounded-3xl">
                <x-heroicon-s-arrow-trending-up
                    class="w-6 h-6 xs:w-8 xs:h-8 sm:w-10 sm:h-10 text-[#B5B3BC] shrink-0 " />
                <div>
                    <p
                        class="text-[10px] xs:text-xs sm:text-base font-medium leading-none text-[#B5B3BC] tracking-wide">
                        Status seleksi</p>
                    <h3
                        class="text-sm xs:text-base sm:text-xl font-bold bg-gradient-green-l bg-clip-text text-transparent w-max">
                        Lolos</h3>
                </div>
            </div>
        </div>
    </div> --}}
    <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#B5B3BC]">Pengunguman</h2>
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-md w-full px-7 pt-4 pb-6">
                <p class="text-base md:text-lg font-bold">Announcement</p>
                <h2 class="text-xl md:text-2xl font-bold text-blue-400 mt-3 sm:mt-4">Grand Talk Show</h2>
                <p class="text-sm md:text-base font-medium tracking-wide mt-1 sm:mt-2">Pendaftaran Grand Talk Show sudah
                    dibuka! Cepat mendaftar sebelum kehabisan kursi!</p>
                <div class="flex flex-row justify-center items-center w-full gap-4 mt-4 sm:mt-6">
                    {{-- <a href="#"
                        class="text-sm md:text-base font-medium rounded-md p-[2px] bg-gradient-blue-r hover:brightness-75">
                        <div class="bg-[#191A1E] px-[14px] sm:px-[22px] py-[4px] sm:py-[6px] rounded-md">Close</div>
                    </a> --}}
                    <a href="/my/gts"
                        class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75">Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col w-full space-y-6 sm:space-y-10 text-white m-4 sm:m-6 font-montserrat min-h-screen">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Halo, Admin {{ Auth::user()->full_name }}</h1>
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-blue-r bg-clip-text text-transparent w-max font-bold">Data Grand TalkShow</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">300</h2>
            </div>
            <div class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">300</h2>
            </div>
        </div>
        </div>
    </div>
</div>

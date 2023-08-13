@section('title', 'Admin Dashboard')
<div class="flex flex-col w-full space-y-6 sm:space-y-10 text-white m-4 sm:m-6 font-montserrat min-h-screen">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Halo, Admin {{ Auth::user()->full_name }}</h1>

    {{-- Bionix --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-green-r bg-clip-text text-transparent w-max font-bold">Data Bionix</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-green-400 mt-3 sm:mt-4 self-end">{{ $this->bionix_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-green-400 mt-3 sm:mt-4 self-end">{{ $this->bionix_verified }}
                </h2>
            </div>
        </div>
    </div>

    {{-- Bionix Roadshow --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-green-r bg-clip-text text-transparent w-max font-bold">Data Bionix Roadshow</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-green-400 mt-3 sm:mt-4 self-end">{{ $this->bionixrd_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-green-400 mt-3 sm:mt-4 self-end">{{ $this->bionixrd_verified }}
                </h2>
            </div>
        </div>
    </div>

    {{-- IS Class --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-green-r bg-clip-text text-transparent w-max font-bold">Data IS Class</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-green-400 mt-3 sm:mt-4 self-end">{{ $this->isclass_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-green-400 mt-3 sm:mt-4 self-end">{{ $this->isclass_verified }}
                </h2>
            </div>
        </div>
    </div>

    {{-- DS Academy --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-blue-r bg-clip-text text-transparent w-max font-bold">Data DS Academy</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">{{ $this->dsa_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">{{ $this->dsa_verified }}
                </h2>
            </div>
        </div>
    </div>

    {{-- UX Academy --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-blue-r bg-clip-text text-transparent w-max font-bold">Data UX Academy</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">{{ $this->uxa_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">{{ $this->uxa_verified }}
                </h2>
            </div>
        </div>
    </div>
    {{-- Grand Talk Show --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-blue-r bg-clip-text text-transparent w-max font-bold">Data Grand
            TalkShow</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">{{ $this->gts_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-blue-400 mt-3 sm:mt-4 self-end">{{ $this->gts_verified }}
                </h2>
            </div>
        </div>
    </div>

    {{-- RISE --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-orange-r bg-clip-text text-transparent w-max font-bold">Data RISE</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-orange-400 mt-3 sm:mt-4 self-end">{{ $this->rise_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-orange-400 mt-3 sm:mt-4 self-end">{{ $this->rise_verified }}
                </h2>
            </div>
        </div>
    </div>

    {{-- Total --}}
    <div>
        <h2 class="text-2xl md:text-3xl bg-gradient-purple-r bg-clip-text text-transparent w-max font-bold">Data TOTAL</h2>
        <hr class="my-2 brightness-50">
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-table-cells class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mt-3 sm:mt-4 self-end">{{ $this->total_registered }}
                </h2>
            </div>
            <div
                class="flex flex-col justify-between items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-sm w-full px-7 pt-4 pb-6">
                <div class="flex flex-row items-center gap-3">
                    <x-heroicon-o-check-badge class="w-8 md:w-10 h-8 md:h-10" />
                    <p class="text-base md:text-xl font-bold">Jumlah Pendaftar Terverifikasi</p>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-purple-400 mt-3 sm:mt-4 self-end">{{ $this->total_verified }}
                </h2>
            </div>
        </div>
    </div>


</div>
</div>

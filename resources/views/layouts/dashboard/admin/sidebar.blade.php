<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ open: false }">
    {{-- Mobile Start --}}
    <div class="flex h-20 items-center ml-6 lg:hidden fixed top-0 left-0 z-30"  @click="open = !open" >
        <x-heroicon-s-bars-3 class="w-8 h-8 text-white cursor-pointer" />
    </div>
    <div x-bind:class="open==true ? 'bg-black/70 min-h-screen w-full fixed inset-0 z-50' : ''" @click="open=!open">
        <div x-show='open' x-cloak x-transition class="flex-col scrollbar-thin scrollbar-thumb-gray-800 scrollbar-track-gray-500 h-screen w-[260px] bg-[#15161A] text-white fixed top-0 left-0 flex lg:hidden px-[30px] py-[40px] text-lg scroll overflow-y-auto">
            <div class="flex justify-center">
                <img class="w-10 h-10" src="{{ asset('images/logo-ise.png') }}">
            </div>
            <div class="flex flex-col space-y-2 mt-7 text-[#B5B3BC]">
                <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-home class="w-6 h-6 text-[#B5B3BC]" />Beranda</a>
                <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-link class="w-6 h-6 text-[#B5B3BC]" />URL Shortener</a>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-green-br">BIONIX</p>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'my.bionix' ? 'bg-gradient-green-br' : 'bg-[#1C1C1C]' }}">BIONIX</a>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'my.isclass' ? 'bg-gradient-green-br' : 'bg-[#1C1C1C]' }}">IS Class</a>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-blue-r">ICON</p>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-blue-r {{ Route::currentRouteName() == 'my.dsacademy' ? 'bg-gradient-blue-r' : 'bg-[#1C1C1C]' }}">DS Academy</a>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-blue-r {{ Route::currentRouteName() == 'my.uxacademy' ? 'bg-gradient-blue-r' : 'bg-[#1C1C1C]' }}">UX Academy</a>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-blue-r {{ Route::currentRouteName() == 'my.gts' ? 'bg-gradient-blue-r' : 'bg-[#1C1C1C]' }}">Grand Talkshow</a>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-orange-r">RISE</p>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-orange-r {{ Route::currentRouteName() == 'my.bc' ? 'bg-gradient-orange-r' : 'bg-[#1C1C1C]' }}">Business Case</a>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-purple-r">Paradigm</p>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-purple-r {{ Route::currentRouteName() == 'my.hoi' ? 'bg-gradient-purple-r' : 'bg-[#1C1C1C]' }}">Hall of ISE!</a>
                <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-purple-r {{ Route::currentRouteName() == 'my.cp' ? 'bg-gradient-purple-r' : 'bg-[#1C1C1C]' }}">Closing Party</a>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col items-center space-y-4">
                <a href="#" class="flex flex-row items-center justify-center gap-2 group border-[1px] border-white rounded-lg w-full py-2 hover:brightness-75"><x-heroicon-s-question-mark-circle class="w-6 h-6 text-white"/>Bantuan</a>
                <a href="#" class="flex flex-row items-center gap-2 hover:text-red-500 group"><x-heroicon-s-arrow-left-on-rectangle class="w-6 h-6 text-white group-hover:text-red-500" />Logout</a>
            </div>
        </div>
    </div>
    {{-- Mobile End --}}

    {{-- Desktop Start --}}
    <div class="flex-col scrollbar-thin scrollbar-thumb-gray-800 scrollbar-track-gray-500 h-screen w-[260px] bg-[#15161A] text-white fixed top-0 left-0 z-30 hidden lg:flex px-[30px] py-[40px] text-lg scroll overflow-y-auto">
        <div class="flex justify-center">
            <img class="w-10 h-10" src="{{ asset('images/logo-ise.png') }}">
        </div>
        <div class="flex flex-col space-y-2 mt-7 text-[#B5B3BC]">
            <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-home class="w-6 h-6 text-[#B5B3BC]" />Beranda</a>
            <div x-data="{open: false}">
                <button @click="open = !open" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-link class="w-6 h-6 text-[#B5B3BC]" />URL Shortener<x-heroicon-s-chevron-down class="w-6 h-4 text-[#B5B3BC] ml-auto pr-1 mt-1" x-bind:class="open == true ? 'rotate-180' : 'rotate-0'"  /></button>
                <div x-show="open" class="space-y-2 mt-2 ml-12 text-base" x-transition>
                    <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75">New Shortener</a>
                    <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75">Shortener Table</a>
                </div>
            </div>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-green-br">BIONIX</p>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'my.bionix' ? 'bg-gradient-green-br' : 'bg-[#1C1C1C]' }}">BIONIX</a>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-green-br {{ Route::currentRouteName() == 'my.isclass' ? 'bg-gradient-green-br' : 'bg-[#1C1C1C]' }}">IS Class</a>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-blue-r">ICON</p>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-blue-r {{ Route::currentRouteName() == 'my.dsacademy' ? 'bg-gradient-blue-r' : 'bg-[#1C1C1C]' }}">DS Academy</a>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-blue-r {{ Route::currentRouteName() == 'my.uxacademy' ? 'bg-gradient-blue-r' : 'bg-[#1C1C1C]' }}">UX Academy</a>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-blue-r {{ Route::currentRouteName() == 'my.gts' ? 'bg-gradient-blue-r' : 'bg-[#1C1C1C]' }}">Grand Talkshow</a>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-orange-r">RISE</p>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-orange-r {{ Route::currentRouteName() == 'my.bc' ? 'bg-gradient-orange-r' : 'bg-[#1C1C1C]' }}">Business Case</a>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent w-max bg-gradient-purple-r">Paradigm</p>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-purple-r {{ Route::currentRouteName() == 'my.hoi' ? 'bg-gradient-purple-r' : 'bg-[#1C1C1C]' }}">Hall of ISE!</a>
            <a href="#" class="flex items-center justify-between px-[10px] py-[6px] rounded-[10px] hover:bg-gradient-purple-r {{ Route::currentRouteName() == 'my.cp' ? 'bg-gradient-purple-r' : 'bg-[#1C1C1C]' }}">Closing Party</a>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col items-center space-y-4">
            <a href="#" class="flex flex-row items-center justify-center gap-2 group border-[1px] border-white rounded-lg w-full py-2 hover:brightness-75"><x-heroicon-s-question-mark-circle class="w-6 h-6 text-white"/>Bantuan</a>
            <a href="/logout" class="flex flex-row items-center gap-2 hover:text-red-500 group"><x-heroicon-s-arrow-left-on-rectangle class="w-6 h-6 text-white group-hover:text-red-500" />Logout</a>
        </div>
    </div>
    {{-- Desktop End --}}

</div>

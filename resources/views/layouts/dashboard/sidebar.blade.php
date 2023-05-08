<div x-data="{ open: true }">
{{-- Mobile Start --}}
    <div class="flex mt-5 ml-5 md:hidden relative z-10" @click="open = !open">
        <x-heroicon-s-bars-3 class="w-8 h-8 text-white" />
    </div>
{{-- Mobile End --}}
    <div x-show='open' x-transition class="flex-col h-screen w-[260px] bg-[#15161A] text-white fixed top-0 left-0 z-10 flex md:hidden px-[30px] py-[40px] text-lg scroll overflow-y-auto">
        <div class="flex justify-center" @click="open = false" >
            <img class="w-10 h-10" src="{{ asset('images/logo-ise.png') }}">
        </div>
        <div class="flex flex-col space-y-2 mt-7 text-[#B5B3BC]">
            <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-home class="w-6 h-6 text-[#B5B3BC]" />Beranda</a>
            <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-user-group class="w-6 h-6 text-[#B5B3BC]" />Identitas Tim</a>
            <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-credit-card class="w-6 h-6 text-[#B5B3BC]" />Pembayaran</a>
            <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-link class="w-6 h-6 text-[#B5B3BC]" />URL Shortener</a>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-green-br">BIONIX</p>
            <div x-data="{ open: false }">
            <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>BIONIX</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>IS Class</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-blue-r">ICON</p>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>IS Class</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>DS Academy</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>UX Academy</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-orange-r">RISE</p>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>Grand Talkshow</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col space-y-2">
            <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-purple-r">Paradigm</p>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>Hall of ISE!</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
            <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>Closing Party</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                {{-- If Open Start --}}
                <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                    <a href="#" class="hover:brightness-75">item 1</a>
                    <a href="#" class="hover:brightness-75">item 2</a>
                </div>
                {{-- If Open End --}}
            </div>
        </div>
        <hr class="my-4 brightness-75" />
        <div class="flex flex-col items-center space-y-4">
            <a href="#" class="flex flex-row items-center justify-center gap-2 group border-[1px] border-white rounded-lg w-full py-2 hover:brightness-75"><x-heroicon-s-question-mark-circle class="w-6 h-6 text-white"/>Bantuan</a>
            <a href="#" class="flex flex-row items-center gap-2 hover:text-red-500 group"><x-heroicon-s-arrow-left-on-rectangle class="w-6 h-6 text-white group-hover:text-red-500" />Logout</a>
        </div>


    {{-- Desktop Start --}}
        </div>
        <div class="flex-col h-screen w-[260px] bg-[#15161A] text-white fixed top-0 left-0 z-10 hidden md:flex px-[30px] py-[40px] text-lg scroll overflow-y-auto">
            <div class="flex justify-center">
                <img class="w-10 h-10" src="{{ asset('images/logo-ise.png') }}">
            </div>
            <div class="flex flex-col space-y-2 mt-7 text-[#B5B3BC]">
                <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-home class="w-6 h-6 text-[#B5B3BC]" />Beranda</a>
                <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-user-group class="w-6 h-6 text-[#B5B3BC]" />Identitas Tim</a>
                <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-credit-card class="w-6 h-6 text-[#B5B3BC]" />Pembayaran</a>
                <a href="#" class="flex flex-row items-center gap-3 group hover:brightness-75"><x-heroicon-s-link class="w-6 h-6 text-[#B5B3BC]" />URL Shortener</a>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-green-br">BIONIX</p>
                <div x-data="{ open: false }">
                <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>BIONIX</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>IS Class</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-blue-r">ICON</p>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>IS Class</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>DS Academy</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>UX Academy</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-orange-r">RISE</p>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>Grand Talkshow</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col space-y-2">
                <p href="#" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-purple-r">Paradigm</p>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>Hall of ISE!</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
                <div x-data="{ open: false }">
                    <a href="#"  @click="open = !open" class="flex items-center justify-between bg-[#1C1C1C] px-[10px] py-[6px] rounded-[10px] hover:brightness-75"><span>Closing Party</span><x-heroicon-s-chevron-down class="w-4 h-4 text-white" /></a>
                    {{-- If Open Start --}}
                    <div x-show="open" x-transition class="flex flex-col space-y-2 pl-6 py-2">
                        <a href="#" class="hover:brightness-75">item 1</a>
                        <a href="#" class="hover:brightness-75">item 2</a>
                    </div>
                    {{-- If Open End --}}
                </div>
            </div>
            <hr class="my-4 brightness-75" />
            <div class="flex flex-col items-center space-y-4">
                <a href="#" class="flex flex-row items-center justify-center gap-2 group border-[1px] border-white rounded-lg w-full py-2 hover:brightness-75"><x-heroicon-s-question-mark-circle class="w-6 h-6 text-white"/>Bantuan</a>
                <a href="#" class="flex flex-row items-center gap-2 hover:text-red-500 group"><x-heroicon-s-arrow-left-on-rectangle class="w-6 h-6 text-white group-hover:text-red-500" />Logout</a>
            </div>



        </div>
    {{-- Desktop End --}}

</div>

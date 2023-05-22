
<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<nav
class="z-[999] flex flex-row justify-between font-montserrat px-5 sm:px-[34px] items-center xl:px-[130px] pt-[50px] md:items-center fixed top-0 w-full"
x-data="{ isOpen: false } ">

        <!-- logo ISE -->
        <div class="hidden md:block md:w-[3.5rem] xl:w-[6.5rem]">
            <a href="/">
                <img src="{{asset('images/LogoISE.png')}}" alt="logo" ></img>
            </a>
        </div>

        <!-- hamburger -->
        <button
        @click="isOpen = true" id="hamburger" name="hamburger"
        type="button"
        class="block md:hidden space-y-[2.77px]"
        :class="{ 'transition transform-180': isOpen }">
            <x-heroicon-o-bars-3 class="w-7 h-7 text-[#6B6F75]" />
        </button>

        <!-- navbar menu mobile-->
        <div x-show="{isOpen}" x-transition x-cloak @mousedown.outside="isOpen = false" class="flex flex-col justify-between bg-[#191A1E] text-[#5C5C5C] px-[25px] py-[19px] text-[10.2px] space-y-4" :class="{'absolute w-full min-h-screen top-0 left-0': isOpen, ' hidden': !isOpen }">
            <div class="flex flex-col gap-6">
                <div class="md:hidden w-screen flex flex-row justify-between mb-2">

                    <div class="relative left-0">
                        <a href="/">
                            <img src="{{asset('images/LogoISE.png')}}" alt="logo" ></img>
                        </a>
                    </div>
                    <div @click="isOpen = false" class="relative right-5">
                        <button class="w-[97.8px] text-2xl align-center cursor-pointer alert-del scale-125">&times;</button>
                    </div>
                </div>
                <a href="#" class="text-[0.875rem] sm:text-base bg-clip-text bg-gradient-to-r from-[#006C56] to-[#afd196] hover:text-transparent focus:text-transparent font-semibold">Home</a>

                <div x-data="{BionixOpen: false}" >
                    <div class="flex gap-2"><a href="#" class="text-[0.875rem] sm:text-base order-first bg-clip-text bg-gradient-green-r hover:text-transparent focus:text-transparent font-semibold whitespace-nowrap">BIONIX</a>
                        <button @click="BionixOpen = !BionixOpen" class="w-full"><x-bi-chevron-down class="w-4 h-4 transition duration-150" x-bind:class="BionixOpen ? 'rotate-180' : 'rotate-0' " /></button>
                </div>
                <div x-show="BionixOpen" class="relative top-0 text-[0.625rem] sm:text-[0.75rem]">
                    <div  class="bg-[#191A1E] rounded-[10px] px-[9px] py-[1rem]">
                        <div class="grid gap-[1rem] ">
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] ">
                                <a href="#" class="bg bg-clip-text bg-gradient-green-r hover:text-transparent focus:text-transparent font-semibold text-[12px]">IS CLASS</a></a>
                            </div>
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] ">
                                <a href="#" class="bg bg-clip-text bg-gradient-green-r hover:text-transparent focus:text-transparent font-semibold text-[12px]">Bionix Competition</a></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{IconOpen: false}">
                <div class="flex gap-2 items-center">
                    <a href="#" class="text-[0.875rem] sm:text-base bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent font-semibold whitespace-nowrap">IT Convention</a>
                    <button @click="IconOpen = !IconOpen" class="w-full"><x-bi-chevron-down class="w-4 h-4 transition duration-150" x-bind:class="IconOpen ? 'rotate-180' : 'rotate-0'" /></button>
                </div>
                <div x-show="IconOpen" class="relative top-0 text-[0.625rem] sm:text-[0.75rem]" >
                    <div class="bg-[#191A1E] rounded-[10px] px-[9px] py-[12px]">
                        <div class="grid gap-[1rem]" >
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24]">
                                <a href="#" class="bg bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent font-semibold text-[12px]">DS Academy</a></a>
                            </div>
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24]">
                                <a href="#" class="bg bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent font-semibold text-[12px]"> UX Academy</a></a>
                            </div>
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24]">
                                <a href="#" class="bg bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent font-semibold text-[12px]">Grand Talkshow </a></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-[0.875rem] sm:text-base bg-clip-text bg-gradient-orange-r hover:text-transparent focus:text-transparent font-semibold">
            <a href="#"+ >RISE</a>
            </div>
                <div class="text-[0.875rem] sm:text-base bg-clip-text bg-gradient-purple-r hover:text-transparent focus:text-transparent font-semibold">
                <a href="#">Paradigm</a>
            </div>
</div>
            <div class="flex flex-col gap-[7.72px] md:hidden text-[1rem] mt-2">
                <a href="/register" class=" text-center px-[66px] py-[5.79px] font-semibold rounded-[4.12px] text-[#F3F3F3] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] border-[0.686667px]">Sign Up</a>
                <a href="/login" class=" text-center px-[5.313rem] py-[5.79px] font-semibold rounded-[4.12px] text-[#F3F3F3] bg-gradient-to-r from-[#006C56] to-[#AFD196]">Login</a>
            </div>
            <!-- After Login -->
            <!-- <div class="flex flex-col gap-[7.72px] md:hidden text-[1rem] mt-2">
                <a href="/my" class="text-center px-[5.313rem] py-[5.79px] font-semibold rounded-[4.12px] text-[#F3F3F3] bg-gradient-to-r from-[#006C56] to-[#AFD196]">Dashboard</a>
                <a href="/logout" class="text-center px-[66px] py-[5.79px] font-semibold rounded-[4.12px] text-[#F3F3F3] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] border-[0.686667px]">Logout</a>
            </div> -->
        </div>

        <!-- Navbar Menu Desktop -->
        <div class="hidden md:flex md:flex-row justify-between bg-[#191A1E] text-[#5C5C5C] md:gap-[35px] xl:gap-[60px] md:rounded-full text-[10.2px] xl:text-[16px] font-semibold px-[25px] md:py-[2px] xl:py-[11px]">
            <a href="#" class="xl:text-[16px] py-[18px] bg-clip-text bg-gradient-to-r from-[#006C56] to-[#afd196] hover:text-transparent focus:text-transparent ">Home</a>
            <div x-data="{BionixOpen: false}" @mouseleave="BionixOpen = false" @mouseover="BionixOpen = true">
                <div class="flex gap-2 items-center group cursor-pointer">
                    <a href="#" class="order-first py-[18px] bg-clip-text bg-gradient-green-r group-hover:text-transparent focus:text-transparent">BIONIX</a>
                    <x-bi-chevron-down class="w-4 h-4 transition duration-150 group-hover:rotate-180 group-hover:text-green-200" />
                </div>
                <div x-show="BionixOpen" class="absolute top-0 md:top-[90px] xl:top-[120px] ">
                    <div class="block h-8 bg-transparent"></div>
                    <div  class="bg-[#191A1E] rounded-[10px] px-[9px] py-[12px]">
                        <div class="grid gap-[15px]">
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] my-[5px]">
                                <a>
                                    <div class="bg bg-clip-text bg-gradient-green-r hover:text-transparent focus:text-transparent cursor-pointer">IS CLASS</div>
                                </a>
                            </div>
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] my-[5px]">
                                <a>
                                    <div class="bg bg-clip-text bg-gradient-green-r hover:text-transparent focus:text-transparent cursor-pointer">Bionix Competition
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div x-data="{IconOpen: false}" @mouseover="IconOpen = true" @mouseleave="IconOpen = false" >
                <div class="flex gap-2 items-center group cursor-pointer">
                    <a href="#" class="py-[18px] bg-clip-text bg-gradient-blue-r group-hover:text-transparent focus:text-transparent">IT Convention</a>
                    <x-bi-chevron-down class="w-4 h-4 transition duration-150 group-hover:rotate-180 group-hover:text-blue-200" />
                </div>
                <div x-show="IconOpen" class="absolute md:top-[90px] xl:top-[120px]">
                    <div class="block h-8 bg-transparent"></div>
                    <div class="bg-[#191A1E] rounded-[10px] px-[9px] py-[12px]">
                        <div class="grid gap-[15px]">
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] my-[5px]">

                                    <div class="bg bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent"> <a href="#">DS Academy</a></div>

                            </div>
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] my-[5px]">

                                    <div class="bg bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent"> <a href="#">UX Academy</a></div>

                            </div>
                            <div class="px-[10px] py-[5px] rounded-[5px] hover:bg-[#1C1E24] my-[5px]">

                                    <div class="bg bg-clip-text bg-gradient-blue-r hover:text-transparent focus:text-transparent"><a href="#">Grand Talkshow</a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-[18px] bg-clip-text bg-gradient-orange-r hover:text-transparent focus:text-transparent ">
            <a href="#" >RISE</a>
            </div>
            <div class="py-[18px] bg-clip-text bg-gradient-purple-r hover:text-transparent focus:text-transparent ">
            <a href="#">Paradigm</a>
            </div>
        </div>

        <!-- sign up & sign in -->
        <div class="flex gap-[0.278rem] xl:gap-[0.625rem]">
            <a href="/register" class="text-center text-[8.24px] md:text-[10.5px] xl:text-[1rem] px-[0.5rem] md:px-[8px] xl:px-[12px] py-[5.49px] md:py-[8px] border-[0.686667px] xl:border-[1px] border-[#66C1A7] xl:border-[#66C1A7] rounded-[4.12px] xl:rounded-[6px] text-[#F3F3F3] xl:text-[#F3F3F3] font-semibold xl:font-semibold hover:bg-gradient-green-r">Sign Up</a>
            <a href="/login" class="text-center text-[8.24px] md:text-[10.5px] xl:text-[1rem] px-[0.658rem] md:px-[8px] xl:px-[12px] py-[5.49px] md:py-[8px] rounded-[4.12px] xl:rounded-[6px] bg-gradient-to-r from-[#006C56] to-[#AFD196] text-[#f3f3f3] xl:font-semibold sm">Login</a>
        </div>
        <!-- <div class="flex gap-[0.278rem] xl:gap-[0.625rem]">
            <a href="/my" class="text-center text-[8.24px] md:text-[10.5px] xl:text-[1rem] px-[0.658rem] md:px-[8px] xl:px-[12px] py-[5.49px] md:py-[8px] rounded-[4.12px] xl:rounded-[6px] bg-gradient-to-r from-[#006C56] to-[#AFD196] text-[#f3f3f3] xl:font-semibold sm">Dashboard</a>
            <a href="/logout" class="text-center text-[8.24px] md:text-[10.5px] xl:text-[1rem] px-[0.5rem] md:px-[8px] xl:px-[12px] py-[5.49px] md:py-[8px] border-[0.686667px] xl:border-[1px] border-[#66C1A7] xl:border-[#66C1A7] rounded-[4.12px] xl:rounded-[6px] text-[#F3F3F3] xl:text-[#F3F3F3] font-semibold xl:font-semibold hover:bg-gradient-green-r">Logout</a>
        </div> -->

</nav>

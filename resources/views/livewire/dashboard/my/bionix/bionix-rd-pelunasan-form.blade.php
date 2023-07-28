@section('title', 'Bionix Roadshow | Pelunasan')
<div class="bg-[#121316]">
    <div class ="relative min-h-screen mx-auto overflow-hidden">
        <div class="">
            <div class="fixed left-0 top-[470px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed left-0 top-[870px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed left-0 top-[35px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed right-0 top-[370px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
        </div>
        <div class="relative overflow-hidden mx-4 sm:mx-12 md:mx-20 lg:mx-32 xl:mx-40 2xl:mx-48 text-white my-20 md:my-28 lg:my-40 bg-[#1C1C1C] z-10 font-['Montserrat'] shadow-2xl shadow-black">
            <header>
                <img class="w-full mb-7" src="{{asset('images/bionix-pelunasan/RISEheader-bionix.svg')}}">
                <p class="text-center px-10 my-6 sm:my-10 lg:my-16 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl">Form Pelunasan BIONIX</p>
            </header>
            <form wire:submit.prevent="submit" enctype="multipart/form-data">
                <div class="px-4 sm:px-6 md:px-12 lg:px-20 xl:px-28 2xl:px-36 font-['Montserrat']">
                    <div class="flex flex-col">
                        <label for="team_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl">Nama Tim<span class="text-[#FF1F00] ml-1">*</span></label>
                        <input
                            id="team_name"
                            class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] focus:text-[##7DD7BD] focus:placeholder:text-[##7DD7BD] focus:border-b-[##7DD7BD] lg:focus:text-xl lg:placeholder:text-xl @error('team_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                            type="text"
                            placeholder="Masukkan nama tim kamu"
                            disabled
                            value="{{ $peserta->team_name }}"
                        />
                    </div>
                    <div class="flex flex-col items-start justify-center my-4 mt-10 text-sm text-white sm:text-xl">
                        <h3 class="font-medium">Sisa tagihan:</h3>
                        {{-- Harga dynamic here --}}
                        <p class="text-base font-bold sm:text-2xl">Rp. {{ $tagihan }}</p>
                    </div>
                    <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                        <label for="bukti" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                        >Bukti Pelunasan Pembayaran<span class="text-[#FF1F00] ml-1">*</span>
                        </label>
                        <label
                        class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('bukti') border-red-500 @else border-[#7DD7BD] @enderror">
                        <div
                            class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]">
                            <x-heroicon-s-cloud-arrow-up
                            class="w-4 lg:w-8 h-4 lg:h-8 @error('bukti') text-red-500 @else text-slate-100 @enderror"
                            />
                            <input
                            type="file"
                            class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('bukti') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                            wire:model="bukti"
                            id="bukti"
                            name="bukti"
                            required
                            />
                        </div>
                        </label>
                        @error('bukti')
                        <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                        @enderror
                    </div>
                    <button
                    wire:click="submit"
                    type="submit"
                    class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:py-3.5 h-12 lg:h-14 flex justify-center items-center"
                  >
                    <span wire:loading.remove>Submit</span>
                    <div
                      wire:loading
                      class="inline-block h-6 w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                      role="status"
                    >
                      <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                        >Loading...</span
                      >
                    </div>
                  </button>
                </div>

            </form>
            <div class="flex flex-row items-center justify-between pb-10 mx-12 mt-12 sm:mx-32 sm:mt-24 sm:pb-14">
                    <a href="https://wa.me/+6281332049750" class="items-center hover:brightness-90">
                    <img
                        class="w-[45 px] h-[40px] lg:w-[55px] lg:h-[50px] align-top hover:opacity-60"
                        src="{{ asset('/images/whatsapp.png ') }}"
                    />
                    </a>
                    <div class="flex flex-row items-center gap-2 md:gap-3 text-slate-300">
                    <a href="https://www.instagram.com/is_expo/" target="blank">
                        <x-bi-instagram class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                    </a>
                    <a href="https://tiktok.com" target="blank">
                        <x-bi-tiktok class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                    </a>
                    <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/" target="blank">
                        <x-bi-linkedin class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                    </a>
                    </div>
            </div>
        </div>
    </div>
</div>

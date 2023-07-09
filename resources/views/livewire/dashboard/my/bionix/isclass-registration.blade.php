<div class="relative justify-center bg-[#141414] font-montserrat overflow-hidden h-auto">
  <div class="relative hidden md:block">
    <img class="absolute left-0" src="{{asset('images/isclass/bg-pc-1.png')}}" />
    <img class="absolute left-0 top-[640px]" src="{{asset('images/isclass/bg-pc-2.png')}}" />
    <img class="absolute left-0 bottom-0" src="{{asset('images/isclass/bg-pc-3.png')}}" />
    <img class="absolute right-0" src="{{asset('images/isclass/bg-pc-4.png')}}" />
  </div>
  <div class="relative block md:hidden">
    <img class="absolute left-0" src="{{asset('images/isclass/bg-mobile-1.png')}}" />
    <img class="absolute left-0 top-[640px]" src="{{asset('images/isclass/bg-mobile-2.png')}}" />
    <img class="absolute left-0 bottom-0" src="{{asset('images/isclass/bg-mobile-3.png')}}" />
    <img class="absolute right-0" src="{{asset('images/isclass/bg-mobile-4.png')}}" />
  </div>
  <div
    x-data="{step : 1}"
    class="flex justify-center min-h-screen w-full font-montserrat relative z-0 px-6 pt-20 pb-11 lg:p-52"
  >
    <div class="flex justify-between flex-col relative w-full pb-10 h-max lg:h-max bg-[#1C1C1C] shadow-xl">
      {{-- Header Form --}}
      <div class="relative">
        <img class="w-full h-auto" src="{{ asset('images/isclass/RISE.png') }}" />
        {{-- Form Content --}}
        <div class="flex justify-center relative">
          <h1
            class="text-white text-center mt-[30px] mb-[30px] lg:mt-[62px] lg:mb-[50px] text-[16px] lg:text-[26px] font-bold px-4"
          >
            Form Pendaftaran IS CLASS
          </h1>
        </div>
        <div class="relative flex flex-row pb-6 w-full">
          <div
            class="relative max-w-1/3 w-full h-[2px] bg-white flex self-center justify-self-center"
            x-bind:class="step >= 1 ? 'bg-gradient-green-r' : 'bg-white'"
          ></div>
          <div
            class="w-8 lg:w-16 h-8 lg:h-16 rounded-full p-2"
            x-bind:class="step >= 1 ? 'bg-gradient-green-r' : 'bg-white'"
          >
            <x-heroicon-s-identification class="w-4 lg:w-12 text-white" />
          </div>
          <div
            class="relative max-w-1/3 w-full h-[2px] bg-white flex self-center justify-self-center"
            x-bind:class="step >= 2 ? 'bg-gradient-green-r' : 'bg-white'"
          ></div>
          <div
            class="w-8 lg:w-16 h-8 lg:h-16 rounded-full p-2"
            x-bind:class="step >= 2 ? 'bg-gradient-green-r' : 'bg-white'"
          >
            <x-heroicon-s-lock-closed class="w-4 lg:w-12" x-bind:class="step >= 2 ? 'text-white' : 'text-[#B5B3BC]'" />
          </div>
          <div class="relative max-w-1/3 w-full h-[2px] bg-white flex self-center justify-self-center"></div>
        </div>
        <!-- form -->
        <form
          wire:submit.prevent="submit"
          class="mx-10 md:mx-14 flex flex-col text-white"
          encytype="multipart/form-data"
        >
          <!-- step 1 -->
          <div x-show="step == 1" class="flex flex-col space-y-[15px]">
            <div class="block">
              <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="nama"
                >Nama <span class="text-[#FF1F00]">*</span></label
              >
              <input
                wire:model="nama"
                id="nama"
                name="nama"
                type="text"
                placeholder="Masukan nama lengkap kamu"
                class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]"
              />
              @error('nama')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>

            <div>
              <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="asal_instansi"
                >Asal Sekolah <span class="text-[#FF1F00]">*</span></label
              >
              <input
                wire:model="asal_sekolah"
                id="asal_sekolah"
                name="asal_sekolah"
                type="text"
                placeholder="Masukkan asal sekolah kamu"
                class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]"
              />
              @error('asal_sekolah')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group cursor-pointer">
              <label
                for="kartu_pelajar"
                class="block leading-normal text-xs md:text-base xl:text-xl font-medium text-white"
                >Foto Kartu Pelajar <span class="text-[#FF1F00]">*</span>
              </label>
              <label
                class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer"
              >
                <div class="flex flex-row items-center gap-1 hover:brightness-75">
                  <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                  <input
                    type="file"
                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500 file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer cursor-pointer"
                    wire:model="kartu_pelajar"
                    id="kartu_pelajar"
                    name="kartu_pelajar"
                  />
                </div>
              </label>
              <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                Max size 1mb (.jpg, .jpeg, png)
              </label>
              @error('kartu_pelajar')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group cursor-pointer">
              <label for="poster" class="block leading-normal text-xs md:text-base xl:text-xl font-medium text-white"
                >Bukti Upload Poster <span class="text-[#FF1F00]">*</span>
              </label>
              <label
                class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer"
              >
                <div class="flex flex-row items-center gap-1 hover:brightness-75">
                  <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                  <input
                    type="file"
                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500 file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer cursor-pointer"
                    wire:model="poster"
                    id="poster"
                    name="poster"
                  />
                </div>
              </label>
              <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                Max size 1mb (.jpg, .jpeg, png)
              </label>
              @error('poster')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>

            <div>
              <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="twibbon"
                >Link Upload Twibbon <span class="text-[#FF1F00]">*</span></label
              >
              <input
                wire:model="twibbon"
                id="twibbon"
                name="twibbon"
                type="text"
                placeholder="Masukan link postingan twibbon kamu"
                class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]"
              />
              @error('twibbon')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <!-- step 2 -->
          <div x-show="step == 2" class="flex flex-col space-y-[45px]">
            <p class="text-xs md:text-sm lg:text-base xl:text-lg font-medium text-white">
              Commitment fee digunakan sebagai jaminan dan uang akan dikembalikan apabila sudah mengikuti kegiatan
              sampai akhir
            </p>

            <div class="relative z-0 w-full mb-6 group cursor-pointer">
              <label
                for="bukti_bayar"
                class="block leading-normal text-xs md:text-base xl:text-xl font-medium text-white"
                >Foto Bukti Pembayaran <span class="text-[#FF1F00]">*</span>
              </label>
              <label
                class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer"
              >
                <div class="flex flex-row items-center gap-1 hover:brightness-75">
                  <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                  <input
                    type="file"
                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500 file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer cursor-pointer"
                    wire:model="bukti_bayar"
                    id="bukti_bayar"
                    name="bukti_bayar"
                  />
                </div>
              </label>
              <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                Max size 1mb (.jpg, .jpeg, png)
              </label>
              @error('bukti_bayar')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group cursor-pointer">
              <label for="tf_method" class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1"
                >Metode Transfer <span class="text-[#FF1F00]">*</span>
              </label>
              <select
                wire:model="tf_method"
                id="tf_method"
                name="tf_method"
                class="bg-[#1C1C1C] border-b-[1.4px] text-white text-sm block w-full p-2.5 text-[11px] md:text-sm xl:text-lg border-[#C5C5C5] rounded-none"
              >
                <option selected>Pilih metode transfer</option>
                <option value="BCA">BCA - 90281741024</option>
                <option value="BNI">BNI - 0811111111</option>
              </select>
              @error('tf_method')
              <span class="block text-red-500 text-sm font-thin">{{ $message }}</span>
              @enderror
            </div>
          </div>

          <!-- button -->
          <div class="mt-10 text-center">
            <!-- button 1 -->
            <div x-bind:class="step == 1 ? 'grid' : 'hidden'">
              <p
                class="bg-gradient-green-r px-8 md:px-24 py-1 md:py-3 rounded-[6px] cursor-pointer hover:opacity-60"
                @click="step=2"
                x-show="step==1"
              >
                Next
              </p>
            </div>

            <!-- button 2 -->
            <div class="grid sm:grid-flow-col gap-2 sm:gap-[16px] mt-32" x-bind:class="step == 2 ? 'grid' : 'hidden'">
              <p
                class="bg-red-500 px-4 py-2.5 rounded-[6px] cursor-pointer hover:opacity-60 font-semibold"
                @click="step=1"
                x-show="step==2"
              >
                Back
              </p>
              <div x-show="step==2" class="bg-gradient-green-r rounded-[6px] cursor-pointer hover:opacity-60">
                <button
                  type="submit"
                  class="text-white bg-gradient-green-r hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[16px] w-full h-[42px] lg:h-[48px] px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#66C1A7] hover:opacity-80"
                >
                  <span wire:loading.remove>Submit</span>
                  <div
                    wire:loading
                    class="inline-block h-6 w-6 animate-spin rounded-full xl:mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                    role="status"
                  >

                  </div>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- footer icon -->

      <div class="mx-7 mt-[38px] flex justify-between flex-row items-center">
        <a href="https://www.wa.me/+62911" class="items-center hover:brightness-90">
          <img
            class="w-[45 px] h-[40px] lg:w-[55px] lg:h-[50px] align-top hover:opacity-60"
            src="{{ asset('/images/whatsapp.png ') }}"
          />
        </a>
        <div class="flex flex-row gap-2 md:gap-3 items-center text-slate-300">
          <a href="https://www.instagram.com/is_expo/" target="blank">
            <x-bi-instagram class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
          </a>
          <a href="https://tiktok.com" target="blank">
            <x-bi-tiktok class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
          </a>
          <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/" target="blank">
            <x-bi-linkedin class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

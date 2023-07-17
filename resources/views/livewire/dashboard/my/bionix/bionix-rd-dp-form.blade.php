@section('title', 'Bionix Roadshow | DP')
<div x-data="{step:1}" class="bg-[#121316]">
  <div class="relative min-h-screen overflow-hidden mx-auto">
    <div class="">
      <div class="fixed left-0 top-[470px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
      <div class="fixed left-0 top-[870px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
      <div class="fixed left-0 top-[35px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
      <div
        class="fixed right-0 top-[370px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"
      ></div>
    </div>
    <div
      class="relative overflow-hidden mx-4 sm:mx-12 md:mx-20 lg:mx-32 xl:mx-40 2xl:mx-48 text-white my-20 md:my-28 lg:my-40 bg-[#1C1C1C] z-10 font-['Montserrat'] shadow-2xl shadow-black"
    >
      <header>
        <img class="w-full mb-7" src="{{asset('images/bionix-regist/ICON.png')}}" alt="" />
        <p
          class="text-center px-10 my-8 sm:my-12 lg:my-20 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl"
          x-show="step<=2"
        >
          Form Pendaftaran BIONIX COMPETITION
        </p>
        <div>
          <div class="flex flex-col w-full justify-center">
            <div class="bg-transparent w-[15%] xs:w-[10%] aspect-square"></div>
            <div class="absolute z-20 w-full">
              <div class="flex justify-center">
                {{-- progress rounded start --}}
                <div class="flex justify-around w-4/5">
                  {{-- identitas step 1,2,3,4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=1"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#006C56] to-[#AFD196] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/sekolah.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                    >
                      Sekolah
                    </p>
                  </div>
                  {{-- identitas step 1,2,3,4,5 end --}} {{-- Ketua step 1 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step<=1"
                  >
                    <div class="flex items-center justify-center bg-white w-full aspect-square rounded-full">
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/detail-before.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                    >
                      Detail
                    </p>
                  </div>
                  {{-- Ketua step 1 end --}} {{-- Ketua step 2,3,4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=2"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#006C56] to-[#AFD196] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/detail.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                    >
                      Ketua
                    </p>
                  </div>

                </div>
                {{-- progress rounded end --}}
              </div>
            </div>
            <div class="bg-gray-400 w-full h-1 absolute"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[30%] h-1 absolute z-10" x-show="step==1"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[70%] h-1 absolute z-10" x-show="step==2"></div>
          </div>
        </div>
      </header>
      <div class="mt-14 sm:mt-16 lg:mt-20">
        <div class="px-4 sm:px-6 md:px-12 lg:px-20 xl:px-28 2xl:px-36 font-['Montserrat']">
          {{-- form input start --}}
          <form wire:submit.prevent="submit" enctype="multipart/form-data">
            {{-- step 1 --}}
            <div x-show="step==1">
              <div class="flex flex-col">
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="school" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Sekolah Asal<span
                      class="text-[#FF1F00] ml-1"
                      >*</span
                    ></label
                  >

                  <select
                    name="school"
                    id="school"
                    wire:model="school"
                    x-model="school"
                    class="w-full bg-[#1C1C1C] border-solid border-b-[#FFEEE4] border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#348BB6] text-[#7C7C7C] focus:border-b-[#66C1A7] mb-3 md:mb-4"
                    required
                  >
                  <!-- option belum ada -->
                    <option class="bg-[#1C1C1C] text-[#348BB6]" value="" selected>Pilih asal sekolah kamu</option>
                    @foreach ($payment_methods as $payment_method)
                    <option class="bg-[#1C1C1C] text-[#348BB6]" value="{{ $payment_method }}">{{ $payment_method }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            {{-- step 1 end --}}
            {{-- step 2 start --}}
            <div x-show="step==2">
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_name" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                  >Nama Ketua<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="leader_name"
                  wire:model="leader_name"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('leader_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama lengkap ketua tim kamu"
                  required
                />
                @error('leader_name')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="team_name" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                  >Nama Tim<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="team_name"
                  wire:model="team_name"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('team_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama tim kamu"
                  required
                />
                @error('team_name')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="rek_name" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                  >Nama Rekening<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="rek_name"
                  wire:model="rek_name"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('rek_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama rekening kamu"
                  required
                />
                @error('rek_name')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="payment_method" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Metode Pembayaran<span
                      class="text-[#FF1F00] ml-1"
                      >*</span
                    ></label
                  >

                  <select
                    name="payment_method"
                    id="payment_method"
                    wire:model="payment_method"
                    x-model="payment_method"
                    class="w-full bg-[#1C1C1C] border-solid border-b-[#FFEEE4] border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#348BB6] text-[#7C7C7C] focus:border-b-[#66C1A7] mb-3 md:mb-4"
                    required
                  >
                    <option class="bg-[#1C1C1C] text-[#348BB6]" value="" selected>Pilih metode pembayaran kamu</option>
                    @foreach ($payment_methods as $payment_method)
                    <option class="bg-[#1C1C1C] text-[#348BB6]" value="{{ $payment_method }}">{{ $payment_method }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="nominal_dp" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                  >Nominal DP<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="nominal_dp"
                  wire:model="nominal_dp"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('nominal_dp') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nominal DP"
                  required
                />
                @error('nominal_dp')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
              </div>

              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="payment_proof" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                  >Bukti Transfer DP<span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('payment_proof') border-red-500 @else border-[#66C1A7] @enderror"
                >
                  <div class="flex flex-row items-center gap-1">
                    <x-heroicon-s-cloud-arrow-up
                      class="w-4 lg:w-8 h-4 lg:h-8 @error('payment_proof') text-red-500 @else text-slate-100 @enderror"
                    />
                    <input
                      type="file"
                      class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('payment_proof') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                      wire:model="payment_proof"
                      id="payment_proof"
                      name="payment_proof"
                      required
                    />
                  </div>
                </label>
                @error('payment_proof')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                  >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                >
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="promo_code" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                  >Kode Promo<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="promo_code"
                  wire:model="promo_code"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('promo_code') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan kode promo yang kamu miliki"
                  required
                />
                @error('promo_code')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
              </div>
            </div>
              {{-- step 2 end --}}

          </form>
          {{-- form input end --}} {{-- button start --}}
          <div>
            {{-- button step 1 start--}}
            <div x-show="step==1" class="flex w-full flex-row items-center gap-4">
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:brightness-75 hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=2">
                Next
              </button>

            </div>
            {{-- button step 1 end--}}
            {{-- button step 2 start--}}
            <div x-show="step==2" class="flex w-full flex-row items-center gap-4">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                  @click.prevent="step=1">
                  Back
                </button>
                <button
                wire:click="submit"
                type="submit"
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:brightness-75 hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center "
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
            {{-- button step 4 end--}}


          </div>
          {{-- button end --}}
          {{-- footer start --}}
          <footer class="mt-10 sm:mt-24 pb-10 sm:pb-14 flex justify-between flex-row items-center">
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
          </footer>
          {{-- footer end --}}
        </div>
      </div>
    </div>
  </div>
</div>


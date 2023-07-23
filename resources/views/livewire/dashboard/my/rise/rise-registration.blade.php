@section('title', 'Bionix Registration')
<div x-data="{step:1}" class="bg-[#121316]">
  <div class="relative min-h-screen mx-auto overflow-hidden">
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
        <img class="w-full mb-7" src="{{asset('images/pendaftaran-rise/RISE.png')}}" alt="" />
        <p
          class="text-center px-10 my-8 sm:my-12 lg:my-20 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl"
          x-show="step<=2"
        >
          Form Pendaftaran RISE
        </p>
        {{-- progress bar start --}}
        <div>
          <div class="flex flex-col justify-center w-full">
            <div class="bg-transparent w-[15%] xs:w-[10%] aspect-square"></div>
            <div class="absolute z-20 w-full">
              <div class="flex justify-center">
                {{-- progress rounded start --}}
                <div class="flex justify-between w-4/5">
                  {{-- identitas step 1,2,3,4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=1"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#ffa672] to-[#FFD693] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/identitas1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#ffa672] to-[#FFD693] bg-clip-text text-transparent"
                    >
                      Identitas Tim
                    </p>
                  </div>
                  {{-- identitas step 1,2,3 end --}} {{-- Ketua step 1 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step<=1"
                  >
                    <div class="flex items-center justify-center w-full bg-white rounded-full aspect-square">
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/ketua.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                    >
                      Anggota 1
                    </p>
                  </div>
                  {{-- Ketua step 1 end --}} {{-- Ketua step 2,3,4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=2"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#ffa672] to-[#FFD693] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/ketua1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#ffa672] to-[#FFD693] bg-clip-text text-transparent"
                    >
                      Anggota 1
                    </p>
                  </div>
                  {{-- Ketua step 3,4,5 end --}} {{-- Anggota step 1,2 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step<=2"
                  >
                    <div class="flex items-center justify-center w-full bg-white rounded-full aspect-square">
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/anggota.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                    >
                      Anggota 2
                    </p>
                  </div>
                  {{-- Anggota step 1,2 end --}} {{-- Anggota step 3,4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=3"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#ffa672] to-[#FFD693] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/anggota1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#ffa672] to-[#FFD693] bg-clip-text text-transparent"
                    >
                      Anggota 2
                    </p>
                  </div>
                  {{-- Anggota step 3,4,5 end --}}
                </div>
                {{-- progress rounded end --}}
              </div>
            </div>
            <div class="absolute w-full h-1 bg-gray-400"></div>
            <div class="bg-gradient-to-r from-[#ffa672] to-[#FFD693] w-[10%] h-1 absolute z-10" x-show="step==1"></div>
            <div class="bg-gradient-to-r from-[#ffa672] to-[#FFD693] w-[50%] h-1 absolute z-10" x-show="step==2"></div>
            <div class="bg-gradient-to-r from-[#ffa672] to-[#FFD693] w-[100%] h-1 absolute z-10" x-show="step==3"></div>
          </div>
        </div>
        {{-- progress bar end --}}
      </header>
      <div class="mt-14 sm:mt-16 lg:mt-20">
        <div class="px-4 sm:px-6 md:px-12 lg:px-20 xl:px-28 2xl:px-36 font-['Montserrat']">
          {{-- form input start --}}
          <form wire:submit.prevent="submit" enctype="multipart/form-data">
            {{-- step 1 --}}
            <div x-show="step==1">
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="team_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nama Tim<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="team_name"
                      wire:model="team_name"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('team_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nama Tim kamu"
                      required
                    />
                    @error('team_name')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_agency" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Asal Instansi<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_agency"
                      wire:model="leader_agency"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_agency') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Asal Instansi kamu"
                      required
                    />
                    @error('leader_agency')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nama Ketua<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_name"
                      wire:model="leader_name"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nama Ketua kamu"
                      required
                    />
                    @error('leader_name')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_phone" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nomor Telepon<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_phone"
                      wire:model="leader_phone"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_phone') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nomor Telepon aktif kamu"
                      required
                    />
                    @error('leader_phone')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_email" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Email<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_email"
                      wire:model="leader_email"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_email') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="email"
                      placeholder="Masukkan Email aktif kamu"
                      required
                    />
                    @error('leader_email')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_twibbon" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Link Upload Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_twibbon"
                      wire:model="leader_twibbon"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_twibbon') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Link Upload Twibbon kamu"
                      required
                    />
                    @error('leader_twibbon')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="referral_code" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Kode Referral</label
                    >
                    <input
                      id="referral_code"
                      wire:model="referral_code"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('referral_code') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Kode Referral aktif kamu"
                    />
                    @error('referral_code')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_student_card" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload Foto Kartu Mahasiswa<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_student_card') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div
                        class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]"
                      >
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('leader_student_card') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('leader_student_card') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="leader_student_card"
                          id="leader_student_card"
                          name="leader_student_card"
                          required
                        />
                      </div>
                    </label>
                    @error('leader_student_card')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_poster" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload foto poster di Story<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_poster') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('leader_poster') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('leader_poster') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="leader_poster"
                          id="leader_poster"
                          name="leader_poster"
                          required
                        />
                      </div>
                    </label>
                    @error('leader_poster')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_ig_follow" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload foto Bukti Follow Instagram
                      <a
                        href="https://www.instagram.com/is_expo/"
                        class="text-transparent bg-gradient-orange-br bg-clip-text hover:underline decoration-orange-500"
                        >ISE</a
                      >
                      <span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_ig_follow') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('leader_ig_follow') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('leader_ig_follow') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="leader_ig_follow"
                          id="leader_ig_follow"
                          name="leader_ig_follow"
                          required
                        />
                      </div>
                    </label>
                    @error('leader_ig_follow')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
            </div>
            {{-- step 1 end --}} {{-- step 2 start --}}
            <div x-show="step==2">
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nama Anggota 1<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="member1_name"
                      wire:model="member1_name"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member1_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nama Anggota 1"
                      required
                    />
                    @error('member1_name')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_agency" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Asal Instansi<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="member1_agency"
                      wire:model="member1_agency"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member1_agency') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Asal Instansi kamu"
                      required
                    />
                    @error('member1_agency')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_phone" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nomor Telepon<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="member1_phone"
                      wire:model="member1_phone"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member1_phone') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nomor Telepon aktif kamu"
                      required
                    />
                    @error('member1_phone')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_email" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Email<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="member1_email"
                      wire:model="member1_email"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member1_email') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="email"
                      placeholder="Masukkan Email aktif kamu"
                      required
                    />
                    @error('member1_email')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_twibbon" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Link Upload Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="member1_twibbon"
                      wire:model="member1_twibbon"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member1_twibbon') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Link Upload Twibbon kamu"
                      required
                    />
                    @error('member1_twibbon')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_student_card" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload Foto Kartu Mahasiswa<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member1_student_card') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div
                        class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]"
                      >
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member1_student_card') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member1_student_card') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member1_student_card"
                          id="member1_student_card"
                          name="member1_student_card"
                          required
                        />
                      </div>
                    </label>
                    @error('member1_student_card')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_poster" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload foto poster di Story<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member1_poster') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member1_poster') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member1_poster') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member1_poster"
                          id="member1_poster"
                          name="member1_poster"
                          required
                        />
                      </div>
                    </label>
                    @error('member1_poster')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member1_ig_follow" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload foto Bukti Follow Instagram
                      <a
                        href="https://www.instagram.com/is_expo/"
                        class="text-transparent bg-gradient-orange-br bg-clip-text hover:underline decoration-orange-500"
                        >ISE</a
                      >
                      <span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member1_ig_follow') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member1_ig_follow') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member1_ig_follow') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member1_ig_follow"
                          id="member1_ig_follow"
                          name="member1_ig_follow"
                          required
                        />
                      </div>
                    </label>
                    @error('member1_ig_follow')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
            </div>
            {{-- step 2 end --}} {{-- step 3 start --}}
            <div x-show="step==3">
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nama Anggota 2</label
                    >
                    <input
                      id="member2_name"
                      wire:model="member2_name"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member2_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nama Anggota 1"

                    />
                    @error('member2_name')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_agency" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Asal Instansi</label
                    >
                    <input
                      id="member2_agency"
                      wire:model="member2_agency"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member2_agency') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Asal Instansi kamu"

                    />
                    @error('member2_agency')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_phone" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nomor Telepon</label
                    >
                    <input
                      id="member2_phone"
                      wire:model="member2_phone"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member2_phone') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nomor Telepon aktif kamu"

                    />
                    @error('member2_phone')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_email" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Email</label
                    >
                    <input
                      id="member2_email"
                      wire:model="member2_email"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member2_email') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="email"
                      placeholder="Masukkan Email aktif kamu"

                    />
                    @error('member2_email')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_twibbon" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Link Upload Twibbon</label
                    >
                    <input
                      id="member2_twibbon"
                      wire:model="member2_twibbon"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('member2_twibbon') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Link Upload Twibbon kamu"

                    />
                    @error('member2_twibbon')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_student_card" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload Foto Kartu Mahasiswa
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member2_student_card') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div
                        class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]"
                      >
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member2_student_card') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member2_student_card') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member2_student_card"
                          id="member2_student_card"
                          name="member2_student_card"

                        />
                      </div>
                    </label>
                    @error('member2_student_card')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_poster" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload foto poster di Story
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member2_poster') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member2_poster') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member2_poster') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member2_poster"
                          id="member2_poster"
                          name="member2_poster"

                        />
                      </div>
                    </label>
                    @error('member2_poster')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member2_ig_follow" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload foto Bukti Follow Instagram
                      <a
                        href="https://www.instagram.com/is_expo/"
                        class="text-transparent bg-gradient-orange-br bg-clip-text hover:underline decoration-orange-500"
                        >ISE</a
                      >
                      
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member2_ig_follow') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member2_ig_follow') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member2_ig_follow') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member2_ig_follow"
                          id="member2_ig_follow"
                          name="member2_ig_follow"

                        />
                      </div>
                    </label>
                    @error('member2_ig_follow')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
            </div>
            {{-- step 3 end --}}
          </form>
          {{-- form input end --}} {{-- button start --}}
          <div>
            {{-- button step 1 start--}}
            <div x-show="step==1" class="flex flex-row items-center w-full gap-4">
              <a href="/my/rise" class="w-full">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#ffa672] hover:bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                >
                  Close
                </button>
              </a>
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:brightness-75 hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=2"
              >
                Next
              </button>
            </div>
            {{-- button step 1 end--}} {{-- button step 2 start--}}
            <div x-show="step==2" class="flex flex-row items-center w-full gap-4">
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#ffa672] hover:bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=1"
              >
                Back
              </button>
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=3"
              >
                Next
              </button>
            </div>
            {{-- button step 2 end--}} {{-- button step 3 start--}}
            <div x-show="step==3" class="flex flex-row items-center w-full gap-4">
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#ffa672] hover:bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=2"
              >
                Back
              </button>
              <button
                wire:click="submit"
                type="submit"
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
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
            {{-- button step 3 end --}}
          </div>
          {{-- button end --}} {{-- footer start --}}
          <footer class="flex flex-row items-center justify-between pb-10 mt-10 sm:mt-24 sm:pb-14">
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
          </footer>
          {{-- footer end --}}
        </div>
      </div>
    </div>
  </div>
</div>

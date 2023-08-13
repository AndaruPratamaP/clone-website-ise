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
        <img class="w-full mb-7" src="{{asset('images/bionix-regist/ICON.png')}}" alt="" />
        <p
          class="text-center px-10 my-8 sm:my-12 lg:my-20 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl"
          x-show="step<=2"
        >
          Form Pendaftaran BIONIX COMPETITION
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
                      class="flex items-center justify-center bg-gradient-to-r from-[#006C56] to-[#AFD196] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/identitas1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                    >
                      Identitas Tim
                    </p>
                  </div>
                  {{-- identitas step 1,2,3,4,5 end --}} {{-- Ketua step 1 start --}}
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
                      Ketua
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
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/ketua1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                    >
                      Ketua
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
                      Anggota
                    </p>
                  </div>
                  {{-- Anggota step 1,2 end --}} {{-- Anggota step 3,4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=3"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#006C56] to-[#AFD196] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/anggota1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                    >
                      Anggota
                    </p>
                  </div>
                  {{-- Anggota step 3,4,5 end --}} {{-- Pembayaran step 1,2,3 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step<=3"
                  >
                    <div class="flex items-center justify-center w-full bg-white rounded-full aspect-square">
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/pembayaran.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                    >
                      Pembayaran
                    </p>
                  </div>
                  {{-- Pembayaran step 1,2,3 end --}} {{-- Pembayaran step 4,5 start --}}
                  <div
                    class="w-[15%] xs:w-[10%] md:w-[8%] xl:w-[7%] 2xl:w-[6%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=4"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#006C56] to-[#AFD196] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/pembayaran1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                    >
                      Pembayaran
                    </p>
                  </div>
                  {{-- Pembayaran step 4,5 end --}}
                </div>
                {{-- progress rounded end --}}
              </div>
            </div>
            <div class="absolute w-full h-1 bg-gray-400"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[10%] h-1 absolute z-10" x-show="step==1"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[40%] h-1 absolute z-10" x-show="step==2"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[60%] h-1 absolute z-10" x-show="step==3"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[90%] h-1 absolute z-10" x-show="step==4"></div>
            <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[100%] h-1 absolute z-10" x-show="step==5"></div>
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
              <div class="flex flex-col">
                <label for="team_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Nama Tim<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="team_name"
                  wire:model="team_name"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] focus:text-[#349BB6] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('team_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama tim kamu"
                  required
                />
                @error('team_name')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>

                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="school" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Asal Sekolah<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="school"
                  wire:model="school"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('school') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama sekolah kamu"
                  required
                />
                @error('school')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <div class="grid grid-flow-col gap-2">
                  <input
                    id="agreement"
                    wire:model.defer="agreement"
                    type="checkbox"
                    name="agreement"
                    class="w-3 h-3 mt-1 lg:w-4 lg:h-4"
                    required
                  />
                  <label class="text-xs lg:text-base 2xl:text-xl" for="agreement"
                    >Dengan ini saya menyatakan bahwa tim saya siap mengikuti BIONIX COMPETITION  serta siap mematuhi peraturan yang berlaku nantinya</label
                  >
                </div>
                @error('agreement')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
              </div>
            </div>
            {{-- step 1 end --}}
            {{-- step 2 start --}}
            <div x-show="step==2">
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Nama Lengkap<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="leader_name"
                  name="leader_name"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('leader_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama lengkap kamu"
                  disabled
                  value="{{ auth()->user()->full_name }}"
                />
                @error('leader_name')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_email" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Email<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="leader_email"
                  name="leader_email"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('leader_email') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan email aktif kamu"
                  disabled
                  value="{{ auth()->user()->email }}"
                />
                @error('leader_email')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_phone_number" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Nomor Handphone<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="leader_phone_number"
                  name="leader_phone_number"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('leader_phone_number') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nomor handphone aktif kamu"
                  disabled
                  value="{{ auth()->user()->handphone }}"
                />
                @error('leader_phone_number')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_student_card" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Upload Foto Kartu Pelajar<span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_student_card') border-red-500 @else border-[#66C1A7] @enderror"
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
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 1mb (*.jpg, *.jpeg, *.png)</label>
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_poster_file" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Upload foto poster di Story<span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_poster_file') border-red-500 @else border-[#66C1A7] @enderror"
                >
                  <div class="flex flex-row items-center gap-1">
                    <x-heroicon-s-cloud-arrow-up
                      class="w-4 lg:w-8 h-4 lg:h-8 @error('leader_poster_file') text-red-500 @else text-slate-100 @enderror"
                    />
                    <input
                      type="file"
                      class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('leader_poster_file') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                      wire:model="leader_poster_file"
                      id="leader_poster_file"
                      name="leader_poster_file"
                      required
                    />
                  </div>
                </label>
                @error('leader_poster_file')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                  >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                >
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_ig_follow" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Upload foto Bukti Follow Instagram <a href="https://www.instagram.com/is_expo/" class="text-transparent bg-gradient-green-br bg-clip-text hover:underline decoration-green-500">ISE</a> <span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_ig_follow') border-red-500 @else border-[#66C1A7] @enderror"
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
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="leader_twibbon_link" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Link Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="leader_twibbon_link"
                  wire:model="leader_twibbon_link"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('leader_twibbon_link') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan link twibbon kamu"
                  required
                />
                @error('leader_twibbon_link')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
            </div>
              {{-- step 2 end --}}
              {{-- step 3 start --}}
            <div x-show="step==3">
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Nama Lengkap<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="member_name"
                  wire:model="member_name"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('member_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nama lengkap kamu"
                  required
                />
                @error('member_name')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_email" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Email<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="member_email"
                  wire:model="member_email"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('member_email') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan email aktif kamu"
                  required
                />
                @error('member_email')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_phone_number" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Nomor Handphone<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="member_phone_number"
                  wire:model="member_phone_number"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('member_phone_number') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan nomor handphone aktif kamu"
                  required
                />
                @error('member_phone_number')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_student_card" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Upload Foto Kartu Pelajar<span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member_student_card') border-red-500 @else border-[#66C1A7] @enderror"
                >
                  <div
                    class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]"
                  >
                    <x-heroicon-s-cloud-arrow-up
                      class="w-4 lg:w-8 h-4 lg:h-8 @error('member_student_card') text-red-500 @else text-slate-100 @enderror"
                    />
                    <input
                      type="file"
                      class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member_student_card') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                      wire:model="member_student_card"
                      id="member_student_card"
                      name="member_student_card"
                      required
                    />
                  </div>
                </label>
                @error('member_student_card')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 1mb (*.jpg, *.jpeg, *.png)</label>
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_poster_file" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Upload foto poster di Story<span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member_poster_file') border-red-500 @else border-[#66C1A7] @enderror"
                >
                  <div class="flex flex-row items-center gap-1">
                    <x-heroicon-s-cloud-arrow-up
                      class="w-4 lg:w-8 h-4 lg:h-8 @error('member_poster_file') text-red-500 @else text-slate-100 @enderror"
                    />
                    <input
                      type="file"
                      class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member_poster_file') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                      wire:model="member_poster_file"
                      id="member_poster_file"
                      name="member_poster_file"
                      required
                    />
                  </div>
                </label>
                @error('member_poster_file')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                  >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                >
              </div>
              <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_ig_follow" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Upload foto Bukti Follow Instagram <a href="https://www.instagram.com/is_expo/" class="text-transparent bg-gradient-green-br bg-clip-text hover:underline decoration-green-500">ISE</a> <span class="text-[#FF1F00] ml-1">*</span>
                </label>
                <label
                  class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member_ig_follow') border-red-500 @else border-[#66C1A7] @enderror"
                >
                  <div class="flex flex-row items-center gap-1">
                    <x-heroicon-s-cloud-arrow-up
                      class="w-4 lg:w-8 h-4 lg:h-8 @error('member_ig_follow') text-red-500 @else text-slate-100 @enderror"
                    />
                    <input
                      type="file"
                      class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member_ig_follow') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                      wire:model="member_ig_follow"
                      id="member_ig_follow"
                      name="member_ig_follow"
                      required
                    />
                  </div>
                </label>
                @error('member_ig_follow')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                  >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                >
              </div>
              <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                <label for="member_twibbon_link" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                  >Link Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                >
                <input
                  id="member_twibbon_link"
                  wire:model="member_twibbon_link"
                  class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('member_twibbon_link') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                  type="text"
                  placeholder="Masukkan link twibbon kamu"
                  required
                />
                @error('member_twibbon_link')
                <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                @enderror
              </div>
            </div>
              {{-- step 3 end --}}
              {{-- step 4 start --}}
              <div x-show="step==4">
                <div class="font-['Montserrat']">
                    <p class="my-4 text-xs sm:text-base lg:text-xl sm:my-8">Harap lakukan transfer ke rekening berikut:</p>
                    <p class="text-xs sm:text-base lg:text-xl">BANK BNI<br>
                        1295633675 <br>
                        a.n DEWI ANGELINE</p>
                    <p class="mt-8 text-xs sm:text-base lg:text-xl">Jumlah yang harus dibayarkan:
                        <br> <span class="font-bold">Rp 100.000,00</span>
                        </p>
                </div>
                <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="payment_proof" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                    >Upload Bukti Pembayaran<span class="text-[#FF1F00] ml-1">*</span>
                  </label>
                  <p class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                  >Format transfer (tulis di keterangan transfer): nama acara_nama orang/tim</p>
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
                  <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                  @enderror
                  <p class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                    >Max size 1mb (*.jpg, *.jpeg, *.png)</p
                  >
                </div>

              </div>
              {{-- step 4 end --}}
          </form>
          {{-- form input end --}} {{-- button start --}}
          <div>
            {{-- button step 1 start--}}
            <div x-show="step==1" class="flex flex-row items-center w-full gap-4">
              <a href="/my/bionix" class="w-full">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center">
                  Close
                </button>

              </a>
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:brightness-75 hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=2">
                Next
              </button>

            </div>
            {{-- button step 1 end--}}
            {{-- button step 2 start--}}
            <div x-show="step==2" class="flex flex-row items-center w-full gap-4">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                  @click.prevent="step=1">
                  Back
                </button>
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=3">
                Next
              </button>

            </div>
            {{-- button step 2 end--}}
            {{-- button step 3 start--}}
            <div x-show="step==3" class="flex flex-row items-center w-full gap-4">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                  @click.prevent="step=2">
                  Back
                </button>
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=4">
                Next
              </button>

            </div>
            {{-- button step 3 end--}}
            {{-- button step 4 start--}}
            <div x-show="step==4" class="flex flex-row items-center w-full gap-4">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                  @click.prevent="step=3">
                  Back
                </button>
                <button
                wire:click="submit"
                type="submit"
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
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
                        {{-- button step 4 end --}}


                    </div>
                    {{-- button end --}}
                    {{-- footer start --}}
                    <footer class="flex flex-row items-center justify-between pb-10 mt-10 sm:mt-24 sm:pb-14">
                        <a href="https://wa.me/+6281332049750" class="items-center hover:brightness-90">
                            <img class="w-[45 px] h-[40px] lg:w-[55px] lg:h-[50px] align-top hover:opacity-60"
                                src="{{ asset('/images/whatsapp.png ') }}" />
                        </a>
                        <div class="flex flex-row items-center gap-2 md:gap-3 text-slate-300">
                            <a href="https://www.instagram.com/is_expo/" target="blank">
                                <x-bi-instagram class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                            </a>
                            <a href="https://tiktok.com" target="blank">
                                <x-bi-tiktok class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                            </a>
                            <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/"
                                target="blank">
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

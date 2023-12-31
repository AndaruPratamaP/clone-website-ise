@section('title', 'Bionix Roadshow | Registration')
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
                  <div class="flex justify-between w-[35%]">
                    {{-- Ketua step 1,2 start --}}
                    <div
                      class="w-[35%] xs:w-[25%] md:w-[20%] xl:w-[20%] 2xl:w-[15%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                      x-show="step>=1"
                    >
                      <div class="flex items-center justify-center from-[#00616C] to-[#AFD196] bg-gradient-to-r w-full aspect-square rounded-full">
                        <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/ketua1.png')}}" alt="" />
                      </div>
                      <p
                        class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#006C56] to-[#AFD196] bg-clip-text text-transparent"
                      >
                        Ketua
                      </p>
                    </div>
                    {{-- Ketua step 1,2 end --}} {{-- Anggota step 1 start --}}
                    <div
                      class="w-[35%] xs:w-[25%] md:w-[20%] xl:w-[20%] 2xl:w-[15%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                      x-show="step<=1"
                    >
                      <div class="flex items-center justify-center bg-white w-full aspect-square rounded-full">
                        <img class="w-2/3 pb-1" src="{{asset('images/bionix-regist/anggota.png')}}" alt="" />
                      </div>
                      <p
                        class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                      >
                        Anggota
                      </p>
                    </div>
                    {{-- Anggota step 1 end --}} {{-- Anggota step 2 start --}}
                    <div
                      class="w-[35%] xs:w-[25%] md:w-[20%] xl:w-[20%] 2xl:w-[15%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                      x-show="step>=2"
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
                    {{-- Anggota step 2 end --}}
                  </div>
                  {{-- progress rounded end --}}
                </div>
              </div>
              <div class="bg-gray-400 w-full h-1 absolute"></div>
              <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[35%] h-1 absolute z-10" x-show="step==1"></div>
              <div class="bg-gradient-to-r from-[#006C56] to-[#AFD196] w-[65%] h-1 absolute z-10" x-show="step==2"></div>
            </div>
          </div>
        </header>
        <div class="mt-14 sm:mt-16 lg:mt-20">
            <div class="px-4 sm:px-6 md:px-12 lg:px-20 xl:px-28 2xl:px-36 font-['Montserrat']">
            {{-- form input start --}}
            <form wire:submit.prevent="submit" enctype="multipart/form-data">
            {{-- step 1 --}}
            <div x-show="step==1">
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_name" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_email" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_phone_number" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_student_card" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 1mb (*.jpg, *.jpeg, *.png)</label>
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_poster_file" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                      >Upload Foto Poster<span class="text-[#FF1F00] ml-1">*</span>
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_follow_ig_proof" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                      >Upload Bukti Follow IG @is_expo<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('leader_follow_ig_proof') border-red-500 @else border-[#66C1A7] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('leader_follow_ig_proof') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('leader_follow_ig_proof') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="leader_follow_ig_proof"
                          id="leader_follow_ig_proof"
                          name="leader_follow_ig_proof"
                          required
                        />
                      </div>
                    </label>
                    @error('leader_follow_ig_proof')
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_twibbon_link" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                      >Link Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_twibbon_link"
                      wire:model="leader_twibbon_link"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('leader_twibbon_link') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan link post twibbon kamu"
                      required
                    />
                    @error('leader_twibbon_link')
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- step 1 end --}}
            {{-- step 2 start --}}
            <div x-show="step==2">
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_name" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_email" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_phone_number" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_student_card" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 1mb (*.jpg, *.jpeg, *.png)</label>
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_poster_file" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                      >Upload Foto Poster<span class="text-[#FF1F00] ml-1">*</span>
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
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_follow_ig_proof" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                      >Upload Bukti Follow IG @is_expo<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('member_follow_ig_proof') border-red-500 @else border-[#66C1A7] @enderror"
                    >
                      <div class="flex flex-row items-center gap-1">
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('member_follow_ig_proof') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('member_follow_ig_proof') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="member_follow_ig_proof"
                          id="member_follow_ig_proof"
                          name="member_follow_ig_proof"
                          required
                        />
                      </div>
                    </label>
                    @error('member_follow_ig_proof')
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                    >
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="member_twibbon_link" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                      >Link Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="member_twibbon_link"
                      wire:model="member_twibbon_link"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#66C1A7] focus:placeholder:text-[#66C1A7] focus:border-b-[#66C1A7] lg:focus:text-xl lg:placeholder:text-xl @error('member_twibbon_link') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan link post twibbon kamu"
                      required
                    />
                    @error('member_twibbon_link')
                    <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- step 2 end --}}
            </form>
            {{-- form input end --}} {{-- button start --}}
            <div class=" pb-14">
              {{-- button step 1 start--}}
              <div x-show="step==1" class="flex w-full flex-row items-center gap-4">
                {{-- <a href="#" class="w-full">
                  <button
                    class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-12 lg:h-14 flex justify-center items-center">
                    Tutup
                  </button>
   --}}
                </a>
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:brightness-75 hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                  @click.prevent="step=2">
                  Berikutnya
                </button>

              </div>
              {{-- button step 1 end--}}
              {{-- button step 2 start--}}
              <div x-show="step==2" class="flex w-full flex-row items-center gap-4">
                  <button
                    class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#66C1A7] hover:bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                    @click.prevent="step=1">
                    Sebelumnya
                  </button>
                <button
                  wire:click="submit"
                  type="submit"
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                >
                  <span wire:loading.remove>Kirim</span>
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
              {{-- button step 2 end--}}

            </div>
            {{-- button end --}}
          </div>
        </div>
      </div>
    </div>
  </div>


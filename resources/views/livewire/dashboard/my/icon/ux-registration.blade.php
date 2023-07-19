@section('title', 'UX Academy Registration')
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
          <img class="w-full mb-7" src="{{asset('images/ux-registration/ICON.png')}}" alt="" />
          <p
            class="text-center px-10 my-8 sm:my-12 lg:my-20 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl"
            x-show="step<=2"
          >
            Form Pendaftaran UX Academy
          </p>
          {{-- progress bar start --}}
        <div>
          <div class="flex flex-col w-full justify-center">
            <div class="bg-transparent w-[15%] xs:w-[10%] aspect-square"></div>
            <div class="absolute z-20 w-full">
              <div class="flex justify-center">
                {{-- progress rounded start --}}
                <div class="flex justify-between w-3/5">
                  {{-- identitas diri 1,2,3 start --}}
                  <div
                    class="w-[18%] xs:w-[12%] md:w-[10%] xl:w-[8%] 2xl:w-[7%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=1"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3" src="{{asset('images/ux-registration/identitas.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] bg-clip-text text-transparent"
                    >
                      Identitas Tim
                    </p>
                  </div>
                  {{-- identitas step 1,2,3 end --}} {{-- Motivasi step 1 start --}}
                  <div
                    class="w-[18%] xs:w-[12%] md:w-[10%] xl:w-[8%] 2xl:w-[7%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step<=1"
                  >
                    <div class="flex items-center justify-center bg-white w-full aspect-square rounded-full">
                      <img class="w-2/3" src="{{asset('images/ux-registration/motivasi.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                    >
                      Motivasi
                    </p>
                  </div>
                  {{-- Ketua step 1 end --}} {{-- Ketua step 2,3 start --}}
                  <div
                    class="w-[18%] xs:w-[12%] md:w-[10%] xl:w-[8%] 2xl:w-[7%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=2"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3" src="{{asset('images/ux-registration/motivasi1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] bg-clip-text text-transparent"
                    >
                      Motivasi
                    </p>
                  </div>
                  {{-- Ketua step 2,3 end --}} {{-- Pembayaran step 1,2 start --}}
                  <div
                    class="w-[18%] xs:w-[12%] md:w-[10%] xl:w-[8%] 2xl:w-[7%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step<=2"
                  >
                    <div class="flex items-center justify-center bg-white w-full aspect-square rounded-full">
                      <img class="w-2/3" src="{{asset('images/ux-registration/pembayaran.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%]"
                    >
                      Pembayaran
                    </p>
                  </div>
                  {{-- Pembayaran step 1,2 end --}} {{-- Anggota step 3 start --}}
                  <div
                    class="w-[18%] xs:w-[12%] md:w-[10%] xl:w-[8%] 2xl:w-[7%] flex flex-col items-center mt-5 xs:mt-6 md:mt-7 lg:mt-12 box-border"
                    x-show="step>=3"
                  >
                    <div
                      class="flex items-center justify-center bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] w-full aspect-square rounded-full"
                    >
                      <img class="w-2/3" src="{{asset('images/ux-registration/pembayaran1.png')}}" alt="" />
                    </div>
                    <p
                      class="text-[7px] xs:text-[9px] sm:text-xs lg:text-lg xl:text-xl font-semibold mt-2 md:mt-3 lg:mt-4 text-center w-[180%] sm:w-[200%] md:w-[230%] lg:w-[250%] xl:w-[300%] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] bg-clip-text text-transparent"
                    >
                      Pembayaran
                    </p>
                  </div>
                  {{-- Anggota step 3 end --}}
                </div>
                {{-- progress rounded end --}}
              </div>
            </div>
            <div class="bg-gray-400 w-full h-1 absolute"></div>
            <div class="bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] w-[20%] h-1 absolute z-10" x-show="step==1"></div>
            <div class="bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] w-[50%] h-1 absolute z-10" x-show="step==2"></div>
            <div class="bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] w-[80%] h-1 absolute z-10" x-show="step==3"></div>
          </div>
        </div>
        {{-- progress bar end --}}
        </header>
        {{-- form input start --}} {{-- step 1 --}}
        <div class="mt-14 sm:mt-16 lg:mt-20">
          <form wire:submit.prevent="submit" enctype="multipart/form-data">
            <div class="px-4 sm:px-6 md:px-12 lg:px-20 xl:px-28 2xl:px-36 font-['Montserrat']">
              <div x-show="step==1">
                <div class="flex flex-col">
                  <label for="full_name" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Nama Lengkap<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="full_name"
                    wire:model="full_name"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] focus:text-[#349BB6] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('full_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan nama lengkap kamu"
                    required
                  />
                  @error('full_name')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>

                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="institution" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Asal Institusi<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="institution"
                    wire:model="institution"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('institution') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan nama institusi kamu"
                    required
                  />
                  @error('institution')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="department" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Jurusan<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="department"
                    wire:model="department"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('department') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan nama department kamu"
                    required
                  />
                  @error('department')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="email" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Email<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    type="email"
                    id="email"
                    wire:model="email"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('whatsapp') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    placeholder="Masukkan email aktif kamu"
                    required
                  />
                  @error('email')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="whatsapp" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Whatsapp<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="whatsapp"
                    wire:model="whatsapp"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('full_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan nomor whatsapp aktif kamu"
                    required
                  />
                  @error('whatsapp')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="instagram" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Instagram<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="instagram"
                    wire:model="instagram"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('instagram') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan link instagram kamu"
                    required
                  />
                  @error('instagram')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="link_upload_twibbon" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Link Twibbon<span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="link_upload_twibbon"
                    wire:model="link_upload_twibbon"
                    class="w-full bg-[#1C1C1C] border-solid border-b-[#FFEEE4] border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] text-[#7C7C7C] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl"
                    type="text"
                    placeholder="Masukkan link postingan twibbon kamu"
                    required
                  />
                  @error('link_upload_twibbon')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="cv" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                    >CV<span class="text-[#FF1F00] ml-1">*</span>
                  </label>
                  <label
                    class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('cv') border-red-500 @else border-[#6BB9E7] @enderror"
                  >
                    <div
                      class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]"
                    >
                      <x-heroicon-s-cloud-arrow-up
                        class="w-4 lg:w-8 h-4 lg:h-8 @error('cv') text-red-500 @else text-slate-100 @enderror"
                      />
                      <input
                        type="file"
                        class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('cv') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                        wire:model="cv"
                        id="cv"
                        name="cv"
                      />
                    </div>
                  </label>
                  @error('cv')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                  <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 1mb (*.Pdf)</label>
                </div>
                <div class="mb-16">
                  <label for="share_proof_file" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                    >Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span class="text-[#FF1F00] ml-1">*</span>
                  </label>
                  <label
                    class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('share_proof_file') border-red-500 @else border-[#6BB9E7] @enderror"
                  >
                    <div class="flex flex-row items-center gap-1">
                      <x-heroicon-s-cloud-arrow-up
                        class="w-4 lg:w-8 h-4 lg:h-8 @error('share_proof_file') text-red-500 @else text-slate-100 @enderror"
                      />
                      <input
                        type="file"
                        class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('share_proof_file') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                        wire:model="share_proof_file"
                        id="share_proof_file"
                        name="share_proof_file"
                      />
                    </div>
                  </label>
                  @error('share_proof_file')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                  <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                    >Max size 1mb (*.jpg, *.jpeg, *.png)</label
                  >
                </div>
                {{-- button step 1 start--}}
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:brightness-75"
                  @click.prevent="step=2"
                  x-show="step==1"
                >
                  Next
                </button>
                {{-- button step 1 end--}}
              </div>
              {{-- step 2 --}}
              <div x-show="step==2">
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="reason" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Apa alasan anda mengikuti ISE! User Experience Academy?<span class="text-[#FF1F00] ml-1"
                      >*</span
                    ></label
                  >
                  <input
                    type="text"
                    id="reason"
                    wire:model="reason"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('reason') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    placeholder="Masukkan alasan kamu"
                    required
                  />
                  @error('reason')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="hope" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Apa yang anda harapkan dari ISE! User Experience Academy?<span class="text-[#FF1F00] ml-1"
                      >*</span
                    ></label
                  >
                  <input
                    id="hope"
                    wire:model="hope"
                    class="w-full bg-[#1C1C1C] border-solid] border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('hope') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan alasan kamu"
                    required
                  />
                  @error('hope')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="after_ise" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Apa yang dapat kamu lakukan dengan ilmu yang diperoleh pasca ISE! User Experience Academy?
                    <span class="text-[#FF1F00] ml-1">*</span></label
                  >
                  <input
                    id="after_ise"
                    wire:model="after_ise"
                    class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#00668F] focus:placeholder:text-[#348BB6] focus:border-b-[#348BB6] lg:focus:text-xl lg:placeholder:text-xl @error('after_ise') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                    type="text"
                    placeholder="Masukkan alasan kamu"
                    required
                  />
                  @error('after_ise')
                  <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                  @enderror
                </div>

                <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                  <label for="referral" class="inline font-semibold text-xs lg:text-base 2xl:text-xl"
                    >Darimana Anda mendapatkan informasi terkait ISE! User Experience Academy?<span
                      class="text-[#FF1F00] ml-1"
                      >*</span
                    ></label
                  >

                  <select
                    name="referral"
                    id="referral"
                    wire:model="referral"
                    x-model="referral"
                    class="w-full bg-[#1C1C1C] border-solid border-b-[#FFEEE4] border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#348BB6] text-[#7C7C7C] focus:border-b-[#348BB6] mb-3 md:mb-4"
                    x-on:change="other_ref = ''"
                    required
                  >
                    <option class="bg-[#1C1C1C] text-[#348BB6]" value="" selected>Pilih salah satu</option>
                    @foreach ($referrals as $referral)
                    <option class="bg-[#1C1C1C] text-[#348BB6]" value="{{ $referral }}">{{ $referral }}</option>
                    @endforeach
                  </select>
                  <input
                    class="w-full bg-[#1C1C1C] border-solid border-b-[#FFEEE4] border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-base 2xl:text-xl hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#348BB6] text-[#7C7C7C] focus:border-b-[#348BB6] mb-3 md:mb-4"
                    placeholder="Masukkan sumber informasi kamu"
                    id="referral2"
                    wire:model="otherRef"
                    type="text"
                    x-model="other_ref"
                    x-show="referral === 'Lainnya'"
                    x-on:input="referral = 'Lainnya'"
                    x-on:focusout="if(!other_ref) referral = ''"
                  />
                </div>
                {{-- checkbox start --}}
                <div class="mb-4">
                  <div class="grid grid-flow-col gap-2">
                    <input
                      id="agreement_1"
                      wire:model.defer="agreement_1"
                      type="checkbox"
                      name="agreement_1"
                      class="w-3 lg:w-4 h-3 lg:h-4 mt-1"
                      required
                    />
                    <label class="text-xs lg:text-base 2xl:text-xl" for="agreement_1"
                      >Dengan ini saya menyatakan bahwa saya siap mengikuti ISE! User Experience Academy serta siap mematuhi
                      peraturan yang berlaku nantinya</label
                    >
                  </div>
                  @error('agreement_1')
                  <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-16">
                  <div class="flex gap-2">
                    <input
                      id="agreement_2"
                      wire:model.defer="agreement_2"
                      type="checkbox"
                      name="agreement_2"
                      class="w-3 lg:w-4 h-3 lg:h-4 mt-1"
                      required
                    />
                    <label class="text-xs lg:text-base 2xl:text-xl" for="agreement_2"
                      >Dengan ini saya menyatakan semua data yang diisi benar dan bisa dipertanggungjawabkan</label
                    >
                  </div>
                  @error('agreement_2')
                  <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
                </div>
                {{-- checkbox end --}}
              </div>
              {{-- button step 2 start --}}
              <div x-show="step==2" class="flex w-full flex-row items-center gap-4">
                <button
                  class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                  @click.prevent="step=1">
                  Back
                </button>
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] h-10 sm:h-12 lg:h-14 flex justify-center items-center hover:brightness-75"
                @click.prevent="step=3">
                Next
              </button>

            </div>
              {{-- button step 2 end --}}
              {{-- step 2 end --}}
              {{-- step 3 start --}}
              <div x-show="step==3">
                <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                  <div class="text-white flex flex-col gap-y-10 font-montserrat text-xs leading-5 lg:text-[19px] font-medium w-full">
                    <div>Harap lakukan transfer ke rekening berikut:</div>
                    <div>BNI<br>1295633675 <br>a.n DEWI ANGELINE</div>
                    <div>Jumlah yang harus dibayarkan: <br>Rp 30.000,00</div>
                    <div>Format transfer (tulis di keterangan transfer):<br>nama acara_nama orang/tim</div>
                  </div>
                </div>
                <div class="mb-16">
                  <label for="payment_proof" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4"
                    >Bukti Pembayaran<span class="text-[#FF1F00] ml-1">*</span>
                  </label>
                  <label
                    class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('payment_proof') border-red-500 @else border-[#6BB9E7] @enderror"
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
                {{-- button step 3 start --}}
                <div class="flex w-full flex-row">
                  <button
                    class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none mr-4 hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                    @click.prevent="step=2"
                  >
                    Back
                  </button>
                  <button
                    type="submit"
                    wire:click="submit"
                    class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:brightness-75 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
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
              {{-- step 3 end --}}
              <div class="mt-10 sm:mt-24 pb-10 sm:pb-14 flex justify-between flex-row items-center">
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
          </form>

        </div>

        {{-- form input end --}}
      </div>
    </div>
  </div>

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
          <div class="relative mt-12 sm:mt-14 lg:mt-24 mb-24 sm:mb-28 lg:mb-36 flex flex-row items-center bg-orange-300">
            <div class="absolute z-10 w-full flex justify-center">
              {{-- step img start --}}

              <div class="flex justify-between w-[60%] md:w-1/2 font-semibold">
                {{-- step 1&2 identitas diri --}}
                <div class="flex flex-col items-center pt-7 lg:pt-11" x-show="step<=2">
                  <div
                    class="w-7 sm:w-10 lg:w-16 aspect-square bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] flex items-center justify-center rounded-full"
                  >
                    <img class="w-3/4" src="{{asset('images/ux-registration/identitas.png')}}" alt="" />
                  </div>
                  <div
                    class="mt-3 lg:mt-5 bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] bg-clip-text text-transparent w-20 text-center lg:w-32"
                  >
                    <p class="text-xs lg:text-lg">Identitas Diri</p>
                  </div>
                </div>
                {{-- step 1 Motivasi --}}
                <div class="flex flex-col items-center pt-7 lg:pt-11" x-show="step==1">
                  <div
                    class="w-7 sm:w-10 lg:w-16 aspect-square bg-white flex items-center justify-center rounded-full border-2 border-solid border-gray-400 box-border"
                  >
                    <img class="w-3/4" src="{{asset('images/ux-registration/motivasi.png')}}" alt="" />
                  </div>
                  <div class="mt-3 lg:mt-5 text-gray-400 w-20 text-center lg:w-32">
                    <p class="text-xs lg:text-lg">Motivasi</p>
                  </div>
                </div>
                {{-- step 2 Motivasi --}}
                <div class="flex flex-col items-center pt-7 lg:pt-11" x-show="step==2">
                  <div
                    class="w-7 sm:w-10 lg:w-16 aspect-square bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] flex items-center justify-center rounded-full"
                  >
                    <img class="w-3/4" src="{{asset('images/ux-registration/motivasi1.png')}}" alt="" />
                  </div>
                  <div
                    class="mt-3 lg:mt-5 bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] bg-clip-text text-transparent w-20 text-center lg:w-32"
                  >
                    <p class="text-xs lg:text-lg">Motivasi</p>
                  </div>
                </div>
              </div>
              {{-- step img end --}}
            </div>
            {{-- progress line start --}}
            <div class="h-0.5 md:h-1 bg-gray-400 w-full absolute" x-show="step<=2">
              <div
                class="h-full w-[32%] xs:w-[29%] md:w-[31%] 2xl:w-[29%] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]"
                x-show="step==1"
              ></div>
              <div class="h-full w-[71%] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]" x-show="step==2"></div>
            </div>
            {{-- progress line end --}}
          </div>
          {{-- progress bar end --}}
        </header>
        {{-- form input start --}} {{-- step 1 --}}
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
                      required
                    />
                  </div>
                </label>
                @error('cv')
                <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                @enderror
                <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 3mb (*.Pdf)</label>
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
                      required
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
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none hover:py-3.5"
                @click.prevent="step=2"
                x-show="step==1"
              >
                Berikutnya
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
            <div x-show="step==2" class="flex w-full flex-row">
              <button
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none mr-4 hover:py-3.5 h-12 lg:h-14 flex justify-center items-center"
                @click.prevent="step=1"
              >
                Kembali
              </button>
              <button
                type="submit"
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none hover:py-3.5 h-12 lg:h-14 flex justify-center items-center"
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
          </div>
          {{-- button step 2 end --}} {{-- step 2 end --}}
        </form>

        {{-- form input end --}}

        <footer>
          <div class="float-right mt-40 mb-16">
            <div class="flex gap-3 md:gap-4 lg:gap-5">
              <a href="https://www.instagram.com/is_expo/" target="_blank"
                ><x-bi-instagram class="w-4 sm:w-5 md:w-6 h-4 sm:h-5 md:h-6 hover:brightness-75"
              /></a>
              <a href="https://www.tiktok.com/@is_expo" target="_blank"
                ><x-bi-tiktok class="w-4 sm:w-5 md:w-6 h-4 sm:h-5 md:h-6 hover:brightness-75"
              /></a>
              <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/" target="_blank"
                ><x-bi-linkedin class="w-4 sm:w-5 md:w-6 h-4 sm:h-5 md:h-6 hover:brightness-75"
              /></a>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

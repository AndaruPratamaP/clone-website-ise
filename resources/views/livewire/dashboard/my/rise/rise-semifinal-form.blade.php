@section('title', 'RISE Semifinal')
<div class="bg-[#121316]">
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
        >
        Form Semifinal RISE!
        </p>
      </header>
      <div class="mt-14 sm:mt-16 lg:mt-20">
        <div class="px-4 sm:px-6 md:px-12 lg:px-20 xl:px-28 2xl:px-36 font-['Montserrat']">
          {{-- form input start --}}
          <form wire:submit.prevent="submit" enctype="multipart/form-data">
            <div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="team_name" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Nama Tim<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="team_name"
                      name="team_name"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('team_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nama Tim kamu"
                      disabled
                      value="{{ $peserta->team_name}}"
                    />
                    @error('team_name')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="leader_agency" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Asal Instansi Ketua Tim<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="leader_agency"
                      name="leader_agency"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_agency') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Asal Instansi Ketua Tim kamu"
                      disabled
                      value="{{ auth()->user()->institution}}"
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
                     name="leader_name"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('leader_name') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Nama Ketua kamu"
                      disabled
                      value="{{ auth()->user()->full_name}}"
                    />
                    @error('leader_name')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="flex flex-col my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="youtube_link" class="inline text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Link Youtube<span class="text-[#FF1F00] ml-1">*</span></label
                    >
                    <input
                      id="youtube_link"
                      wire:model="youtube_link"
                      class="w-full bg-[#1C1C1C] border-solid border-b-2 p-1 mt-2 font-[500] focus:outline-none text-xs lg:text-xl placeholder:text-[#7C7C7C] hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] hover:bg-transparent focus:text-[#ffa672] focus:placeholder:text-[#ffa672] focus:border-b-[#ffa672] lg:focus:text-xl lg:placeholder:text-xl @error('youtube_link') border-b-red-500 text-red-500 @else border-b-gray-300 text-[#7C7C7C] @enderror"
                      type="text"
                      placeholder="Masukkan Link Youtube kamu"
                      required
                    />
                    @error('youtube_link')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="my-6 md:my-8 lg:my-10 xl:my-12">
                    <label for="answer_file" class="mb-4 text-xs font-semibold lg:text-base 2xl:text-xl"
                      >Upload File Jawaban<span class="text-[#FF1F00] ml-1">*</span>
                    </label>
                    <label
                      class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-28 @error('answer_file') border-red-500 @else border-[#ffa672] @enderror"
                    >
                      <div
                        class="flex flex-row items-center gap-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B]"
                      >
                        <x-heroicon-s-cloud-arrow-up
                          class="w-4 lg:w-8 h-4 lg:h-8 @error('answer_file') text-red-500 @else text-slate-100 @enderror"
                        />
                        <input
                          type="file"
                          class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('answer_file') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                          wire:model="answer_file"
                          id="answer_file"
                          name="answer_file"
                          required
                        />
                      </div>
                    </label>
                    @error('answer_file')
                    <span class="pt-2 text-xs text-red-500 lg:text-base">{{ $message }}</span>
                    @enderror
                    <label class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]"
                      >Max size 3mb (*.pdf)</label
                    >
                  </div>
            </div>
          </form>
          {{-- form input end --}} {{-- button start --}}
          <div>
            {{-- button start--}}
            <div class="flex flex-row items-center w-full gap-4">
              <a href="/my/rise"
                class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#ffa672] hover:bg-gradient-to-r from-[#ffa672] to-[#FFD693] hover:border-none hover:py-3.5 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
              >
                Back
            </a>
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
            {{-- button end --}}
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

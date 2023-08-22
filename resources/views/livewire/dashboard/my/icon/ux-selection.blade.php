@section('title', 'UX Selection')
{{-- before submit answer --}}
<div class="bg-[#121316]">
    <div class="relative min-h-screen overflow-hidden mx-auto">
        <div class="">
            <div class="fixed left-0 top-[470px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed left-0 top-[870px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed left-0 top-[35px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed right-0 top-[370px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
        </div>
        <div class="relative overflow-hidden mx-4 sm:mx-12 md:mx-20 lg:mx-32 xl:mx-40 2xl:mx-48 text-white my-20 md:my-28 lg:my-40 bg-[#1C1C1C] z-10 font-['Montserrat'] shadow-2xl shadow-black">
            <header>
                <img class="w-full mb-7" src="{{asset('images/ux-selection/header.png')}}">
                <p class="text-center px-10 my-6 sm:my-10 lg:my-16 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl">Form Seleksi Soal
                </p>
            </header>
            <div class="px-5 sm:px-6 md:px-12 lg:px-20 xl:px-24 2xl:px-30 font-['Montserrat']">
                <p class="text-xs sm:text-base lg:text-xl my-4 sm:my-8">Berikut adalah soal seleksi User Experience Academy ISE! 2023. Perhatikan panduan pengumpulan dan submit jawaban dalam format .pdf</p>
                <p class="text-xs sm:text-base lg:text-xl">Batas Pengumpulan:</p>
                <p class="text-xs sm:text-base lg:text-xl font-bold">27 Agustus 2023 Pukul 23.59</p>
            </div>

            <form wire:submit.prevent="submit" enctype="multipart/form-data">
                <div class="px-5 sm:px-6 md:px-12 lg:px-20 xl:px-24 2xl:px-30 font-['Montserrat'] pt-5">
                    <div class="flex flex-col">
                        <label for="file_soal" class="inline font-semibold text-xs lg:text-base 2xl:text-xl">File Soal</label>
                        <a href="https://drive.google.com/file/d/14__fRNFfo19ablN14EkwkJQaeGo8HG-P/view?usp=sharing" target="blank" class="mt-3 mb-4 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit border-[#6BB9E7]">
                            <div class="flex flex-row items-center gap-1.5">
                                <x-heroicon-s-cloud-arrow-down class="w-4 lg:w-8 h-4 lg:h-8 text-slate-100"/>
                                <p class="font-semibold lg:text-sm mr-0 lg:mr-4 py-1 lg:py-2 rounded-md border-0 text-xs bg-transparent cursor-pointer">Unduh</p>
                            </div>
                        </a>
                        <div class="mb-16">
                            <label for="answer" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4">Submit Jawaban<span class="text-[#FF1F00] ml-1">*</span></label>
                        <label class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-4 @error('answer') border-red-500 @else border-[#6BB9E7] @enderror">
                            <div class="flex flex-row items-center gap-1">
                                <x-heroicon-s-cloud-arrow-up class="w-4 lg:w-8 h-4 lg:h-8 @error('answer') text-red-500 @else text-slate-100 @enderror"/>
                                <input
                                type="file"
                                class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('answer') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                                wire:model="answer"
                                id="answer"
                                name="answer"
                                required
                                />
                            </div>
                        </label>
                        <div class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 3mb (*.Pdf)</div>
                        @error('answer')
                        <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-row">
                        <a href="{{route('my.ux')}}"
                            class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none mr-4 hover:py-3.5 h-12 lg:h-14 flex justify-center items-center">
                            Close
                        </a>
                        <button
                        type="submit"
                        class="rounded-md py-3 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:brightness-75 hover:border-none hover:py-3.5 h-12 lg:h-14 flex justify-center items-center"
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
            </form>
            <footer>
                <div class="float-right mt-36 mb-16">
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

{{-- after submit answer--}}
{{-- <div class="bg-[#121316]">
    <div class="relative min-h-screen overflow-hidden mx-auto">
        <div class="">
            <div class="fixed left-0 top-[470px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed left-0 top-[870px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed left-0 top-[35px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
            <div class="fixed right-0 top-[370px] opacity-10 blur-[150px] h-[545px] w-[545px] bg-[#00D0FF] rounded-full"></div>
        </div>
        <div class="relative overflow-hidden mx-4 sm:mx-12 md:mx-20 lg:mx-32 xl:mx-40 2xl:mx-48 text-white my-20 md:my-28 lg:my-40 bg-[#1C1C1C] z-10 font-['Montserrat'] shadow-2xl shadow-black">
            <header >
                <img class="w-full mb-7" src="{{asset('images/ux-selection/header.png')}}">
                <p class="text-center px-10 my-6 sm:my-10 lg:my-16 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl">Anda sudah Mengumpulkan
                </p>
            </header>
            <div class="font-medium px-5 sm:px-6 md:px-12 lg:px-20 xl:px-24 2xl:px-30 font-['Montserrat']">
                <p class="text-sm sm:text-lg lg:text-2xl my-4 sm:my-8">Terima kasih telah mengumpulkan soal selesai User Experience Academy! Selamat dan semangat mengikuti rangkaian acara.</p>
                <a href="{{route('my.ux')}}">
                <button
                    class="mt-8 rounded-md py-3 w-full text-xs sm:text-base lg:text-xl border-solid border-2 border-[#6BB9E7] hover:bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:border-none hover:py-3.5">
                    Back to dashboard
                </button>
            </a>
            </div>

            <footer>
                <div class="float-right mt-36 mb-16 mr-12">
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
</div> --}}

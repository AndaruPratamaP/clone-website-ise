@section('title', 'DS Commitment Fee')
{{-- before submit payment --}}
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
                <p class="text-center px-10 my-6 sm:my-10 lg:my-16 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl">Form Commitment Fee
                </p>
            </header>
            <div class="px-5 sm:px-6 md:px-12 lg:px-20 xl:px-24 2xl:px-30 font-['Montserrat']">
                <p class="text-xs sm:text-base lg:text-xl my-4 sm:my-8">Harap lakukan transfer ke rekening berikut:</p>
                <p class="text-xs sm:text-base lg:text-xl">BANK MANDIRI <br>
                    1640004185593 <br>
                    a.n EVANRIZA SAFIQ ARIADI</p>
                <p class="text-xs sm:text-base lg:text-xl  mt-8">Jumlah yang harus dibayarkan:
                    <br> <span class="font-bold">Rp 150.000,00</span>
                    </p>
            </div>

            <form wire:submit.prevent="submit" enctype="multipart/form-data">
                <div class="px-5 sm:px-6 md:px-12 lg:px-20 xl:px-24 2xl:px-30 font-['Montserrat'] pt-5">
                    <div class="flex flex-col">
                        <div class="mb-16">
                            <label for="payment" class="font-semibold text-xs lg:text-base 2xl:text-xl mb-4">Bukti Pembayaran<span class="text-[#FF1F00] ml-1">*</span></label>
                        <label class="mt-3 mb-1 px-3 py-2 lg:py-3 flex h-full bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border cursor-pointer w-fit xs:pr-4 @error('payment') border-red-500 @else border-[#6BB9E7] @enderror">
                            <div class="flex flex-row items-center gap-1">
                                <x-heroicon-s-cloud-arrow-up class="w-4 lg:w-8 h-4 lg:h-8 @error('payment') text-red-500 @else text-slate-100 @enderror"/>
                                <input
                                type="file"
                                class="block w-44 lg:w-56 text-xs lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:cursor-pointer cursor-pointer @error('payment') file:text-red-500 text-red-500 @else file:text-white text-gray-500 @enderror"
                                wire:model="payment"
                                id="payment"
                                name="payment"
                                required
                                />
                            </div>
                        </label>
                        <div class="block text-xs lg:text-base 2xl:text-xl text-[#7C7C7C]">Max size 1mb (.jpg, .jpeg, .png)</div>
                        @error('payment')
                        <span class="text-red-500 pt-2 text-xs lg:text-base">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-row">
                        <a href="{{route('my.uxacademy')}}"
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

{{-- after submit payment--}}
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
                <p class="text-center px-10 my-6 sm:my-10 lg:my-16 font-['Montserrat'] font-semibold text-sm sm:text-lg lg:text-2xl">Anda sudah Membayar
                </p>
            </header>
            <div class="font-medium px-5 sm:px-6 md:px-12 lg:px-20 xl:px-24 2xl:px-30 font-['Montserrat']">
                <p class="text-sm sm:text-lg lg:text-2xl my-4 sm:my-8">Terima kasih telah membayar commitment fee Data Science Academy! Selamat dan semangat mengikuti rangkaian acara.</p>
                <a href="{{route('my.uxacademy')}}">
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

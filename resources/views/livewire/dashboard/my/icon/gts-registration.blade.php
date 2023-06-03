<div x-data='{ isSubmitted: false }'
    class="flex justify-center py-14 md:py-72 bg-[#00161B] min-h-screen w-full font-montserrat relative overflow-hidden z-0">
    <div>
        <div
            class="absolute top-[-250px] left-[-300px] w-[450px] h-[450px] bg-[#00D0FF] rounded-full  blur-[300px] invisible lg:visible">
        </div>
    </div>
    <div class="flex justify-center relative z-20 md:-mt-[85px]">
        <img class="absolute -top-36 -left-16 w-[60%] invisible lg:visible -z-10"
            src="{{ asset('/images/icon/gts-form-bg-1.png') }}">
        <img class="absolute -bottom-40 -right-20 w-[60%] invisible lg:visible -z-10 "
            src="{{ asset('/images/icon/gts-form-bg-2.png') }}">
        {{-- Header Form --}}
        <div class="max-w-2xl lg:max-w-full mx-4 md:mx-8 pb-10 h-max lg:h-max bg-[#1C1C1C] shadow-xl">
            <div class="w-full h-full lg:h-[281px]  ">
                <img class="" src="{{ asset('/images/icon/headericon.png') }}">
            </div>
            {{-- Form Content --}}
            <div class="flex flex-col max-w-xl lg:max-w-full justify-center items-center mx-auto">
                <h1 x-show="!isSubmitted"
                    class="text-white text-center mt-[30px] mb-[30px] lg:mt-[62px] lg:mb-[62px] text-[16px] lg:text-[26px] font-bold px-4">
                    Form Pendaftaran Grand Talk Show</h1>
                <div class="ml-[26px] mr-[24px] lg:ml-[108px] lg:mr-[128px]">
                    <form x-show="!isSubmitted" wire:submit.prevent="submit" enctype="multipart/form-data">
                        <div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group">
                                <label for="name"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="name" id="name" wire:model="name"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap kamu" required />
                                @error('name')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group">
                                <label for="email"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email" id="email" wire:model="email"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif kamu" required />
                                @error('email')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group">
                                <label for="sumber_informasi"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Sumber
                                    Informasi <span class="text-[#FF1F00]">*</span>
                                </label>
                                <select id="sumber_informasi" name="sumber_informasi" wire:model="sumber_informasi" required
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0  peer">
                                    <option selected class="bg-[#1C1C1C]">Dari mana kamu mendapat informasi ini?
                                    </option>
                                    <option value="teman" class="bg-[#1C1C1C]">Teman</option>
                                    <option value="sosial_media" class="bg-[#1C1C1C]">Sosial Media</option>
                                </select>
                                @error('sumber_informasi')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-6 group cursor-pointer">
                                <label for="bukti_ig"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">
                                    Bukti Upload Poster di IG Story <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                                        <input type='file' class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                            file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                            file:rounded-md file:border-0
                                            file:text-xs lg:file:text-sm file:font-semibold
                                            file:bg-transparent file:text-white
                                            file:cursor-pointer cursor-pointer
                                          " wire:model="bukti_ig" id="bukti_ig" name="bukti_ig" required />
                                    </div>
                                </label>
                                @error('bukti_ig')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-[20px] lg:mb-[39px]">
                            <div
                                class="lg:ml-[45.5px] flex items-center flex-row mt-[27px]  space-x-4 font-medium text-[11px] lg:text-[17px]">
                                <input wire:model.defer="agree" type="checkbox" id="agree" name="agree"
                                    class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                                <label class="text-white" for="agree"> Saya setuju dengan kebijakan privasi serta <a
                                        href="" class="text-[#66C1A7]" target="_blank">syarat dan
                                        ketentuan</a> yang berlaku
                                </label>
                                    </div>
                                @error('agree')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="text-white bg-gradient-blue-r hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[16px] w-full h-[42px] lg:h-[48px] px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#66C1A7] hover:opacity-80">Kirim</button>
                        </div>
                    </form>
                    {{-- If Done --}}
                    <div class="flex flex-col justify-center" x-show="isSubmitted">
                        <h1 class="text-white text-center my-[17px] lg:my-[62px] text-[14px] lg:text-[26px] font-bold ">
                            Registrasi Berhasil</h1>
                        <p
                            class="text-white text-center font-medium text-[12px] lg:text-[18px] flex flex-wrap max-w-3xl">
                            Selamat, kamu sudah berhasil mendaftar ISE! Grand Talk Show! Sekarang kamu bisa mengakses
                            dashboard peserta dan melengkapi informasi lainnya.
                        </p>
                        <div class="flex flex-row justify-center gap-[16px] mt-6 sm:mt-[39px]">
                            <div>
                                <a href="#"
                                    class="items-center flex justify-center text-white bg-[##1C1C1C] font-semibold ring-2 ring-[#66C1A7] ring-inset font-Inter rounded-md text-[12px] lg:text-[16px] w-28 sm:w-[146.5px] lg:w-[387.5px] h-[42px] lg:h-[48px] px-5 py-2.5 text-center  dark:focus:ring-yellow-500 hover:opacity-80">Tutup</a>
                            </div>
                            <div>
                                <a href="#"
                                    class="items-center flex justify-center text-white bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:bg-blue-800 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[12px] lg:text-[16px] w-28 sm:w-[146.5px] lg:w-[387.5px] h-[42px] lg:h-[48px] px-[12px] lg:px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#66C1A7] hover:opacity-80">Masuk
                                    ke dashboard</a>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Form --}}
                    <div class="mt-[38px] flex justify-between flex-row items-center">
                        <a href="https://www.wa.me/+62911" class="items-center hover:brightness-90">
                            <img class="w-[45   px] h-[40px] lg:w-[55px] lg:h-[50px]  align-top hover:opacity-60"
                                src="{{ asset('/images/whatsapp.png ') }}">
                        </a>
                        <div class="flex flex-row gap-2 md:gap-3 items-center text-slate-300">
                            <a href="">
                                <x-bi-instagram class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="">
                                <x-bi-twitter class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="">
                                <x-bi-youtube class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="">
                                <x-bi-tiktok class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="">
                                <x-bi-line class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="">
                                <x-bi-linkedin class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>

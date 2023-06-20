<div x-data="{ step: 1 }"
    class="flex justify-center py-14 md:py-72 bg-[#00161B] min-h-screen w-full font-montserrat relative overflow-hidden z-0">
    <div>
        <div
            class="absolute top-[-250px] left-[-300px] w-[450px] h-[450px] bg-[#00D0FF] rounded-full  blur-[300px] invisible lg:visible">
        </div>
    </div>
    <div class="flex justify-center relative z-20 md:-mt-[85px]">
        {{-- Header Form --}}
        <div class="max-w-2xl lg:max-w-full mx-4 md:mx-8 pb-10 h-max lg:h-max bg-[#1C1C1C] shadow-xl">
            <div class="max-w-[1000px] w-full h-full lg:h-[281px]  ">
                <img class="" src="{{ asset('images/gts/ICON.png') }}">
            </div>
            {{-- Form Content --}}
            <div class="flex flex-col max-w-xl lg:max-w-full justify-center items-center mx-auto">
                <h1
                    class="text-white text-center mt-[30px] mb-[30px] lg:mt-[62px] lg:mb-[50px] text-[16px] lg:text-[26px] font-bold px-4">
                    Form Pendaftaran Data Science Academy</h1>
                <div class="relative flex flex-row pb-6 w-full">
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 lg:w-16 h-8 lg:h-16 rounded-full  p-2"
                        x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <x-heroicon-s-identification class="w-4 lg:w-12 text-white" />
                    </div>
                    <div class="relative max-w-[415px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 4 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 lg:w-16 h-8 lg:h-16 rounded-full  p-2"
                        x-bind:class="step >= 4 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <x-heroicon-s-users class="w-4 lg:w-12" />
                    </div>
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center">
                    </div>
                </div>
                <div class="flex flex-row mb-6 gap-x-10 xs:gap-x-20" x-bind:class="step <= 3 ? '' : 'hidden'">
                    <div class="flex flex-col">
                        <p x-on:click="step = 1"
                            class="cursor-pointer text-white text-xs xs:text-sm lg:text-xl font-bold">Ketua</p>
                        <div class="relative w-[80px] lg:w-[140px]  h-[2px] bg-white flex"
                            x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p x-on:click="step = 2"
                            class="cursor-pointer text-white text-xs xs:text-sm lg:text-xl font-bold">Anggota 1</p>
                        <div class="relative w-[80px] lg:w-[140px]  h-[2px] bg-white flex"
                            x-bind:class="step >= 2 ? 'bg-gradient-blue-r' : 'bg-white'">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p x-on:click="step = 3"
                            class="cursor-pointer text-white text-xs xs:text-sm lg:text-xl font-bold">Anggota 2</p>
                        <div class="relative w-[80px] lg:w-[140px]  h-[2px] bg-white flex"
                            x-bind:class="step >= 3 ? 'bg-gradient-blue-r' : 'bg-white'">
                        </div>
                    </div>
                </div>
                <div class="ml-[26px] mr-[24px] lg:ml-[108px] lg:mr-[128px]">
                    <form class="w-full" enctype="multipart/form-data" wire:submit.prevent="submit">
                        <div class="max-w-[362px] lg:max-w-[603px] w-full">


                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="nama_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_ketua" id="nama_ketua" wire:model="nama_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap ketua" required />
                                @error('nama_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="nama_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_anggota1" id="nama_anggota1" wire:model="nama_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap anggota 1" required />
                                @error('nama_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="nama_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_anggota2" id="nama_anggota2" wire:model="nama_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap anggota 2" required />
                                @error('nama_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="email_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email_ketua" id="email_ketua" wire:model="email_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif ketua" required />
                                @error('email_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="email_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email_anggota1" id="email_anggota1"
                                    wire:model="email_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif anggota 1" required />
                                @error('email_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="email_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email_anggota2" id="email_anggota2"
                                    wire:model="email_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif anggota 2" required />
                                @error('email_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="univ_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Asal
                                    Universitas
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="univ_ketua" id="univ_ketua" wire:model="univ_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama universitas ketua" required />
                                @error('univ_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="univ_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Asal
                                    Universitas
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="univ_anggota1" id="univ_anggota1"
                                    wire:model="univ_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama universitas anggota 1" required />
                                    @error('univ_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="univ_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Asal
                                    Universitas
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="univ_anggota2" id="univ_anggota2"
                                    wire:model="univ_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama universitas anggota 2" required />
                                    @error('univ_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="insta_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Instagram
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="insta_ketua" id="insta_ketua" wire:model="insta_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link Instagram ketua" required />
                                    @error('insta_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="insta_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Instagram
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="insta_anggota1" id="insta_anggota1"
                                    wire:model="insta_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link Instagram anggota 1" required />
                                    @error('insta_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="insta_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Instagram
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="insta_anggota2" id="insta_anggota2"
                                    wire:model="insta_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link Instagram anggota 2" required />
                                    @error('insta_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="twib_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Link
                                    Upload Twibbon
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="twib_ketua" id="twib_ketua" wire:model="twib_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link postingan twibbon ketua" required />
                                    @error('twib_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="twib_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Link
                                    Upload Twibbon
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="twib_anggota1" id="twib_anggota1"
                                    wire:model="twib_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link postingan twibbon anggota 1" required />
                                    @error('twib_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="twib_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Link
                                    Upload Twibbon
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="twib_anggota2" id="twib_anggota2"
                                    wire:model="twib_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link postingan twibbon anggota 2" required />
                                    @error('twib_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="linked_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Linkedin
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="linked_ketua" id="linked_ketua"
                                    wire:model="linked_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link akun LinkedIn ketua" required />
                                    @error('linked_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="linked_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Linkedin
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="linked_anggota1" id="linked_anggota1"
                                    wire:model="linked_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link akun LinkedIn anggota 1" required />
                                    @error('linked_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="linked_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Linkedin
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="linked_anggota2" id="linked_anggota2"
                                    wire:model="linked_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link akun LinkedIn anggota 2" required />
                                    @error('linked_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="nama_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Tim
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_tim" id="nama_tim" wire:model="nama_tim"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama tim kamu" required />
                                    @error('nama_tim')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="alasan_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Alasan
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="alasan_tim" id="alasan_tim" wire:model="alasan_tim"
                                    class="block py-0 px-0 w-[603px] text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan alasan kamu mendaftar ISE! Data Science Academy" required />
                                    @error('alasan_tim')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="tujuan_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Tujuan
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="tujuan_tim" id="tujuan_tim" wire:model="tujuan_tim"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Jelaskan untuk apa ilmu yang kamu dapatkan dari kegiatan ini"
                                    required />
                                    @error('tujuan_tim')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="sumber_informasi"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Sumber
                                    Informasi <span class="text-[#FF1F00]">*</span>
                                </label>
                                <select x-model="sumber_informasi" id="sumber_informasi" name="sumber_informasi" wire:model="sumber_informasi"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0  peer">
                                    <option selected class="bg-[#1C1C1C]">Dari mana kamu mendapat informasi ini?
                                    </option>
                                    <option value="sosial_media" class="bg-[#1C1C1C]">Media Sosial ISE!</option>
                                    <option value="media_partner" class="bg-[#1C1C1C]">Media Partner ISE!</option>
                                    <option value="sekolah" class="bg-[#1C1C1C]">Sekolah</option>
                                    <option value="teman_keluarga" class="bg-[#1C1C1C]">Teman/Keluarga</option>
                                    <option value="lainnya" class="bg-[#1C1C1C]">Lainnya</option>
                                </select>
                                @error('sumber_informasi')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror

                                <input wire:model="sumber_informasi_lainnya" x-on:input="sumber_informasi = 'lainnya'" x-show="sumber_informasi === 'lainnya'" class="mt-3 block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#4b4b4b] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer" name="sumber_informasi_lainnya" type="text" id="sumber_informasi_lainnya" placeholder="Masukkan sumber informasi kamu">
                            </div>


                            <div class="flex items-center flex-row mt-[27px] mb-[20px] lg:mb-[39px] space-x-4 font-medium text-[11px] lg:text-[17px]"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <input wire:model.defer="agree" type="checkbox" id="setuju-kebijakan"
                                    name="setuju-kebijakan"
                                    class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                                <label class="text-white " for="setuju-kebijakan"> Saya setuju dengan kebijakan
                                    privasi serta <a href="" class="text-[#66C1A7]" target="_blank">syarat dan
                                        ketentuan</a> yang berlaku</label>
                                @error('agree')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>



                            {{-- <div class="relative z-0 w-full mb-6 group" x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="text"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Bukti
                                    Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg  border border-[#348BB6] cursor-pointer hover:bg-blue hover:text-white">
                                    <div class="flex flex-row items-center gap-[8px] hover:opacity-70 ">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 md:w-8 h-4 md:h-8" />
                                        <span
                                            class="text-white font-Inter font-semibold text-xs md:text-[14px] whitespace-nowrap">Upload
                                            File</span>
                                        <input type='file' name="bukti_ketua" class="hidden" id="bukti_ketua" />
                                    </div>
                                </label>
                                @error('bukti_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-6 group" x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="bukti_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Bukti
                                    Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg  border border-[#348BB6] cursor-pointer hover:bg-blue hover:text-white">
                                    <div class="flex flex-row items-center gap-[8px] hover:opacity-70 ">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 md:w-8 h-4 md:h-8" />
                                        <span
                                            class="text-white font-Inter font-semibold text-xs md:text-[14px] whitespace-nowrap">Upload
                                            File</span>
                                        <input type='file' name="bukti_anggota1" class="hidden" id="bukti_anggota1" />
                                    </div>
                                </label>
                                @error('bukti_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-6 group" x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="bukti_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Bukti
                                    Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg  border border-[#348BB6] cursor-pointer hover:bg-blue hover:text-white">
                                    <div class="flex flex-row items-center gap-[8px] hover:opacity-70 ">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 md:w-8 h-4 md:h-8" />
                                        <span
                                            class="text-white font-Inter font-semibold text-xs md:text-[14px] whitespace-nowrap">Upload
                                            File</span>
                                        <input type='file' name="bukti_anggota2" class="hidden" id="bukti_anggota2" />
                                    </div>
                                </label>
                                @error('bukti_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="relative z-0 w-full mb-3 group cursor-pointer" x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="bukti_ketua"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru) <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                                        <input type='file'
                                            class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                            file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                            file:rounded-md file:border-0
                                            file:text-xs lg:file:text-sm file:font-semibold
                                            file:bg-transparent file:text-white
                                            file:cursor-pointer cursor-pointer
                                          "
                                            wire:model="bukti_ketua" id="bukti_ketua" name="bukti_ketua"
                                            required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)</div>
                                @error('bukti_ketua')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-3 group cursor-pointer" x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="bukti_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru) <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                                        <input type='file'
                                            class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                            file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                            file:rounded-md file:border-0
                                            file:text-xs lg:file:text-sm file:font-semibold
                                            file:bg-transparent file:text-white
                                            file:cursor-pointer cursor-pointer
                                          "
                                            wire:model="bukti_anggota1" id="bukti_anggota1" name="bukti_anggota1"
                                            required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)</div>
                                @error('bukti_anggota1')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-3 group cursor-pointer" x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="bukti_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru) <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                                        <input type='file'
                                            class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                            file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                            file:rounded-md file:border-0
                                            file:text-xs lg:file:text-sm file:font-semibold
                                            file:bg-transparent file:text-white
                                            file:cursor-pointer cursor-pointer
                                          "
                                            wire:model="bukti_anggota2" id="bukti_anggota2" name="bukti_anggota2"
                                            required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)</div>
                                @error('bukti_anggota2')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="flex flex-row gap-x-5">
                                <button x-show="step >= 2" type="button" @click=" step-- "
                                    class="text-white border-2 border-blue-300 hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[16px] w-full h-[42px] lg:h-[48px] px-5 py-2.5 text-center hover:opacity-80">Sebelumnya</button>
                                <button x-bind:class="step <= 3 ? '' : 'hidden'" type="button" @click=" step++ "
                                    class="text-white bg-gradient-blue-r hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[16px] w-full h-[42px] lg:h-[48px] px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#348BB6] hover:opacity-80">Berikutnya</button>
                                <button x-bind:class="step == 4 ? '' : 'hidden'" type="submit"
                                    class="text-white bg-gradient-blue-r hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[16px] w-full h-[42px] lg:h-[48px] px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#348BB6] hover:opacity-80">Submit</button>
                            </div>
                        </div>
                    </form>


                    {{-- Footer Form --}}
                    <div class="mt-[38px] flex justify-between flex-row items-center">
                        <a href="https://www.wa.me/+62911" class="items-center hover:brightness-90">
                            <img class="w-[45   px] h-[40px] lg:w-[55px] lg:h-[50px]  align-top hover:opacity-60"
                                src="{{ asset('/images/whatsapp.png ') }}">
                        </a>
                        <div class="flex flex-row gap-2 md:gap-3 items-center text-slate-300">
                            <a href="ttps://www.instagram.com/is_expo/">
                                <x-bi-instagram class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="https://tiktok.com">
                                <x-bi-tiktok class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/">
                                <x-bi-linkedin class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                        </div>

                    </div>
                </div>

            </div>


        </div>


    </div>

<div x-data="{step: 1}" class="bg-[#121316] relative min-h-screen">
    <div class="mx-auto flex flex-col justify-center items-center">
        <div class="md:w-[600px] xl:w-[1027px] pb-[26px] my-[79px] mx-[23px] bg-[#1C1C1C] text-[#FFFFFF] flex flex-col justify-between">
            <div>
                <div class="mb-6 md:mb-8 xl:mb-10">
                    <img src="{{asset('images/pendaftaran-rise/RISE.png')}}" alt="Header">
                </div>
                <div x-show="step <= 4" class="font-semibold text-center text-sm md:text-xl xl:text-3xl">FORM Pendaftaran RISE!</div>
                <div x-show="step == 5" class="font-semibold text-center text-sm md:text-xl xl:text-3xl">Registrasi Berhasil</div>
                <div class="relative flex my-9 md:my-12 xl:my-20">
                    <div class="relative h-[3px] w-1/4 flex items-end justify-center flex-col" x-bind:class="step>=1 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                        <div class="w-10 h-10 md:w-12 md:h-12 xl:w-14 xl:h-14 rounded-full p-2"
                        x-bind:class="step>=1 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                            <x-heroicon-s-wallet/>
                            {{-- <div class="flex items-center justify-center mt-2 whitespace-nowrap">Step 1</div> --}}
                        </div>
                    </div>
                    <div class="relative h-[3px] w-2/5 flex items-end justify-center flex-col"
                    x-bind:class="step>=2 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                        <div class="w-10 h-10 md:w-12 md:h-12 xl:w-14 xl:h-14 rounded-full p-2"
                        x-bind:class="step>=2 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                            <x-heroicon-o-circle-stack/>
                            {{-- <div class="flex items-center justify-center mt-2 whitespace-nowrap">Step 2</div> --}}
                        </div>
                    </div>
                    <div class="relative h-[3px] w-1/3 flex items-end justify-center flex-col"
                    x-bind:class="step>=4 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                        <div class="w-10 h-10 md:w-12 md:h-12 xl:w-14 xl:h-14 rounded-full p-2"
                        x-bind:class="step>=4 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                            <x-heroicon-o-arrow-left/>
                            {{-- <div class="flex items-center justify-center mt-2 whitespace-nowrap font-[1100]">Step 3</div> --}}
                        </div>
                    </div>
                    <div class="relative h-[3px] w-1/4 flex items-end justify-center flex-col"
                    x-bind:class="step>=5 ? 'bg-gradient-to-r from-[#FF9355] to-[#FFD693]' : 'bg-[#D8D8D8]'">
                    </div>
                </div>

            <!-- form -->
            <form wire:submit.prevent="submit" class="mx-10 md:mx-14 flex flex-col text-white" encytype="multipart/form-data">
                <!-- step 1 -->
                <div x-show="step == 1" class="flex flex-col space-y-[15px]">

                    <div class="block">
                        <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="nama_tim">Nama Tim <span class="text-[#FF1F00]">*</span></label>
                        <input wire:model="nama_tim" id="nama_tim" name="nama_tim" type="text" placeholder="Masukan nama tim kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                            @error('nama_tim')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="asal_instansi">Asal Instansi <span class="text-[#FF1F00]">*</span></label>
                        <input wire:model="asal_instansi" id="asal_instansi" name="asal_instansi" type="text" placeholder="Masukkan Asal Instansi kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                            @error('asal_instansi')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="nama_ketua">Nama Ketua <span class="text-[#FF1F00]">*</span></label>
                        <input wire:model="nama_ketua" id="nama_ketua" name="nama_ketua" type="text" placeholder="Masukan nama lengkap kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                            @error('nama_ketua')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="NoTelp">Nomor Telepon <span class="text-[#FF1F00]">*</span></label>
                        <input wire:model="nomor_telepon_ketua" id="nomor_telepon_ketua" name="nomor_telp_ketua" type="text" placeholder="Masukkan nomor telepon kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                            @error('nomor_telepon_ketua')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="email">Email <span class="text-[#FF1F00]">*</span></label>
                        <input wire:model="email_ketua" id="email_ketua" name="email_ketua" type="email" placeholder="Masukan email aktif kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                            @error('email_ketua')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                    </div>

                    <div>
                        <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="twibbon">Link Upload Twibbon <span class="text-[#FF1F00]">*</span></label>
                        <input wire:model="twibbon_ketua" id="twibbon_ketua" name="twibbon_ketua" type="text" placeholder="Masukan link postingan twibbon kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                            @error('twibbon_ketua')
                            <span class="text-red-700">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="relative z-0 w-full mb-6 group cursor-pointer">
                        <label for="kartu_pelajar_ketua" class="block leading-normal text-xs md:text-base xl:text-xl font-medium text-white">Foto Kartu Pelajar <span class="text-[#FF1F00]">*</span>
                        </label>
                        <label class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                            <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                                <input type='file'
                                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                    file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                    file:rounded-md file:border-0
                                    file:text-xs lg:file:text-sm file:font-semibold
                                    file:bg-transparent file:text-white
                                    file:cursor-pointer cursor-pointer"
                                    wire:model="kartu_pelajar_ketua" id="kartu_pelajar_ketua" name="kartu_pelajar_ketua"/>
                            </div>
                        </label>
                        <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                            Max size 1mb (.jpg, .jpeg, png)
                        </label>
                            @error('kartu_pelajar_ketua')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="relative z-0 w-full mb-6 group cursor-pointer">
                        <label for="poster_ketua" class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Bukti Upload Poster <span class="text-[#FF1F00]">*</span>
                        </label>
                        <label class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                            <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                                <input type='file'
                                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                    file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                    file:rounded-md file:border-0
                                    file:text-xs lg:file:text-sm file:font-semibold
                                    file:bg-transparent file:text-white
                                    file:cursor-pointer cursor-pointer"
                                    wire:model="poster_ketua" id="poster_ketua" name="poster_ketua"/>
                            </div>
                        </label>
                        <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                            Max size 1mb (.jpg, .jpeg, png)
                        </label>
                            @error('poster_ketua')
                                <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                            @enderror
                    </div>


                </div>


            <!-- step 2 -->
            <div x-show="step == 2" class="flex flex-col space-y-[15px]">

            <div class="grid grid-flow-col justify-center text-center gap-[19px]">
                <div class="grid grid-flow-row hover:opacity-60">
                    <p class="text-[#F3F3F3] text-xs md:text-base xl:text-xl leading-7 cursor-pointer " @click="step=2">Anggota 1</p>
                    <div class="h-[2px] w-full bg-gradient-to-r from-[#FF9355] to-[#FFD693]">
                    </div>
                </div>
                <div class="grid grid-flow-row hover:opacity-60">
                    <p class="text-[#8B8B8B] text-xs md:text-base xl:text-xl leading-7 cursor-pointer" @click="step=3">Anggota 2</p>
                    <div class="h-[2px] w-full bg-[#8B8B8B]">
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="nama_anggota1">Nama Anggota <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="nama_anggota1" name="nama_anggota1" id="nama_anggota1" type="text" placeholder="Masukan nama anggota 1"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('nama_anggota1')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="NoTelp">Nomor Telepon <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="nomor_telepon_anggota1" name="nomor_telepon_anggota1" id="nomor_telepon_anggota1" type="text" placeholder="Masukkan nomor telepon kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('nomor_telepon_anggota1')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="email">Email <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="email_anggota1" name="email_anggota1" id="email_anggota1" type="email" placeholder="Masukan email aktif kamu" class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('email_anggota1')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="twibbon">Link Upload Twibbon <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="twibbon_anggota1" name="twibbon_anggota1" id="twibbon_anggota1" type="text" placeholder="Masukan link postingan twibbon kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('twibbon_anggota1')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group cursor-pointer">
                <label for="kartu_pelajar_anggota1" class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Foto Kartu Pelajar <span class="text-[#FF1F00]">*</span>
                </label>
                <label class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                        <input type='file'
                                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                    file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                    file:rounded-md file:border-0
                                    file:text-xs lg:file:text-sm file:font-semibold
                                    file:bg-transparent file:text-white
                                    file:cursor-pointer cursor-pointer"
                                    wire:model="kartu_pelajar_anggota1" id="kartu_pelajar_anggota1" name="kartu_pelajar_anggota1"/>
                    </div>
                </label>
                <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                    Max size 1mb (.jpg, .jpeg, png)
                </label>
                    @error('kartu_pelajar_anggota1')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
            </div>


            <div class="relative z-0 w-full mb-6 group cursor-pointer">
                <label for="poster_anggota1" class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Bukti Upload Poster <span class="text-[#FF1F00]">*</span>
                </label>
                <label class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                        <input type='file'
                                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                    file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                    file:rounded-md file:border-0
                                    file:text-xs lg:file:text-sm file:font-semibold
                                    file:bg-transparent file:text-white
                                    file:cursor-pointer cursor-pointer"
                                    wire:model="poster_anggota1" id="poster_anggota1" name="poster_anggota1"/>
                    </div>
                </label>
                <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                    Max size 1mb (.jpg, .jpeg, png)
                </label>
                    @error('poster_anggota1')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
            </div>

            </div>


            <!-- page 3 -->
            <div x-show="step == 3" class="flex flex-col space-y-[15px]">

            <div class="grid grid-flow-col justify-center text-center gap-[19px]">
                <div class="grid grid-flow-row hover:opacity-60">
                    <p class="text-[#8B8B8B] text-xs md:text-base xl:text-xl leading-7 cursor-pointer " @click="step=2">Anggota 1</p>
                    <div class="h-[2px] w-full bg-[#8b8b8b]">
                    </div>
                </div>
                <div class="grid grid-flow-row hover:opacity-60">
                    <p class="text-[#F3F3F3] text-xs md:text-base xl:text-xl leading-7 cursor-pointer " @click="step=3">Anggota 2</p>
                    <div class="h-[2px] w-full bg-gradient-to-r from-[#FF9355] to-[#FFD693]">
                    </div>
                </div>
            </div>

            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="nama_anggota2">Nama Anggota <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="nama_anggota2" name="nama_anggota2" id="nama_anggota2" type="text" placeholder="Masukan nama anggota 2"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('nama_anggota2')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="NoTelp">Nomor Telepon <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="nomor_telepon_anggota2" name="nomor_telepon_anggota2" id="nomor_telepon_anggota2" type="text" placeholder="Masukkan nomor telepon kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('nomor_telepon_anggota2')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="email">Email <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="email_anggota2" name="email_anggota2" id="email_anggota2" type="email" placeholder="Masukan email aktif kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('email_anggota2')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="twibbon">Link Upload Twibbon <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="twibbon_anggota2" name="twibbon_anggota2" id="twibbon_anggota2" type="text" placeholder="Masukan link postingan twibbon kamu"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('twibbon_anggota2')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group cursor-pointer">
                <label for="kartu_pelajar_anggota2" class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Foto Kartu Pelajar <span class="text-[#FF1F00]">*</span>
                </label>
                <label class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                        <input type='file'
                                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                    file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                    file:rounded-md file:border-0
                                    file:text-xs lg:file:text-sm file:font-semibold
                                    file:bg-transparent file:text-white
                                    file:cursor-pointer cursor-pointer"
                                    wire:model="kartu_pelajar_anggota2" id="kartu_pelajar_anggota2" name="kartu_pelajar_anggota2"/>
                    </div>
                </label>
                <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                    Max size 1mb (.jpg, .jpeg, png)
                </label>
                    @error('kartu_pelajar_anggota2')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group cursor-pointer">
                <label for="poster_anggota2" class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Bukti Upload Poster <span class="text-[#FF1F00]">*</span>
                </label>
                <label class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                        <x-heroicon-s-cloud-arrow-up class="text-slate-100 w-4 lg:w-8 h-4 lg:h-8" />
                        <input type='file'
                                    class="block w-44 lg:w-56 text-xs lg:text-sm text-gray-500
                                    file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2
                                    file:rounded-md file:border-0
                                    file:text-xs lg:file:text-sm file:font-semibold
                                    file:bg-transparent file:text-white
                                    file:cursor-pointer cursor-pointer"
                                    wire:model="poster_anggota2" id="poster_anggota2" name="poster_anggota2"/>
                    </div>
                </label>
                <label class="text-white text-xs md:text-sm xl:text-base font-thin opacity-80">
                    Max size 1mb (.jpg, .jpeg, png)
                </label>
                    @error('poster_anggota2')
                        <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                    @enderror
            </div>

            </div>

            <!-- page 4 -->
            <div x-show="step == 4" class="flex flex-col space-y-[15px]">


            <div>
                <label class="block text-white text-xs md:text-base xl:text-xl font-medium md:mb-1" for="poster">Status Biodata <span class="text-[#FF1F00]">*</span></label>
                <input wire:model="status_biodata" id="status_biodata" name="status_biodata" type="text" placeholder="Status biodata"  class="w-full bg-transparent border-b-[1.4px] p-2 outline-none text-[11px] md:text-sm xl:text-lg border-[#C5C5C5]">
                 @error('status_biodata')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            </div>

            <!-- page 5 -->
            <div x-show="step == 5" class="flex flex-col space-y-[15px] ml-0">


            <div CLASS="text-center text-white text-xs md:text-base xl:text-xl font-medium">
                Selamat, kamu sudah berhasil mendaftarkan tim kamu! Sekarang kamu bisa mengakses dashboard peserta dan melengkapi informasi lainnya.
            </div>

            </div>


        <!-- button -->

        <div class="mt-10 text-center">
            <!-- button 1 -->
            <div>
                <p class="bg-gradient-to-r from-[#FF9355] to-[#FFD693] px-[99px] py-[12px] rounded-[6px] cursor-pointer hover:opacity-60" @click="step=2" x-show="step==1">Next</p>
            </div>

            <!-- button 2 -->
            <div class="grid grid-flow-col gap-[16px]">
                <p class="bg-red-500 px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=1" x-show="step==2">Back</p>
                <p class="bg-gradient-to-r from-[#FF9355] to-[#FFD693] px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=3" x-show="step==2">Next</p>
            </div>

            <!-- button 3 -->
            <div class="grid grid-flow-col gap-[16px]">
                <p class="bg-red-500 px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=2" x-show="step==3">Back</p>
                <p class="bg-gradient-to-r from-[#FF9355] to-[#FFD693] px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=4" x-show="step==3">Next</p>
            </div>

            <!-- button 4 -->
            <div class="grid grid-flow-col gap-[16px]">
                <p class="bg-red-500 px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=3" x-show="step==4">Back</p>
                <!-- submit -->
                <!-- <p class="bg-gradient-to-r from-[#FF9355] to-[#FFD693] px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=5" x-show="step==4">Kirim</p> -->

                <div x-show="step==4" class=" bg-gradient-to-r from-[#FF9355] to-[#FFD693] rounded-[6px] cursor-pointer hover:opacity-60">
                <button type="submit" class="w-full h-full px-4 py-2" @click="step=5">Submit</button>
                </div>
            </div>


            <!-- button 5 -->
            <div class="grid grid-flow-col gap-[16px]">
                <p class="bg-red-500 px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="step=4" x-show="step==5">Back</p>
                <p class="bg-gradient-to-r from-[#FF9355] to-[#FFD693] px-4 py-2 rounded-[6px] cursor-pointer hover:opacity-60" @click="" x-show="step==5">Masuk ke Dashboard</p>
            </div>

        </div>
        </div>
</form>

        <!-- footer icon -->

        <div class="mx-7 mt-[38px] flex justify-between flex-row items-center mx-">
                        <a href="https://wa.me/+6281332049750" class="items-center hover:brightness-90">
                            <img class="w-[45   px] h-[40px] lg:w-[55px] lg:h-[50px]  align-top hover:opacity-60" src="{{ asset('/images/whatsapp.png ') }}">
                        </a>
                        <div class="flex flex-row gap-2 md:gap-3 items-center text-slate-300">
                            <a href="https://www.instagram.com/is_expo/"  target="blank">
                                <x-bi-instagram class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="https://tiktok.com"  target="blank">
                                <x-bi-tiktok class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/"  target="blank">
                                <x-bi-linkedin class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                        </div>
                    </div>

    </div>
    </div>
</div>

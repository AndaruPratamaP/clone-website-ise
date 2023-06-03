<body class=" bg-[#121316]">
    <form action="" wire:submit.prevent="submit">
        <div class="flex justify-center items-center mt-[10rem] z-20">
            <div class=" grid grid-cols-3 h-[722px] w-[1224px] bg-[#191A1E] rounded-2xl z-20">
                <div class=" row-span-2 bg-[#141414] w-[390px] h-[720px]">
                    <div class=" py-8 px-6">
                        <div class=" text-transparent font-montserrat text-[24px] font-bold bg-gradient-to-t from-[#FFD693] to-[#FF9355] bg-clip-text">
                            Information Systems Expo
                        </div>
                        <div class=" relative bottom-4 text-[#FFFFFF] font-montserrat text-[64px] font-bold">
                            ISE! 2023
                        </div>  
                        <img class=" relative bottom-[16rem] left-14" src="{{ asset('images/LoginRegisterDecor1.png') }}" alt="">
                    </div>
                </div>
                <div class=" pt-20 pl-10 pr-5">
                    <div class="text-[#FFFFFF] font-montserrat mb-1 mt-4 text-[18px] font-bold">Nama Lengkap</div>
                    <input class=" rounded-lg w-full h-[46px] mb-6 py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-white text-[18px] focus:outline-[#66C1A7] focus:border-transparent outline-none" type="text" name="name" id="name" placeholder="Masukkan nama lengkap kamu" wire:model="name">
                    <div class="text-[#FFFFFF] font-montserrat mb-1 text-[18px] font-bold">Email</div>
                    <input class=" rounded-lg w-full h-[46px] mb-6 py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-white text-[18px] focus:outline-[#66C1A7] focus:border-transparent outline-none" type="text" name="email" id="email" placeholder="Masukkan alamat email kamu" wire:model="email">
                    <div class="text-[#FFFFFF] font-montserrat mb-1 text-[18px] font-bold">Password</div>
                    <div class="mb-6">
                        <input class=" rounded-lg w-full h-[46px] py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-white text-[18px] focus:outline-[#66C1A7] focus:border-transparent outline-none" name="password" id="password" placeholder="Masukkan password kamu" type="password" wire:model="password">
                        <button class="absolute bottom-[8.25rem] left-[51.5rem]">
                            <img class="" src="{{ asset('images/Eye.png') }}" alt="">
                        </button>
                    </div>
                    <div class="text-[#FFFFFF] font-montserrat mb-1 text-[18px] font-bold">Ulangi Password</div>
                    <div class="mb-6">
                        <input class=" rounded-lg w-full h-[46px] py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-white text-[18px] focus:outline-[#66C1A7] focus:border-transparent outline-none" name="password_confirmation" id="password_confirmation" placeholder="Masukkan password kamu" type="password" wire:model="password_confirmation">
                        <button class="absolute bottom-[2rem] left-[51.5rem]">
                            <img class="" src="{{ asset('images/Eye.png') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class=" pt-20 pr-10 pl-5">
                    <div class="text-[#FFFFFF] font-montserrat mb-1 mt-4 text-[18px] font-bold">Nomor Telepon</div>
                    <input class=" rounded-lg w-full h-[46px] mb-6 py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-white text-[18px] focus:outline-[#66C1A7] focus:border-transparent outline-none" type="text" name="phone" id="phone" placeholder="Masukkan nomor telepon kamu" wire:model="phone">
                    <div class="text-[#FFFFFF] font-montserrat mb-1 text-[18px] font-bold">Tahu ISE dari mana ?</div>
                    <div>
                        <select style="color: #B5B3BC" class="rounded-lg w-full h-[46px] mb-6 py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-[18px] appearance-none focus:outline-[#66C1A7] focus:border-transparent outline-none" name="isefrom" id="isefrom" wire:model="isefrom">
                            <option value="lorem">Lorem ipsum dolor sit amet</option>
                            <option value="phone">phone</option>
                        </select>
                        <img class=" absolute top-[25.5rem] right-[7.5rem]" src="{{ asset('images/ArrowDown.png') }}" alt="">
                    </div>
                    {{-- <button class="relative flex items-center bg-[#191A1E] border-2 border-[#288770] shadow text-gray-600 rounded-lg focus:ring ring-[#288770] w-full h-[46px] py-2 px-4 mb-6 group" type="button">
                        <p class=" text-left text-[18px] text-[#B5B3BC] min-w-[12rem]">Pilih Sumber Informasi</p>
                        <span class="p-2">
                            <img class=" relative left-[5.5rem] min-w-max" src="{{ asset('images/ArrowDown.png') }}" alt="">
                        </span>
                        <div class=" relative hidden min-w-[21.5rem] bg-white mt-7 rounded-lg left-[-14rem] top-[4rem] group-focus:block">
                            <ul class=" text-left border rounded-lg border-[#288770]">
                                <li class=" px-4 py-1 border-b border-[#288770] bg-[#191A1E] text-gray-600">Test</li>
                                <li class=" px-4 py-1 border-b border-[#288770] bg-[#191A1E] text-gray-600">Test</li>
                                <li class=" px-4 py-1 border-b border-[#288770] bg-[#191A1E] text-gray-600">Test</li>
                            </ul>
                        </div>
                    </button> --}}
                    <div class="text-[#FFFFFF] font-montserrat mb-1 text-[18px] font-bold">Asal Provinsi</div>
                    <div>
                        <select style="color: #B5B3BC" class="rounded-lg w-full h-[46px] mb-6 py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-[18px] appearance-none focus:outline-[#66C1A7] focus:border-transparent outline-none" name="province" id="province" wire:model="province">
                            <option value="lorem">Lorem ipsum dolor sit amet</option>
                            <option value="jatim">Jawa timur</option>
                        </select>
                        <img class=" absolute top-[31.75rem] right-[7.5rem]" src="{{ asset('images/ArrowDown.png') }}" alt="">
                    </div>
                    <div class="text-[#FFFFFF] font-montserrat mb-1 text-[18px] font-bold">Jenjang</div>
                    <div>
                        <select style="color: #B5B3BC" class="rounded-lg w-full h-[46px] mb-6 py-2 px-4 bg-[#191A1E] border-[#288770] border-2 text-[18px] appearance-none focus:outline-[#66C1A7] focus:border-transparent outline-none" name="education" id="education" wire:model="education">
                            <option value="lorem">Lorem ipsum dolor sit amet</option>
                            <option value="SMA">SMA</option>
                        </select>
                        <img class=" absolute top-[38rem] right-[7.5rem]" src="{{ asset('images/ArrowDown.png') }}" alt="">
                    </div>
                </div>
                <div class=" col-span-2 pr-10 pl-10">
                    <div class=" absolute bottom-[27rem] text-[24px] font-bold text-white">Create an Account</div>
                    <button class=" relative bottom-10 rounded-full w-full text-white bg-gradient-to-r from-[#006C56] to-[#AFD196] active:border-[#66C1A7] border-2 border-[#191A1E]" type="submit">
                        <span class=" block py-2 px-6  font-montserrat font-bold rounded-full text-white bg-transparent hover:bg-[#006C56] transition text-[20px]">
                            Sign Up
                        </span>
                    </button>
                    <div class=" text-center">
                        <div class=" inline-block text-[#B5B3BC] text-[16px] font-[600]">Sudah punya akun?</div>
                        <button class=" inline-block bg-gradient-to-l from-[#006C56] to-[#DBFEC1] bg-clip-text text-transparent text-[16px] font-[700]">Masuk disini</button>
                    </div>
                    <img class=" absolute bottom-[-17rem] right-[1rem] w-28" src="{{ asset('images/login1decor1.png') }}" alt="">
                </div>
            </div>
        </div>
    </form>
    <div class="relative">
        <img class=" absolute bottom-[16.5rem] z-10" src="{{ asset('images/LoginRegisterBackgroundTL.png') }}" alt="">      
    </div>
    <div class=" text-center font-montserrat text-[#F3F3F3] text-[16px] font-bold mt-12 mb-6">Copyright Information System Expo 2023</div>
    <img class=" absolute left-[43.5rem] bottom-[-19.75rem] z-10" src="{{ asset('images/LoginRegisterBackgroundBR.png') }}" alt="">  
</body>
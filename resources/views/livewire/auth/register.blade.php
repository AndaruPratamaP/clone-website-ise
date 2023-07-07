@section('title', 'Register')
<div class=" bg-[#121316] min-h-screen flex justify-center items-center relative overflow-x-hidden">
    <img class=" absolute top-0 left-0 z-10" src="{{ asset('images/Login_Register_Top_Left_Background.png') }}"
        alt="">
    <img class=" absolute top-0 right-0 z-10" src="{{ asset('images/Login_Register_Top_Right_Background.png') }}"
        alt="">
    <img class=" absolute bottom-[0rem] left-0 z-10" src="{{ asset('images/Login_Register_Bottom_Left_Background.png') }}"
        alt="">
    <img class=" absolute bottom-[0rem] right-0 z-10"
        src="{{ asset('images/Login_Register_Bottom_Right_Background.png') }}" alt="">
    <div x-data="{ password: '', password_again: '', password_match: false, other_ref: false, show: false, show_again: false }">
        <form wire:submit.prevent="regist">
            <div class="flex justify-center items-center mt-[10rem] mb-20 z-20">
                <div
                    class=" grid space-y-0 auto-rows-max gap-0 xl:grid-flow-row grid-cols-1 xl:grid-cols-3 h-[1271px] xl:h-[705px] w-[325px] lg:w-[400px] xl:w-[1270px] rounded-tl-[45px] rounded-br-[90px] z-20">
                    <div
                        class=" bg-[#191A1E] h-[100px] xl:h-0 w-[325px] lg:w-[400px] xl:w-[846.66px] xl:col-span-2 order-3 xl:order-1">
                        <div class=" relative px-8 xl:px-0">
                            <label
                                class=" absolute text-[#FFFFFF] font-montserrat font-bold xl:font-extrabold text-[24px] xl:text-[48px] xl:left-[4rem] top-[2rem] z-30 drop-shadow-[0_4px_4px_rgba(0,0,0,1)]">
                                Create an Account
                            </label>
                            <img class=" absolute left-[16.65rem] xl:left-[33.75rem] top-[3rem] xl:top-[4.5rem] w-[0.35rem] h-[0.3rem] xl:w-max xl:h-max z-30"
                                src="{{ asset('images/Login_Register_Green_Dot.png') }}" alt="">
                        </div>
                    </div>
                    <div
                        class=" rounded-t-[22px] xl:rounded-none h-[128.5px] lg:h-[190px] xl:h-0 bg-[#141414] w-[325px] lg:w-[400px] xl:w-[424px] order-1 xl:order-2">
                        <div class=" relative">
                            <img class=" hidden absolute top-[2.5rem] left-[19.5rem] z-30 w-[60px]"
                                src="{{ asset('images/Login_Register_ISE.png') }}" alt="">
                            <img class=" absolute top-[-3.75rem] xl:top-[-5.8rem] right-[5.25rem] lg:right-[7.5rem] xl:right-[43.5rem] w-[9rem] h-[5.5rem] xl:w-max xl:h-max"
                                src="{{ asset('images/LoginRegisterDecor1.png') }}" alt="">
                            <img class=" block xl:hidden rounded-tl-[22px] rounded-tr-[22px]"
                                src="{{ asset('images/Login_Register_Mobile_Cover.png') }}" alt="">
                        </div>
                    </div>
                    <div
                        class=" bg-[#191A1E] xl:rounded-tl-[45px] xl:h-[539px] w-[325px] lg:w-[400px] xl:w-[429.5px] xl:pt-20 pl-8 xl:pl-14 pr-8 xl:pr-5 order-4 xl:order-3">
                        <div class=" max-h-[80px]">
                            <div class=" relative xl:mt-10 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="full_name">Nama Lengkap
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <input
                                    class=" w-full px-[2.5px] bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('full_name') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    type="text" name="full_name" id="full_name"
                                    placeholder="Masukkan nama lengkap anda" wire:model="full_name">
                                @error('full_name')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class=" max-h-[80px]">
                            <div class=" relative mt-8 xl:mt-6 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="email">Alamat Email
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <input
                                    class=" w-full px-[2.5px] bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('email') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    type="text" name="email" id="email"
                                    placeholder="Masukkan alamat email anda" wire:model="email">
                                @error('email')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class=" max-h-[80px]">
                            <div class=" relative mt-8 xl:mt-6 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="password">Password
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <input
                                    class=" w-full px-[2.5px] bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('password') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    name="password" id="password" placeholder="Masukkan password anda" type="password"
                                    x-model="password" x-bind:type="show ? 'text' : 'password'" wire:model="password">
                                <button class=" absolute top-[0.4rem] left-[14.75rem] lg:left-[18.5rem] xl:left-[20rem]"
                                    x-show="!show" @click="show = !show" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-[17px] h-[16px] xl:w-[17px] xl:h-[21px] text-gray-400">
                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                                        <path fill-rule="evenodd"
                                            d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class=" absolute top-[0.4rem] left-[14.75rem] lg:left-[18.5rem] xl:left-[20rem]"
                                    type="button" x-show="show" @click="show = !show">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-[17px] h-[16px] xl:w-[17px] xl:h-[21px] text-gray-400">
                                        <path fill-rule="evenodd"
                                            d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.091 1.092a4 4 0 00-5.557-5.557z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M10.748 13.93l2.523 2.523a9.987 9.987 0 01-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 010-1.186A10.007 10.007 0 012.839 6.02L6.07 9.252a4 4 0 004.678 4.678z" />
                                    </svg>
                                </button>
                                @error('password')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class=" max-h-[80px]">
                            <div class=" relative mt-8 xl:mt-6 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="institution">Instansi
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <input
                                    class=" w-full px-[2.5px] bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('password_again') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    name="institution" id="institution" placeholder="Masukkan instansi anda"
                                    type="text" wire:model="institution">
                            </div>
                            @error('institution')
                                <span
                                    class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div
                        class=" bg-[#191A1E] h-[360px] xl:h-[539px] w-[325px] lg:w-[400px] xl:w-[429.5px] xl:pt-20 pl-8 xl:pl-5 pr-8 xl:pr-10 order-5 xl:order-4">
                        <div class=" max-h-[80px]">
                            <div class=" relative mt-8 xl:mt-10 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="phone">Nomor Telepon
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <input
                                    class=" w-full px-[2.5px] bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('phone') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    type="text" name="phone" id="phone"
                                    placeholder="Masukkan nomor telepon anda" wire:model="phone">
                                @error('phone')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class=" max-h-[60px] xl:max-h-none">
                            <div class=" relative mt-8 xl:mt-6 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="refferal">Tahu ISE Dari Mana?
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <select
                                    class=" w-full px-1 bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] appearance-none @error('referral') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror
                                "
                                    name="referral" id="referral" wire:model="referral" x-model="referral"
                                    x-on:change="other_ref = ''">
                                    <option
                                        class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                        value="" selected>Pilih Sumber Informasi</option>
                                    @foreach ($referrals as $referral)
                                        <option
                                            class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                            value="{{ $referral }}">{{ $referral }}</option>
                                    @endforeach
                                </select>
                                <div class=" relative">
                                    <img class=" absolute bottom-[1rem] lg:bottom-[0.5rem] xl:bottom-[1rem] left-[15rem] lg:left-[18.5rem] xl:left-[21.5rem]"
                                        src="{{ asset('images/Arrow_Down2.png') }}" alt="">
                                </div>
                                <input
                                    class=" w-full font-[400] h-[28px] xl:h-[34px] bg-transparent text-white text-[12px] xl:text-[18px] outline-none font-montserrat placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium px-1 hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] appearance-none"
                                    id="referral2" wire:model="otherRef" type="text" x-model="other_ref"
                                    x-show="referral === 'Lainnya'" x-on:input="referral = 'Lainnya'"
                                    x-on:focusout="if(!other_ref) referral = ''" />
                                <div class=" w-full bg-white h-[2px]" x-show="referral === 'Lainnya'"
                                    x-on:focusout="if(!other_ref) referral = ''"></div>
                                @error('referral')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class=" max-h-[80px]">
                            <div class=" relative mt-8 xl:mt-6 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="province_id">Asal Provinsi
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <select
                                    class="w-full px-1 bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] appearance-none @error('province_id') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    name="province_id" id="province_id" wire:model="province_id">
                                    <option
                                        class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                        value="" selected>Pilih asal provinsi anda</option>
                                    @foreach ($provinces as $province)
                                        @if (is_a($province, 'App\Core\Application\Services\Provinsi\ProvinsiResponse'))
                                            <option
                                                class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                                value="{{ $province->getId() }}">{{ $province->getName() }}</option>
                                        @else
                                            <option
                                                class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                                value="{{ $province['id'] }}">{{ $province['name'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <div class=" relative">
                                    <img class=" absolute bottom-[1rem] lg:bottom-[0.5rem] xl:bottom-[1rem] left-[15rem] lg:left-[18.5rem] xl:left-[21.5rem]"
                                        src="{{ asset('images/Arrow_Down2.png') }}" alt="">
                                </div>
                                @error('province_id')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="">
                            <div class=" relative mt-8 xl:mt-6 mb-1">
                                <label class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] xl:text-[20px]"
                                    for="role_id">Jenjang
                                    <div
                                        class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] xl:text-[20px]">
                                        *
                                    </div>
                                </label>
                            </div>
                            <div class=" relative">
                                <select
                                    class="w-full px-1 bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] appearance-none @error('role_id') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    name="role_id" id="role_id" wire:model="role_id">
                                    <option
                                        class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                        value="99" selected>Pilih jenjang anda</option>
                                    @foreach ($roles as $role)
                                        @if (is_a($role, 'App\Core\Application\Services\Role\RoleResponse'))
                                            <option
                                                class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                                value="{{ $role->getId() }}">{{ $role->getName() }}</option>
                                        @else
                                            <option
                                                class=" font-montserrat font-medium text-[18px] w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                                value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <div class=" relative">
                                    <img class=" absolute bottom-[1rem] lg:bottom-[0.5rem] xl:bottom-[1rem] left-[15rem] lg:left-[18.5rem] xl:left-[21.5rem]"
                                        src="{{ asset('images/Arrow_Down2.png') }}" alt="">
                                </div>
                                @error('role_id')
                                    <span
                                        class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div
                        class=" xl:row-span-2 bg-[#141414] w-[325px] lg:w-[400px] xl:w-[424px] h-[128.5px] xl:h-[705px] rounded-br-[90px] order-2 xl:order-5">
                        <div class="">
                            <div class=" relative">
                                <img class=" hidden absolute min-w-max left-[-2rem] top-[6rem] z-40"
                                    src="{{ asset('images/Login_Register_Dev_Man.png') }}" alt="">
                                <img class=" hidden absolute min-w-[33rem] top-[4rem] left-[-6rem] z-30"
                                    src="{{ asset('images/Login_Register_Dev_Shadow.png') }}" alt="">
                                <img class=" hidden xl:block max-h-[705px] min-w-[424px]"
                                    src="{{ asset('images/Register_Right_Cover_Image.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div
                        class=" bg-[#191A1E] xl:h-[166px] w-full xl:w-[846.66px] xl:col-span-2 pr-8 xl:pr-10 pl-8 xl:pl-10 order-6 rounded-b-[22px] xl:rounded-none">
                        <div class=" relative">
                            <img class=" absolute w-[6rem] xl:w-[7rem] top-12 xl:top-[6rem] left-[15rem] lg:left-[20rem] xl:left-[72rem]"
                                src="{{ asset('images/login1decor1.png') }}" alt="">
                        </div>
                        <button
                            class="hover:brightness-75  mt-8 xl:mt-1 mb-1 xl:mb-4 rounded-full h-[29px] xl:h-[46px] w-full text-white bg-gradient-to-r from-[#006C56] to-[#AFD196] active:border-[#66C1A7] border-2 border-[#191A1E]"
                            type="submit">
                            <span
                                wire:loading.remove
                                class=" block py-0.5 px-6 w-full h-full xl:mt-1 font-montserrat font-bold rounded-full text-white bg-transparent transition text-[14px] xl:text-[20px] cursor-pointer">
                                Sign Up
                            </span>
                            <div wire:loading
                            class="inline-block h-4 w-4 md:h-6 md:w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                                >Loading...</span
                            >
                            </div>
                            <div wire:loading
                            class="inline-block h-6 w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                            role="status">
                            <span
                                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                                >Loading...</span
                            >
                            </div>
                        </button>
                        <div class=" text-center">
                            <div
                                class=" mb-6 xl:mb-0 inline-block text-[#B5B3BC] text-[12px] xl:text-[16px] font-[600] font-montserrat">
                                Sudah punya akun?</div>
                            <a class=" inline-block bg-gradient-to-l from-[#006C56] to-[#DBFEC1] bg-clip-text text-transparent text-[12px] xl:text-[16px] font-[700] font-montserrat"
                                href="/login">Masuk disini</a>
                                href="/login">Masuk disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

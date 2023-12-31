@section('title', 'GTS Registration')
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
                {{-- <h1 x-show="!isSubmitted"
                    class="text-white text-center mt-[30px] mb-[30px] lg:mt-[62px] lg:mb-[62px] text-[16px] lg:text-[26px] font-bold px-4">
                    Form Pendaftaran Grand Talk Show</h1> --}}
                <div class="ml-[26px] mr-[24px] lg:ml-[108px] lg:mr-[128px]">
                    {{-- <form x-show="!isSubmitted" wire:submit.prevent="submit" enctype="multipart/form-data">
                        <div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group">
                                <label for="full_name"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="full_name" id="full_name" wire:model="full_name"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer disabled:brightness-50"
                                    placeholder="Masukkan nama lengkap kamu" disabled />
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group">
                                <label for="email"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email" id="email" wire:model="email"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer disabled:brightness-50"
                                    placeholder="Masukkan email aktif kamu" disabled />
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group">
                                <label for="referral"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Sumber
                                    Informasi <span class="text-[#FF1F00]">*</span>
                                </label>
                                <select
                                    class=" w-full px-1 bg-transparent border-b-2 text-[12px] xl:text-[18px] font-montserrat font-[400] h-[28px] xl:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] xl:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] appearance-none @error('referral') border-b-[#A31400] text-[#A31400] @else border-b-[#C5C5C5] text-[#7C7C7C] @enderror"
                                    name="referral" id="referral" wire:model="referral" x-model="referral"
                                    x-on:change="other_ref = ''">
                                    <option
                                        class=" font-montserrat font-medium w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                        value="" selected>Dari mana kamu mendapat informasi ini?</option>
                                    @foreach ($referrals as $referral)
                                        <option
                                            class=" font-montserrat font-medium w-full px-1 bg-[#191A1E] text-[12px] xl:text-[18px] h-[28px] xl:h-[34px]"
                                            value="{{ $referral }}">{{ $referral }}</option>
                                    @endforeach
                                </select>
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
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="share_proof_file"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">
                                    Bukti Upload Poster di IG Story <span class="text-[#FF1F00]">*</span>
                                </label>
                                <div class="text-[10px] leading-tight lg:text-sm text-white">Download poster <a target="blank" class="bg-gradient-green-r bg-clip-text text-transparent font-semibold hover:border-b-[1px] border-green-600" href="https://drive.google.com/file/d/1xNCkyT2qEOcBnMS0cnSITyQw3xZc9_V6/view">di sini</a>. Share poster ke instagram story, lalu tag @is_expo dan tag 3 teman kalian.</div>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#66C1A7] cursor-pointer">
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
                                            wire:model="share_proof_file" id="share_proof_file" name="share_proof_file"
                                            required />
                                    </div>
                                </label>
                                <div class="text-xs text-gray-300 mt-1">Max size 1mb (*.jpg, *.jpeg, *.png)</div>
                                @error('share_proof_file')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-[20px] lg:mb-[39px]">
                                <div
                                    class="lg:ml-[45.5px] flex items-center flex-row mt-[27px]  space-x-4 font-medium text-[11px] lg:text-[17px]">
                                    <input wire:model.defer="agree" type="checkbox" id="agree" name="agree"
                                        class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                                    <label class="text-white" for="agree"> Saya setuju dengan kebijakan privasi serta
                                        <a href="/terms-and-conditions" class="text-[#66C1A7]" target="_blank">syarat dan
                                            ketentuan</a> yang berlaku
                                    </label>
                                </div>
                                @error('agree')
                                    <span class="text-red-500 text-sm font-thin">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="text-white bg-gradient-blue-r hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md text-[16px] w-full h-[42px] lg:h-[48px] px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#66C1A7] hover:opacity-80"><span wire:loading.remove>Submit</span>         <div wire:loading
                                class="inline-block h-6 w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                role="status">
                                <span
                                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                                    >Loading...</span
                                >
                                </div>
                            </button>
                        </div>
                    </form> --}}
                    <<h1 class="text-xl sm:text-3xl text-center text-white font-semibold mt-24 mb-28">Pendaftaran Grand Talkshow 2023 telah ditutup</h1>

                    {{-- Footer Form --}}
                    <div class="mt-[38px] flex justify-between flex-row items-center">
                        <a href="https://wa.me/+6281332049750" class="items-center hover:brightness-90">
                            <img class="w-[45   px] h-[40px] lg:w-[55px] lg:h-[50px]  align-top hover:opacity-60"
                                src="{{ asset('/images/whatsapp.png ') }}">
                        </a>
                        <div class="flex flex-row gap-2 md:gap-3 items-center text-slate-300">
                            <a href="https://www.instagram.com/is_expo/">
                                <x-bi-instagram class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            {{-- <a href="">
                                <x-bi-twitter class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            <a href="">
                                <x-bi-youtube class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a> --}}
                            <a href="https://www.tiktok.com/@is_expo">
                                <x-bi-tiktok class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                            {{-- <a href="">
                                <x-bi-line class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a> --}}
                            <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/">
                                <x-bi-linkedin class="hover:text-slate-400 w-4 h-4 md:w-5 md:h-5" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>

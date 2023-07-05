@section('title', 'Request Forgot Password')
<div class=" bg-[#121316] min-h-screen flex justify-center items-center relative overflow-x-hidden">
    <img class=" absolute top-0 left-0 z-10" src="{{ asset('images/Login_Register_Top_Left_Background.png') }}" alt="">
    <img class=" absolute top-0 right-0 z-10" src="{{ asset('images/Login_Register_Top_Right_Background.png') }}" alt="">
    <div x-data="{ show: false, show_again: false, password: '' }">
        <form wire:submit.prevent="request">
            <div class="flex justify-center items-center mt-36 mb-20 z-20">
                <div class=" grid gap-0 w-[323px] h-[679px] grid-cols-1 lg:grid-flow-col lg:h-[564px] lg:w-[959px] z-20">
                    <div class="z-20 rounded-bl-[22px] rounded-br-[22px] w-[323px] h-[422px] order-2 lg:w-[486px] lg:h-[564px] lg:rounded-tl-[45px] lg:rounded-bl-none lg:rounded-br-none lg:order-1 ">
                        <div class="relative py-8 z-20 px-7 lg:px-8 bg-[#191A1E] rounded-bl-[22px] rounded-br-[22px] lg:w-[486px] lg:h-[564px] lg:rounded-tl-[45px] lg:rounded-bl-none lg:rounded-br-none ">
                            <div class="mb-3 flex flex-row items-center group">
                                <div><x-heroicon-s-chevron-left class="w-4 text-[#B5B3BC] group-hover:text-[#6B6B6B]"/></div>
                                <div class="font-montserrat text-xs text-[#B5B3BC] group-hover:text-[#6B6B6B]"><a href="{{route('login')}}">Kembali</a></div>
                            </div>
                            <div class=" relative">
                                <img class=" absolute z-30 w-[0.35rem] h-[0.3rem] left-[13.25rem] top-[1.2rem] lg:left-[27rem] lg:top-10 lg:w-max lg:h-max" src="{{ asset('images/Login_Register_Green_Dot.png') }}" alt="">
                            </div>
                            <div class="text-[#FFFFFF] font-montserrat whitespace-nowrap mb-1 drop-shadow-[0_4px_4px_rgba(0,0,0,1)] text-[24px] font-bold lg:font-extrabold lg:text-[48px]">
                                Forgot Password
                            </div>
                            <div class="text-[#B5B3BC] font-montserrat text-[12px] lg:text-[16px] font-normal mb-10">Masukkan email yang digunakan untuk membuat akun ISE. Kami akan mengirimkan link untuk memperbarui password anda.</div>
                            <div class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] lg:text-[20px]">
                                <label for="email">Alamat Email</label>
                                <div class=" inline text-[#A31400] font-montserrat font-semibold text-[14px] lg:text-[20px]">*</div>
                            </div>
                            <div class=" relative">
                                <input required class=" w-full px-[2.5px] bg-transparent border-b-2 text-[12px] lg:text-[18px] font-montserrat font-[400] h-[28px] lg:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] lg:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('email') border-b-[#A31400] text-[#A31400] @enderror" type="text" name="email" id="email" placeholder="Masukkan alamat email anda disini" wire:model="email">
                                @error('email')
                                    <span class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                                @enderror
                            </div>
                            @if (!empty($msg['error']))
                                <span class="text-[#A31400]">{{ $msg['error'] }}</span>
                            @endif
                            <button class="rounded-full w-full h-[29px] md:h-[36px] lg:h-[46px] mb-2 mt-6 lg:mt-14 text-white bg-gradient-to-r from-[#006C56] to-[#AFD196] active:border-[#66C1A7] border-2 border-[#191A1E]" type="submit">
                                <span wire:loading.remove class=" block px-6 w-full h-full py-0.5 md:py-[0.35rem] font-montserrat font-[700] rounded-full text-white bg-transparent hover:bg-[#006C56] transition text-[14px] lg:text-[20px] cursor-pointer">
                                    Submit
                                </span>
                                <div wire:loading
                                    class="inline-block w-4 h-4 md:h-6 md:w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                    role="status">
                            </button>
                            <img class="absolute -bottom-10 -right-10 w-[6rem] h-[6rem] block lg:hidden" src="{{ asset('images/login1decor1.png') }}" alt="">
                        </div>
                    </div>
                    <div class=" bg-[#141414] z-20 rounded-tl-[22px] rounded-tr-[22px] w-[323px] h-[257px] order-1 lg:p-0 lg:rounded-tl-none lg:rounded-tr-none lg:rounded-br-[45px] lg:w-[473px] lg:h-[564px] lg:order-2 ">
                        <div class=" relative">
                            <img class=" absolute hidden lg:block w-[323px] h-[257px] lg:w-[473px] lg:h-[564px]" src="{{ asset('images/Login_FrontDecor.png') }}" alt="">
                            <img class=" absolute z-30 hidden left-0 lg:left-[21rem]" src="{{ asset('images/Login_Register_ISE.png') }}" alt="">
                            <img class=" absolute min-w-max z-40 hidden lg:right-[-2.5rem] lg:top-[2.5rem]" src="{{ asset('images/Login_Register_Dev_Man.png') }}" alt="">
                            <img class=" absolute z-30 hidden lg:min-w-[33rem] lg:top-[0rem] lg:left-[-4rem]" src="{{ asset('images/Login_Register_Dev_Shadow.png') }}" alt="">
                            <img class=" block lg:hidden rounded-tl-[22px] rounded-tr-[22px]" src="{{ asset('images/Login_Register_Mobile_Cover.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <img class=" absolute -bottom-0 left-0 z-10" src="{{ asset('images/Login_Register_Bottom_Left_Background.png') }}" alt="">
    <img class=" absolute -bottom-0 right-0 z-10" src="{{ asset('images/Login_Register_Bottom_Right_Background.png') }}" alt="">
</div>

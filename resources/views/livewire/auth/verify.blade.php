<div class="flex flex-col justify-center items-center min-h-screen bg-[#121316]">
    <div class="container mx-auto">
        <div class="border rounded-tr-full absolute bg-[#00D0FF] bg-opacity-10 blur-2xl -bottom-0 -left-0">
            <img class="" width="280px" src="{{ asset('/images/verify/blur-bg.png') }}" alt="">
        </div>
        <div class="border absolute rounded-full bg-[#00D0FF] bg-opacity-10 blur-2xl -top-52 -left-52">
            <img class="" width="436px" src="{{ asset('/images/verify/blur-bg.png') }}" alt="">
        </div>
        <div
            class="border absolute rounded-tl-full bg-[#00D0FF] bg-opacity-10 blur-2xl -bottom-0 -right-0 xs:hidden max-[475px]:hidden md:block">
            <img class="" width="280px" src="{{ asset('/images/verify/blur-bg.png') }}" alt="">
        </div>
        <div
            class="border absolute rounded-bl-full bg-[#00D0FF] bg-opacity-10 blur-2xl -top-0 -right-0 xs:hidden max-[475px]:hidden md:block">
            <img class="" width="280px" src="{{ asset('/images/verify/blur-bg.png') }}" alt="">
        </div>
    </div>
    <div class="flex flex-col container px-[40px] pt-[30px] pb-[30px] max-w-sm md:hidden">
        <div
            class="container flex flex-col items-center justify-center bg-[#191A1E] text-white rounded-tl-[50px] rounded-br-[50px] relative shadow-2xl">
            <div
                class="xs:w-[275px] flex-col font-poppins xs:font-bold font-semibold xs:text-2xl text-xl leading-7 text-center flex tracking-normal items-center relative pt-6 xs:leading-10">
                <span>Verifikasi Email</span>
                <span>Kamu</span>
            </div>
            <div class="xs:w-[210px] w-[180px] mt-2">
                <p
                    class="font-poppins font-light sm:font-medium text-base xs:leading-6 leading-5 flex items-center text-justify">
                    Halo, Futurerizen! Data registrasi kamu telah berhasil kami terima. Verifikasi email kamu dengan
                    mengklik tombol dibawah ini:
                </p>
            </div>
            <button wire:click="verify"
                class="font-montserrat mt-3 xs:px-[26px] xs:py-[12px] bg-gradient-to-r from-[#006C56] to-[#AFD196] rounded-full hover:to-green-500 px-[18px] py-[10px]">
                <span class="font-semibold xs:text-base text-sm md:text-lg">Verifikasi Email</span>
            </button>
            <div
                class="mt-5 xs:w-[210px] w-[180px] font-poppins font-light sm:font-medium text-base leading-6 text-justify flex items-center">
                <p class="border-b border-[#AFD196] pb-1">Jika kamu tidak membuat akun, tidak perlu melanjutkan proses
                    verifikasi.
                </p>
            </div>
            <div
                class="xs:w-[210px] w-[180px] mt-3 font-poppins font-light sm:font-medium text-xs leading-5 flex items-center text-justify text-[#B5B3BC]">
                <p class="">Ada pertanyaan? Silakan hubungi kami</p>
            </div>
            <div class="flex relative justify-center items-center pb-3 my-3">
                <div class="flex mr-4">
                    <a href="" class="bg-[#51CD5F] rounded-lg w-[35px] mx-auto flex items-center justify-center">
                        <img src="{{ asset('/images/verify/WA.svg') }}" alt="">
                    </a>
                </div>
                <div class="flex flex-row gap-[0.3rem] md:gap-[0.8rem] xl:gap-[1.125rem] text-[#B5B3BC]">
                    <div class="scale-110 mr-1">
                        <a href="/">
                            <x-bi-globe />
                        </a>
                    </div>
                    <div class="scale-110 mr-1">
                        <a href="https://www.instagram.com/is_expo/" target="blank">
                            <x-bi-instagram />
                        </a>
                    </div>
                    <div class="scale-110 mr-1">
                        <a href="">
                            <x-bi-twitter />
                        </a>
                    </div>
                    <div class="scale-110 mr-1">
                        <a href="">
                            <x-bi-youtube />
                        </a>
                    </div>
                    <div class="scale-110 mr-1">
                        <a href="https://tiktok.com" target="blank">
                            <x-bi-tiktok />
                        </a>
                    </div>
                    <div class="scale-110 mr-1">
                        <a href="">
                            <x-bi-line />
                        </a>
                    </div>
                    <div class="scale-110 mr-1">
                        <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/" target="blank">
                            <x-bi-linkedin />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container md:px-20 flex xs:hidden max-[475px]:hidden md:flex xl:px-[210px] 2xl:px-[270px] 2xl:h-[600px]">
        <div class="flex flex-col justify-center items-center bg-[#191A1E] rounded-tl-[50px] relative shadow-lg">
            <div class="">
                <div class="text-[#FFFFFF] font-poppins items mt-8">
                    <h1 class="font-bold text-[22px] leading-[34px] flex items-center justify-center px-10">Verifikasi
                        Email Kamu</h1>
                    <p class="mt-3 font-normal text-[16px] leading-[29px] flex justify-center items-center mx-10">Halo,
                        Futurerizen! Data registrasi kamu telah berhasil kami terima. Verifikasi email kamu dengan
                        mengklik tombol dibawah ini:</p>
                </div>
                <div class="flex items-center justify-center">
                    <button wire:click="verify"
                        class="flex items-center justify-center font-montserrat my-[20px] bg-gradient-to-r from-[#006C56] to-[#AFD196] rounded-full hover:to-green-500 px-[70px] py-[12px] text-[#FFFFFF]">
                        <span class="font-semibold text-base">Verifikasi Email</span>
                    </button>
                </div>
                <div class="text-[#FFFFFF] font-poppins font-normal text-[16px] leading-[29px] mx-10 relative">
                    <p>Jika kamu tidak membuat akun, tidak perlu melanjutkan proses verifikasi.</p>
                </div>
                <div
                    class="font-poppins mx-10 flex flex-col text-[#FFFFFF] text-left mt-4 justify-items-stretch border-b border-[#AFD196] pb-2">
                    <span class="self-stretch justify-self-start">Salam,</span>
                    <span class="font-bold">ISE!2023</span>
                </div>
                <div
                    class="mt-5 mx-10 font-poppins font-medium text-sm flex items-center justify-center text-justify text-[#B5B3BC]">
                    <p class="">Ada pertanyaan? Silakan hubungi kami</p>
                </div>
                <div class="flex relative justify-center items-center pb-3 my-2">
                    <div class="flex xl:mr-6 lg:mr-5 md:mr-4">
                        <a href=""
                            class="bg-[#51CD5F] rounded-lg w-[50px] mx-auto flex items-center justify-center hover:brightness-75">
                            <img src="{{ asset('/images/verify/WA1.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="flex flex-row gap-[0.3rem] md:gap-[0.8rem] xl:gap-[1.125rem] text-[#B5B3BC]">
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="/">
                                <x-bi-globe />
                            </a>
                        </div>
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="https://www.instagram.com/is_expo/" target="blank">
                                <x-bi-instagram />
                            </a>
                        </div>
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="">
                                <x-bi-twitter />
                            </a>
                        </div>
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="">
                                <x-bi-youtube />
                            </a>
                        </div>
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="https://tiktok.com" target="blank">
                                <x-bi-tiktok />
                            </a>
                        </div>
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="">
                                <x-bi-line />
                            </a>
                        </div>
                        <div class="scale-150 lg:mr-2 md:mr-1 hover:brightness-75">
                            <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/"
                                target="blank">
                                <x-bi-linkedin />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="container flex flex-col mx-auto justify-center items-center bg-gradient-to-tr from-[#DBFEC1] to-[#AAFFEA] rounded-br-[50px] relative shadow-lg">
            <div class="absolute 2xl:top-24 2xl:left-14 lg:top-16 lg:left-7 md:top-28 md:left-3 xl:top-16 xl:left-7">
                <img class="z-0 lg:w-[30px] md:w-[25px]" src="{{ asset('/images/verify/besar.svg') }}"
                    alt="">
                <img class="z-10 lg:w-[16px] md:w-[15px] absolute lg:-top-1 lg:-right-1 md:-top-1 md:-right-1"
                    src="{{ asset('/images/verify/kecil.svg') }}" alt="">
            </div>
            <div class="md:px-3 lg:px-10 relative">
                <div class="">
                    <img class="z-10" width="" src="{{ asset('/images/verify/kotakpos.svg') }}"
                        alt="">
                </div>
                <div class="">
                    <img class="absolute -z-0 2xl:w-[150px] 2xl:-top-16 2xl:-right-4 md:-top-6 xl:w-[120px] xl:-top-12 md:right-1 lg:w-[100px] md:w-[60px]"
                        src="{{ asset('/images/verify/matahari.svg') }}" alt="">
                </div>
            </div>
            <div>
                <img class="absolute 2xl:left-[180px] 2xl:top-[340px] 2xl:w-44 xl:left-[150px] xl:top-[290px] lg:left-[156px] lg:top-[290px] md:top-72 lg:w-36 md:w-24 md:left-20"
                    src="{{ asset('/images/verify/kotakpos2.svg') }}" alt="">
            </div>
            <div
                class="absolute 2xl:left-8 2xl:-bottom-0 xl:-bottom-5 xl:left-2 lg:-bottom-5 lg:left-2 md:-bottom-0 md:left-1">
                <div class="absolute 2xl:w-20 xl:w-18 md:bottom-[140px] md:left-8 lg:w-16 md:w-14">
                    <img src="{{ asset('/images/verify/bunder3.svg') }}" alt="">
                </div>
                <div class="absolute md:bottom-[120px] md:left-[53px] lg:w-16 md:w-14">
                    <img src="{{ asset('/images/verify/bunder3.svg') }}" alt="">
                </div>
                <div class="absolute md:bottom-[100px] md:left-8 lg:w-16 md:w-14">
                    <img src="{{ asset('/images/verify/bunder3.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Verify
<input id="update" type="hidden" wire:model="update">
<script>
    // wait for document ready
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('update').value = 'true';
    }, false);
</script> --}}

<!DOCTYPE html>
<html>

<head>

</head>

<body>
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
                    Halo, {{ $name }}! Data registrasi kamu telah berhasil kami terima. Verifikasi email kamu
                    dengan
                    mengklik tombol dibawah ini:
                </p>
            </div>
            <button
                class="font-montserrat mt-3 xs:px-[26px] xs:py-[12px] bg-gradient-to-r from-[#006C56] to-[#AFD196] rounded-full hover:to-green-500 px-[18px] py-[10px]">
                <a href="{{ $app_url . '/verify/' . $token }}"
                    class="font-semibold xs:text-base text-sm md:text-lg">Verifikasi Email</a>
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
            </div>
        </div>
    </div>
</body>

</html>

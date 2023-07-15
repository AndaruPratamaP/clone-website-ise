@section('title', 'ISE! 2023')
<div class="relative font-montserrat ">
    {{-- <img src="{{ asset('/images/landing/background-landing.png ') }}" class="absolute h-[12602px] w-full" alt=""> --}}
    {{-- Hero section --}}
    <div
        class="relative bg-[#121316] w-full h-[362.4px] xs:h-[600px]  sm:h-[660px] md:h-[700px] lg:h-[1000px] xl:h-[1348px] 2xl:h-[1500px] ">
        <div class="relative ">
            <img class="absolute h-[362px] xs:h-[600px] sm:h-[660px] md:h-[700px] lg:h-[1000px] xl:h-[1348px] 2xl:h-[1500px] w-full"
                src="{{ asset('/images/landing/hero.png') }}">
            <img class="absolute w-[157.44px] xs:w-[207.44px] sm:w-[307.44px] md:w-[347.44px] lg:w-[467.44px] xl:w-[527.44px] 2xl:w-[737.44px] left-1/2 top-[150px] xs:top-[235px] sm:top-[275px] md:top-[290px] lg:top-[430px] xl:top-[550px] 2xl:top-[630px] transform -translate-x-1/2 -translate-y-1/2"
                src="{{ asset('/images/landing/planet.png') }}" alt="">
            <div class="relative ">
                <h1 class=" text-[18.82px] xs:text-[25px] sm:text-[35px] md:text-[40px] lg:text-[55px] xl:text-[70px] 2xl:text-[88px] text-center text-[#FFEEE4] font-semibold pt-[113px] xs:pt-[185px] sm:pt-[208px] md:pt-[204px] lg:pt-[324px]  xl:pt-[424px] 2xl:pt-[450px]  "data-aos-duration="1500"
                    data-aos="fade-down" {{-- x-intersect="$el.classList.add('opacity-100','translate-y-0')" --}}>
                    Unleash Your Future
                </h1>
                <h1 class=" text-[29.57px] xs:text-[42px] sm:text-[56px] md:text-[69px] lg:text-[85px] xl:text-[110px] 2xl:text-[135px] text-center text-[#FFEEE4] font-extrabold mt-[0px] "data-aos="fade-up"
                    data-aos-duration="1500">
                    <span
                        class="bg-gradient-to-b from-[#FF9355] to-[#FFD693] inline-block text-transparent bg-clip-text">#</span>ProvectaFutura
                </h1>
            </div>
        </div>
    </div>
    {{-- Hero section --}}

    {{-- About section --}}
    <div class="relative ">
        <div
            class="mt-[-2px] bg-[#121316] px-[32px] md:px-[40px] lg:px-[87px] xl:px-[115px] w-full h-[426px] xl:h-[538px] flex-col flex md:flex-row gap-[33px] justify-center items-center ">

            <div class="hidden md:block" data-aos="zoom-in">
                <img class="md:min-h-[199px]  lg:min-h-[270px] xl:min-h-[320px] w-[164px] md:w-[230.55px] lg:w-[470.55px] xl:w-[489.55px] 2xl:w-[539.55px] mx-auto my-[15px] transform transition duration-300 hover:scale-105"
                    src="{{ asset('/images/landing/logo.png ') }}">
            </div>
            <div class="text-center md:text-justify pt-[5px] sm:pt-0" data-aos="zoom-in-left">
                <h1
                    class="font-semibold text-[14px] md:text-[18px] lg:text-[35px] xl:text-[40px] 2xl:text-[46px] text-white ">
                    Things To Know About</h1>
                <h1
                    class="font-bold text-[24px] md:text-[32px] lg:text-[60px] xl:text-[80px] 2xl:text-[90px] text-white">
                    ISE!
                    2023</h1>
                <div class="block md:hidden">
                    <img class=" xl:h-[339px] w-[164px] xl:w-[489.55px] mx-auto my-[15px]"
                        src="{{ asset('/images/landing/logo.png ') }}">
                </div>
                <p
                    class="text-white tracking-wide font-normal xl:font-semibold text-[14px] md:text-[15px] lg:text-[18px] xl:text-[20px] 2xl:text-[23px] md:w-[400px] lg:w-[550px] xl:w-[650px] 2xl:w-[720px] text-justify">
                    Information Systems Expo (ISE!) merupakan acara tahunan yang
                    diselenggarakan oleh Himpunan Mahasiswa Sistem Informasi ITS.
                    ISE! 2023 mengusung tema <span
                        class="bg-gradient-to-b from-[#FF9355] to-[#FFD693] inline-block text-transparent bg-clip-text">PROVECTAFUTURA</span>
                    dan berfokus pada pemanfaatan sistem informasi untuk menghadapi
                    tantangan teknologi digital yang kompleks dan dinamis.
                </p>
            </div>
        </div>
    </div>
    {{-- About section --}}

    {{-- Coming Up section --}}
    <div class="mt-[-2px] bg-[#121316] w-full h-[580px] md:h-auto pt-16 md:pt-0">
        <h1 data-aos="zoom-in"
            class="-mb-20 md:mb-0 text-center text-white font-bold text-[24px] md:text-[45px] lg:text-[56px] xl:text-[72px] pb-[40px] xl:pb-[85px] xl:pt-[70px]">
            Coming up
        </h1>
        <div class="relative">
            <div class="relative  ">
                <img class="object-fill hidden md:block mx-auto h-[490px] md:h-[460.78px] lg:h-[540.78px] xl:h-[540.78px] w-[310px] md:min-w-[660px] lg:min-w-[900px] xl:min-w-[1018.14px] "
                    src="{{ asset('/images/landing/coming-up.png') }}">
                <img class="object-fill block md:hidden mx-auto h-[462px] md:h-[460.78px] lg:h-[540.78px] xl:h-[540.78px] w-[360px] md:min-w-[660px] lg:min-w-[900px] xl:min-w-[1018.14px] "
                    src="{{ asset('/images/landing/coming-up2.png') }}">
                <div
                    class="absolute md:ml-[30px] lg:ml-0 md:mt-[-15px] top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                    <div
                        class="flex flex-col md:flex-row mt-[130px] md:mt-[100px] lg:mt-[127px] xl:mt-[127px] gap-[5px] md:gap-[18px] lg:gap-[20px] md:ml-[-20px] lg:ml-0">
                        <div>
                            <img class="relative mx-auto object-contain  w-[120.52px] md:min-w-[250.5px] lg:min-w-[350.5px] xl:min-w-[390.5px] h-[81.07px] md:h-[270px] lg:h-[550px] xl:h-[301px] md:ml-[65px] transform transition duration-300 hover:scale-105"
                                src="{{ asset('/images/landing/coming-image.png') }}">
                        </div>
                        <div class="md:text-start">
                            <h1
                                class="font-semibold md:mt-[30px] lg:mt-[140px] xl:mt-0 md:font-bold text-[14px] md:text-[18px] lg:text-[22px] xl:text-[24px] text-white mb-[4px] md:mb-[6px] lg:mb-[20px]">
                                Grand Talkshow</h1>
                            <p
                                class="font-medium text-justify text-[12px] md:text-[13px] lg:text-[16px] xl:text-[18px] text-white w-[206px] md:w-[290.5px] lg:w-[387.5px] xl:w-[447.5px] lg:leading-[24px] xl:leading-[28px]">
                                Grand Talkshow merupakan kegiatan talkshow interaktif dan rangkaian acara pembuka untuk
                                kegiatan ISE! 2023. Secara umum, Grand Talkshow akan membahas mengenai isu teknologi
                                terkini dan potensinya di kalangan masyarakat luas.
                            </p>
                            <a href="/login">
                                <button
                                    class="mt-[4px] md:mt-[12px] lg:mt-[20px] bg-gradient-to-r from-[#D1692D] to-[#FFBF7E] text-white rounded-3xl w-[70px] md:w-[102px] lg:w-[172px] h-[20px] md:h-[30px] lg:h-[39px] text-center font-semibold  text-[8px] md:text-[12px] lg:text-[16px] transform transition duration-300 hover:scale-105">Register
                                    Now</button>

                            </a>
                            {{-- <a href="#"
                                class=" bg-gradient-to-r from-[#006C56] text-[10px] md:text-[12px] to-[#AFD196] inline-block text-transparent bg-clip-text transform transition duration-300 hover:scale-105">
                                Read More
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- Coming Up section --}}

    {{-- What's new section --}}
    <div
        class="relative mt-[-2px] bg-[#121316] w-full h-[291.05px] md:h-[600px] lg:h-[761px] xl:h-[1000px] pt-0 lg:pt-[70px] xl:pt-[73px] ">
        <div class="relative">
            <div class="relative">
                <img class="absolute w-[50px] md:w-[127px] lg:w-[207px] xl:w-[287px] hidden xl:block 2xl:hidden md:top-[185px] lg:top-[190px] xl:top-[265px]"
                    src="{{ asset('/images/landing/background-1.png ') }}" alt="">
                <img class="absolute hidden xl:block 2xl:hidden md:w-[97px] lg:w-[147px] xl:w-[197px] md:left-[610px] lg:left-[820px] xl:left-[1060px] md:top-[230px] lg:top-[290px] xl:top-[370px]"
                    src="{{ asset('/images/landing/background-2.png ') }}" alt="">

            </div>
            <h1 data-aos="zoom-in"
                    class="text-center text-white font-bold text-[24px] md:text-[45px] lg:text-[56px] xl:text-[72px] pt-[19px] xl:pt-[73px]">
                    What’s New</h1>
                <img class=" md:w-[470px] lg:w-[600px] xl:w-[850px] h-[104px] md:h-[187px] lg:h-[290px] xl:h-[378px] mt-[16px] md:mt-[108px] transform transition duration-300 hover:scale-105 mx-auto"
                    src="{{ asset('/images/landing/whatsnewimage.png ') }}">
                <div class="text-center ">
                    <h1
                        class="text-white font-bold text-[16px] xl:text-[24px] text-center mt-[10px] md:mt-[33px]  mb-[5.3px] xl:mb-[20px] ">
                        PARADIGM</h1>
                    <h1 class="text-white font-medium text-[14px] xl:text-[18px] text-center mb-[8.62px] xl:mb-[36px]">
                        THE
                        EXCITEMENT OF A LIFETIME</h1>
                    {{-- <p class="bg-gradient-to-r from-[#006C56] to-[#AFD196] inline-block text-transparent bg-clip-text ">Read
                    More</p> --}}
                </div>
            {{-- <img class="absolute xl:h-[677.8px] xl:w-[1429px] mt-[68px] md:mt-[145px] lg:mt-[190px] xl:mt-[258px] pr-[28px] md:pr-[45px] lg:pr-[85px] xl:pr-[85px] 2xl:pr-[0px]"
                src="{{ asset('/images/landing/background-1.png ') }}"> --}}

        </div>
    </div>
    {{-- What's section --}}

    <!-- Discover -->
    <div class="mt-[-2px] bg-[#121316]">
        <div class="relative">
            <img src="{{ asset('/images/landing/discover.png') }}" class="w-full lg:h-[620px] xl:h-[805px]"
                alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center">
                <blockquote
                    class="text-center text-white text-[20px] sm:text-[38px] md:text-[45px] lg:text-[60px] xl:text-[80px] font-bold ml-[-120px] sm:ml-[-180px] md:ml-[-230px] lg:ml-[-300px] xl:ml-[-400px]">
                    Discover Yourself<br>
                    <div class="ml-[230px] sm:ml-[380px] md:ml-[480px] lg:ml-[620px] xl:ml-[830px]">
                        Be
                        <span
                            class=" relative inline-block before:absolute before:inset-y-2 sm:before:inset-y-4 md:before:inset-y-4 lg:before:inset-y-6 xl:before:inset-y-8 before:-inset-x-2 sm:before:-inset-x-4 md:before:-inset-x-4 lg:before:-inset-x-5 xl:before:-inset-x-6 before:block before:translate-x-4 before:translate-y-1 sm:before:translate-y-2 md:before:translate-y-3 lg:before:translate-y-4 xl:before:translate-y-5 before:bg-[#1F8069]">
                            <span
                                class="relative bg-gradient-to-b from-[#FF9355] to-[#FFD693] inline-block text-transparent bg-clip-text">
                                The Future.
                            </span>
                        </span>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- Discover -->

    {{-- Introducing --}}
    <div class="mt-[-2px] bg-[#121316] w-full">
        <div class="relative">
            <img class="block h-[326.35px] md:h-[570px] lg:h-[700px] xl:h-[900px] w-full"
                src="{{ asset('/images/landing/frame1.png') }}">
            <h1
                class="absolute font-bold text-[24px] md:text-[80px] lg:text-[100px] xl:text-[120px] top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-white text-center">
                Introducing <br> Our Events
            </h1>
        </div>
    </div>
    {{-- Introducing --}}

    {{-- Bionix section --}}
    <div class="relative mt-[-1px] bg-[#288770] w-full h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px]">
        <div class="relative">
            <img class="hidden md:block absolute h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px] w-full"
                src="{{ asset('/images/landing/frame2.png ') }}">
            <h1
                class="text-white font-bold text-[24px] md:text-[35px] lg:text-[58px] xl:text-[72px] pt-[20px] md:pt-[40px] lg:pt-[45px] xl:pt-[73px] text-center md:text-justify md:ml-[92px] lg:ml-[128px] xl:ml-[168px]">
                BIONIX</h1>
            <div
                class="flex flex-col md:flex-row mt-[25px] md:mt-[50px] lg:mt-[50px] xl:mt-[79px] md:gap-[20px] justify-center items-center">
                <div>
                    <img class="relative object-contain h-[205px] md:h-[165px] lg:h-[195px] xl:h-[295px] w-[235px] lg:w-[300px] xl:w-[400px] mx-auto  md:ml-0"
                        src="{{ asset('/images/landing/bionix-image.png ') }}">
                </div>
                <div class="mx-auto md:mx-0">
                    {{-- <h1 class="font-bold text-[16px] lg:text-[22px] xl:text-[24px] text-white">Nostrud culpa</h1> --}}
                    <p
                        class="font-medium text-[14px] lg:text-[14px] xl:text-[18px] text-white w-[285px] xl:w-[447.5px] text-justify my-[20px]">
                        Dalam meningkatkan kompetensi siswa/i SMA/SMK/sederajat di Indonesia dalam bidang keilmuan
                        Sistem Informasi, BIONIX 2023 membawa konsep baru untuk mengasah serta mengembangkan kemampuan
                        para penerus bangsa demi menciptakan generasi emas masa depan Indonesia.
                        {{-- <span class="hidden xl:block">
                            Class
                            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </span> --}}
                    </p>
                    {{-- <a href="#"
                        class="bg-gradient-to-r from-[#006C56] to-[#AFD196] md:inline-block text-transparent bg-clip-text hidden">
                        Read
                        More
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Bionix section --}}

    {{-- Icon section --}}
    <div class="relative mt-[-1px] bg-[#348BB6] w-full h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px]">
        <div class="relative">
            <img class="absolute hidden md:block h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px] w-full"
                src="{{ asset('/images/landing/frame3.png ') }}">
            <h1
                class="relative text-white font-bold text-[24px] md:text-[35px] lg:text-[58px] xl:text-[72px] pt-[20px] md:pt-[40px] lg:pt-[45px] xl:pt-[73px] text-center md:text-justify md:ml-[92px] lg:ml-[128px] xl:ml-[168px]">
                IT CONVENTION</h1>
            <div
                class="flex flex-col md:flex-row mt-[25px] md:mt-[50px] lg:mt-[50px] xl:mt-[70px] ml-0 xl:ml-0 justify-center items-center md:gap-[20px]">
                <div>
                    <img class="block object-contain md:hidden relative h-[255px] md:h-[165px] lg:h-[195px] xl:h-[295px] w-[235px] lg:w-[300px] xl:w-[400px] mx-auto md:mx-0 "
                        src="{{ asset('/images/landing/icon-image.png ') }}">
                </div>
                <div class="mx-auto md:mx-0 relative">
                    {{-- <h1 class="font-bold text-[16px] lg:text-[22px] xl:text-[24px] text-white">Nostrud culpa</h1> --}}
                    <p
                        class="font-medium text-[14px] lg:text-[14px] xl:text-[18px] text-white w-[285px] xl:w-[447.5px] text-justify my-[20px]">
                        Diselenggarakan sejak tahun 2017, ICON selalu hadir dengan konsep acara yang menarik dan
                        inovatif dalam memberikan edukasi ke masyarakat Indonesia akan pentingnya penggunaan teknologi
                        informasi
                        {{-- <span class="hidden xl:block">
                            Class
                            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </span> --}}
                    </p>
                    {{-- <a href="#"
                        class="bg-gradient-to-r from-[#006C56] to-[#AFD196] md:inline-block text-transparent bg-clip-text hidden">
                        Read
                        More
                    </a> --}}
                </div>
                <div>
                    <img class="hidden object-contain md:block relative h-[255px] md:h-[165px] lg:h-[195px] xl:h-[295px] w-[235px] lg:w-[300px] xl:w-[400px] "
                        src="{{ asset('/images/landing/icon-image.png ') }}">
                </div>
            </div>
        </div>
    </div>
    {{-- Icon section --}}

    {{-- RISE section --}}
    <div class="relative mt-[-1px] bg-[#FA9E69] w-full h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px]">
        <div class="relative">
            <img class="hidden md:block absolute h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px] w-full"
                src="{{ asset('/images/landing/frame4.png ') }}">
            <h1
                class="text-white font-bold text-[24px] md:text-[35px] lg:text-[58px] xl:text-[72px] pt-[20px] md:pt-[40px] lg:pt-[45px] xl:pt-[73px] text-center md:text-justify md:ml-[92px] lg:ml-[128px] xl:ml-[168px]">
                RISE</h1>
            <div
                class="flex flex-col md:flex-row mt-[25px] md:mt-[50px] lg:mt-[50px] xl:mt-[79px] md:gap-[20px] justify-center items-center">
                <div>
                    <img class="relative object-contain h-[205px] md:h-[165px] lg:h-[195px] xl:h-[295px] w-[235px] lg:w-[300px] xl:w-[400px] mx-auto  md:ml-0"
                        src="{{ asset('/images/landing/rise-image.png') }}">
                </div>
                <div class="mx-auto md:mx-0">
                    {{-- <h1 class="font-bold text-[16px] lg:text-[22px] xl:text-[24px] text-white">Nostrud culpa</h1> --}}
                    <p
                        class="font-medium text-[14px] lg:text-[14px] xl:text-[18px] text-white w-[285px] xl:w-[447.5px] text-justify my-[20px]">
                        RISE! (Rivalry Information System Expo) merupakan kompetisi business case nasional yang harus
                        memecahkan kasus bisnis serta mencari solusi dan strategi terbaik terkait suatu case yang
                        ditujukan untuk seluruh mahasiswa Indonesia dan diikuti secara berkelompok.
                        {{-- <span class="hidden xl:block">
                            Class
                            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </span> --}}
                    </p>
                    {{-- <a href="#"
                        class="bg-gradient-to-r from-[#006C56] to-[#AFD196] md:inline-block text-transparent bg-clip-text hidden">
                        Read
                        More
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- RISE section --}}

    {{-- Paradigm section --}}
    <div class="relative mt-[-1px] bg-[#CB82C5] w-full h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px]">
        <div class="relative">
            <img class="hidden md:block absolute h-[523px] md:h-[470px] lg:h-[523px] xl:h-[820px] w-full"
                src="{{ asset('/images/landing/frame5.png ') }}">
            <h1
                class="text-white font-bold text-[24px] md:text-[35px] lg:text-[58px] xl:text-[72px] pt-[20px] md:pt-[40px] lg:pt-[45px] xl:pt-[73px] text-center md:text-justify md:ml-[92px] lg:ml-[128px] xl:ml-[168px]">
                PARADIGM</h1>
            <div
                class="flex flex-col md:flex-row mt-[25px] md:mt-[50px] lg:mt-[50px] xl:mt-[70px] ml-0 xl:ml-0 justify-center items-center md:gap-[20px]">
                <div>
                    <img class="block object-contain md:hidden relative h-[255px] md:h-[165px] lg:h-[195px] xl:h-[295px] w-[235px] lg:w-[300px] xl:w-[400px] mx-auto md:mx-0 "
                        src="{{ asset('/images/landing/paradigm-image.png ') }}">
                </div>
                <div class="mx-auto md:mx-0">
                    {{-- <h1 class="font-bold text-[16px] lg:text-[22px] xl:text-[24px] text-white">Nostrud culpa</h1> --}}
                    <p
                        class="font-medium text-[14px] lg:text-[14px] xl:text-[18px] text-white w-[285px] xl:w-[447.5px] text-justify my-[20px]">
                        PARADIGM merupakan acara puncak penutupan dari rangkaian ISE! 2023. PARADIGM memiliki konsep
                        acara yang menghadirkan closing party dan Hall of ISE! yang dikemas dalam bentuk life experience
                        {{-- <span class="hidden xl:block">
                            Class
                            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </span> --}}
                    </p>
                    {{-- <a href="#"
                        class="bg-gradient-to-r from-[#006C56] to-[#AFD196] md:inline-block text-transparent bg-clip-text hidden">
                        Read
                        More
                    </a> --}}
                </div>
                <div>
                    <img class="hidden object-contain md:block relative h-[255px] md:h-[165px] lg:h-[195px] xl:h-[295px] w-[235px] lg:w-[300px] xl:w-[400px] "
                        src="{{ asset('/images/landing/paradigm-image.png ') }}">
                </div>
            </div>
        </div>
    </div>
    {{-- Paradigm section --}}


    {{-- Close Frame section --}}
    <div class="bg-[#121316] mt-[-1px] w-full h-[84.57px] md:h-[190.55px] lg:h-[270.55px] xl:h-[314.55px]">
        <div class="relative">
            <img class="absolute h-[84.57px] md:h-[190.55px] lg:h-[270.55px] xl:h-[314.55px] w-full"
                src="{{ asset('/images/landing/frame6.png ') }}">
        </div>
    </div>
    {{-- Close Frame section --}}

    {{-- Date section --}}
    {{-- <section class="relative mt-[-2px] bg-[#121316] pt-5 xl:pt-10 w-full h-[270px] md:h-[440px] lg:h-[530px] xl:h-[600px]">
        <div class=" z-30 flex justify-center content-center flex-col">
            <h1 class=" text-center font-bold text-[24px] md:text-[52px] lg:text-[63px] xl:text-[80px] text-white">Be
                Ready, <br>
                Save <span
                    class="bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] inline-block text-transparent bg-clip-text">The
                    Dates</span></h1>
            <div class=" mt-8 md:mt-12 lg:mt-16 grid grid-cols-6 gap-3 sm:gap-6 md:gap-7 lg:gap-10 self-center">
                <div class=" flex justify-center content-center flex-col">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[16px] font-bold text-white text-center">
                        Jun 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]"
                        src={{ asset('images/landing/ellipse.png') }} alt="">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Grand</p>
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Talkshow</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[140px] h-[2px2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-[70px] left-[0.1rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[85px]"
                            src={{ asset('images/landing/ellipse.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-bold text-white text-center">
                        Jun 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]"
                        src={{ asset('images/landing/ellipse.png') }} alt="">
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Data Science
                    </p>
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Academy</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-[70px] left-[3.25rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[85px]"
                            src={{ asset('images/landing/ellipse.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-bold text-white text-center">
                        Jul 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]"
                        src={{ asset('images/landing/ellipse.png') }} alt="">
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Data Science
                    </p>
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Academy</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-[70px] left-[3.25rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[85px]"
                            src={{ asset('images/landing/ellipse.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-bold text-white text-center">
                        Sep 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]"
                        src={{ asset('images/landing/ellipse.png') }} alt="">
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Data Science
                    </p>
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Academy</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-[70px] left-[3.25rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[85px]"
                            src={{ asset('images/landing/ellipse.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-bold text-white text-center">
                        Sep 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]"
                        src={{ asset('images/landing/ellipse.png') }} alt="">
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Data Science
                    </p>
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Academy</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-[70px] left-[3.25rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[85px]"
                            src={{ asset('images/landing/ellipse.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p
                        class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-bold text-white text-center">
                        Nov 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]"
                        src={{ asset('images/landing/ellipse.png') }} alt="">
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        User Experience
                    </p>
                    <p
                        class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[16px] font-semibold text-white text-center">
                        Academy</p>
                </div>


            </div>
        </div>
    </section> --}}
    {{-- Date section --}}



    <!-- Carousel -->
    <div class="mt-[-2px] relative pb-8 sm:pb-32 bg-[#121316]">
        <div class="w-full  h-[290px] md:h-[400px] lg:h-[680px] xl:h-[810px] flex items-center justify-between">
            <div class="relative w-2/3">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper space-x-4">
                        <div
                            class="swiper-slide h-28 md:h-56 lg:h-80 xl:h-96 flex flex-col items-center justify-center object-contain">
                            <img src="{{ asset('images/landing/carousel-1.png') }}" alt="">
                        </div>
                        <div
                            class="swiper-slide h-28 md:h-56 lg:h-80 xl:h-96 flex flex-col items-center justify-center object-contain">
                            <img src="{{ asset('images/landing/carousel-2.png') }}" alt="">
                        </div>
                        <div
                            class="swiper-slide h-28 md:h-56 lg:h-80 xl:h-96 flex flex-col items-center justify-center object-contain">
                            <img src="{{ asset('images/landing/carousel-3.png') }}" alt="">
                        </div>
                        <div
                            class="swiper-slide h-28 md:h-56 lg:h-80 xl:h-96 flex flex-col items-center justify-center object-contain">
                            <img src="{{ asset('images/landing/carousel-4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <div
                    class="flex flex-col gap-4 items-center justify-center rotate-90 text-2xl sm:text-4xl md:text-5xl xl:text-7xl font-bold text-white text-center tracking-wider whitespace-nowrap uppercase">
                    <h2>Throwback</h2>
                    <h2>ISE! 2022</h2>
                </div>
                <img class="absolute right-0 inset-y-0 w-full h-[290px] md:h-[400px] lg:h-[680px] xl:h-[1400px mix-blend-normal"
                    src={{ asset('images/landing/shade-1.png') }} alt="">
            </div>
        </div>
    </div>
    <!-- Carousel -->

    {{-- Sponsor section --}}
    <div class="mt-[-2px] relative bg-[#121316] w-full md:h-[846px] lg:h-[1246px] xl:h-[1446px] px-2">
        <h1
            class="font-bold text-[19.36px] md:text-[45px] lg:text-[58px] xl:text-[72px] text-white text-center pt-[88px] md:pt-[60px] lg:pt-[90px] xl:pt-[130px]">
            Meet our
            sponsor<br>
            <div class="flex justify-center items-center">
                <div
                    class="grid grid-cols-12 w-[317.2px] md:w-[610px] lg:w-[900px] xl:w-[1180px] mt-[26.5px] md:mt-[75px] lg:mt-[100px] gap-[5.3px] md:gap-[16px] lg:gap-[18px] xl:gap-[20px] ">
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-12 h-[94.1px] sm:h-[170px] md:h-[200px] lg:h-[300px] xl:h-[350px]">
                        <img src="{{ asset('images/sponsor/kompas-l.png') }}" alt="kompas" class="w-4/5 sm:w-auto">
                    </div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-4 h-[88.72px] sm:h-[110px] md:h-[200px] lg:h-[230px] xl:h-[250px]"><img src="{{ asset('images/sponsor/pelindo-s.png') }}" alt="pelindo" class="w-4/5 sm:w-auto"></div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-4 h-[88.72px] sm:h-[110px] md:h-[200px] lg:h-[230px] xl:h-[250px]"><img src="{{ asset('images/sponsor/alfa-s.png') }}" alt="alfa" class="w-4/5 sm:w-auto"></div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-4 h-[88.72px] sm:h-[110px] md:h-[200px] lg:h-[230px] xl:h-[250px]"><img src="{{ asset('images/sponsor/ahm-s.png') }}" alt="ahm" class="w-4/5 sm:w-auto"></div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-4 h-[88.72px] sm:h-[110px] md:h-[200px] lg:h-[230px] xl:h-[250px]"><img src="{{ asset('images/sponsor/kai-s.png') }}" alt="kai" class="w-4/5 sm:w-auto"></div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-4 h-[88.72px] sm:h-[110px] md:h-[200px] lg:h-[230px] xl:h-[250px]"><img src="{{ asset('images/sponsor/semen-s.png') }}" alt="semen" class="w-4/5 sm:w-auto"></div>

                    {{-- <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-3 h-[61.83px] md:h-[130px] lg:h-[180px] xl:h-[230px]">02</div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-3 h-[61.83px] md:h-[130px] lg:h-[180px] xl:h-[230px]">02</div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-3 h-[61.83px] md:h-[130px] lg:h-[180px] xl:h-[230px]">02</div>
                    <div class="flex justify-center items-center px-3 py-2 rounded-[20px] bg-[#191A1E] col-span-3 h-[61.83px] md:h-[130px] lg:h-[180px] xl:h-[230px]">02</div> --}}
                </div>
            </div>
    </div>
    {{-- Sponsor section --}}

    {{-- FAQ section --}}
    {{-- <section
        class="mt-[-2px] relative pt-8 sm:pt-20 md:pt-16 lg:pt-12 w-full min-h-[300px] xs:min-h-[350px] lg:min-h-[770px] bg-[#121316]">
        <div class=" flex justify-center flex-col">
            <h3 style=" line-height: 84px"
                class=" z-30 font-montserrat text-[17px] xs:text-[20px] sm:text-[28px] md:text-[32px] lg:text-[42px] xl:text-[64px] font-bold text-white text-center">
                Frequently Asked Questions</h3>
            <div class=" mt-2  lg:mt-12 xl:mt-24 mb-7 md:mb-12 lg:mb-10 xl:mb-14 self-center">

                <div x-data="{ open: false }"
                    class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open"
                        class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span
                            class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Is
                            there a refund if I cancel?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src={{ asset('images/icon/IconLP_Sect7_NavButton.png') }}
                                alt="">
                        </div>
                    </button>
                    <button @click="open=!open"
                        style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
            "
                        x-show="open" x-cloak
                        class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]"
                        x-transition>
                        <h4
                            class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Is there a refund if I cancel?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]"
                                src={{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p
                            class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus a arcu fringilla
                            imperdiet pretium eu nibh. Cras aliquam neque in ligula commodo tincidunt at sit amet lacus.
                            Morbi ac justo lorem.
                        </p>
                    </button>
                </div>
                <div x-data="{ open: false }"
                    class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open"
                        class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span
                            class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Will
                            this travel documentary be uploaded on YouTube?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src={{ asset('images/icon/IconLP_Sect7_NavButton.png') }}
                                alt="">
                        </div>
                    </button>
                    <button @click="open=!open"
                        style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
            "
                        x-show="open" x-cloak
                        class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]"
                        x-transition>
                        <h4
                            class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Will this travel documentary be uploaded on YouTube?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]"
                                src={{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p
                            class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus a arcu fringilla
                            imperdiet pretium eu nibh. Cras aliquam neque in ligula commodo tincidunt at sit amet lacus.
                            Morbi ac justo lorem.
                        </p>
                    </button>
                </div>
                <div x-data="{ open: false }"
                    class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open"
                        class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span
                            class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Is
                            there a ticket purchase limit?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src={{ asset('images/icon/IconLP_Sect7_NavButton.png') }}
                                alt="">
                        </div>
                    </button>
                    <button @click="open=!open"
                        style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
            "
                        x-show="open" x-cloak
                        class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]"
                        x-transition>
                        <h4
                            class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Is there a ticket purchase limit?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]"
                                src={{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p
                            class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus a arcu fringilla
                            imperdiet pretium eu nibh. Cras aliquam neque in ligula commodo tincidunt at sit amet lacus.
                            Morbi ac justo lorem.
                        </p>
                    </button>
                </div>
                <div x-data="{ open: false }"
                    class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open"
                        class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span
                            class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Where
                            is the meeting place?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src={{ asset('images/icon/IconLP_Sect7_NavButton.png') }}
                                alt="">
                        </div>
                    </button>
                    <button @click="open=!open"
                        style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
            "
                        x-show="open" x-cloak
                        class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]"
                        x-transition>
                        <h4
                            class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Where is the meeting place?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]"
                                src={{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p
                            class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut lacus a arcu fringilla
                            imperdiet pretium eu nibh. Cras aliquam neque in ligula commodo tincidunt at sit amet lacus.
                            Morbi ac justo lorem.
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- FAQ section --}}

</div>

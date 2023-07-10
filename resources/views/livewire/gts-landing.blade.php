@section('title', 'Grand Talkshow | ISE! 2023')
<div class="relative font-montserrat pt-[68px] md:pt-[110px] xl:pt-40  bg-[#121316] h-auto text-white overflow-hidden">
    {{-- Hero Section --}}
    <section id="ds-academy" class="relative h-[280px] md:h-[500px] lg:h-[600px] xl:h-[720px]">
        <img class="absolute hidden md:block xl:max-w-screen-xl right-0 -translate-y-44 overflow-hidden" src="{{asset('/images/ds-academy/bg-hero.png')}}"/>
               <img class="absolute hidden md:block xl:h-auto right-0 -translate-y-44 overflow-hidden" src="{{asset('/images/ds-academy/bg-hero-1.png')}}"/>
        <div class="grid grid-cols-2 gap-9">
            <div class="relative h-[245px] md:h-[500px] lg:h-[600px] xl:h-[720px]">
                <img class="absolute w-[228.051px] md:w-[400px] xl:w-auto top-[35px] md:top-[80px] xl:top-[125px]" src="{{ asset('/images/gts/hero.png') }}">
            </div>
            <div class="relative h-[245px] md:h-[500px] lg:h-[600px] xl:h-[720px]">
                <div class="relative top-[35px] md:top-28 lg:top-32 xl:top-[200px]">
                    <div class="text-2xl md:text-5xl lg:text-6xl xl:text-7xl font-bold w-40 md:w-[240px] lg:w-[400px] xl:w-[548px] h-[107px] md:h-[200px] lg:h-[230px] xl:h-[192px] bg bg-clip-text bg-gradient-to-r from-[#398FBA] to-[#97FBFE] text-transparent">Grand Talkshow</div>
                    <div class="xl:mt-16"><a href="#more"><button class="px-[17.791px] md:px-6 lg:px-8 xl:px-10 py-[6.227px] md:py-2 lg:py-3 xl:py-[14px] rounded-full bg bg-gradient-to-r from-[#398FBA] to-[#97FBFE] text-white text-[9px] md:text-base lg:text-lg xl:text-xl hover:brightness-75">Explore Now</button></a></div>
                </div>
                <img class="absolute right-0 md:hidden top-[200px]" src="{{ asset('/images/ds-academy/ds-academy-4-mobile.png') }}">
                <img class="absolute right-0 hidden md:block md:w-56 lg:w-80 xl:w-auto md:bottom-0" src="{{ asset('/images/ds-academy/ds-academy-4.png') }}">
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}
    {{-- About Section --}}
    <section id="more" class="relative mt-9 md:mt-24 lg:mt-32 xl:mt-48 xl:py-48 mx-auto h-[500px] md:h-[550px] xl:h-[1100px]">
        <img class="absolute md:hidden lg:block lg:h-[730px] lg:-top-36 xl:top-0" src="{{ asset('/images/ds-academy/bg-about.png') }}"/>
        <div class="relative">
            <div class="relative">
                <img class="absolute -translate-x-1/2 left-1/2 w-[295px] xs:w-[385px] md:w-[545px] lg:w-[825px] xl:w-[1325px] top-[320px] xs:top-[275px] md:top-[180px] lg:top-[100px] xl:top-[179px] justify-self-center" src="{{ asset('/images/ds-academy/deco-about.png') }}">
                   </div>
            <div class="rounded-lg bg-gradient-to-r from-[#894584] to-[#6BB9E7] p-1 mx-auto w-[250px] xs:w-[315px] md:w-[435px] lg:w-[657px] xl:w-[1051px] -translate-x-2 md:-translate-x-4 lg:-translate-x-6 xl:-translate-x-9">
                <div class="flex flex-col bg-neutral-800 px-4 pt-8 pb-7 text-center rounded-lg h-full">
                    <div class="text-white mb-7 xl:mb-16 text-2xl xl:text-7xl font-bold">About</div>
                    <span class="mx-auto text-[#D9D9D9] text-sm xl:text-lg font-medium xl:w-[933px]">Grand Talkshow ISE! 2023 merupakan kegiatan talkshow interaktif yang diadakan secara online dan merupakan rangkaian acara pembuka untuk ISE! 2023. Secara umum, Grand Talkshow akan membahas perkembangan era digital dan isu teknologi terkini.</span>
                    <a href="/my/gts" class="text-xs xl:text-base font-semibold text-white bg-gradient-to-r mx-auto mt-6 from-[#398FBA] to-[#97FBFE] rounded-3xl px-3 xl:px-5 py-2 xl:py-3 w-[113px] xl:w-[236px] h-[34px] xl:h-auto hover:brightness-75">Register</a>
                </div>
            </div>
        </div>
    </section>
    {{-- End About Section --}}
    {{-- Speakers Section --}}
      <section id="our-speakers" class="relative mt-10 sm:mt-16 xl:mt-[170px] h-[900px] md:h-[1200px] lg:h-[1800px] xl:h-[2600px]">
        <!-- bg pc -->
        <img class="absolute hidden lg:block right-0" src="{{asset('/images/ds-academy/bg-speaker-1-pc.png')}}"/>
        <img class="absolute hidden lg:block left-0 top-[600px]" src="{{asset('/images/ds-academy/bg-speaker-2-pc.png')}}"/>
        <!-- bg mobile -->
        <img class="absolute lg:hidden left-0 md:scale-150 md:translate-x-1/4" src="{{asset('/images/ds-academy/bg-speaker-1-mobile.png')}}"/>
        <img class="absolute lg:hidden right-0 top-60 md:top-80 md:scale-150 md:-translate-x-1/4" src="{{asset('/images/ds-academy/bg-speaker-2-mobile.png')}}"/>
        <img class="absolute lg:hidden left-0 top-96 md:top-[39rem] md:scale-150 md:translate-x-1/4" src="{{asset('/images/ds-academy/bg-speaker-3-mobile.png')}}"/>
        <div class="relative" >
            <div class="relative">
                <img class="absolute h-[120px] xs:h-[145px] md:h-[300px] xl:h-auto top-24 xs:top-0 -translate-y-1/3" src="{{asset('/images/ds-academy/speaker-1.png')}}">
                <img class="absolute h-[60px] xs:h-[65.298px] md:h-[130px] xl:h-auto top-24 xs:top-0 right-0 -translate-y-1/2" src="{{asset('/images/ds-academy/speaker-2.png')}}">
            </div>
            <!-- mobile -->
            <div class="relative flex flex-col justify-center content-center pt-6 text-center lg:hidden md:top-24 md:scale-125">
                <div class="text-white mb-24 md:mb-32 text-[30px] xs:text-[34px] sm:text-[38px] font-bold">Our Speakers</div>
                <div class="swiper w-screen content-center">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="grid gr-row justify-center gap-3 items-center text-white">
                                <div class="relative h-64 w-72 top-10 justify-content-center">
                                    <img class="absolute h-[240.475px] translate-x-5 md:translate-x-5 -translate-y-12 -z-30" src="{{ asset('/images/ds-academy/speaker-3-mobile.png') }}"/>
                                    <img class="mx-auto w-[150px] -translate-x-1 h-[190px] md:h-48" src="{{ asset('/images/gts/speaker-1bg.png') }}" />
                                </div>
                                <div class="mx-auto w-[181px] font-bold">Irzan Raditya</div>
                                <div class="text-sm mx-auto w-[165px] font-light text-cyan-200">CEO & Co-Founder of
                                    Kata.ai</div>
                                <div class="block mx-auto w-[220px] space-y-5">
                                    <span clas="block">Irzan Raditya, CEO kata.ai, telah mencapai kesuksesan di kata.ai maupun dalam dunia kecerdasan buatan (AI). Di bawah kepemimpinannya, kata.ai telah menjadi perusahaan terkemuka dalam pengembangan solusi AI dan pemrosesan bahasa alami.</span>
                                    <div class="flex flex-row gap-3 justify-center p-5">
                                        <a href="#" target="blank">
                                            <x-bi-linkedin />
                                        </a>
                                        <a href="#" target="blank">
                                            <x-bi-instagram />
                                        </a>
                                        <a href="#" target="blank">
                                              <x-bi-twitter />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid gr-row justify-center gap-3 items-center text-white">
                                <div class="relative h-64 w-72 top-10 justify-content-center">
                                    <img class="absolute h-[240.475px] translate-x-5 md:translate-x-5 -translate-y-12 -z-30" src="{{ asset('/images/ds-academy/speaker-3-mobile.png') }}"/>
                                    <img class="mx-auto h-[190px] md:h-48" src="{{ asset('/images/gts/speaker-2bg.png') }}" />
                                </div>
                                <div class="mx-auto w-[181px] font-bold">Belladonna Paramayswari</div>
                                <div class="text-sm mx-auto w-[165px] font-light text-cyan-200">Risk Specialist at PT. Bank Mandiri (Persero) Tbk.</div>
                                <div class="block mx-auto w-[220px] space-y-5">
                                    <span clas="block">Belladona Paramayswari adalah seorang profesional IT yang sukses dan berbakat. Dengan pengetahuan mendalam dalam pengembangan perangkat lunak, analisis data, dan manajemen proyek.</span>
                                    <div class="flex flex-row gap-3 justify-center p-5">
                                        <a href="#" target="blank">
                                            <x-bi-linkedin />
                                        </a>
                                        <a href="#" target="blank">
                                            <x-bi-instagram />
                                        </a>
                                        <a href="#" target="blank">
                                              <x-bi-twitter />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grid gr-row justify-center gap-3 items-center text-white">
                                <div class="relative h-64 w-72 top-10 justify-content-center">
                                    <img class="absolute h-[240.475px] translate-x-5 md:translate-x-5 -translate-y-12 -z-30" src="{{ asset('/images/ds-academy/speaker-3-mobile.png') }}"/>
                                    <img class="mx-auto h-[190px] md:h-48" src="{{ asset('/images/gts/speaker-3bg.png') }}" />
                                </div>
                                <div class="mx-auto w-[181px] font-bold">Sabrina Woro Anggraini</div>
                                <div class="text-sm mx-auto w-[165px] font-light text-cyan-200">Co-Founder & Managing Director of Natuno Design Lab</div>
                                <div class="block mx-auto w-[220px] space-y-5">
                                    <span clas="block">Sabrina Woro Anggraini adalah seorang profesional berbakat dan berdedikasi di bidang bisnis dan teknologi. Sabrina, cofounder Notunolab, berpengalaman dalam implementasi teknologi informasi (IT) dalam bisnis.</span>
                                    <div class="flex flex-row gap-3 justify-center p-5">
                                        <a href="#" target="blank">
                                            <x-bi-linkedin />
                                        </a>
                                        <a href="#" target="blank">
                                            <x-bi-instagram />
                                        </a>
                                        <a href="#" target="blank">
                                              <x-bi-twitter />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .swiper-pagination-bullet-active {
                    background-color: #398FBA !important;
                    translate: 0px 20px;
                    }
                </style>
                <div class="swiper-pagination"></div>
            </div>
            <!-- PC -->
            <div class="lg:grid grid-flow-row justify-center pt-2 xl:pt-72 text-center hidden lg:scale-75 xl:scale-110 ">
                <div class="text-white mb-52 text-7xl font-bold">Our Speakers</div>

                <div class="flex flex-col gap-40">
                    <!-- speaker 1 -->
                <div class="w-[955px] h-[405px] p-5 rounded shadow justify-start items-start gap-5 inline-flex text-left">
                    <div>
                        <img class="absolute -translate-x-24 -translate-y-28 md:block" src="{{ asset('/images/ds-academy/speaker-3.png') }}">
                        <img class="w-[310px] translate-x-2 translate-y-[5px] h-[364px] relative rounded" src="{{ asset('/images/gts/speaker-1bg.png') }}" />
                    </div>
                    <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-5 inline-flex">
                        <div class="self-stretch justify-end items-start gap-[50px] inline-flex">
                            <div class="flex-col justify-start items-start gap-2.5 inline-flex">
                                <div class="w-[266px] h-9 justify-center items-center inline-flex">
                                    <div class="w-[266px] text-white text-[24px] font-bold leading-9">Irzan Raditya</div>
                                </div>
                                <div class="justify-start items-start gap-2.5 inline-flex">
                                    <div class="text-cyan-200 text-[24px] font-normal leading-9">CEO & Co-Founder of
                                        Kata.ai</div>
                                </div>
                            </div>
                            <div class="grow shrink basis-0 h-[33px] justify-end items-center gap-4 flex">
                                    <a href="#" target="blank">
                                        <x-bi-linkedin class="w-[20px] h-[20px]"/>
                                    </a>
                                    <a href="#" target="blank" >
                                        <x-bi-instagram class="w-[20px] h-[20px]"/>
                                    </a>
                                    <a href="#" target="blank">
                                        <x-bi-twitter class="w-[20px] h-[20px]"/>
                                    </a>
                            </div>
                        </div>
                        <div class="self-stretch grow shrink basis-0 flex-col justify-start items-start gap-5 flex">
                            <div class="self-stretch text-white text-[18px] font-medium leading-7">Irzan Raditya, CEO kata.ai, telah mencapai kesuksesan di kata.ai maupun dalam dunia kecerdasan buatan (AI). Di bawah kepemimpinannya, kata.ai telah menjadi perusahaan terkemuka dalam pengembangan solusi AI dan pemrosesan bahasa alami.</div>
                        </div>
                    </div>
                </div>
                <!-- speaker 2 -->
                <div class="w-[955px] h-[405px] p-5 rounded shadow justify-start items-start gap-5 inline-flex text-left flex-row-reverse">
                    <div>
                        <img class="absolute -translate-x-2 -translate-y-28 md:block" src="{{ asset('/images/ds-academy/speaker-3-rev.png') }}">
                        <img class="w-[356px] h-[364px] translate-y-[5px] relative rounded" src="{{ asset('/images/gts/speaker-2bg.png') }}" />
                    </div>
                    <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-5 inline-flex">
                        <div class="self-stretch justify-end items-start gap-0 inline-flex">
                            <div class="flex-col justify-start items-start gap-2.5 inline-flex">
                                <div class="w- h-9 justify-center items-center inline-flex">
                                    <div class="w- text-white text-[24px] font-bold leading-9">Belladonna Paramayswari</div>
                                </div>
                                <div class="justify-start items-start gap-2.5 inline-flex">
                                    <div class="text-cyan-200 text-[24px] font-normal leading-9">Risk Specialist at PT. Bank Mandiri (Persero) Tbk.</div>
                                </div>
                            </div>
                            <div class="grow shrink basis-0 h-[33px] justify-end items-center gap-4 flex">
                                    <a href="#" target="blank">
                                        <x-bi-linkedin class="w-[20px] h-[20px]"/>
                                    </a>
                                    <a href="#" target="blank" >
                                        <x-bi-instagram class="w-[20px] h-[20px]"/>
                                    </a>
                                    <a href="#" target="blank">
                                        <x-bi-twitter class="w-[20px] h-[20px]"/>
                                    </a>
                            </div>
                        </div>
                        <div class="self-stretch grow shrink basis-0 flex-col justify-start items-start gap-5 flex">
                            <div class="self-stretch text-white text-[18px] font-medium leading-7">Belladona Paramayswari adalah seorang profesional IT yang sukses dan berbakat. Dengan pengetahuan mendalam dalam pengembangan perangkat lunak, analisis data, dan manajemen proyek, Belladona telah berhasil menghadirkan solusi inovatif dalam berbagai proyek IT yang kompleks.</div>
                        </div>
                    </div>
                </div>
                <!-- speaker 3 -->
                <div class="w-[955px] h-[405px] p-5 rounded shadow justify-start items-start gap-5 inline-flex text-left">
                    <div>
                        <img class="absolute -translate-x-24 -translate-y-28 md:block" src="{{ asset('/images/ds-academy/speaker-3.png') }}">
                        <img class="w-[356px] h-[364px] translate-y-[3px] relative rounded" src="{{ asset('/images/gts/speaker-3bg.png') }}" />
                    </div>
                    <div class="grow shrink basis-0 self-stretch flex-col justify-start items-start gap-5 inline-flex">
                        <div class="self-stretch justify-end items-start gap-[50px] inline-flex">
                            <div class="flex-col justify-start items-start gap-2.5 inline-flex">
                                <div class="h-9 justify-center items-center inline-flex">
                                    <div class="text-white text-[24px] font-bold leading-9">Sabrina Woro Anggraini</div>
                                </div>
                                <div class="justify-start items-start gap-2.5 inline-flex">
                                    <div class="text-cyan-200 text-[24px] font-normal leading-9">Co-Founder & Managing Director of Natuno Design Lab</div>
                                </div>
                            </div>
                            <div class="grow shrink basis-0 h-[33px] justify-end items-center gap-4 flex">
                                    <a href="#" target="blank">
                                        <x-bi-linkedin class="w-[20px] h-[20px]"/>
                                    </a>
                                    <a href="#" target="blank" >
                                        <x-bi-instagram class="w-[20px] h-[20px]"/>
                                    </a>
                                    <a href="#" target="blank">
                                        <x-bi-twitter class="w-[20px] h-[20px]"/>
                                    </a>
                            </div>
                        </div>
                        <div class="self-stretch grow shrink basis-0 flex-col justify-start items-start gap-5 flex">
                            <div class="self-stretch text-white text-[18px] font-medium leading-7">Sabrina Woro Anggraini adalah seorang profesional berbakat dan berdedikasi di bidang bisnis dan teknologi. Sabrina, cofounder Notunolab, berpengalaman dalam implementasi teknologi informasi (IT) dalam bisnis.</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Speakers Section --}}
    {{-- Timeline Section --}}
    <section class="mt-14 md:mt-8 xl:mt-10 w-screen h-[200px] lg:h-[600px] xl:h-[900px]">
        <div class=" relative z-0">
            <img class=" z-0 absolute w-[20rem] xs:w-[40rem] md:w-[60rem] lg:w-[70rem] h-[15rem] md:h-[20rem] lg:h-[33rem] xl:w-[80rem] xl:h-[41rem] lg:left-[0rem] xl:left-[0rem] " src="{{asset('images/ds-academy/bg-timeline.png')}}" alt="">
        </div>
        <div class=" z-30 flex justify-center content-center flex-col">
            <h2 class=" z-30 font-montserrat text-[30px] xs:text-[34px] sm:text-[38px] md:text-[44px] lg:text-[53px] xl:text-[80px] font-bold from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center">Timeline</h2>
            <div class=" inline-block self-center">
                <h4 class=" inline-block z-30 font-montserrat text-[18px] xs:text-[20px] sm:text-[24px] md:text-[26px] lg:text-[32px] xl:text-[48px] font-bold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center">Be Ready, Save The</h4>
                <h4 class=" inline-block sm:ml-1 lg:ml-2 z-30 font-montserrat text-[18px] xs:text-[20px] sm:text-[24px] md:text-[26px] lg:text-[32px] xl:text-[48px] font-bold from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center">Dates</h4>
            </div>
            <div class=" mt-8 md:mt-12 lg:mt-16 grid grid-cols-3 gap-3 sm:gap-6 md:gap-7 lg:gap-10 self-center">
                <div class=" flex justify-center content-center flex-col">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center">12 Jun 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/ds-academy/timeline-1.png') }} alt="">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Registration</p>
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Open</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3.1rem] sm:bottom-[3.6rem] md:bottom-[3.9rem] lg:bottom-[4.3rem] xl:bottom-24 left-[2.34rem] sm:left-[3.2rem] md:left-[3.6rem] lg:left-[4.3rem] xl:left-[6rem]" src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center">16 Jul 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/ds-academy/timeline-2.png') }} alt="">
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">
                        Registration
                    </p>
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Closed</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3.1rem] sm:bottom-[3.6rem] md:bottom-[3.9rem] lg:bottom-[4.3rem] xl:bottom-24 left-[2.34rem] sm:left-[3.2rem] md:left-[3.6rem] lg:left-[4.3rem] xl:left-[6rem]" src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center">22 Jul 2022</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/ds-academy/timeline-2.png') }} alt="">
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">
                            Grand
                    </p>
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Talk Show</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Timeline Section --}}
    {{-- FAQ Section --}}

    <section id="faq" class=" mt-8 sm:mt-20 md:mt-32 lg:mt-12 w-screen min-h-[300px] xs:min-h-[350px] lg:min-h-[570px]">
        <div class=" relative ">
            <!-- <img class=" z-10 absolute lg:w-[34rem] lg:h-[50rem] xl:w-[50rem] xl:h-[65rem] lg:right-[0rem] xl:right-[0rem]" src= {{ asset('images/icon/IconLP_Sect7_Background1.png') }} alt="">
            <img class=" z-10 absolute hidden lg:block lg:w-[65rem] lg:h-[43rem] xl:w-[80rem] xl:h-[60rem] lg:top-[14rem] xl:top-[16rem] lg:left-[0rem] xl:left-[0rem]" src= {{ asset('images/icon/IconLP_Sect7_Background2.png') }} alt=""> -->
        </div>
        <div class=" flex justify-center flex-col">
            <h3 style=" line-height: 84px" class=" z-30 font-montserrat text-[17px] xs:text-[20px] sm:text-[28px] md:text-[32px] lg:text-[42px] xl:text-[64px] font-bold text-white text-center">Frequently Asked Questions</h3>
            <div class=" mt-2  lg:mt-12 xl:mt-24 lg:mb-10 xl:mb-14 self-center">
                <div x-data="{open:false}" class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open" class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">ISE! Grand Talkshow itu acara apa sih?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
                        </div>
                    </button>
                    <button @click="open=!open" style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
                    " x-show="open" x-cloak class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]" x-transition>
                        <h4 class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            ISE! Grand Talkshow itu acara apa sih?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Grand Talkshow merupakan kegiatan talkshow interaktif yang diadakan sebagai acara penutup sekaligus acara puncak dari ISE! 2022.
                        </p>
                    </button>
                </div>
                <div x-data="{open:false}" class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open" class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Kapan acaranya dilaksanakan?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
                        </div>
                    </button>
                    <button @click="open=!open" style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
                    " x-show="open" x-cloak class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]" x-transition>
                        <h4 class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Kapan acaranya dilaksanakan?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Acaranya akan dilaksanakan pada tanggal 22 Juli 2023
                        </p>
                    </button>
                </div>
                <div x-data="{open:false}" class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open" class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Cara daftarnya Bagaimana? Ribet ga?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
                        </div>
                    </button>
                    <button @click="open=!open" style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
                    " x-show="open" x-cloak class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]" x-transition>
                        <h4 class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Cara daftarnya Bagaimana? Ribet ga?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Tenang ajaaa, daftarnya mudah kokk, tinggal masuk ke website ISE! (ise-its.com) dan langsung daftar
                        </p>
                    </button>
                </div>
                <div x-data="{open:false}" class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open" class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Tapi, aku gabisa ke surabaya nih? ikutnya gimana?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
                        </div>
                    </button>
                    <button @click="open=!open" style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
                    " x-show="open" x-cloak class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]" x-transition>
                        <h4 class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Tapi, aku gabisa ke surabaya nih? ikutnya gimana?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Yang di luar surabaya tenang saja, karena acaranya kita laksanakan secara online
                        </p>
                    </button>
                </div>
                <div x-data="{open:false}" class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open" class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Di grand talkshow kita bakal bahas apa nih?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
                        </div>
                    </button>
                    <button @click="open=!open" style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
                    " x-show="open" x-cloak class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]" x-transition>
                        <h4 class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Di grand talkshow kita bakal bahas apa nih?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Grand talkshow akan membawakan satu tema umum, yaitu: “Tech Innovators: Revolutionizing Industries with IT Solutions” dengan subtopik, yaitu:
                            <ul class="list-disc pl-6 sm:pl-10 pt-1 text-left text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[16px]">
                                <li>“Are We Heading Towards The Future with No Job Vacancy for Humans?”</li>
                                <li>“Paving Pathways to IT Career Opportunities in the Digital Era”</li>
                                <li>“Unleashing the Power of IT Implementation in Business”</li>
                            </ul>
                        </p>
                    </button>
                </div>
                <div x-data="{open:false}" class=" z-30 w-[212px] xs:w-[275px] sm:w-[370px] md:w-[440px] lg:w-[34rem] xl:w-[50rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col">
                    <button @click="open=!open" x-cloak x-transition x-show="!open" class=" z-30 lg:w-[34rem] xl:w-[50rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent">
                        <span class=" z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">Pendaftarannya dibuka sampe kapan?</span>
                        <div class=" z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
                            <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
                        </div>
                    </button>
                    <button @click="open=!open" style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25);
                    " x-show="open" x-cloak class=" z-30 flex flex-col px-4 w-[230px] xs:w-[300px] sm:w-[400px] md:w-[470px] lg:min-w-[37rem] xl:min-w-[53rem] mx-4 py-6  text-white self-center rounded-[5px]" x-transition>
                        <h4 class=" z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]">
                            Pendaftarannya dibuka sampe kapan?
                        </h4>
                        <div class=" z-30 relative w-full">
                            <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px] h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
                        </div>
                        <p class=" z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left">
                            Grand Talkshow hadir secara gratis tanpa dipungut biaya pendaftaran, namun tetap dapet e-sertifikat ya!
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- End FAQ Section --}}
</div>

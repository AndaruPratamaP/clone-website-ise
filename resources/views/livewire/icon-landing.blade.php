@section('title', 'ICON 2023')
<div class=" bg-[#121316] min-h-[screen] flex justify-center items-center flex-col relative overflow-hidden">
    {{-- temp fix? --}}
    <div class=" h-20 min-w-screen lg:h-20 xl:h-32">
    </div>
    {{-- section 1 --}}
    <section class=" min-w-full h-[13rem] xs:h-[20rem] sm:h-[27rem] md:h-[30rem] lg:h-[703px] xl:h-[863px]">
        <div class=" relative z-0" >
            <img class=" absolute lg:w-[53rem] lg:h-[70rem] xl:w-[80rem] xl:h-[85rem] lg:left-[12rem] xl:left-[15rem] top-0" src={{ asset('images/icon/IconLP_Sect1_1.png') }} alt="">
            <img class=" z-10 absolute w-[10rem] xs:w-[16rem] sm:w-[22rem] md:w-[24rem] lg:w-[34rem] lg:h-[34rem] xl:w-[46rem] h-[10rem] xs:h-[16rem] sm:h-[22rem] md:h-[24rem] xl:h-[44rem] top-[1.5rem] xs:top-[1rem] md:top-[1.5rem] lg:top-[4rem] xl:top-[0rem] left-[1.5rem] xs:left-[1rem] sm:left-[0.5rem] md:left-[1rem] lg:left-[2rem] xl:left-[4rem]" src={{ asset('images/icon/IconLP_Sect1_2.png') }} alt="">
            <img class=" z-10 absolute w-[91%] h-[6rem] xs:h-[9rem] sm:h-[12rem] md:h-[14rem] lg:h-[20rem] xl:h-[27rem] top-[6.5rem] xs:top-[10rem] sm:top-[13rem] md:top-[14rem] lg:top-[21rem] xl:top-[22rem]" src={{ asset('images/icon/IconLP_Sect1_3.png') }} alt="">
            <img class=" absolute min-w-full h-[3.5rem] xs:h-[6rem] sm:h-[9rem] md:h-[10rem] lg:h-[13rem] xl:h-[20rem] top-[9.5rem] xs:top-[14rem] sm:top-[18rem] md:top-[20rem] lg:top-[31rem] xl:top-[34rem]" src={{ asset('images/icon/IconLP_Sect1_4.png') }} alt="">
        </div>
        <div class=" relative" data-aos-duration="1500" data-aos="fade-down" >
            <div class=" absolute top-[1.5rem] xs:top-[2rem] sm:top-[3rem] md:top-[4rem] lg:top-[9rem] xl:top-[7rem] right-[1.75rem] xs:right-[5.5rem] sm:right-[9rem] md:right-[13rem] lg:right-[16rem] xl:right-[19rem]">
                    <div class=" z-30">
                        <h3 class=" z-30 inline-block font-montserrat text-[12px] xs:text-[15px] sm:text-[17px] md:text-[20px] lg:text-[20px] xl:text-[30px] font-bold from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">The Main Event</h3>
                        <div class=" z-30 inline-block">
                            <img class=" z-30 relative w-[22px] lg:w-[38px] xl:w-[57px] h-[30px] lg:h-[51px] xl:h-[77px] lg:ml-3 top-2 lg:top-4 xl:top-6" src= {{ asset('images/icon/IconLP_Sect1_Stars.png') }} alt="">
                        </div>
                    </div>
                    <div class=" relative">
                        <h1 style="line-height: 80%" class=" absolute left-0 xs:top-1 lg:top-5 z-30 font-montserrat text-[40px] xs:text-[60px] sm:text-[70px] md:text-[80px] lg:text-[80px] xl:text-[120px] font-extrabold from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)]">ICON</h1>
                    </div>
                    <p class=" mt-10 xs:mt-14 sm:mt-16 md:mt-20 lg:mt-24 xl:mt-32 z-30 font-montserrat lg:bottom-[10rem] xl:bottom-0 text-[9px] xs:text-[12px] sm:text-[14px] md:text-[16px] lg:text-[16px] xl:text-[24px] font-bold from-[#FF9355] to-[#FFD693] bg-gradient-to-r text-transparent bg-clip-text">#ISEProvectaFutura</p>
                    <a href="#more" style="line-height: 80%" class="text-center items-center flex justify-center mt-2 sm:mt-4 lg:mt-4 xl:mt-6 z-30 w-[60px] xs:w-[90px] sm:w-[130px] md:w-[145px] lg:w-[185px] xl:w-[250px] h-[20px] xs:h-[26px] sm:h-[35px] md:h-[40px] lg:h-[43px] xl:h-[58px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent hover:opacity-75 rounded-[24px]" type="button">
                        <span class=" font-montserrat text-[7px] xs:text-[10px] sm:text-[14px] md:text-[16px] lg:text-[16px] xl:text-[20px] font-semibold text-[#FFEEE4]">Explore now</span>
                    </a>
            </div>
        </div>
    </section>
    {{-- section 2 --}}
    <section class=" min-w-full min-h-[20rem] xs:min-h-[21rem] lg:min-h-[29rem] xl:min-h-[41rem]" >
        <div class=" relative z-0" id="more">
            <img class=" absolute h-[30rem] lg:w-[70rem] lg:h-[60rem] sm:w-[40rem] xl:w-[85rem] xl:h-[90rem] lg:left-[0rem] xl:left-[0rem] top-0" src= {{ asset('images/icon/IconLP_Sect2_Background.png') }} alt="">
            <img class=" absolute min-w-full lg:min-w-full xl:min-w-full h-[4.5rem] xs:h-[6.5rem] sm:h-[8.5rem] md:h-[10rem] lg:h-[14rem] xl:h-[18rem] top-[2rem] lg:top-[4rem] xl:top-[4rem]" src= {{ asset('images/icon/IconLP_Sect2_Decor.png') }} alt="">
        </div>
        <div class=" flex justify-center content-center flex-col" >
            <h2 style=" line-height: 80%" class=" left-0 top-5 z-30 mt-32 sm:mt-40 lg:mt-44 xl:mt-56 font-montserrat text-[26px] xs:text-[30px] sm:text-[34px] md:text-[38px] lg:text-[48px] xl:text-[72px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center">What is ICON ?</h2>
            <p class=" mt-4 md:mt-6 lg:mt-20 xl:mt-24 z-30 font-montserrat lg:bottom-[10rem] xl:bottom-0 text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] font-medium text-white text-justify px-[2rem] xs:px-[3rem] sm:px-[5rem] md:px-[7rem] lg:px-[13.8rem] xl:px-[16rem]">IT Convention (ICON) merupakan salah satu zona dari ISE! (Information Systems Expo) yang bertujuan melakukan edukasi untuk masyarakat umum Indonesia yang membahas tentang perkembangan era digital dan isu-isu seputar IT saat ini. Sebagai sarana edukasi, IT Convention menjadi zona pada ISE! 2023 yang menghadirkan berbagai acara kreatif dan inovatif.
            </p>
        </div>
    </section>
    {{-- section 3 --}}
    <section class=" w-screen mt-6 h-[32rem] xs:h-[33rem] md:h-[39rem] lg:h-[55rem] xl:h-[75rem] lg:mt-0 ">
        <div class=" relative z-0">
            <img class=" absolute xs:w-[30rem] sm:w-[50rem] md:w-[60rem] lg:w-[65rem] h-[40rem] md:h-[50rem] lg:h-[70rem] xl:w-[95rem] xl:h-[95rem] lg:left-[0rem] xl:left-[0rem] top-0" src= {{ asset('images/icon/IconLP_Sect3_Background.png') }} alt="">
            <img class=" absolute hidden lg:block lg:top-[-11.5rem] xl:top-[-20rem] lg:h-[1125px] xl:h-[1610px] w-full" src= {{ asset('images/icon/IconLP_Sect3_Decor1.png') }} alt="">
            <img class=" absolute hidden lg:block lg:left-[2rem] xl:left-[2.75rem] lg:top-[37rem] xl:top-[47rem] lg:h-[387px] xl:h-[586px]" src= {{ asset('images/icon/IconLP_Sect3_Decor2.png') }} alt="">
        </div>
        <div class=" relative mt-10 xs:mt-2 lg:mt-4 xl:mt-0 h-6 lg:h-24">
            <img class=" absolute left-[2rem] xs:left-[3rem] sm:left-[4rem] lg:left-[9rem] xl:left-[9rem] lg:top-3 xl:top-2 w-[16px] xs:w-[18px] sm:w-[24px] md:w-[30px] lg:w-[41px] xl:w-[61px] h-[20px] xs:h-[25px] sm:h-[32px] md:h-[40px] lg:h-[50px] xl:h-[75px]" src= {{ asset('images/icon/IconLP_Sect3_TitleDecor1.png') }} alt="">
            <h2 style=" line-height: 80%" class=" absolute left-[3.5rem] xs:left-[4.5rem] sm:left-[6rem] md:left-[6.5rem] lg:left-[12rem] xl:left-[14rem] top-[0.2rem] lg:top-5 z-30 font-montserrat text-[20px] xs:text-[26px] sm:text-[32px] md:text-[40px] lg:text-[48px] xl:text-[64px] font-bold text-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center">Grand Talkshow</h2>
            <img class=" absolute left-[14.5rem] xs:left-[18.5rem] sm:left-[23.5rem] md:left-[28.5rem] lg:left-[38rem] xl:left-[49rem] top-[0.5rem] xs:top-[0.65rem] md:top-[1rem] lg:top-[2rem] xl:top-[2rem] w-[32px] sm:w-[42px] md:w-[65px] lg:w-[83px] xl:w-[125px] h-[8px] sm:h-[12px] md:h-[16px] lg:h-[20px] xl:h-[30px]" src= {{ asset('images/icon/IconLP_Sect3_TitleDecor2.png') }} alt="">
        </div>
        <div class=" mt-10">
            <div class=" swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[800px] xl:w-[1100px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[740px] xl:h-[1090px]">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <div class=" flex justify-center content-center flex-col bg-[#141414] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]">
                            <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src= {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
                            <p class=" font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-16 xl:px-24"><strong>Grand Talkshow ISE! 2023 </strong> merupakan kegiatan talkshow interaktif yang diadakan secara online dan merupakan rangkaian acara pembuka untuk kegiatan ISE! 2023.  Pada ISE! 2023, Grand Talkshow akan membawakan tema, yaitu <strong>“Tech Innovators: Revolutionizing Industries with IT Solutions”</strong></p>
                            <a href="/login" class="text-center items-center flex justify-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent hover:opacity-75 rounded-[24px] self-center" type="button">
                                <span class=" font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]">Registrasi Sekarang</span>
                            </a>
                            <h5 class=" mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text self-center">
                                Pendaftaran ditutup dalam waktu:
                            </h5>
                            <div class=" mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8">
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="days_gts"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Hari
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="hours_gts"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Jam
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="minutes_gts"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Menit
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="seconds_gts"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Detik
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section 4 --}}
    <section class=" w-screen h-[500px] xs:h-[570px] sm:h-[600px] md:h-[670px] lg:h-[1090px] xl:h-[1600px]">
        <div class=" relative z-0">
            <img class=" absolute xs:w-[30rem] sm:w-[50rem] md:w-[60rem] lg:w-[65rem] h-[40rem] md:h-[50rem] lg:h-[70rem] xl:w-[95rem] xl:h-[95rem] lg:left-[0rem] xl:left-[0rem] top-0" src= {{ asset('images/icon/IconLP_Sect3_Background.png') }} alt="">
            <img class=" absolute hidden lg:block lg:h-[290px] xl:h-[440px] lg:top-[51rem] xl:top-[70rem] lg:right-[3rem] xl:right-[3rem]" src= {{ asset('images/icon/IconLP_Sect4_Decor.png') }} alt="">
        </div>
        <div class=" relative mt-12 lg:mt-24 xl:mt-32 h-4 lg:h-24">
            <img class=" absolute right-[2rem] lg:right-[9rem] xl:right-[10rem] lg:top-3 xl:top-3 w-[16px] xs:w-[18px] sm:w-[24px] md:w-[30px] lg:w-[41px] xl:w-[61px] h-[20px] xs:h-[25px] sm:h-[32px] md:h-[40px] lg:h-[50px] xl:h-[75px]" src= {{ asset('images/icon/IconLP_Sect4_TitleDecor.png') }} alt="">
            <h2 style=" line-height: 80%" class=" absolute right-[3.5rem] sm:right-[4rem] lg:right-[12rem] xl:right-[15rem] lg:top-5 z-30 font-montserrat text-[20px] xs:text-[26px] sm:text-[32px] md:text-[40px] lg:text-[48px] xl:text-[64px] font-bold text-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center">Academy</h2>
            <img class=" absolute right-[10.5rem] xs:right-[12rem] sm:right-[14.5rem] md:right-[17rem] lg:right-[28rem] xl:right-[36rem] top-[0.3rem] sm:top-[0.5rem] lg:top-[2rem] xl:top-[2rem] w-[32px] sm:w-[42px] md:w-[65px] lg:w-[83px] xl:w-[125px] h-[8px] sm:h-[12px] md:h-[16px] lg:h-[20px] xl:h-[30px] rotate-180" src= {{ asset('images/icon/IconLP_Sect3_TitleDecor2.png') }} alt="">
        </div>
        <div class=" mt-10 sm:mt-14 xl:mt-20">
            <div class=" swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[800px] xl:w-[1100px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1085px]">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <div class=" flex justify-center content-center flex-col bg-[#141414] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]">
                            <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src= {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
                            <p class=" font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-16 xl:px-24"><strong>UX Academy</strong> merupakan <strong>rangkaian IT pelatihan/workshop</strong> yang memfasilitasi pembelajaran mengenai kemampuan di bidang teknologi dengan menghadirkan pengajar serta mentor yang ahli dan berpengalaman di bidang keilmuan tersebut.</p>
                            <a href="/login" class=" text-center items-center flex justify-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent hover:opacity-75 rounded-[24px] self-center" type="button">
                                <span class=" font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]">Registrasi Sekarang</span>
                            </a>
                            <h5 class=" mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text self-center">
                                Pendaftaran dibuka dalam waktu:
                            </h5>
                            <div class=" mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8">
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="days_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Hari
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="hours_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Jam
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="minutes_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Menit
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="seconds_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Detik
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" flex justify-center content-center flex-col bg-[#141414] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]">
                            <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src= {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
                            <p class=" font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-16 xl:px-24"><strong>DS Academy</strong> merupakan <strong>rangkaian IT pelatihan/workshop</strong> yang memfasilitasi pembelajaran mengenai kemampuan di bidang teknologi dengan menghadirkan pengajar serta mentor yang ahli dan berpengalaman di bidang keilmuan tersebut.</p>
                            <a href="/login" class="text-center items-center flex justify-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent hover:opacity-75 rounded-[24px] self-center" type="button">
                                <span class=" font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]">Registrasi Sekarang</span>
                            </a>
                            <h5 class=" mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#398FBA] to-[#97FBFE] bg-gradient-to-r text-transparent bg-clip-text self-center">
                                Pendaftaran dibuka dalam waktu:
                            </h5>
                            <div class=" mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8">
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="days_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Hari
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="hours_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Jam
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="minutes_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Menit
                                        </p>
                                    </div>
                                </div>
                                <div class=" p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#348BB6] to-[#CCE1F0]">
                                    <div class=" rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col">
                                        <span class=" self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%" id="seconds_dsux"></span>
                                        <p class=" self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text" style="line-height: 100%">
                                            Detik
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev hidden lg:block rounded-full p-10" style=" color: white; background-color: #173F52; left: 0;"></div>
                <div class="swiper-button-next rounded-full p-10" style=" color: white; background-color: #173F52; right: 0"></div>
            </div>
        </div>
    </section>
    {{-- section 5 --}}
    <section class=" w-screen h-[800px] xs:h-[780px] sm:h-[800px] lg:h-[700px] xl:h-[840px]">
        <div class=" relative z-0">
            <img class=" absolute sm:w-[50rem] md:w-[60rem] lg:w-[65rem] h-[50rem] lg:h-[78rem] xl:w-[95rem] xl:h-[110rem] lg:left-[0rem] xl:left-[0rem] lg:top-[-15rem] xl:top-[-20rem]" src= {{ asset('images/icon/IconLP_Sect3_Background.png') }} alt="">
        </div>
        <div class=" lg:mt-16 xl:mt-12 flex justify-center content-center flex-col">
            <div class=" flex justify-center content-center">
                <div class=" flex justify-center content-center drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
                    <div><img class=" self-center w-[28px] xs:w-[30px] md:w-[40px] lg:w-[84px] xl:w-[104px] h-[38px] xs:h-[40px] md:h-[50px] lg:h-[112px] xl:h-[141px]" src= {{ asset('images/icon/IconLP_Sect5_TitleDecor1.png') }} alt=""></div>
                    <div class=" mx-2 sm:mx-4 lg:mx-5 flex justify-center content-center flex-col">
                        <h2 style=" line-height: 80%" class=" z-30 font-montserrat text-[28px] xs:text-[32px] sm:text-[38px] md:text-[42px] lg:text-[48px] xl:text-[72px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] text-center">TESTIMONIALS</h2>
                        <div class=" self-center relative xs:top-2 lg:top-4">
                            <h4 class=" inline-block self-center text-white font-montserrat font-semibold text-[9px] sm:text-[12px] lg:text-[16px] xl:text-[36px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">What They Say about </h4>
                            <span class=" lg:ml-0.5 xl:ml-2 inline-block self-center font-montserrat font-semibold text-[9px] xs:text-[10px] md:text-[12px] lg:text-[16px] xl:text-[36px] from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r bg-clip-text text-transparent drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">ICON</span>
                        </div>
                    </div>
                    <div><img class=" self-center w-[28px] xs:w-[30px] md:w-[40px] lg:w-[84px] xl:w-[104px] h-[38px] xs:h-[40px] md:h-[50px] lg:h-[112px] xl:h-[141px]" src= {{ asset('images/icon/IconLP_Sect5_TitleDecor2.png') }} alt=""></div>
                </div>
            </div>
            <div class="swiper mt-12 w-[250px] xs:w-[350px] sm:w-[400px] md:w-[500px] lg:w-[870px] xl:w-[1252px] h-[690px] xs:h-[660px] sm:h-[680px] md:h-[670px] lg:h-[395px] xl:h-[557px] bg-[#121316cc] lg:bg-[#a4a4a426] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] rounded-[40px]">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                    <div class="swiper-slide">
                        <div class=" flex flex-col lg:flex-row">
                            <div class=" flex justify-center content-center lg:min-w-[300px] xl:min-w-[445px] flex-col">
                                <div class=" relative">
                                    <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-4 xs:left-16 sm:left-20 md:left-32 lg:left-4 xl:left-6 top-8 lg:top-[1rem] xl:top-[-1rem] z-30" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor1.png') }} alt="">
                                    <img class=" absolute w-[170px] xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px] xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0 lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt="">
                                    <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem] sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem] md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor3.png') }} alt="">
                                </div>
                                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px] xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src= {{ asset('images/icon/icon-testi-2.png') }} alt="">
                            </div>
                            <div style="text-" class=" flex flex-col px-5 xs:px-7 lg:px-0 pt-10 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                                <div class=" inline-block">
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                        Bisa dapat
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        Free Pass SNMPTN
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                    ,
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        banyak relasi
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                        , dan
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        wawasan baru!
                                    </span>
                                </div>
                                <p class=" mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify">“Kami, mahasiswa baru dengan pengetahuan terbatas tentang data science, mendaftar dan diterima di Data Science Academy ISE! Di sana, kami diajarkan materi baru oleh pemateri yang baik, dilengkapi contoh penerapannya. Praktik langsung dan mini project membantu kami memahami materi, didukung oleh mentor. Secara keseluruhan, ISE! Data Science Academy sangat berharga bagi kami.”</p>
                                <h5 class=" mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold">
                                    Agung Budi prasetya
                                </h5>
                                <h5 class=" z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold">
                                    Peserta DS Academy 2022
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" flex flex-col lg:flex-row">
                            <div class=" flex justify-center content-center lg:min-w-[300px] xl:min-w-[445px] flex-col">
                                <div class=" relative">
                                    <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-4 xs:left-16 sm:left-20 md:left-32 lg:left-4 xl:left-6 top-8 lg:top-[1rem] xl:top-[-1rem] z-30" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor1.png') }} alt="">
                                    <img class=" absolute w-[170px] xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px] xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0 lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt="">
                                    <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem] sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem] md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor3.png') }} alt="">
                                </div>
                                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px] xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src= {{ asset('images/icon/icon-testi-3.png') }} alt="">
                            </div>
                            <div style="text-" class=" flex flex-col px-5 xs:px-7 lg:px-0 pt-10 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                                <div class=" inline-block">
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                        Bisa dapat
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        Free Pass SNMPTN
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                    ,
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        banyak relasi
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                        , dan
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        wawasan baru!
                                    </span>
                                </div>
                                <p class=" mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify">“Meskipun saya merupakan mahasiswa baru. Namun, dengan niat dan keberanian, saya dan dua teman mendaftar dan mengikuti seleksi tersebut. Di sana, kami mendapatkan pengetahuan baru yang menarik dan bervariasi, dengan pemateri yang profesional. Ada juga praktik langsung dan penugasan mini project yang menantang. Intinya mengikuti ISE! Data Science Academy worth it banget👍👍👍”</p>
                                <h5 class=" mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold">
                                    Felicia Evelina Soetjipto
                                </h5>
                                <h5 class=" z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold">
                                    Peserta DS Academy 2022
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class=" flex flex-col lg:flex-row">
                            <div class=" flex justify-center content-center lg:min-w-[300px] xl:min-w-[445px] flex-col">
                                <div class=" relative">
                                    <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-4 xs:left-16 sm:left-20 md:left-32 lg:left-4 xl:left-6 top-8 lg:top-[1rem] xl:top-[-1rem] z-30" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor1.png') }} alt="">
                                    <img class=" absolute w-[170px] xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px] xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0 lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt="">
                                    <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem] sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem] md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{ asset('images/icon/IconLP_Sect5_ProfileDecor3.png') }} alt="">
                                </div>
                                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px] xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src= {{ asset('images/icon/icon-testi-1.png') }} alt="">
                            </div>
                            <div style="text-" class=" flex flex-col px-5 xs:px-7 lg:px-0 pt-10 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                                <div class=" inline-block">
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                        Bisa dapat
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        Free Pass SNMPTN
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                    ,
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        banyak relasi
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none">
                                        , dan
                                    </span>
                                    <span class=" z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#348BB6] to-[#CCE1F0] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none">
                                        wawasan baru!
                                    </span>
                                </div>
                                <p class=" mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify">“Partisipasi saya di Data Science Academy ISE! 2022 adalah petualangan menarik. Materi yang diajarkan oleh pemateri ahli sangat mengagumkan dan memberikan wawasan inspiratif tentang pengalaman kerja. Melalui praktik langsung dan mini project, saya semakin mendalami ilmu data science. Melalui ISE! Data Science Academy, semangat saya untuk menjadi data scientist semakin tumbuh.”</p>
                                <h5 class=" mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold">
                                    Achmad Fahmi Ainur Ridho
                                </h5>
                                <h5 class=" z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold">
                                    Peserta DS Academy 2022
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    {{-- Section 6 --}}
    <section class=" mt-5 xl:mt-10 w-screen h-[200px] lg:h-[330px] xl:h-[470px]">
        <div class=" relative z-0">
            <img class=" z-0 absolute w-[20rem] xs:w-[40rem] md:w-[60rem] lg:w-[70rem] h-[15rem] md:h-[20rem] lg:h-[33rem] xl:w-[80rem] xl:h-[41rem] lg:left-[0rem] xl:left-[0rem] " src= {{ asset('images/icon/IconLP_Sect3_Background.png') }} alt="">
            <img class=" absolute hidden lg:block right-0 top-16 lg:w-[152px] xl:w-[231px] lg:h-[391px] xl:h-[593px]" src= {{ asset('images/icon/IconLP_Sect6_Decor1.png') }} alt="">
            <img class=" absolute hidden lg:block left-0 lg:top-56 xl:top-72 lg:w-[105px] xl:w-[159px] lg:h-[271px] xl:h-[410px]" src= {{ asset('images/icon/IconLP_Sect6_Decor2.png') }} alt="">
        </div>
        <div class=" z-30 flex justify-center content-center flex-col">
            <h2 class=" z-30 font-montserrat text-[30px] xs:text-[34px] sm:text-[38px] md:text-[44px] lg:text-[53px] xl:text-[80px] font-bold from-[#E68DF4] to-[#AC60AE] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center">Timeline</h2>
            <div class=" inline-block self-center">
                <h4 class=" inline-block z-30 font-montserrat text-[18px] xs:text-[20px] sm:text-[24px] md:text-[26px] lg:text-[32px] xl:text-[48px] font-bold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center">Be Ready, Save The</h4>
                <h4 class=" inline-block sm:ml-1 lg:ml-2 z-30 font-montserrat text-[18px] xs:text-[20px] sm:text-[24px] md:text-[26px] lg:text-[32px] xl:text-[48px] font-bold from-[#E68DF4] to-[#AC60AE] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center">Dates</h4>
            </div>
            <div class=" mt-8 md:mt-12 lg:mt-16 grid grid-cols-3 gap-3 sm:gap-6 md:gap-7 lg:gap-10 self-center">
                <div class=" flex justify-center content-center flex-col">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center">22 Juli</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/icon/IconLP_Sect6_Circle.png') }} alt="">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Grand</p>
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Talkshow</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center">9-24 Sep</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/icon/IconLP_Sect6_Circle.png') }} alt="">
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">
                        Data Science
                    </p>
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Academy</p>
                    <div class=" relative">
                        <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px] bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem] sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
                    </div>
                </div>
                <div class=" flex justify-center content-center flex-col">
                    <p class=" z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center">9-24 Sep</p>
                    <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px] md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/icon/IconLP_Sect6_Circle.png') }} alt="">
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">
                        User Experience
                    </p>
                    <p class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center">Academy</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Section 7 --}}
    <section class=" mt-8 sm:mt-20 md:mt-32 lg:mt-12 w-screen min-h-[300px] xs:min-h-[350px] lg:min-h-[570px]">
        <div class=" relative ">
            <img class=" z-10 absolute lg:w-[34rem] lg:h-[50rem] xl:w-[50rem] xl:h-[65rem] lg:right-[0rem] xl:right-[0rem]" src= {{ asset('images/icon/IconLP_Sect7_Background1.png') }} alt="">
            <img class=" z-10 absolute hidden lg:block lg:w-[65rem] lg:h-[43rem] xl:w-[80rem] xl:h-[60rem] lg:top-[14rem] xl:top-[16rem] lg:left-[0rem] xl:left-[0rem]" src= {{ asset('images/icon/IconLP_Sect7_Background2.png') }} alt="">
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
</div>


<script>
    // GTS Countdown Start
        // Set the countdown date and time
        const countdownDate_gts = new Date("July 16, 2023 00:00:00").getTime();

        // Update the countdown every second
        const countdownTimer_gts = setInterval(() => {
        // Get today's date and time
        const now = new Date().getTime();

        // Find the distance between now and the countdown date
        const distance = countdownDate_gts - now;

        // Calculate the days, hours, minutes, and seconds
        const days_gts = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours_gts = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes_gts = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds_gts = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        document.getElementById("days_gts").innerHTML = `${days_gts}`;
        document.getElementById("hours_gts").innerHTML = `${hours_gts}`;
        document.getElementById("minutes_gts").innerHTML = `${minutes_gts}`;
        document.getElementById("seconds_gts").innerHTML = `${seconds_gts}`;

        // If the countdown is finished, display a message
        if (distance < 0) {
            clearInterval(countdownTimer_gts);
            document.getElementById("days_gts").innerHTML = "0";
            document.getElementById("hours_gts").innerHTML = "0";
            document.getElementById("minutes_gts").innerHTML = "0";
            document.getElementById("seconds_gts").innerHTML = "0";
        }
        }, 1000);
    // GTS Countdown End

    // dsux Countdown Start
        // Set the countdown date and time
        const countdownDate_dsux = new Date("July 23, 2023 00:00:00").getTime();

        // Update the countdown every second
        const countdownTimer_dsux = setInterval(() => {

        // Get today's date and time
        const now = new Date().getTime();

        // Find the distance between now and the countdown date
        const distance = countdownDate_dsux - now;

        // Calculate the days, hours, minutes, and seconds
        const days_dsux = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours_dsux = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes_dsux = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds_dsux = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        document.getElementById("days_dsux").innerHTML = `${days_dsux}`;
        document.getElementById("hours_dsux").innerHTML = `${hours_dsux}`;
        document.getElementById("minutes_dsux").innerHTML = `${minutes_dsux}`;
        document.getElementById("seconds_dsux").innerHTML = `${seconds_dsux}`;

        // If the countdown is finished, display a message
        if (distance < 0) {
            clearInterval(countdownTimer_dsux);
            document.getElementById("days_dsux").innerHTML = "0";
            document.getElementById("hours_dsux").innerHTML = "0";
            document.getElementById("minutes_dsux").innerHTML = "0";
            document.getElementById("seconds_dsux").innerHTML = "0";
        }
        }, 1000);
    // dsux Countdown End
  </script>

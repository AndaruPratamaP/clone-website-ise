{{-- CHANGE EVERYTHING FROM ICON TO RISEEEE --}} @section('title', 'RISE | ISE! 2023')
<div class="bg-[#121316] min-h-[screen] flex justify-center items-center flex-col relative overflow-hidden">
  {{-- temp fix? --}}
  <div class="h-20 min-w-screen lg:h-20 xl:h-32"></div>
  {{-- section 1 DONE--}}
  <section class="min-w-full h-[13rem] xs:h-[16rem] sm:h-[21rem] md:h-[24rem] lg:h-[500px] xl:h-[700px]">
    <div class="relative z-0">
      <img
        class="z-0 absolute w-full h-[25rem] top-[-5rem] right-0 lg:hidden"
        src="{{ asset('images/rise-landing/Sect1-Bg-Phone-Big.png') }}"
        alt=""
      />
      <img class=" z-10 absolute w-[3rem] xs:w-[4rem] sm:w-[5rem] md:w-[6rem] lg:w-[7rem] xl:w-[10rem] h-[2.5rem]
      xs:h-[3rem] sm:h-[4rem] md:h-[5.5rem] lg:h-[6rem] xl:h-[8rem] top-[1.5rem] lg:top-[3rem] xl:top-[3rem] " src={{
      asset('images/rise-landing/Sect1_Decor1.png') }} alt="">
      <img
        class="z-10 absolute w-[9rem] xs:w-[10rem] sm:w-[13rem] md:w-[16rem] lg:w-[23rem] xl:w-[30rem] h-[7rem] xs:h-[8rem] sm:h-[10rem] md:h-[12rem] lg:h-[15rem] xl:h-[21rem] top-[2rem] sm:top-[3rem] lg:top-[6rem] left-[3rem] xs:left-[4rem] sm:left-[6rem] lg:left-[7rem] xl:left-[9.5rem]"
        src="{{ asset('images/rise-landing/Sect1_Plane.png') }}"
        alt=""
      />
      <img
        class="z-10 absolute w-[1.5rem] xs:w-[2rem] md:w-[3.5rem] lg:w-[5rem] xl:w-[6rem] h-[1rem] xs:h-[1.25rem] md:h-[2rem] lg:h-[3rem] xl:h-[4rem] top-[6rem] xs:top-[8rem] sm:top-[9rem] md:top-[11rem] lg:top-[14rem] xl:top-[15rem] left-[10rem] xs:left-[12rem] sm:left-[16rem] md:left-[18rem] lg:left-[24.5rem] xl:left-[33rem]"
        src="{{ asset('images/rise-landing/Sect1_SmolCloudLeft.png') }}"
        alt=""
      />
      <img
        class="z-10 absolute w-[16rem] xs:w-[20rem] sm:w-[24rem] md:w-[27.5rem] lg:w-[45rem] xl:w-[54rem] h-[4rem] xs:h-[5.5rem] sm:h-[7rem] lg:h-[10rem] xl:h-[14rem] top-[9rem] xs:top-[11rem] sm:top-[14rem] md:top-[16rem] lg:top-[21rem] xl:top-[27rem]"
        src="{{ asset('images/rise-landing/Sect1_BigCloudLeft.png') }}"
        alt=""
      />
      <img
        class="z-10 absolute w-[1.5rem] sm:w-[2.5rem] lg:w-[4rem] xl:w-[4.5rem] h-[1rem] sm:h-[1.5rem] lg:h-[2.5rem] xl:h-[3rem] right-[1rem] xs:right-[2rem] sm:right-[3rem] md:right-[4rem] lg:right-[2rem] xl:right-[2.5rem] top-[8rem] xs:top-[10rem] sm:top-[12rem] md:top-[14rem] lg:top-[14rem] xl:top-[17rem]"
        src="{{ asset('images/rise-landing/Sect1SmolCloudRight1.png') }}"
        alt=""
      />
      <img
        class="z-10 absolute w-[2rem] sm:w-[3.5rem] lg:w-[6rem] xl:w-[6.5rem] h-[1rem] sm:h-[2rem] lg:h-[3rem] xl:h-[3.5rem] right-[2rem] xs:right-[3rem] sm:right-[4rem] md:right-[6rem] lg:right-[6rem] xl:right-[5rem] top-[10rem] xs:top-[12rem] sm:top-[15rem] md:top-[17rem] lg:top-[18rem] xl:top-[23rem]"
        src="{{ asset('images/rise-landing/Sect1SmolCloudRight2.png') }}"
        alt=""
      />
    </div>
    <div class="relative" data-aos-duration="1500" data-aos="fade-down">
      <div
        class="absolute top-[1.5rem] xs:top-[2rem] sm:top-[3rem] md:top-[4rem] lg:top-[4rem] xl:top-[3rem] right-[1.75rem] xs:right-[5.5rem] sm:right-[9rem] md:right-[13rem] lg:right-[16rem] xl:right-[19rem]"
      >
        <div class="z-30">
          <h3
            class="z-30 inline-block font-montserrat text-[12px] xs:text-[15px] sm:text-[17px] md:text-[20px] lg:text-[20px] xl:text-[30px] font-bold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
          >
            The Main Event
          </h3>
          <div class="z-30 inline-block">
            <img class=" z-30 relative w-[22px] lg:w-[38px] xl:w-[57px] h-[30px] lg:h-[51px] xl:h-[77px] lg:ml-3 top-2
            lg:top-4 xl:top-6" src= {{ asset('images/rise-landing/Sect1_Ornament.png') }} alt="">
          </div>
        </div>
        <div class="relative">
          <h1
            style="line-height: 80%"
            class="absolute xs:top-1 lg:top-5 z-30 font-montserrat text-[40px] xs:text-[60px] sm:text-[70px] md:text-[80px] lg:text-[80px] xl:text-[120px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)]"
          >
            RISE!
          </h1>
        </div>
        <p
          class="mt-10 xs:mt-14 sm:mt-16 md:mt-20 lg:mt-24 xl:mt-32 z-30 font-montserrat lg:bottom-[10rem] xl:bottom-0 text-[9px] xs:text-[12px] sm:text-[14px] md:text-[16px] lg:text-[16px] xl:text-[24px] font-bold from-[#FFD693] to-[#894584] bg-gradient-to-l text-transparent bg-clip-text"
        >
          #ISEProvectaFutura
        </p>
        <a
          href="#more"
          style="line-height: 80%"
          class="text-center items-center flex justify-center mt-2 sm:mt-4 lg:mt-4 xl:mt-6 z-30 w-[90px] xs:w-[120px] sm:w-[140px] md:w-[160px] lg:w-[185px] xl:w-[250px] h-[20px] xs:h-[26px] sm:h-[35px] md:h-[40px] lg:h-[43px] xl:h-[58px] from-[#D1692D] to-[#FFBF7E] bg-gradient-to-r text-transparent rounded-[24px] hover:brightness-75"
          type="button"
        >
          <span
            class="font-montserrat text-[7px] xs:text-[10px] sm:text-[14px] md:text-[16px] lg:text-[16px] xl:text-[20px] font-semibold text-[#FFEEE4]"
            >Explore now</span
          >
        </a>
      </div>
    </div>
  </section>
  {{-- section 2 DONE--}}
  <section class="min-w-full min-h-[20rem] xs:min-h-[21rem] lg:min-h-[34rem] xl:min-h-[41rem]">
    <div class="relative z-0" id="more">
      <img class=" absolute hidden lg:block h-[30rem] lg:w-[70rem] lg:h-[43rem] sm:w-[40rem] xl:w-[85rem] xl:h-[56rem]
      lg:left-[0rem] xl:left-[0rem] top-[-3rem]" src= {{ asset('images/rise-landing/Sect2-Bg.png') }} alt="">
      <img
        class="absolute lg:hidden w-full h-[38rem] xs:h-[33rem] sm:h-[35rem] md:h-[37rem] top-[-3rem]"
        src="{{ asset('images/rise-landing/Sect2-Bg-phone.png') }}"
        alt=""
      />
      <img class=" absolute min-w-full lg:min-w-full xl:min-w-full h-[4.5rem] xs:h-[6.5rem] sm:h-[8.5rem] md:h-[10rem]
      lg:h-[14rem] xl:h-[18rem] top-[2rem] lg:top-[4rem] xl:top-[4rem]" src= {{
      asset('images/icon/IconLP_Sect2_Decor.png') }} alt="">
    </div>
    <div class="flex flex-col content-center justify-center">
      <h2
        style="line-height: 80%"
        class="left-0 top-5 z-30 mt-32 sm:mt-40 lg:mt-44 xl:mt-56 font-montserrat text-[26px] xs:text-[30px] sm:text-[34px] md:text-[38px] lg:text-[48px] xl:text-[72px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center"
      >
        ABOUT RISE!
      </h2>
      <p
        class="mt-4 md:mt-6 lg:mt-20 xl:mt-24 z-30 font-montserrat lg:bottom-[10rem] xl:bottom-0 text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] font-medium text-white text-justify px-[2rem] xs:px-[3rem] sm:px-[5rem] md:px-[7rem] lg:px-[13.8rem] xl:px-[16rem]"
      >
        Dahulu dikenal dengan nama BCL (Business College Level) sekarang hadir dengan nama baru yaitu RISE! (Rivalry of
        Information Systems Expo) sebagai bagian kompetisi ISE! yang diharapkan kembali membawa nama ISE! ke puncak dan
        membangkitkan (RISE!) semangat mahasiswa dengan bersaing dalam kompetisi implementasi strategi analisis bisnis.
      </p>
    </div>
  </section>
  {{-- section 3 DONE --}}
  <section class="w-screen h-[550px] xs:h-[620px] sm:h-[650px] md:h-[790px] lg:h-[1000px] xl:h-[1500px]">
    <div class="relative z-0">
      <img class=" absolute w-[70px] xs:w-[85px] md:w-[100px] lg:w-[200px] xl:w-[240px] h-[130px] xs:h-[160px]
      md:h-[200px] lg:h-[380px] xl:h-[480px] top-[22rem] xs:top-[26rem] sm:top-[27rem] md:top-[31rem] lg:top-[32rem]
      xl:top-[52rem] left-[2rem] sm:left-[4rem] lg:left-[6rem] xl:left-[6rem]" src= {{
      asset('images/rise-landing/Sect3-Decor-Left.png') }} alt=""> <img class=" absolute w-[110px] xs:w-[120px]
      md:w-[160px] lg:w-[330px] xl:w-[400px] h-[110px] xs:h-[120px] sm:h-[160px] lg:h-[290px] xl:h-[400px] top-[24rem]
      xs:top-[29rem] sm:top-[30rem] md:top-[34.5rem] lg:top-[39rem] xl:top-[58rem] right-[2rem] sm:right-[4rem]
      lg:right-[3rem] xl:right-[3rem]" src= {{ asset('images/rise-landing/Sect3-Decor-Right.png') }} alt="">
    </div>
    <div class="hidden mt-10 lg:block sm:mt-14 xl:mt-20">
      <div
        class="hidden lg:block swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[880px] xl:w-[1150px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1085px]"
      >
        <div class="hidden lg:block swiper-wrapper">
          <div class="hidden lg:block swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#141414] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[25px]"
              style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
            >
              <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src=
              {{ asset('images/rise-landing/Sect3-Carousel-Img1.png') }} alt="">
              <p
                class="font-montserrat text-[9px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-16 xl:px-24"
              >
                Serangkaian acara Information Systems Expo (ISE!) 2023 yang mengangkat konsep lomba tingkat nasional
                terkait business case yang diperuntukkan untuk mahasiswa aktif jenjang D3, D4, atau S1 di Indonesia yang
                dapat diikuti secara berkelompok atau tim yang dilaksanakan secara online.
              </p>
              <div class="flex flex-col content-center justify-center lg:flex-row lg:gap-6">
                <a
                  href="/login"
                  class="text-center items-center flex justify-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#D1692D] to-[#FFBF7E] bg-gradient-to-r text-transparent rounded-[24px] hover:brightness-75 self-center"
                  type="button"
                >
                  <span class="font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                    >Registrasi Sekarang</span
                  >
                </a>
                <a
                  href="https://drive.google.com/file/d/1wMvypz73pRS4K_ZhJBOn2sRU2UorE1WJ/view?usp=sharing"
                  class="mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#D1692D] to-[#FFBF7E] bg-gradient-to-r rounded-[24px] p-[2px] self-center"
                  type="button"
                >
                  <div
                    class="bg-[#141414] hover:brightness-75 w-full h-full rounded-[24px] flex items-center justify-center"
                  >
                    <span
                      class="inline-block font-montserrat text-[10px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                      >Unduh Guidebook</span
                    >
                    <img
                      class="inline-block ml-2 lg:mb-1 w-[16px] lg:w-[21px] h-[16px] lg:h-[20px]"
                      src="{{ asset('images/rise-landing/Sect3-Download-Img.png') }}"
                      alt=""
                    />
                  </div>
                </a>
              </div>
              <h5
                class="mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text self-center"
              >
                Pendaftaran&nbsp;<span id="regist_status"></span>&nbsp; dalam waktu:
              </h5>
              <div
                class="flex content-center justify-center gap-2 mt-2 mb-4 lg:mt-2 xl:mt-4 lg:mb-12 xl:mb-12 lg:gap-4"
              >
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="days_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Hari
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="hours_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Jam
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="minutes_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Menit
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="seconds_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Detik
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hidden lg:block swiper-slide">
            <div
              class="flex justify-center content-center flex-col from-[#6BB9E7] to-[#894584] bg-gradient-to-tl mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mb-10 xl:mb-16 lg:mt-12 xl:mt-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-[#894584] lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-[#F3F3F3] font-montserrat">Mentoring</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[33rem]"
              >
                Daftarlah sekarang dan dapatkan kesempatan mentoring langsung dari pemateri kompeten dalam bidang bisnis
                dan teknologi informasi di acara RISE 2023. Tingkatkan ide bisnis Anda dengan panduan ahli untuk
                mencapai kesuksesan.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[230px] xl:w-[280px] lg:h-[140px] xl:h-[170px]"
                  src="{{ asset('images/rise-landing/Sect3-Disc-Img.png') }}"
                  alt=""
                />
              </div>
            </div>
            <div
              class="flex justify-center content-center flex-col from-[#AFD196] to-[#006C56] bg-gradient-to-tl mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="from-[#62C3AC] to-[#288770] bg-gradient-to-r lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-[#F3F3F3] font-montserrat">E-Certificate</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[33rem]"
              >
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara RISE 2023! Daftarlah sekarang dan ikuti
                rangkaian kegiatan kami untuk memperoleh sertifikat digital yang telah diverifikasi secara nasional.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/rise-landing/Sect3-Certificate-Img.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          {{--
          <div class="swiper-slide">
            <div
              class="flex justify-center content-center flex-col from-[#AFD196] to-[#006C56] bg-gradient-to-tl mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="from-[#62C3AC] to-[#288770] bg-gradient-to-r py-1 lg:py-1 xl:py-2 pl-1 lg:pl-2 xl:pl-4 pr-6 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] lg:text-[24px] xl:text-[36px] text-[#F3F3F3] font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  E-Certificate
                </h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
                Daftar dan dapatkan e-certificate Daftar dan dapatkan e-certificate Daftar dan dapatkan e-certificate
                Daftar dan dapatkan e-certificate Daftar dan dapatkan e-certificate Daftar
              </p>
              <a href="">
                <span class="font-semibold lg:text-[26px] xl:text-[36px] text-[#FFEEE4] font-montserrat border-b-2"
                  >Learn more</span
                >
              </a>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/rise-landing/Sect3-Certificate-Img.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          --}}
        </div>
        <div
          class="hidden p-10 rounded-full swiper-button-prev lg:block"
          style="color: white; background-color: #173f52; left: 0"
        ></div>
        <div
          class="hidden p-10 rounded-full swiper-button-next lg:block"
          style="color: white; background-color: #173f52; right: 0"
        ></div>
      </div>
    </div>
    <div class="block mt-10 lg:hidden sm:mt-14 xl:mt-20">
      <div
        class="hidden lg:block swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[880px] xl:w-[1150px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1085px]"
      >
        <div class="hidden lg:block swiper-wrapper">
          <div class="hidden lg:block swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#141414] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[25px]"
              style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
            >
              <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src=
              {{ asset('images/rise-landing/Sect3-Carousel-Img1.png') }} alt="">
              <p
                class="font-montserrat text-[9px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-16 xl:px-24"
              >
                Serangkaian acara Information Systems Expo (ISE!) 2023 yang mengangkat konsep lomba tingkat nasional
                terkait business case yang diperuntukkan untuk mahasiswa aktif jenjang D3, D4, atau S1 di Indonesia yang
                dapat diikuti secara berkelompok atau tim yang dilaksanakan secara online.
              </p>
              <div class="flex flex-col content-center justify-center lg:flex-row lg:gap-6">
                <a
                  href="/login"
                  class="text-center items-center flex justify-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#D1692D] to-[#FFBF7E] bg-gradient-to-r text-transparent rounded-[24px] self-center"
                  type="button"
                >
                  <span class="font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                    >Registrasi Sekarang</span
                  >
                </a>
                <a
                  href="https://drive.google.com/file/d/1wMvypz73pRS4K_ZhJBOn2sRU2UorE1WJ/view?usp=sharing"
                  class="mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#D1692D] to-[#FFBF7E] bg-gradient-to-r rounded-[24px] p-[2px] self-center"
                  type="button"
                >
                  <div class="bg-[#141414] w-full h-full rounded-[24px] flex items-center justify-center">
                    <span
                      class="inline-block font-montserrat text-[10px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                      >Unduh Guidebook</span
                    >
                    <img
                      class="inline-block ml-2 lg:mb-1 w-[16px] lg:w-[21px] h-[16px] lg:h-[20px]"
                      src="{{ asset('images/rise-landing/Sect3-Download-Img.png') }}"
                      alt=""
                    />
                  </div>
                </a>
              </div>
              <h5
                class="mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text self-center"
              >
                Pendaftaran ditutup dalam waktu:
              </h5>
              <div
                class="flex content-center justify-center gap-2 mt-2 mb-4 lg:mt-2 xl:mt-4 lg:mb-12 xl:mb-12 lg:gap-4"
              >
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="days_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Hari
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="hours_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Jam
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="minutes_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Menit
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] sm:w-[38px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] sm:h-[38px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-b from-[#FF9355] to-[#FFD693]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                      id="seconds_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text"
                      style="line-height: 100%"
                    >
                      Detik
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] from-[#6BB9E7] to-[#894584] bg-gradient-to-tl mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-[#894584] py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-12 xs:pr-16 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-[#F3F3F3] font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  Mentoring
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
                Daftarlah sekarang dan dapatkan kesempatan mentoring langsung dari pemateri kompeten dalam bidang bisnis
                dan teknologi informasi di acara RISE 2023. Tingkatkan ide bisnis Anda dengan panduan ahli untuk
                mencapai kesuksesan.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-5px] xs:right-[-10px] bottom-[-60px] xs:bottom-[-70px] sm:bottom-[-100px] w-[115px] xs:w-[150px] sm:w-[190px] md:w-[220px] lg:w-[230px] xl:w-[280px] h-[70px] xs:h-[90px] sm:h-[120px] md:h-[130px] lg:h-[140px] xl:h-[170px]"
                  src="{{ asset('images/rise-landing/Sect3-Disc-Img.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] from-[#AFD196] to-[#006C56] bg-gradient-to-tl mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="from-[#62C3AC] to-[#288770] bg-gradient-to-r py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-6 xs:pr-8 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-[#F3F3F3] font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  E-Certificate
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara RISE 2023! Daftarlah sekarang dan ikuti
                rangkaian kegiatan kami untuk memperoleh sertifikat digital yang telah diverifikasi secara nasional.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-5px] bottom-[-60px] sm:bottom-[-110px] w-[100px] sm:w-[190px] lg:w-[200px] xl:w-[270px] h-[75px] sm:h-[140px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/rise-landing/Sect3-Certificate-Img.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div
          class="hidden p-10 rounded-full swiper-button-prev lg:block"
          style="color: white; background-color: #173f52; left: 0"
        ></div>
        <div
          class="hidden p-10 rounded-full swiper-button-next lg:block"
          style="color: white; background-color: #173f52; right: 0"
        ></div>
      </div>
    </div>
  </section>
  {{-- section 4 DONE--}}
  <section class="w-screen h-[800px] xs:h-[780px] sm:h-[800px] lg:h-[740px] xl:h-[840px]">
    <div class="relative z-0">
      <img
        class="absolute top-[-11rem] w-full h-[1100px] sm:h-[1150px] lg:hidden"
        src="{{ asset('images/rise-landing/Sect4-Bg-Left.png') }}"
        alt=""
      />
      <img
        class="absolute top-[-11rem] w-full h-[1100px] sm:h-[1150px] lg:hidden"
        src="{{ asset('images/rise-landing/Sect4-Bg-Right.png') }}"
        alt=""
      />
    </div>
    <div class="flex flex-col content-center justify-center lg:mt-16 xl:mt-12">
      <div class="flex content-center justify-center">
        <div class="flex justify-center content-center drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
          <div>
            <img class=" self-center w-[28px] xs:w-[30px] md:w-[40px] lg:w-[84px] xl:w-[104px] h-[38px] xs:h-[40px]
            md:h-[50px] lg:h-[112px] xl:h-[141px]" src= {{ asset('images/rise-landing/Sect4-Decor-Left.png') }} alt="">
          </div>
          <div class="flex flex-col content-center justify-center mx-2 sm:mx-4 lg:mx-5">
            <h2
              style="line-height: 80%"
              class="z-30 font-montserrat text-[28px] xs:text-[32px] sm:text-[38px] md:text-[42px] lg:text-[52px] xl:text-[72px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] text-center"
            >
              TESTIMONIALS
            </h2>
            <div class="relative self-center xs:top-2 lg:top-4">
              <h4
                class="inline-block self-center text-white font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] lg:text-[26px] xl:text-[36px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
              >
                What They Say about
              </h4>
              <span
                class="lg:ml-0.5 xl:ml-2 inline-block self-center font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] lg:text-[26px] xl:text-[36px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text text-transparent drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
                >RISE!</span
              >
            </div>
          </div>
          <div>
            <img class=" self-center w-[28px] xs:w-[30px] md:w-[40px] lg:w-[84px] xl:w-[104px] h-[38px] xs:h-[40px]
            md:h-[50px] lg:h-[112px] xl:h-[141px]" src= {{ asset('images/rise-landing/Sect4-Decor-Right.png') }} alt="">
          </div>
        </div>
      </div>
      <style>
        .swiper-pagination-bullet-active {
          background-color: #ff9355 !important;
        }
      </style>
      <div
        class="swiper mt-8 lg:mt-12 w-[250px] xs:w-[350px] sm:w-[400px] md:w-[500px] lg:w-[870px] xl:w-[1252px] h-[710px] xs:h-[660px] sm:h-[680px] md:h-[670px] lg:h-[395px] xl:h-[557px] bg-[#121316cc] lg:bg-[#121316CC] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] rounded-[40px]"
        style=""
      >
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="flex flex-col lg:flex-row">
              <div class="flex justify-center content-center lg:min-w-[300px] xl:min-w-[445px] flex-col">
                <div class="relative">
                  <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-4
                  xs:left-16 sm:left-20 md:left-32 lg:left-4 xl:left-6 top-8 lg:top-[1rem] xl:top-[-1rem] z-30" src= {{
                  asset('images/rise-landing/Sect4-Pfp-Decor-TL.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt=""> <img class=" absolute w-[50px]
                  lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem]
                  sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem]
                  md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{
                  asset('images/rise-landing/Sect4-Pfp-Decor-BR.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/rise-landing/Sect4-ProfPic-Blur.png') }} alt="">
                </div>
                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px]
                xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src=
                {{ asset('images/rise-landing/testi-1.png') }} alt="">
              </div>
              <div style="text-" class="flex flex-col px-5 pt-10 xs:px-7 lg:px-0 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                <div class="inline-block">
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    Bisa dapat
                  </span>
                  <span

                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    ,
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    banyak relasi
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    , dan
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    wawasan baru!
                  </span>
                </div>
                <p
                  class="mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify"
                >
                  “Mentornya keren-keren dan penuh wawasan. Saya merasa beruntung bisa mendapatkan dorongan dan
                  bimbingan dari mentor yang kompeten dan berpengalaman. Insight yang diberikan sangat berharga dan
                  mendorong saya untuk terjun ke dunia bisnis. Saya merasa telah memperoleh pengetahuan yang berharga
                  selama kompetisi ini. Pengalaman yang diluar ekspektasi in a good way. ”
                </p>
                <h5
                  class="mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold"
                >
                  Muhammad Febriansyah
                </h5>
                <h5
                  class="z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold"
                >
                  1st Winner BCL 2022
                </h5>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex flex-col lg:flex-row">
              <div class="flex justify-center content-center lg:min-w-[300px] xl:min-w-[445px] flex-col">
                <div class="relative">
                  <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-4
                  xs:left-16 sm:left-20 md:left-32 lg:left-4 xl:left-6 top-8 lg:top-[1rem] xl:top-[-1rem] z-30" src= {{
                  asset('images/rise-landing/Sect4-Pfp-Decor-TL.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt=""> <img class=" absolute w-[50px]
                  lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem]
                  sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem]
                  md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{
                  asset('images/rise-landing/Sect4-Pfp-Decor-BR.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/rise-landing/Sect4-ProfPic-Blur.png') }} alt="">
                </div>
                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px]
                xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src=
                {{ asset('images/rise-landing/testi-3.png') }} alt="">
              </div>
              <div style="text-" class="flex flex-col px-5 pt-10 xs:px-7 lg:px-0 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                <div class="inline-block">
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    Bisa dapat
                  </span>
                  <span

                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    ,
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    banyak relasi
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    , dan
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    wawasan baru!
                  </span>
                </div>
                <p
                  class="mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify"
                >
                  “Bionix College level 2022 adalah kompetisi yang menjadi batu loncatan saya dalam giat lomba bisnis.
                  Highlight pada sesi mentoring dari bionix, saya bertemu mentor yang sangat membantu peserta dalam
                  penyempurnaan materi perlombaan. Jujur kaget ketika tim saya menang😁, ingin sesi mentoringnya lebih
                  lama karena bermanfaat banget soalnya. ”
                </p>
                <h5
                  class="mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold"
                >
                  Rio Penampati Banurea
                </h5>
                <h5
                  class="z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold"
                >
                  3rd Winner BCL 2022
                </h5>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex flex-col lg:flex-row">
              <div class="flex justify-center content-center lg:min-w-[300px] xl:min-w-[445px] flex-col">
                <div class="relative">
                  <img class=" absolute w-[50px] lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-4
                  xs:left-16 sm:left-20 md:left-32 lg:left-4 xl:left-6 top-8 lg:top-[1rem] xl:top-[-1rem] z-30" src= {{
                  asset('images/rise-landing/Sect4-Pfp-Decor-TL.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt=""> <img class=" absolute w-[50px]
                  lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem]
                  sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem]
                  md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{
                  asset('images/rise-landing/Sect4-Pfp-Decor-BR.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/rise-landing/Sect4-ProfPic-Blur.png') }} alt="">
                </div>
                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px]
                xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src=
                {{ asset('images/rise-landing/testi-2.png') }} alt="">
              </div>
              <div style="text-" class="flex flex-col px-5 pt-10 xs:px-7 lg:px-0 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                <div class="inline-block">
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    Bisa dapat
                  </span>
                  <span

                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    ,
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    banyak relasi
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    , dan
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    wawasan baru!
                  </span>
                </div>
                <p
                  class="mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify"
                >
                  “BCL 2022 jadi salah satu tipping point untuk ngembangin ide startup, terutama bisa dapet mentor yang
                  ga cuma sharing tentang lomba aja, tapi bisa bantu ke next stepnya. Bagiku dapet juara kemarin itu
                  bonus sih, pembelajaran dan mentornya aja udah worth it banget! ”
                </p>
                <h5
                  class="mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold"
                >
                  I Komang Udaya Adi Prabawa
                </h5>
                <h5
                  class="z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold"
                >
                  2nd Winner BCL 2022
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  {{-- Section 5 DONE--}}
  <section class="mt-5 xl:mt-10 w-screen h-[550px] sm:h-[650px] md:h-[700px] lg:h-[580px] xl:h-[910px]">
    <div class="relative z-0">
      <img class=" z-0 absolute w-full h-[58rem] md:h-[65rem] lg:h-[70rem] xl:h-[90rem] lg:left-[0rem] xl:left-[0rem]
      top-[-10rem] lg:top-[-15rem] xl:top-[-10rem]" src= {{ asset('images/rise-landing/Sect5-Bg.png') }} alt="">
    </div>
    <div class="z-30 flex flex-col content-center justify-center">
      <div class="flex justify-center content-center drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
        <div>
          <img class=" self-center w-[50px] sm:w-[75px] md:w-[130px] lg:w-[172px] h-[10px] sm:h-[20px] md:h-[30px]
          lg:h-[40px] mt-4" src= {{ asset('images/rise-landing/Sect5-Title-Left-Img.png') }} alt="">
        </div>
        <div class="flex flex-col content-center justify-center mx-2 sm:mx-4 lg:mx-5">
          <h2
            style="line-height: 80%"
            class="z-30 font-montserrat text-[30px] xs:text-[32px] sm:text-[42px] md:text-[50px] lg:text-[60px] xl:text-[72px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] text-center"
          >
            Prize Pool
          </h2>
        </div>
        <div>
          <img class=" self-center w-[50px] sm:w-[75px] md:w-[130px] lg:w-[172px] h-[10px] sm:h-[20px] md:h-[25px]
          lg:h-[40px] mt-4" src= {{ asset('images/rise-landing/Sect5-Title-Right-Img.png') }} alt="">
        </div>
      </div>
      <div class="relative self-center xs:top-2 lg:top-4">
        <h4
          class="inline-block self-center text-white font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] md:text-[25px] lg:text-[50px] xl:text-[64px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
        >
          Join and earn
        </h4>
        <span
          class="lg:ml-0.5 xl:ml-2 inline-block self-center font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] md:text-[25px] lg:text-[50px] xl:text-[64px] from-[#FF9355] to-[#FFD693] bg-gradient-to-b bg-clip-text text-transparent drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
          >fantastic</span
        >
        <h4
          class="inline-block self-center text-white font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] md:text-[25px] lg:text-[50px] xl:text-[64px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
        >
          prizes
        </h4>
      </div>
      <div
        class="z-30 flex flex-col content-center justify-center gap-10 lg:flex-row lg:mt-20 xl:mt-32 lg:gap-28 xl:gap-32"
      >
        <div
          class="w-[180px] sm:w-[220px] md:w-[280px] lg:w-[320px] xl:w-[480px] h-[180px] sm:h-[220px] md:h-[280px] lg:h-[320px] xl:h-[476px] self-center mt-10 md:mt-14 lg:mt-0"
        >
          <img src="{{ asset('images/rise-landing/Sect5-Trophy-Img.png') }}" alt="" />
        </div>
        <div class="relative flex flex-col gap-4 lg:right-10 lg:top-2 xl:top-24 sm:gap-8 lg:gap-10 xl:gap-16">
          <div
            class="rounded-[30px] p-6 lg:p-6 xl:p-8 w-[270px] sm:w-[300px] lg:w-[21rem] xl:w-[26rem] self-center"
            style="background: rgba(18, 19, 22, 0.8); box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.5)"
          >
            <h6 class="text-white text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] font-montserrat">
              Total prizes
            </h6>
            <h6
              class="text-white text-[20px] sm:text-[22px] lg:text-[24px] xl:text-[32px] font-montserrat font-bold leading-9"
              style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
            >
              ±Rp10.000.000
            </h6>
            <div class="relative w-full lg:mb-2 xl:mb-6">
              <img
                class="absolute right-[-1rem] lg:right-[-1rem] xl:right-[-2rem] bottom-[-1.5rem] lg:bottom-[-2rem] xl:bottom-[-3rem] w-[70px] lg:w-[110px] lg:h-[90px] xl:h-[110px]"
                src="{{ asset('images/rise-landing/Sect5-Moneybag.png') }}"
                alt=""
              />
            </div>
          </div>
          <div
            class="rounded-[30px] p-6 lg:p-6 w-[270px] sm:w-[300px] lg:w-[21rem] xl:w-[26rem] xl:p-8 self-center"
            style="background: rgba(18, 19, 22, 0.8); box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.5)"
          >
            <h6 class="text-white lg:text-[18px] xl:text-[24px] font-montserrat">and get</h6>
            <h6
              class="text-white lg:text-[28px] xl:text-[36px] font-montserrat font-bold lg:leading-8 xl:leading-9 lg:max-w-[17rem]"
            >
              FREE CERTIFICATE
            </h6>
            <div class="relative w-full">
              <img
                class="absolute right-[-1.5rem] lg:right-[-1rem] xl:right-[-2rem] bottom-[-1.5rem] lg:bottom-[-2rem] xl:bottom-[-2rem] w-[80px] lg:w-[100px] xl:w-[120px] h-[80px] lg:h-[100px] xl:h-[120px]"
                src="{{ asset('images/rise-landing/Sect5-Tickets.png') }}"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Section 6 DONE--}}
  <section class="mt-5 xl:mt-10 w-screen h-[280px] sm:h-[380px] md:h-[450px] lg:h-[600px] xl:h-[800px]">
    <div class="relative z-0">
      <img class=" absolute hidden lg:block z-0 w-[20rem] xs:w-[40rem] md:w-[60rem] lg:w-[70rem] xl:w-[80rem] h-[15rem]
      md:h-[20rem] lg:h-[60rem] xl:h-[80rem] lg:left-[0rem] xl:left-[0rem] lg:top-[-10rem] xl:top-[-10rem]" src= {{
      asset('images/rise-landing/Sect6-Bg.png') }} alt=""> <img class=" absolute hidden lg:block right-0 top-16
      lg:w-[152px] xl:w-[231px] lg:h-[391px] xl:h-[593px]" src= {{ asset('images/rise-landing/Sect6-Decor-Right.png') }}
      alt=""> <img class=" absolute hidden lg:block left-0 top-16 lg:w-[105px] xl:w-[159px] lg:h-[271px] xl:h-[410px]"
      src= {{ asset('images/icon/IconLP_Sect6_Decor2.png') }} alt="">
    </div>
    <div class="z-30 flex flex-col content-center justify-center md:mt-12 lg:mt-20 xl:mt-32">
      <h2
        class="z-30 font-montserrat text-[30px] xs:text-[34px] sm:text-[40px] md:text-[44px] lg:text-[52px] xl:text-[72px] font-extrabold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center leading-8 sm:leading-normal"
      >
        Timeline
      </h2>
      <div class="self-center inline-block">
        <div class="relative z-0">
          <img
            class="absolute lg:hidden w-[80px] sm:w-[110px] h-[55px] sm:h-[70px] left-[-5rem] sm:left-[-6rem] bottom-[-2rem] sm:bottom-[-3rem]"
            src="{{ asset('images/rise-landing/Sect6-Title-Img-Left.png') }}"
            alt=""
          />
          <img
            class="absolute lg:hidden w-[80px] sm:w-[110px] h-[55px] sm:h-[70px] right-[-5rem] sm:right-[-6rem] bottom-[-2rem] sm:bottom-[-3rem]"
            src="{{ asset('images/rise-landing/Sect6-Title-Img-Right.png') }}"
            alt=""
          />
        </div>
        <h4
          class="inline-block z-30 font-montserrat text-[12px] xs:text-[20px] sm:text-[20px] md:text-[26px] lg:text-[44px] xl:text-[64px] font-bold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center"
        >
          Be Ready, Save The
        </h4>
        <h4
          class="inline-block sm:ml-1 lg:ml-2 z-30 font-montserrat text-[12px] xs:text-[20px] sm:text-[20px] md:text-[26px] lg:text-[44px] xl:text-[64px] font-bold from-[#FF9355] to-[#FFD693] bg-gradient-to-b text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center"
        >
          Dates
        </h4>
      </div>
      <div
        class="z-30 grid self-center grid-cols-5 gap-3 mt-8 sm:mt-14 md:mt-12 lg:mt-16 sm:gap-6 md:gap-7 lg:gap-10 xl:gap-16"
      >
        <div class="flex flex-col content-center justify-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            01Ag - 7Sep
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Open Regis
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            RISE!
          </p>
          <div class="relative">
            <img class=" absolute min-w-[60px] sm:min-w-[80px] md:min-w-[90px] lg:min-w-[110px] xl:min-w-[175px] h-[2px]
            md:h-[4px] lg:h-[6px] bottom-[3.15rem] sm:bottom-[3.6rem] md:bottom-[3.9rem] lg:bottom-[4.25rem]
            xl:bottom-24 left-[2.25rem] sm:left-[2.7rem] md:left-[3.35rem] lg:left-[3.75rem] xl:left-[5.5rem]" src= {{
            asset('images/rise-landing/Sect6-Long-Rectangle.png') }} alt="">
          </div>
        </div>
        <div class="flex flex-col content-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            1Ag - 10Sep
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Penyisihan
          </p>
          <div class="relative">
            <img class=" absolute min-w-[60px] sm:min-w-[80px] md:min-w-[90px] lg:min-w-[110px] xl:min-w-[175px] h-[2px]
            md:h-[4px] lg:h-[6px] bottom-[2.15rem] sm:bottom-[2.45rem] md:bottom-[2.6rem] lg:bottom-[2.75rem]
            xl:bottom-[3.75rem] left-[2.2rem] sm:left-[2.75rem] md:left-[3.3rem] lg:left-[3.75rem] xl:left-[5.5rem]"
            src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex flex-col content-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            18 - 30 Sep
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Semifinal
          </p>
          <div class="relative">
            <img class=" absolute min-w-[60px] sm:min-w-[80px] md:min-w-[90px] lg:min-w-[110px] xl:min-w-[175px] h-[2px]
            md:h-[4px] lg:h-[6px] bottom-[2.15rem] sm:bottom-[2.45rem] md:bottom-[2.6rem] lg:bottom-[2.75rem]
            xl:bottom-[3.75rem] left-[2.2rem] sm:left-[2.75rem] md:left-[3.3rem] lg:left-[3.75rem] xl:left-[5.5rem]"
            src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex flex-col content-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            15 Oct
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            TM & RTA
          </p>
          <div class="relative">
            <img class=" absolute min-w-[60px] sm:min-w-[80px] md:min-w-[90px] lg:min-w-[110px] xl:min-w-[175px] h-[2px]
            md:h-[4px] lg:h-[6px] bottom-[2.15rem] sm:bottom-[2.45rem] md:bottom-[2.6rem] lg:bottom-[2.75rem]
            xl:bottom-[3.75rem] left-[2.2rem] sm:left-[2.75rem] md:left-[3.3rem] lg:left-[3.75rem] xl:left-[5.5rem]"
            src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex flex-col content-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            16 - 22 Oct
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Mentoring
          </p>
        </div>
      </div>
      <div class="z-30 grid self-center grid-cols-2 gap-3 mt-8 lg:mt-10 sm:gap-6 md:gap-7 lg:gap-10 xl:gap-16">
        <div class="flex flex-col content-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            29 Oct
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Final
          </p>
          <div class="relative">
            <img class=" absolute min-w-[50px] sm:min-w-[67.5px] md:min-w-[75px] lg:min-w-[95px] xl:min-w-[152.5px]
            h-[2px] md:h-[4px] lg:h-[6px] bottom-[2.1rem] sm:bottom-[2.45rem] md:bottom-[2.65rem] lg:bottom-[2.75rem]
            xl:bottom-[3.75rem] left-[1.9rem] sm:left-[2.4rem] md:left-[2.9rem] lg:left-[3.25rem] xl:left-[4.75rem]"
            src= {{ asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex flex-col content-center">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            04 Nov
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/rise-landing/Sect6-Circle-Orange.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Awarding
          </p>
        </div>
      </div>
    </div>
  </section>
  {{-- Section 7 DONE--}}
  <section class="mt-4 lg:mt-12 w-screen min-h-[300px] xs:min-h-[320px] lg:min-h-[570px]">
    <div class="relative">
      <img class=" z-0 absolute hidden lg:block xl:w-full lg:h-[73rem] xl:h-[83rem] lg:top-[-13rem] xl:top-[-10rem]"
      src= {{ asset('images/rise-landing/Sect7-Bg.png') }} alt="">
      <img
        class="z-0 absolute hidden lg:block lg:w-[160px] xl:w-[220px] lg:h-[360px] xl:h-[480px] left-12 lg:top-[-3rem] xl:top-[-5rem]"
        src="{{ asset('images/rise-landing/Sect7-Decor-Left.png') }}"
        alt=""
      />
      <img
        class="z-0 absolute hidden lg:block lg:w-[160px] xl:w-[220px] lg:h-[360px] xl:h-[480px] right-12 lg:top-[-3rem] xl:top-[-5rem]"
        src="{{ asset('images/rise-landing/Sect7-Decor-Right.png') }}"
        alt=""
      />
    </div>
    <div class="flex justify-center flex-col lg:mt-[7rem] xl:mt-[10rem]">
      <h3
        class="z-30 leading-[60px] lg:leading-[84px] font-montserrat text-[17px] xs:text-[20px] sm:text-[28px] md:text-[32px] lg:text-[48px] xl:text-[64px] from-[#FF9355] to-[#FFD693] bg-clip-text font-extrabold text-transparent bg-gradient-to-b text-center"
      >
        Frequently Asked Questions
      </h3>
      <div class="self-center lg:mt-12 xl:mt-24 lg:mb-10 xl:mb-40">
        <div
          x-data="{open:false}"
          class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Apa beda RISE! dengan BIONIX College Level 2022?</span
            >
            <div class="relative z-30 w-1 h-1 mr-4 lg:mr-6 lg:h-2 lg:w-2">
              <img class="absolute " src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:min-w-[50rem] xl:min-w-[68rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Apa beda RISE! dengan BIONIX College Level 2022?
            </h4>
            <div class="relative z-30 w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
              Tahun 2023 ini nama Bionix College Level diganti dengan Rivalry of Information Sytems Expo! yang memiliki
              arti kompetisi (Rivalry) dan diharapkan agar tetap bangkit dan bersinar seperti namanya (RISE!)
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Apa konsep kompetisi RISE!?</span
            >
            <div class="relative z-30 w-1 h-1 mr-4 lg:mr-6 lg:h-2 lg:w-2">
              <img class="absolute " src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:min-w-[50rem] xl:min-w-[68rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Apa konsep kompetisi RISE!?
            </h4>
            <div class="relative z-30 w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
              Konsep kompetisi RISE! tahun 2023 adalah Business Case Competition dimana peserta dapat menganalisi study
              case dan data yang telah diberikan.
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Apa yang spesial di RISE!?</span
            >
            <div class="relative z-30 w-1 h-1 mr-4 lg:mr-6 lg:h-2 lg:w-2">
              <img class="absolute " src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:min-w-[50rem] xl:min-w-[68rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Apa yang spesial di RISE!?
            </h4>
            <div class="relative z-30 w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
              Bagi kalian penggemar tantangan, RISE! menyediakan tempat yang sesuai dengan adanya babak REAL TIME
              ANALYSIS
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:w-[50rem] xl:w-[68rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Benefit ikut RISE! apa aja?</span
            >
            <div class="relative z-30 w-1 h-1 mr-4 lg:mr-6 lg:h-2 lg:w-2">
              <img class="absolute " src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[280px] xs:w-[350px] sm:w-[470px] md:w-[540px] lg:min-w-[50rem] xl:min-w-[68rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Benefit ikut RISE! apa aja?
            </h4>
            <div class="relative z-30 w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
              Banyak benefit yang dapat didapat dari mengikuti RISE! beberapa diantaranya yaitu pendaftaran gratis,
              sertifikat peserta dan pemenang, mentoring bagi finalis (10 tim) dengan coach dari expert perusahaan
              langsung, koneksi ke perusahaan lewat serangkaian acara RISE dan jangan lupa ada tiket paradigm bagi juara
              RISE!
            </p>
          </button>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  // dsux Countdown Start
  // Set the countdown date and time
  const currentDate = new Date().getTime();
  const coutdownDate_open = new Date('August 01, 2023 00:00:00').getTime();
  if (currentDate < coutdownDate_open) {
    document.getElementById('regist_status').innerHTML = `Dibuka`;
    const countdownDate_dsux = new Date('August 01, 2023 00:00:00').getTime();
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

      // Select all elements with the ID "days_dsux" and update their content
      document.querySelectorAll('#days_dsux').forEach((element) => {
        element.innerHTML = `${days_dsux}`;
      });

      // Select all elements with the ID "hours_dsux" and update their content
      document.querySelectorAll('#hours_dsux').forEach((element) => {
        element.innerHTML = `${hours_dsux}`;
      });

      // Select all elements with the ID "minutes_dsux" and update their content
      document.querySelectorAll('#minutes_dsux').forEach((element) => {
        element.innerHTML = `${minutes_dsux}`;
      });

      // Select all elements with the ID "seconds_dsux" and update their content
      document.querySelectorAll('#seconds_dsux').forEach((element) => {
        element.innerHTML = `${seconds_dsux}`;
      });

      // If the countdown is finished, display a message
      if (distance < 0) {
        clearInterval(countdownTimer_dsux);

        // Select all elements with the ID "days_dsux" and update their content to '0'
        document.querySelectorAll('#days_dsux').forEach((element) => {
          element.innerHTML = '0';
        });

        // Select all elements with the ID "hours_dsux" and update their content to '0'
        document.querySelectorAll('#hours_dsux').forEach((element) => {
          element.innerHTML = '0';
        });

        // Select all elements with the ID "minutes_dsux" and update their content to '0'
        document.querySelectorAll('#minutes_dsux').forEach((element) => {
          element.innerHTML = '0';
        });

        // Select all elements with the ID "seconds_dsux" and update their content to '0'
        document.querySelectorAll('#seconds_dsux').forEach((element) => {
          element.innerHTML = '0';
        });
      }
    }, 1000);
  } else {
    document.getElementById('regist_status').innerHTML = `Ditutup`;
    const countdownDate_dsux = new Date('September 07, 2023 00:00:00').getTime();
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

      // Select all elements with the ID "days_dsux" and update their content
      document.querySelectorAll('#days_dsux').forEach((element) => {
        element.innerHTML = `${days_dsux}`;
      });

      // Select all elements with the ID "hours_dsux" and update their content
      document.querySelectorAll('#hours_dsux').forEach((element) => {
        element.innerHTML = `${hours_dsux}`;
      });

      // Select all elements with the ID "minutes_dsux" and update their content
      document.querySelectorAll('#minutes_dsux').forEach((element) => {
        element.innerHTML = `${minutes_dsux}`;
      });

      // Select all elements with the ID "seconds_dsux" and update their content
      document.querySelectorAll('#seconds_dsux').forEach((element) => {
        element.innerHTML = `${seconds_dsux}`;
      });

      // If the countdown is finished, display a message
      if (distance < 0) {
        clearInterval(countdownTimer_dsux);

        // Select all elements with the ID "days_dsux" and update their content to '0'
        document.querySelectorAll('#days_dsux').forEach((element) => {
          element.innerHTML = '0';
        });

        // Select all elements with the ID "hours_dsux" and update their content to '0'
        document.querySelectorAll('#hours_dsux').forEach((element) => {
          element.innerHTML = '0';
        });

        // Select all elements with the ID "minutes_dsux" and update their content to '0'
        document.querySelectorAll('#minutes_dsux').forEach((element) => {
          element.innerHTML = '0';
        });

        // Select all elements with the ID "seconds_dsux" and update their content to '0'
        document.querySelectorAll('#seconds_dsux').forEach((element) => {
          element.innerHTML = '0';
        });
      }
    }, 1000);
  }
  // dsux Countdown End
</script>

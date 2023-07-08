<!-- Alpine JS -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

<div class="bg-[#121316] min-h-[screen] flex justify-center items-center flex-col relative overflow-hidden">
  {{-- temp fix? --}}
  <div class="h-20 min-w-screen lg:h-20 xl:h-32"></div>
  {{-- section 1 DONE--}}
  <section class="min-w-full h-[13rem] xs:h-[20rem] sm:h-[27rem] md:h-[30rem] lg:h-[703px] xl:h-[863px]">
    <div class="relative z-0">
      <img class=" absolute hidden lg:hidden xl:block xl:w-full xl:h-[55rem] xl:top-[-10rem] xl:left-0" src={{
      asset('images/bionix/BionixLP_Sect1_11.png') }} alt=""> <img class=" absolute block right-0 h-[15rem] top-[-5rem]
      lg:block lg:w-[35rem] lg:h-[47rem] xl:hidden lg:right-[0rem] lg:top-[-10rem]" src={{
      asset('images/bionix/BionixLP_Sect1_12.png') }} alt=""> <img class=" z-10 absolute lg:h-[34rem] xl:w-[35rem]
      h-[13rem] xs:h-[16rem] sm:h-[22rem] md:h-[24rem] xl:h-[40rem] top-[-1rem] xs:top-[1rem] md:top-[1.5rem]
      lg:top-[4rem] xl:top-[0rem] left-[1rem] xs:left-[1rem] sm:left-[0.5rem] md:left-[1rem] lg:left-[2rem]
      xl:left-[6rem]" src={{ asset('images/bionix/BionixLP_Sect1_2.png') }} alt=""> <img class=" z-10 absolute w-[91%]
      xl:h-[40rem] top-[1rem] xs:top-[3rem] sm:top-[2rem] md:top-[5rem] lg:top-[10rem] xl:top-[10rem]" src={{
      asset('images/bionix/BionixLP_Sect1_3.png') }} alt=""> <img class=" absolute h-[4rem] xs:h-[6rem] sm:h-[9rem]
      md:h-[10rem] lg:h-[13rem] xl:h-[16rem] top-[9.5rem] xs:top-[14rem] sm:top-[18rem] md:top-[20rem] lg:top-[31rem]
      xl:top-[34rem]" src={{ asset('images/bionix/BionixLP_Sect1_4.png') }} alt="">
    </div>
    <div class="relative" data-aos-duration="1500" data-aos="fade-down">
      <div
        class="absolute top-[1.5rem] xs:top-[2rem] sm:top-[3rem] md:top-[4rem] lg:top-[9rem] xl:top-[7.5rem] right-[5.5rem] xs:right-[5.5rem] sm:right-[15rem] md:right-[13rem] lg:right-[16rem] xl:right-[31rem]"
      >
        <div class="z-30">
          <h3
            class="z-30 inline-block font-montserrat text-[12px] xs:text-[15px] sm:text-[17px] md:text-[20px] lg:text-[20px] xl:text-[30px] font-bold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
          >
            The Main Event
          </h3>
          <div class="z-30 inline-block">
            <img class=" z-30 relative w-[22px] lg:w-[38px] xl:w-[57px] h-[30px] lg:h-[51px] xl:h-[77px] lg:ml-3 top-2
            lg:top-4 xl:top-6" src= {{ asset('images/icon/IconLP_Sect1_Stars.png') }} alt="">
          </div>
        </div>
        <div class="relative">
          <h1
            style="line-height: 80%"
            class="absolute left-0 xs:top-1 lg:top-5 z-30 font-montserrat text-[40px] xs:text-[60px] sm:text-[70px] md:text-[80px] lg:text-[80px] xl:text-[120px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)]"
          >
            BIONIX
          </h1>
        </div>
        <p
          class="mt-10 xs:mt-14 sm:mt-16 md:mt-20 lg:mt-24 xl:mt-32 z-30 font-montserrat lg:bottom-[10rem] xl:bottom-0 text-[9px] xs:text-[12px] sm:text-[14px] md:text-[16px] lg:text-[16px] xl:text-[24px] font-bold from-[#FF9355] to-[#FFD693] bg-gradient-to-r text-transparent bg-clip-text"
        >
          #ISEProvectaFutura
        </p>
        <a
          style="line-height: 80%"
          href="#more"
          class="mt-2 sm:mt-4 lg:mt-4 xl:mt-6 z-30 w-[60px] xs:w-[90px] sm:w-[130px] md:w-[145px] lg:w-[185px] xl:w-[250px] h-[20px] xs:h-[26px] sm:h-[35px] md:h-[40px] lg:h-[43px] xl:h-[58px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent rounded-[24px] flex justify-center items-center hover:scale-105 transition-all ease-in-out duration-200"
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
  <section class="min-w-full min-h-[20rem] xs:min-h-[21rem] lg:min-h-[29rem] xl:min-h-[41rem]" id="more">
    <div class="relative z-0">
      <img class=" absolute h-[30rem] lg:w-[70rem] lg:h-[60rem] sm:w-[40rem] xl:w-[85rem] xl:h-[90rem] lg:left-[0rem]
      xl:left-[0rem] top-0" src= {{ asset('images/icon/IconLP_Sect2_Background.png') }} alt=""> <img class=" absolute
      min-w-full lg:min-w-full xl:min-w-full h-[4.5rem] xs:h-[6.5rem] sm:h-[8.5rem] md:h-[10rem] lg:h-[14rem]
      xl:h-[18rem] top-[2rem] lg:top-[4rem] xl:top-[4rem]" src= {{ asset('images/icon/IconLP_Sect2_Decor.png') }}
      alt="">
    </div>
    <div class="flex justify-center content-center flex-col">
      <h2
        style="line-height: 80%"
        class="left-0 top-5 z-30 mt-32 sm:mt-40 lg:mt-44 xl:mt-56 font-montserrat text-[26px] xs:text-[30px] sm:text-[34px] md:text-[38px] lg:text-[48px] xl:text-[72px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center"
      >
        What is BIONIX ?
      </h2>
      <p
        class="mt-4 md:mt-6 lg:mt-20 xl:mt-24 z-30 font-montserrat lg:bottom-[10rem] xl:bottom-0 text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] font-medium text-white text-justify px-[2rem] xs:px-[3rem] sm:px-[5rem] md:px-[7rem] lg:px-[13.8rem] xl:px-[16rem]"
      >
        BIONIX (Business and IT Olympiad in Information Systems Expo) merupakan olimpiade di bidang teknologi informasi
        dan bisnis tingkat nasional untuk siswa SMA/SMK sederajat di seluruh Indonesia berdasarkan bidang keilmuan
        Sistem Informasi yang akan meningkatkan kompetensi serta kreativitas dalam memanfaatkan perkembangan teknologi.
      </p>
    </div>
  </section>
  {{-- section 3 NOT DONE--}}
  <section class="w-screen mt-6 h-[32rem] xs:h-[33rem] md:h-[39rem] lg:h-[55rem] xl:h-[75rem] lg:mt-0">
    <div class="relative z-0">
      <img class=" absolute xs:w-[30rem] sm:w-[50rem] md:w-[60rem] lg:w-[65rem] h-[40rem] md:h-[50rem] lg:h-[70rem]
      xl:w-[95rem] xl:h-[95rem] lg:left-[0rem] xl:left-[0rem] top-0" src= {{
      asset('images/icon/IconLP_Sect3_Background.png') }} alt=""> <img class=" absolute hidden lg:block lg:left-[2rem]
      xl:left-[2.75rem] lg:top-[37rem] xl:top-[47rem] lg:h-[387px] xl:h-[586px]" src= {{
      asset('images/icon/IconLP_Sect3_Decor2.png') }} alt="">
    </div>
    <div class="relative mt-10 xs:mt-2 lg:mt-4 xl:mt-0 h-6 lg:h-24">
      <img class=" absolute left-[2rem] xs:left-[3rem] sm:left-[4rem] lg:left-[9rem] xl:left-[9rem] lg:top-3 xl:top-2
      w-[16px] xs:w-[18px] sm:w-[24px] md:w-[30px] lg:w-[41px] xl:w-[61px] h-[20px] xs:h-[25px] sm:h-[32px] md:h-[40px]
      lg:h-[50px] xl:h-[75px]" src= {{ asset('images/bionix/BionixLP_Sect3_TitleDecor1.png') }} alt="">
      <h2
        style="line-height: 80%"
        class="absolute left-[3.5rem] xs:left-[4.5rem] sm:left-[6rem] md:left-[6.5rem] lg:left-[12rem] xl:left-[14rem] top-[0.2rem] lg:top-5 z-30 font-montserrat text-[20px] xs:text-[26px] sm:text-[32px] md:text-[40px] lg:text-[48px] xl:text-[64px] font-bold text-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center"
      >
        IS Class
      </h2>
      <img class=" absolute left-[9rem] xs:left-[12rem] sm:left-[15rem] md:left-[18rem] lg:left-[25rem] xl:left-[32rem]
      top-[0.5rem] xs:top-[0.65rem] md:top-[1rem] lg:top-[2rem] xl:top-[2rem] w-[32px] sm:w-[42px] md:w-[65px]
      lg:w-[83px] xl:w-[125px] h-[8px] sm:h-[12px] md:h-[16px] lg:h-[20px] xl:h-[30px]" src= {{
      asset('images/bionix/BionixLP_Sect3_TitleDecor2.png') }} alt="">
    </div>
    <div class="hidden lg:block mt-10">
      <div
        class="swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[800px] xl:w-[1100px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1100px]"
      >
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#141414] mx-15 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]"
            >
              <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src=
              {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
              <p
                class="font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-4 xl:px-8 mt-[-0.5rem] xl:mt-[-1rem] lg:mt-[-1rem]"
              >
                Konsep terbaru dari BIONIX Competition yang ditujukan untuk memberikan pengalaman seputar keilmuan,
                kehidupan perkuliahan, dan keprofesian dari Departemen Sistem Informasi ITS dalam bentuk simulasi
                perkuliahan dengan beberapa materi sesuai dengan kurikulum dan disampaikan oleh dosen Sistem Informasi
                ITS selama masa belajar mengajar berlangsung. Konsep terbaru dari BIONIX Competition
              </p>
              <a
                href="/login"
                class="flex justify-center items-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent rounded-[24px] self-center hover:brightness-75"
              >
                <span class="font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                  >Registrasi Sekarang</span
                >
              </a>
              <h5
                class="mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text self-center"
              >
                Pendaftaran ditutup dalam waktu:
              </h5>
              <div
                class="mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8"
              >
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="days_dsux"
                    >00</span>
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Hari
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="hours_dsux"
                    >00</span>
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Jam
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="minutes_dsux"
                    >00</span>
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Menit
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="seconds_dsux"
                    >00</span>
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
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
              class="flex justify-center content-center flex-col bg-gradient-orange-br mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mb-10 xl:mb-16 lg:mt-12 xl:mt-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-[#FFA969] font-montserrat">Course Material</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
              Rasakan atmosfer perkuliahan langsung dan dapatkan materi perkuliahan dasar Departemen Sistem Informasi ITS meliputi pengenalan konsep-konsep fundamental dalam bidang Sistem Informasi.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[180px] xl:h-[230px]"
                  src="{{ asset('images/bionix/course.png') }}"
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
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara BIONIX 2023! Daftarlah sekarang dan ikuti
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
          <div class="hidden lg:block swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#191A1E] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mb-10 xl:mb-16 lg:mt-12 xl:mt-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-[#121319] lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-white font-montserrat">Discount</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
              Ikuti dan dapatkan kesempatan eksklusif untuk mendapatkan potongan harga istimewa untuk pendaftaran BIONIX Competition 2023 dengan syarat dan ketentuan yang berlaku.
            </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/bionix/cashback.png') }}"
                  alt=""
                />
              </div>
            </div>
            <div
              class="flex justify-center content-center flex-col bg-[#F3F3F3] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-black font-montserrat">Consumption</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-black font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
                    Jangan khawatir,Daftarlah sekarang dan nikmati konsumsi gratis yang disediakan khusus untuk setiap peserta IS Class 2023 selama masa pelaksanaan event ini berlangsung.
                </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[150px] xl:w-[210px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/bionix/shopping.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-button-prev hidden lg:block rounded-full p-10"
          style="color: white; background-color: #173f52; left: 0"
        ></div>
        <div
          class="swiper-button-next rounded-full p-10"
          style="color: white; background-color: #173f52; right: 0"
        ></div>
      </div>
    </div>
    <div class="block lg:hidden mt-10">
      <div
        class="swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[800px] xl:w-[1100px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1085px]"
      >
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#141414] mx-15 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]"
            >
              <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src=
              {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
              <p
                class="font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-4 xl:px-8 mt-[-0.5rem] xl:mt-[-1rem] lg:mt-[-1rem]"
              >
                Konsep terbaru dari BIONIX Competition yang ditujukan untuk memberikan pengalaman seputar keilmuan,
                kehidupan perkuliahan, dan keprofesian dari Departemen Sistem Informasi ITS dalam bentuk simulasi
                perkuliahan dengan beberapa materi sesuai dengan kurikulum dan disampaikan oleh dosen Sistem Informasi
                ITS selama masa belajar mengajar berlangsung. Konsep terbaru dari BIONIX Competition
              </p>
              <a
              href="/login"
                class="flex justify-center items-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent rounded-[24px] self-center hover:brightness-75"
              >
                <span class="font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                  >Registrasi Sekarang</span
                >
              </a>
              <h5
                class="mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text self-center"
              >
                Pendaftaran ditutup dalam waktu:
              </h5>
              <div
                class="mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8"
              >
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="days_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Hari
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="hours_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Jam
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="minutes_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Menit
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="seconds_dsux"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
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
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] bg-gradient-orange-br mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-12 xs:pr-16 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-[#FFA969] font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  Course Material
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
              Rasakan atmosfer perkuliahan langsung dan dapatkan materi perkuliahan dasar Departemen Sistem Informasi ITS meliputi pengenalan konsep-konsep fundamental dalam bidang Sistem Informasi.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-5px] xs:right-[-10px] bottom-[-60px] xs:bottom-[-70px] sm:bottom-[-100px] w-1/2"
                  src="{{ asset('images/bionix/course.png') }}"
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
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara BIONIX 2023! Daftarlah sekarang dan ikuti
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
          <div class="swiper-slide">
            <div
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] bg-[#191A1E] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-[#121319] py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-12 xs:pr-16 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-white font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  Discount
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
              Ikuti dan dapatkan kesempatan eksklusif untuk mendapatkan potongan harga istimewa untuk pendaftaran BIONIX Competition 2023 dengan syarat dan ketentuan yang berlaku.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-5px] xs:right-[-10px] bottom-[-60px] xs:bottom-[-70px] sm:bottom-[-100px] w-1/2"
                  src="{{ asset('images/bionix/cashback.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] bg-[#F3F3F3] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-6 xs:pr-8 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-black font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  Consumption
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-black font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara BIONIX 2023! Daftarlah sekarang dan ikuti
                rangkaian kegiatan kami untuk memperoleh sertifikat digital yang telah diverifikasi secara nasional.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-5px] bottom-[-60px] sm:bottom-[-110px] w-1/2"
                  src="{{ asset('images/bionix/shopping.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-button-prev hidden lg:block rounded-full p-10"
          style="color: white; background-color: #173f52; left: 0"
        ></div>
        <div
          class="swiper-button-next rounded-full p-10"
          style="color: white; background-color: #173f52; right: 0"
        ></div>
      </div>
    </div>
  </section>
  {{-- section 4 NOT DONE--}}
  <section class="w-screen h-[500px] xs:h-[570px] sm:h-[600px] md:h-[670px] lg:h-[1090px] xl:h-[1600px]">
    <div class="relative z-0">
      <img class=" absolute xs:w-[30rem] sm:w-[50rem] md:w-[60rem] lg:w-[65rem] h-[40rem] md:h-[50rem] lg:h-[70rem]
      xl:w-[95rem] xl:h-[95rem] lg:left-[0rem] xl:left-[0rem] top-0" src= {{
      asset('images/icon/IconLP_Sect3_Background.png') }} alt=""> <img class=" absolute hidden lg:block lg:h-[290px]
      xl:h-[440px] lg:top-[51rem] xl:top-[70rem] lg:right-[3rem] xl:right-[3rem]" src= {{
      asset('images/icon/IconLP_Sect4_Decor.png') }} alt="">
    </div>
    <div class="relative mt-12 lg:mt-24 xl:mt-32 h-4 lg:h-24">
      <img class=" absolute right-[2rem] lg:right-[9rem] xl:right-[10rem] lg:top-3 xl:top-3 w-[16px] xs:w-[18px]
      sm:w-[24px] md:w-[30px] lg:w-[41px] xl:w-[61px] h-[20px] xs:h-[25px] sm:h-[32px] md:h-[40px] lg:h-[50px]
      xl:h-[75px]" src= {{ asset('images/icon/IconLP_Sect4_TitleDecor.png') }} alt="">
      <h2
        style="line-height: 80%"
        class="absolute right-[3.5rem] sm:right-[4rem] lg:right-[12rem] xl:right-[15rem] lg:top-5 z-30 font-montserrat text-[20px] xs:text-[26px] sm:text-[32px] md:text-[40px] lg:text-[48px] xl:text-[64px] font-bold text-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.1)] text-center"
      >
        Competition
      </h2>
      <img class=" absolute right-[12rem] xs:right-[15rem] sm:right-[18.5rem] md:right-[21rem] lg:right-[33rem]
      xl:right-[42rem] top-[0.3rem] sm:top-[0.5rem] lg:top-[2rem] xl:top-[2rem] w-[32px] sm:w-[42px] md:w-[65px]
      lg:w-[83px] xl:w-[125px] h-[8px] sm:h-[12px] md:h-[16px] lg:h-[20px] xl:h-[30px] rotate-180" src= {{
      asset('images/icon/IconLP_Sect3_TitleDecor2.png') }} alt="">
    </div>
    <div class="hidden lg:block mt-10 sm:mt-14 xl:mt-20">
      <div
        class="swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[800px] xl:w-[1100px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1085px]"
      >
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#141414] mx-15 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]"
            >
              <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src=
              {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
              <p
                class="font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-4 xl:px-8 mt-[-0.5rem] xl:mt-[-1rem] lg:mt-[-1rem]"
              >
                Rangkaian kompetisi berupa seleksi olimpiade tingkat nasional yang terbagi dalam beberapa region di
                Indonesia berdasarkan empat bidang keilmuan sistem informasi yaitu teknologi informasi, pemrograman,
                logika matematika, dan manajemen bisnis serta Semifinal Proposal dan Video Business Plan, Final
                Presentasi Bisnis, dan terakhir Awarding Night.
              </p>
              <a
                class="flex justify-center items-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent rounded-[24px] self-center hover:brightness-75"
                href="/login"
              >
                <span class="font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                  >Registrasi Sekarang</span
                >
              </a>
              <h5
                class="mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text self-center"
              >
                Pendaftaran ditutup dalam waktu:
              </h5>
              <div
                class="mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8"
              >
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="days_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Hari
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="hours_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Jam
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="minutes_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Menit
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="seconds_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
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
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-[#F3F3F3] font-montserrat">Free Pass</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
                Daftarlah sekarang dan dapatkan kesempatan mendapatkan Free Pass Departemen Sistem Informasi ITS. Raih kemenangan pada kompetisi BIONIX Competition 2023 dan capai mimpi Anda.
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
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara BIONIX 2023! Daftarlah sekarang dan ikuti
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
          <div class="hidden lg:block swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#F3F3F3] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mb-10 xl:mb-16 lg:mt-12 xl:mt-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-blackfont-montserrat">Try Out Pack</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-black font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
              Dapatkan kesempatan simulasi tryout babak penyisihan beserta pembahasannya hingga dua kali dengan syarat dan
              satu paket soal tryout babak penyisihan dengan syarat dan ketentuan yang berlaku.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[150px] xl:h-[242px]"
                  src="{{ asset('images/bionix/file.png') }}"
                  alt=""
                />
              </div>
            </div>
            <div
              class="flex justify-center content-center flex-col bg-gradient-orange-br mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white lg:py-1 xl:py-2 lg:pl-2 xl:pl-4 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5 class="font-bold lg:text-[24px] xl:text-[36px] text-[#FFA969] font-montserrat">Accommodation</h5>
              </div>
              <p
                class="font-semibold lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[16rem] xl:max-w-[31rem]"
              >
                Mendapatkan akomodasi penuh selama perlombaan pada babak semifinal dan final BIONIX Competition 2023 berlangsung di Departemen Sistem Informasi ITS, Surabaya, Jawa Timur.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/bionix/cashback.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-button-prev hidden lg:block rounded-full p-10"
          style="color: white; background-color: #173f52; left: 0"
        ></div>
        <div
          class="swiper-button-next rounded-full p-10"
          style="color: white; background-color: #173f52; right: 0"
        ></div>
      </div>
    </div>
    <div class="block lg:hidden mt-10 sm:mt-14 xl:mt-20">
      <div
        class="swiper w-[310px] xs:w-[390px] sm:w-[550px] md:w-[650px] lg:w-[800px] xl:w-[1100px] h-[400px] xs:h-[500px] sm:h-[600px] lg:h-[720px] xl:h-[1085px]"
      >
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="flex justify-center content-center flex-col bg-[#141414] mx-15 xs:mx-14 sm:mx-20 lg:mx-32 rounded-[20px]"
            >
              <img class=" lg:w-[642px] xl:w-[973px] lg:h-[323px] xl:h-[488px] mb-4 lg:mb-10 xl:mb-12 self-center" src=
              {{ asset('images/icon/IconLP_Sect4_CarImg.png') }} alt="">
              <p
                class="font-montserrat text-[10px] xs:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] text-white text-center px-2 md:px-4 lg:px-4 xl:px-8 mt-[-0.5rem] xl:mt-[-1rem] lg:mt-[-1rem]"
              >
                Rangkaian kompetisi berupa seleksi olimpiade tingkat nasional yang terbagi dalam beberapa region di
                Indonesia berdasarkan empat bidang keilmuan sistem informasi yaitu teknologi informasi, pemrograman,
                logika matematika, dan manajemen bisnis serta Semifinal Proposal dan Video Business Plan, Final
                hnPresentasi Bisnis, dan terakhir Awarding Night.
              </p>
              <a
                class="flex justify-center items-center mt-4 lg:mt-8 xl:mt-12 z-30 w-[150px] md:w-[175px] lg:w-[212px] xl:w-[321px] h-[35px] md:h-[38px] lg:h-[38px] xl:h-[58px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent rounded-[24px] self-center hover:brightness-75"
                href="/login"
              >
                <span class="font-montserrat text-[12px] lg:text-[13px] xl:text-[20px] font-semibold text-[#FFEEE4]"
                  >Registrasi Sekarang</span
                >
              </a>
              <h5
                class="mt-2 md:mt-4 lg:mt-6 xl:mt-10 inline-flex font-montserrat font-bold text-[10px] md:text-[14px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text self-center"
              >
                Pendaftaran ditutup dalam waktu:
              </h5>
              <div
                class="mt-2 lg:mt-2 xl:mt-4 mb-4 lg:mb-12 xl:mb-12 flex justify-center content-center gap-2 lg:gap-8"
              >
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="days_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Hari
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="hours_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Jam
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="minutes_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                    >
                      Menit
                    </p>
                  </div>
                </div>
                <div
                  class="p-[1px] md:p-[2px] lg:p-[2px] xl:p-[3px] rounded-[10px] w-[35px] md:w-[45px] lg:w-[66px] xl:w-[100px] h-[35px] md:h-[45px] lg:h-[66px] xl:h-[100px] bg-gradient-to-r from-[#006C56] to-[#AFD196]"
                >
                  <div
                    class="rounded-[10px] bg-[#121316]/90 p-[5px] md:px-[0px] lg:p-[0.25rem] xl:p-[0.4rem] flex justify-center content-center flex-col"
                  >
                    <span
                      class="self-center font-montserrat font-extrabold text-[14px] md:text-[20px] lg:text-[37px] xl:text-[56px] text-transparent from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
                      style="line-height: 100%"
                      id="seconds_gts"
                      >00</span
                    >
                    <p
                      class="self-center text-[#E3E3E3] font-montserrat font-semibold text-[8px] md:text-[10px] lg:text-[16px] xl:text-[24px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text"
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
                  Free Pass
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
              Daftarlah sekarang dan dapatkan kesempatan mendapatkan Free Pass Departemen Sistem Informasi ITS. Raih kemenangan pada kompetisi BIONIX Competition 2023 dan capai mimpi Anda.
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
                Jangan lewatkan kesempatan emas untuk menjadi bagian dari acara BIONIX 2023! Daftarlah sekarang dan ikuti
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
          <div class="swiper-slide">
            <div
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] bg-[#F3F3F3] mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-6 xs:pr-8 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-black font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  Try Out Pack
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-black font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
              Dapatkan kesempatan simulasi tryout babak penyisihan beserta pembahasannya hingga dua kali dengan syarat dan
              satu paket soal tryout babak penyisihan dengan syarat dan ketentuan yang berlaku.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-5px] bottom-[-60px] sm:bottom-[-110px] w-[100px] sm:w-[190px] lg:w-[200px] xl:w-[270px] h-[75px] sm:h-[140px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/bionix/file.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="flex content-center flex-col min-h-full xs:min-h-[483px] md:min-h-[580px] bg-gradient-orange-br mx-12 xs:mx-14 sm:mx-20 lg:mx-32 lg:mt-[14rem] xl:mt-[22rem] p-4 xs:p-6 lg:p-8 xl:p-10 rounded-[25px]"
              style="box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.25)"
            >
              <div
                class="bg-white py-1 lg:py-1 xl:py-2 pl-2 lg:pl-2 xl:pl-4 pr-6 xs:pr-8 lg:pr-20 xl:pr-24 w-fit mb-4"
                style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 20px 30px 30px 20px"
              >
                <h5
                  class="font-bold text-[14px] sm:text-[18px] md:text-[20px] lg:text-[24px] xl:text-[36px] text-[#FFA969] font-montserrat"
                  style="text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)"
                >
                  Accommodation
                </h5>
              </div>
              <p
                class="font-semibold min-h-[250px] xs:min-h-[310px] sm:min-h-[280px] md:min-h-[350px] text-[12px] xs:text-[14px] sm:text-[16px] lg:text-[16px] xl:text-[24px] text-white font-montserrat lg:max-w-[21rem] xl:max-w-[35rem]"
              >
              Mendapatkan akomodasi penuh selama perlombaan pada babak semifinal dan final BIONIX Competition 2023 berlangsung di Departemen Sistem Informasi ITS, Surabaya, Jawa Timur.
              </p>
              <div class="relative">
                <img
                  class="absolute right-[-15px] bottom-[-15px] lg:w-[200px] xl:w-[270px] lg:h-[150px] xl:h-[200px]"
                  src="{{ asset('images/bionix/cashback.png') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-button-prev hidden lg:block rounded-full p-10"
          style="color: white; background-color: #173f52; left: 0"
        ></div>
        <div
          class="swiper-button-next rounded-full p-10"
          style="color: white; background-color: #173f52; right: 0"
        ></div>
      </div>
    </div>
  </section>
  {{-- section 5 DONE--}}
  <section class="w-screen h-[875px] xs:h-[840px] sm:h-[850px] lg:h-[700px] xl:h-[870px]">
    <div class="relative z-0">
      <img class=" absolute sm:w-[50rem] md:w-[60rem] lg:w-[65rem] h-[50rem] lg:h-[78rem] xl:w-[95rem] xl:h-[110rem]
      lg:left-[0rem] xl:left-[0rem] lg:top-[-15rem] xl:top-[-20rem]" src= {{
      asset('images/icon/IconLP_Sect3_Background.png') }} alt="">
    </div>
    <div class="lg:mt-16 xl:mt-12 flex justify-center content-center flex-col">
      <div class="flex justify-center content-center">
        <div class="flex justify-center content-center drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mt-14">
          <div>
            <img class=" self-center w-[28px] xs:w-[30px] md:w-[40px] lg:w-[84px] xl:w-[104px] h-[38px] xs:h-[40px]
            md:h-[50px] lg:h-[112px] xl:h-[141px]" src= {{ asset('images/icon/IconLP_Sect5_TitleDecor1.png') }} alt="">
          </div>
          <div class="mx-2 sm:mx-4 lg:mx-5 flex justify-center content-center flex-col">
            <h2
              style="line-height: 80%"
              class="z-30 font-montserrat text-[28px] xs:text-[32px] sm:text-[38px] md:text-[42px] lg:text-[48px] xl:text-[72px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] text-center"
            >
              TESTIMONIALS
            </h2>
            <div class="self-center relative xs:top-2 lg:top-4">
              <h4
                class="inline-block self-center text-white font-montserrat font-semibold text-[9px] sm:text-[12px] lg:text-[16px] xl:text-[36px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
              >
                What They Say about
              </h4>
              <span
                class="lg:ml-0.5 xl:ml-2 inline-block self-center font-montserrat font-semibold text-[9px] xs:text-[10px] md:text-[12px] lg:text-[16px] xl:text-[36px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text text-transparent drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
                >BIONIX</span
              >
            </div>
          </div>
          <div>
            <img class=" self-center w-[28px] xs:w-[30px] md:w-[40px] lg:w-[84px] xl:w-[104px] h-[38px] xs:h-[40px]
            md:h-[50px] lg:h-[112px] xl:h-[141px]" src= {{ asset('images/icon/IconLP_Sect5_TitleDecor2.png') }} alt="">
          </div>
        </div>
      </div>
      <style>
        .swiper-pagination-bullet-active {
          background-color: #afd196 !important;
        }
      </style>
      <div
        class="swiper mt-12 w-[250px] xs:w-[350px] sm:w-[400px] md:w-[500px] lg:w-[870px] xl:w-[1252px] h-[690px] xs:h-[660px] sm:h-[680px] md:h-[670px] lg:h-[395px] xl:h-[557px] bg-[#121316cc] lg:bg-[#a4a4a426] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] rounded-[40px]"
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
                  asset('images/icon/IconLP_Sect5_ProfileDecor1.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt=""> <img class=" absolute w-[50px]
                  lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem]
                  sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem]
                  md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor3.png') }} alt="">
                </div>
                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px]
                xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src=
                {{ asset('images/bionix/testi-1.png') }} alt="">
              </div>
              <div style="text-" class="flex flex-col px-5 xs:px-7 lg:px-0 pt-10 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                <div class="inline-block">
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    Bisa dapat
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    Free Pass SNMPTN
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    ,
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    banyak relasi
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    , dan
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    wawasan baru!
                  </span>
                </div>
                <p
                  class="mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify"
                >
                  “Waktu ikut tahun 2020 itu  aku kaget soalnya format  perlombaannya berubah drastis dari yang biasanya ngerjain soal jadi business plan. Alhamdulillah setelah penyisihan, semifinal kemudian masuk final dan ditanya-tanyain pertanyaan-pertanyaan sulit oleh juri, aku sama Fano berhasil meraih Juara 1.”
                </p>
                <h5
                  class="mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold"
                >
                    Ahmadhian Daffa Yudistira
                </h5>
                <h5
                  class="z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold"
                >
                  1st Winner BIONIX 2020
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
                  asset('images/icon/IconLP_Sect5_ProfileDecor1.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt=""> <img class=" absolute w-[50px]
                  lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem]
                  sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem]
                  md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor3.png') }} alt="">
                </div>
                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px]
                xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src=
                {{ asset('images/bionix/testi-2.png') }} alt="">
              </div>
              <div style="text-" class="flex flex-col px-5 xs:px-7 lg:px-0 pt-10 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                <div class="inline-block">
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    Bisa dapat
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    Free Pass SNMPTN
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    ,
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    banyak relasi
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    , dan
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    wawasan baru!
                  </span>
                </div>
                <p
                  class="mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify"
                >
                  “Bionix jadi salah satu kompetisi yang berkesan selama aku di SMK. Acara worth to try yang bukan cuma lomba, tapi juga ngasih banyak pengetahuan baru tentang bisnis yang nggak didapat di sekolah dulu. Ditambah bisa lebih tahu tentang SI ITS dan bisa dapet freepass juga. Semangat buat peserta tahun ini, bionix bisa jadi awal yang bagus buat belajar bisnis dan IT!”
                </p>
                <h5
                  class="mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold"
                >
                Agnes Juliana
                </h5>
                <h5
                  class="z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold"
                >
                  1st Winner BIONIX 2021
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
                  asset('images/icon/IconLP_Sect5_ProfileDecor1.png') }} alt=""> <img class=" absolute w-[170px]
                  xs:w-[197.5px] md:w-[210px] lg:w-[231px] xl:w-[350px] h-[215px] xs:h-[255px] md:h-[275px] lg:h-[295px]
                  xl:h-[447px] mx-[2.5rem] xs:mx-[4.75rem] sm:mx-[6.25rem] md:mx-[9rem] lg:mx-0 my-[2.75rem] lg:my-0
                  lg:left-8 xl:left-12 lg:top-[2rem] xl:top-2 z-10 drop-shadow-[0_4px_4px_rgba(1,1,1,0.25)]" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor2.png') }} alt=""> <img class=" absolute w-[50px]
                  lg:w-[68px] xl:w-[103px] h-[50px] lg:h-[66px] xl:h-[100px] left-[11rem] xs:left-[14.5rem]
                  sm:left-[16rem] md:left-[20rem] lg:left-[13.5rem] xl:left-[20rem] top-[13.5rem] xs:top-[16rem]
                  md:top-[17rem] lg:top-[17rem] xl:top-[23rem] z-30" src= {{
                  asset('images/icon/IconLP_Sect5_ProfileDecor3.png') }} alt="">
                </div>
                <img class=" self-center w-[151px] xs:w-[180px] md:w-[190px] lg:w-[198px] xl:w-[300px] h-[190px]
                xs:h-[230px] md:h-[245px] lg:h-[251px] xl:h-[381px] mt-14 md:mt-[3.75rem] lg:mt-14 xl:mt-10 z-20" src=
                {{ asset('images/bionix/testi-3.png') }} alt="">
              </div>
              <div style="text-" class="flex flex-col px-5 xs:px-7 lg:px-0 pt-10 lg:pt-10 xl:pt-14 lg:pr-12 xl:pr-16">
                <div class="inline-block">
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    Bisa dapat
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    Free Pass SNMPTN
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    ,
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    banyak relasi
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold text-white leading-[50%] lg:leading-none"
                  >
                    , dan
                  </span>
                  <span
                    class="z-30 font-montserrat text-[16px] sm:text-[18px] lg:text-[27px] xl:text-[36px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text leading-[50%] lg:leading-none"
                  >
                    wawasan baru!
                  </span>
                </div>
                <p
                  class="mt-4 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[14px] xl:text-[20px] text-white text-justify"
                >
                  “Bionix ini adalah lomba pertama yang aku ikuti sewaktu SMK. Bisa dibilang tiap tahun aku ikut Bionix, kalau ditotal berarti 3 kali. Waktu pertama kali ikut Bionix mikirnya mau buat nambah pengalaman aja, tapi ternyata tiap tahun jadi tertantang buat bisa lolos sampai di final. Dan akhirnya di tahun terakhir SMK Alhamdulillah harapan itu jadi nyata dan bisa dapat freepass SI ITS. ”
                </p>
                <h5
                  class="mt-6 lg:mt-6 xl:mt-10 z-30 font-montserrat text-[14px] sm:text-[16px] lg:text-[24px] xl:text-[30px] text-white font-bold"
                >
                Belva Talihta Dwiyanti
                </h5>
                <h5
                  class="z-30 font-montserrat text-[12px] sm:text-[14px] lg:text-[18px] xl:text-[24px] text-white font-bold"
                >
                  1st Winner BIONIX 2021
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  {{-- Section 6 DONE--}}
  <section class="mt-5 xl:mt-[7rem] w-screen h-[550px] sm:h-[650px] md:h-[700px] lg:h-[580px] xl:h-[910px]">
    <div class="relative z-0">
      <img class=" z-0 absolute w-full h-[58rem] md:h-[65rem] lg:h-[70rem] xl:h-[90rem] lg:left-[0rem] xl:left-[0rem]
      top-[-10rem] lg:top-[-15rem] xl:top-[-10rem]" src= {{ asset('images/bionix/BionixLP_Sect6_Bg1.png') }} alt="">
    </div>
    <div class="z-30 flex justify-center content-center flex-col">
      <div class="flex justify-center content-center drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
        <div>
          <img class=" self-center w-[50px] sm:w-[75px] md:w-[130px] lg:w-[172px] h-[10px] sm:h-[20px] md:h-[30px]
          lg:h-[40px] mt-4" src= {{ asset('images/rise-landing/Sect5-Title-Left-Img.png') }} alt="">
        </div>
        <div class="mx-2 sm:mx-4 lg:mx-5 flex justify-center content-center flex-col">
          <h2
            style="line-height: 80%"
            class="z-30 font-montserrat text-[30px] xs:text-[32px] sm:text-[42px] md:text-[50px] lg:text-[60px] xl:text-[72px] font-extrabold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] text-center"
          >
            Prize Pool
          </h2>
        </div>
        <div>
          <img class=" self-center w-[50px] sm:w-[75px] md:w-[130px] lg:w-[172px] h-[10px] sm:h-[20px] md:h-[25px]
          lg:h-[40px] mt-4" src= {{ asset('images/rise-landing/Sect5-Title-Right-Img.png') }} alt="">
        </div>
      </div>
      <div class="self-center relative xs:top-2 lg:top-4">
        <h4
          class="inline-block self-center text-white font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] md:text-[25px] lg:text-[50px] xl:text-[64px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
        >
          Join and earn
        </h4>
        <span
          class="lg:ml-0.5 xl:ml-2 inline-block self-center font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] md:text-[25px] lg:text-[50px] xl:text-[64px] from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text text-transparent drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
          >fantastic</span
        >
        <h4
          class="inline-block self-center text-white font-montserrat font-bold text-[12px] xs:text-[16px] sm:text-[20px] md:text-[25px] lg:text-[50px] xl:text-[64px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
        >
          prizes
        </h4>
      </div>
      <div
        class="flex flex-col lg:flex-row justify-center content-center lg:mt-20 xl:mt-32 z-30 gap-10 lg:gap-28 xl:gap-32"
      >
        <div
          class="w-[180px] sm:w-[220px] md:w-[280px] lg:w-[320px] xl:w-[480px] h-[180px] sm:h-[220px] md:h-[280px] lg:h-[320px] xl:h-[476px] self-center mt-10 md:mt-14 lg:mt-0"
        >
          <img src="{{ asset('images/rise-landing/Sect5-Trophy-Img.png') }}" alt="" />
        </div>
        <div class="relative flex flex-col lg:right-10 lg:top-2 xl:top-24 gap-4 sm:gap-8 lg:gap-10 xl:gap-16">
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
              FREE PASS TICKETS
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
  {{-- Section 7 DONE--}}
  <section class="mt-5 xl:mt-10 w-screen h-[420px] sm:h-[520px] md:h-[600px] lg:h-[830px] xl:h-[1000px]">
    <div class="relative z-0">
      <img class=" hidden lg:block z-0 absolute w-[20rem] xs:w-[40rem] md:w-[60rem] lg:w-full h-[15rem] md:h-[20rem]
      lg:h-[37rem] xl:w-[80rem] xl:h-[50rem] lg:left-[0rem] xl:left-[0rem] " src= {{
      asset('images/icon/IconLP_Sect3_Background.png') }} alt=""> <img class=" hidden lg:block z-0 absolute w-[20rem]
      xs:w-[40rem] md:w-[60rem] lg:w-full h-[15rem] md:h-[20rem] lg:h-[33rem] xl:w-[80rem] xl:h-[41rem] lg:top-[27rem]
      xl:top-[37rem] lg:left-[0rem] xl:left-[0rem] " src= {{ asset('images/icon/IconLP_Sect3_Background.png') }} alt="">
    </div>
    <div class="z-30 flex justify-center content-center flex-col">
      <h2
        class="mt-[20px] md:mt-[50px] z-30 font-montserrat text-[30px] xs:text-[34px] sm:text-[38px] md:text-[44px] lg:text-[53px] xl:text-[80px] font-bold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center"
      >
        Timeline
      </h2>
      <div class="inline-block self-center">
        <div class="relative z-0">
          <img
            class="absolute w-[100px] xs:w-[120px] sm:w-[160px] lg:w-[375px] xl:w-[400px] left-[-3.5rem] xs:left-[-5rem] sm:left-[-6rem] lg:left-[-18rem] xl:left-[-17rem] bottom-[-1.5rem] xs:bottom-[-1.75rem] sm:bottom-[-2.5rem] lg:bottom-[-8rem] xl:bottom-[-7rem]"
            src="{{ asset('images/bionix/BionixLP_Sect7_title_decor_left.png') }}"
            alt=""
          />
          <img
            class="absolute w-[100px] xs:w-[120px] sm:w-[160px] lg:w-[375px] xl:w-[400px] right-[-3.5rem] xs:right-[-5rem] sm:right-[-6rem] lg:right-[-18rem] xl:right-[-17rem] bottom-[-1.5rem] xs:bottom-[-1.75rem] sm:bottom-[-2.5rem] lg:bottom-[-8rem] xl:bottom-[-7rem]"
            src="{{ asset('images/bionix/BionixLP_Sect7_title_decor_right.png') }}"
            alt=""
          />
        </div>
        <h4
          class="inline-block z-30 font-montserrat text-[18px] xs:text-[20px] sm:text-[24px] md:text-[26px] lg:text-[32px] xl:text-[48px] font-bold text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center"
        >
          Be Ready, Save The
        </h4>
        <h4
          class="inline-block sm:ml-1 lg:ml-2 z-30 font-montserrat text-[18px] xs:text-[20px] sm:text-[24px] md:text-[26px] lg:text-[32px] xl:text-[48px] font-bold from-[#006C56] to-[#AFD196] bg-gradient-to-r text-transparent bg-clip-text drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] text-center self-center"
        >
          Dates
        </h4>
      </div>
      <div
        class="hidden lg:block text-white text-center sm:text-[30px] lg:text-[40px] xl:text-[48px] font-bold xl:mt-[120px] lg:mt-[100px] mt-[30px] mb-[-15px]"
      >
        IS Class
      </div>
      <div
        class="block lg:hidden from-[#006C56] to-[#AFD196] bg-clip-text bg-gradient-to-br text-transparent text-center sm:text-[30px] lg:text-[40px] xl:text-[48px] font-bold xl:mt-[120px] lg:mt-[100px] mt-[30px] mb-[-15px]"
      >
        TIMELINE IS CLASS
      </div>
      <div class="mt-8 md:mt-12 lg:mt-12 grid grid-cols-2 gap-3 sm:gap-6 md:gap-7 lg:gap-10 self-center">
        <div class="flex justify-center content-center flex-col">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            23 Juli - 20 Ags
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Open Regis
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            IS Class
          </p>
          <div class="relative">
            <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px]
            bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem]
            sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{
            asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex justify-center content-center flex-col translate-x-3">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            28 Agustus
          </p>
          <img class="my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Pelaksanaan
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            IS Class
          </p>
        </div>
      </div>
      <div
        class="hidden lg:block text-white text-center sm:text-[30px] lg:text-[40px] xl:text-[48px] font-bold xl:mt-[90px] lg:mt-[70px] mt-[30px] mb-[-15px]"
      >
        Bionix Competition
      </div>
      <div
        class="block lg:hidden from-[#006C56] to-[#AFD196] bg-clip-text bg-gradient-to-br text-transparent text-center sm:text-[30px] lg:text-[40px] xl:text-[48px] font-bold xl:mt-[90px] lg:mt-[70px] mt-[30px] mb-[-15px]"
      >
        TIMELINE BIONIX COMPETITION
      </div>
      <div class="mt-8 md:mt-12 lg:mt-12 grid grid-cols-3 sm:grid-cols-5 gap-3 sm:gap-6 md:gap-7 lg:gap-10 self-center justify-center">
        <div class="flex justify-center content-center flex-col">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            23 Jul - 10 Sep
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Open Regis
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            BIONIX
          </p>
          <div class="relative">
            <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px]
            bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem]
            sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{
            asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex justify-center content-center flex-col">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            03 Sep - 10 Sep
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Tryout
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            1 & 2
          </p>
          <div class="relative">
            <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px]
            bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem]
            sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{
            asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex justify-center content-center flex-col">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            24 September
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Penyisihan
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            BIONIX
          </p>
          <div class="relative hidden sm:block">
            <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px]
            bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem]
            sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{
            asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex justify-center content-center flex-col">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            21 Oktober
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Semifinal
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            BIONIX
          </p>
          <div class="relative">
            <img class=" absolute w-[75px] sm:w-[95px] md:w-[140px] lg:w-[210px] h-[2px] md:h-[4px] lg:h-[6px]
            bottom-[3rem] sm:bottom-[3.5rem] md:bottom-[3.75rem] lg:bottom-[4.25rem] xl:bottom-24 left-[3.25rem]
            sm:left-[4rem] md:left-[4.5rem] lg:left-[5.5rem] xl:left-[7.5rem]" src= {{
            asset('images/icon/IconLP_Sect6_Line.png') }} alt="">
          </div>
        </div>
        <div class="flex justify-center content-center flex-col">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-bold text-white text-center"
          >
            22 Oktober
          </p>
          <img class=" my-4 self-center h-[9px] sm:h-[12px] md:h-[14px] lg:h-[16px] xl:h-[20px] w-[9px] sm:w-[12px]
          md:w-[14px] lg:w-[16px] xl:w-[20px]" src= {{ asset('images/bionix/BionixLP_Sect6_Circle.png') }} alt="">
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            Fnal & Awarding
          </p>
          <p
            class="z-30 font-montserrat text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[24px] font-semibold text-white text-center"
          >
            BIONIX
          </p>
        </div>
      </div>
    </div>
  </section>
  {{-- Section 8 DONE--}}
  <section class="mt-32 xs:mt-32 sm:mt-2 md:mt-[3rem] lg:mt-[3rem] w-screen min-h-[300px] xs:min-h-[350px] lg:min-h-[570px]">
    <div class="relative">
      <img class=" z-10 absolute hidden lg:block w-full xl:w-[80rem] lg:h-[43rem] xl:h-[60rem] lg:top-[0rem]" src= {{
      asset('images/bionix/BionixLP_Sect8_background.png') }} alt="">
    </div>
    <div class="flex justify-center flex-col">
      <h3
        class="mt-[30px] md:mt-[0px] xl:mt-[100px] z-30 font-montserrat text-[17px] xs:text-[20px] sm:text-[28px] md:text-[32px] lg:text-[42px] xl:text-[64px] font-bold from-[#006C56] to-[#AFD196] bg-gradient-to-r bg-clip-text text-transparent text-center lg:leading-[84px]"
      >
        Frequently Asked Questions
      </h3>
      <div class="mt-4 lg:mt-10 xl:mt-16 lg:mb-10 xl:mb-14 self-center">
        {{-- Accordion --}}
        <div
          x-data="{open:false}"
          class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Apa itu BIONIX?</span
            >
            <div class="z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
              <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:min-w-[48rem] xl:min-w-[65rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Apa itu BIONIX?
            </h4>
            <div class="z-30 relative w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
            BIONIX ISE! 2023 adalah rangkaian kompetisi berupa seleksi olimpiade SMA/SMK/sederajat tingkat nasional yang berhadiah free pass SNMPTN Sistem Informasi ITS bagi pemenangnya. BIONIX memiliki tiga tahap kompetisi yaitu penyisihan, semifinal, dan final. Tahapan kompetisi BIONIX akan dilaksanakan secara offline dan online.
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Berapa harga pendaftaran BIONIX?
</span
            >
            <div class="z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
              <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:min-w-[48rem] xl:min-w-[65rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Berapa harga pendaftaran BIONIX?

            </h4>
            <div class="z-30 relative w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
            Biaya pendaftaran BIONIX adalah sebesar Rp100.000,00/tim dengan setiap tim terdiri dari maksimal  2  (dua)  orang.  Harga  pendaftaran  dapat  dikurangi  jika  calon  peserta mendapatkan promo khusus selama masa pendaftaran BIONIX berlangsung.
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Apakah peserta boleh mendaftarkan diri lebih dari satu tim di BIONIX?</span
            >
            <div class="z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
              <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:min-w-[48rem] xl:min-w-[65rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Apakah peserta boleh mendaftarkan diri lebih dari satu tim di BIONIX?
            </h4>
            <div class="z-30 relative w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
            Tidak. Peserta hanya boleh mendaftar di satu tim saja. Jika panitia ISE! 2023 mendeteksi adanya peserta ganda (terdaftar di lebih dari satu tim), maka peserta tersebut akan didiskualifikasi.
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Apakah tim BIONIX boleh terdiri atas lintas tahun angkatan ataupun berbeda jenis kelamin?</span
            >
            <div class="z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
              <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:min-w-[48rem] xl:min-w-[65rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Apakah tim BIONIX boleh terdiri atas lintas tahun angkatan ataupun berbeda jenis kelamin?
            </h4>
            <div class="z-30 relative w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
            Ya, tim diperbolehkan terdiri atas lintas tahun angkatan maupun berbeda jenis kelamin selama anggota tim masih berasal dari sekolah yang sama.
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Di mana pelaksanaan tahap Penyisihan BIONIX?</span
            >
            <div class="z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
              <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:min-w-[48rem] xl:min-w-[65rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Di mana pelaksanaan tahap Penyisihan BIONIX?
            </h4>
            <div class="z-30 relative w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
            Tahap penyisihan BIONIX akan diadakan secara online, sedangkan Semifinal dan Final akan diadakan secara offline di Departemen Sistem Informasi ITS Surabaya, Jawa Timur. Selama tahapan bersifat online, pengerjaan soal BIONIX dapat dilakukan di mana saja. Hal yang dibutuhkan hanyalah koneksi internet yang stabil dan memadai.
            </p>
          </button>
        </div>
        <div
          x-data="{open:false}"
          class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] mb-4 mx-auto bg-transparent flex justify-center content-center flex-col"
        >
          <button
            @click="open=!open"
            x-cloak
            x-transition
            x-show="!open"
            class="z-30 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:w-[48rem] xl:w-[65rem] border-t-[1px] lg:border-t-2 border-b-[1px] lg:border-b-2 border-white flex justify-between items-center bg-transparent"
          >
            <span
              class="z-30 px-2 lg:px-6 py-2 lg:py-4 font-montserrat text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
              >Bagaimana bentuk soal BIONIX?</span
            >
            <div class="z-30 relative mr-4 lg:mr-6 h-1 lg:h-2 w-1 lg:w-2">
              <img class=" absolute" src= {{ asset('images/icon/IconLP_Sect7_NavButton.png') }} alt="">
            </div>
          </button>
          <button
            @click="open=!open"
            style="background-color: rgba(56, 63, 68, 0.3); box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.25)"
            x-show="open"
            x-cloak
            class="z-30 flex flex-col px-4 w-[300px] xs:w-[375px] sm:w-[500px] md:w-[600px] lg:min-w-[48rem] xl:min-w-[65rem] mx-4 py-6 text-white self-center rounded-[5px]"
            x-transition
          >
            <h4
              class="z-30 font-montserrat font-semibold text-white text-left text-[9px] sm:text-[12px] md:text-[14px] lg:text-[16.5px] xl:text-[25px]"
            >
              Bagaimana bentuk soal BIONIX?
            </h4>
            <div class="z-30 relative w-full">
              <img class=" absolute right-[-0.5rem] lg:right-0 top-[-1rem] lg:top-[-2.5rem] w-[22px] lg:w-[42px]
              h-[22px] lg:h-[42px]" src= {{ asset('images/icon/IconLP_Sect7_MinusBtn.png') }} alt="">
            </div>
            <p
              class="z-30 mt-4 font-montserrat text-[7px] sm:text-[8px] md:text-[10px] lg:text-[13px] xl:text-[20px] text-white text-left"
            >
            oal penyisihan BIONIX dikategorikan ke dalam bidang keilmuan sistem informasi seperti Sistem Perusahaan, Data dan Statistik, Manajemen Sistem Informasi, dan Infrastruktur dan Keamanan TI. Untuk mengetahui contoh soal-soal yang akan diujikan, peserta dapat mengikuti simulasi Tryout yang diberikan.
            </p>
          </button>
        </div>
      </div>
    </div>
    {{--
  </section>
  --}}
</div>

<script>
// GTS Countdown Start
// Set the countdown date and time
const countdownDate_gts = new Date('September 10, 2023 00:00:00').getTime();

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

  // Select all elements with the ID "days_gts" and update their content
  document.querySelectorAll('#days_gts').forEach((element) => {
    element.innerHTML = `${days_gts}`;
  });

  // Select all elements with the ID "hours_gts" and update their content
  document.querySelectorAll('#hours_gts').forEach((element) => {
    element.innerHTML = `${hours_gts}`;
  });

  // Select all elements with the ID "minutes_gts" and update their content
  document.querySelectorAll('#minutes_gts').forEach((element) => {
    element.innerHTML = `${minutes_gts}`;
  });

  // Select all elements with the ID "seconds_gts" and update their content
  document.querySelectorAll('#seconds_gts').forEach((element) => {
    element.innerHTML = `${seconds_gts}`;
  });

  // If the countdown is finished, display a message
  if (distance < 0) {
    clearInterval(countdownTimer_gts);

    // Select all elements with the ID "days_gts" and update their content to '0'
    document.querySelectorAll('#days_gts').forEach((element) => {
      element.innerHTML = '0';
    });

    // Select all elements with the ID "hours_gts" and update their content to '0'
    document.querySelectorAll('#hours_gts').forEach((element) => {
      element.innerHTML = '0';
    });

    // Select all elements with the ID "minutes_gts" and update their content to '0'
    document.querySelectorAll('#minutes_gts').forEach((element) => {
      element.innerHTML = '0';
    });

    // Select all elements with the ID "seconds_gts" and update their content to '0'
    document.querySelectorAll('#seconds_gts').forEach((element) => {
      element.innerHTML = '0';
    });
  }
}, 1000);
// GTS Countdown End


// dsux Countdown Start
// Set the countdown date and time
const countdownDate_dsux = new Date('August 20, 2023 00:00:00').getTime();

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
// dsux Countdown End

</script>

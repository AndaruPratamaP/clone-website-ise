@section('title', 'RISE Home') @if (!$isRegistered)
<div class="w-full min-h-screen p-4 xl:pl-12 font-poppins">
  <section>
    <div class="flex mb-5">
      <p class="text-2xl bg-gradient-orange-r font-bold bg-clip-text text-transparent tracking-[0.07em]">
        RISE
      </p>
    </div>
  </section>
  <section>
    <div class="flex flex-col-reverse xl:flex-row gap-x-5 gap-y-5">
      <div class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] py-8 px-9 max-w-4xl">
        <div class="flex flex-col text-white">
          <p class="self-center pb-3 text-xl font-medium xl:self-start">Deskripsi</p>
          <p class="pt-4 text-sm font-light text-justify sm:text-base">
            RISE! Business Case menghadirkan berbagai permasalahan sesuai dengan realita perusahaan yang harus bisa dipecahkan oleh para peserta dengan solusi kreatif dan adaptif. Oleh karena itu, diharapkan para mahasiswa yang mengikuti kompetisi ini mampu melatih kemampuan critical thinking, peduli dengan keadaan bisnis dan sektor perekonomian Indonesia saat ini, dan mempersiapkan diri untuk menghadapi realitas bisnis dan ekonomi baik pada saat ini maupun di masa depan.
          </p>
        </div>
      </div>

      <div
        class="flex rounded-xl bg-[#191A1E] p-5 max-w-4xl xl:max-w-[400px] w-full shrink-0 justify-center items-center"
      >
        <div class="flex flex-col items-center text-center text-white">
          <p class="text-xl font-medium">Pendaftaran Telah Ditutup</p>
          {{-- <div class="flex flex-row gap-x-3 my-7">
            <div class="flex flex-col items-center justify-center">
              <div
                id="days"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-base font-normal text-white">Hari</p>
            </div>
            <div class="flex items-center self-start pt-3 text-xl font-bold text-white">:</div>
            <div class="flex flex-col items-center justify-center">
              <div
                id="hours"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-base font-normal text-white">Jam</p>
            </div>
            <div class="flex items-center self-start pt-3 text-xl font-bold text-white">:</div>
            <div class="flex flex-col items-center justify-center">
              <div
                id="minutes"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-base font-normal text-white">Menit</p>
            </div>
            <div class="items-center self-start hidden pt-3 text-xl font-bold text-white xs:flex">:</div>
            <div class="flex-col items-center justify-center hidden xs:flex">
              <div
                id="seconds"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-base font-normal text-white">Detik</p>
            </div>
          </div>
          <div class="flex flex-col w-full gap-y-2">
            <a
              href="/my/rise/registration"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-gradient-orange-br hover:brightness-75"
              >Daftar Sekarang!</a
            >
            <a
              href="https://drive.google.com/file/d/1S3M0YwfzPA2VpCxlyOpAQs-OQL_aSUDB/view?usp=sharing"
              target="_blank"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-orange-400 hover:bg-[#16171a] hover:brightness-75"
              >Lihat Guidebook</a
            >
          </div> --}}
        </div>
      </div>
    </div>
  </section>

  <section>
    <div
      class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] my-8 pb-16 px-6 h-full sm:h-[250px] items-center justify-center max-w-[896px] lg:max-w-[1150px] 2xl:max-w-[1317px]"
    >
      <div class="flex flex-col items-center w-full">
        <p class="flex self-center -mt-8 text-2xl font-medium text-white xl:self-start">Timeline</p>
        <span
          class="flex flex-col sm:flex-row sm:max-w-lg md:max-w-[630px] xl:max-w-3xl 2xl:max-w-5xl w-[2px] space-y-4 sm:space-y-0 sm:w-full justify-between items-center h-full sm:h-[4px] sm:bg-[#333333] text-white mt-10 sm:mt-20"
        >
        <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 sm:-translate-x-10">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
            1Ag - 7Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Open <br />
              Regist
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 translate-x-0 sm:-translate-x-4">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              1Ag - 10Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Penyisihan <br />
              RISE
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              18-30 Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Semifinal <br />
              RISE
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              15 Oct
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              TM & <br />
              RTA
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              16 - 22 Oct
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Mentoring <br />
              RISE
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 translate-x-0 sm:translate-x-4">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              29 Oct
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Final <br />
              RISE
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 sm:translate-x-10">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              04 Nov
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-orange-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">
                Awarding <br />
                RISE
            </p>
          </div>
        </span>
      </div>
    </div>
  </section>

  <section>
    {{--
    <div class="mt-10 overflow-auto">
      <div class="hidden mb-6 text-2xl font-bold text-white sm:flex sm:self-start">Speaker</div>
      <div
        class="flex flex-col gap-y-5 sm:flex-row sm:gap-x-8 overflow-x-auto sm:my-3 sm:shrink-0 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-500 scrollbar-rounded-[20px] pb-2"
      >
        <div
          class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100"
        >
          <img class="rounded-full w-36 h-36" src="{{ asset('images/gts/speaker-2.png') }}" alt="speaker-2" />
          <p class="mt-4 text-lg font-bold text-white font-montserrat">Irzan Raditya</p>
          <p class="text-[#B5B3BC] font-montserrat font-normal text-base">
            CEO & Co-Founder of <br />
            Kata.ai
          </p>
          <p class="mt-4 text-sm text-justify text-white sm:text-base font-montserrat">
            Irzan Raditya, CEO kata.ai, telah mencapai kesuksesan yang luar biasa baik di kata.ai maupun dalam dunia
            kecerdasan buatan (AI). Di bawah kepemimpinannya, kata.ai telah menjadi perusahaan terkemuka dalam
            pengembangan solusi AI dan pemrosesan bahasa alami. Pendekatan visioner Irzan dan pemahamannya yang mendalam
            tentang tren AI telah memungkinkan kata.ai mengembangkan solusi AI yang canggih, termasuk chatbot, analisis
            sentimen, dan personalisasi pengalaman pelanggan.
          </p>
        </div>
        <div
          class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100"
        >
          <img class="rounded-full w-36 h-36" src="{{ asset('images/gts/speaker-1.png') }}" alt="speaker-1" />
          <p class="mt-4 text-lg font-bold text-white font-montserrat">Belladonna Paramayswari</p>
          <p class="text-[#B5B3BC] font-montserrat font-normal text-base">
            Risk Specialist at PT. Bank Mandiri (Persero) Tbk.
          </p>
          <p class="mt-4 text-sm text-justify text-white sm:text-base font-montserrat">
            Belladona Paramayswari adalah seorang profesional IT yang sukses dan berbakat. Dengan pengetahuan mendalam
            dalam pengembangan perangkat lunak, analisis data, dan manajemen proyek, Belladona telah berhasil
            menghadirkan solusi inovatif dalam berbagai proyek IT yang kompleks. Belladona saat ini bergelut dengan
            ranah Risk Specialist, didukung dengan pengalamannya menjadi bagian dari Harvey Norman. Kesuksesan Belladona
            Paramayswari dalam dunia karir IT mencerminkan dedikasinya dalam terus mengasah pengetahuan dan
            keterampilannya.
          </p>
        </div>
        <div
          class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100"
        >
          <img
            class="object-cover object-top rounded-full w-36 h-36"
            src="{{ asset('images/gts/speaker-3.png') }}"
            alt="speaker-3"
          />
          <p class="mt-4 text-lg font-bold text-white font-montserrat">Sabrina Woro Anggraini</p>
          <p class="text-[#B5B3BC] font-montserrat font-normal text-base">
            Co-Founder & Managing Director of Natuno Design Lab
          </p>
          <p class="mt-4 text-sm text-justify text-white sm:text-base font-montserrat">
            Sabrina Woro Anggraini adalah seorang profesional berbakat dan berdedikasi di bidang bisnis dan teknologi.
            Sabrina, cofounder Notunolab, berpengalaman dalam implementasi teknologi informasi (IT) dalam bisnis. Dengan
            pemahaman yang mendalam tentang potensi positif IT dalam efisiensi operasional dan pertumbuhan bisnis,
            Sabrina telah berhasil mengimplementasikan solusi teknologi yang relevan dan efektif. Sabrina terus
            menunjukkan visi dan kemampuan yang kuat dalam memanfaatkan teknologi untuk kesuksesan bisnis di era
            digital.
          </p>
        </div>
      </div>
    </div>
    --}}
  </section>
</div>
@else {{-- vvv Sesudah daftar vvv --}}
<div class="w-full min-h-screen p-4 xl:pl-12 font-poppins">
    <section>
      <div class="flex mb-8">
        <p class="text-2xl text-center text-white font-bold tracking-[0.09em] md:tracking-[0.09em]">
          Halo, Selamat Datang di Dashboard
          <span class="font-bold text-transparent bg-gradient-orange-r bg-clip-text">RISE</span>
        </p>
      </div>
    </section>

    <div class="hidden self-start text-2xl text-[#B5B3BC] font-bold mb-2 md:flex">Status</div>

    <section class="flex flex-col-reverse justify-center w-full md:flex-row gap-x-8">
      <div class="flex flex-col my-1.5 w-full items-center md:w-full">
        <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mb-2 md:hidden">Status</div>
        <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
        >
          <div class="flex flex-row items-center w-full gap-x-6">
            <x-heroicon-s-arrow-left-on-rectangle class="relative z-0 text-orange-400 rotate-180 w-14 h-14" />
            <div class="flex flex-col">
              <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Pendaftaran</p>
              <p class="text-2xl font-bold text-transparent bg-gradient-orange-r bg-clip-text">
                {{ $isRegistered ? 'Sudah Terdaftar' : 'Belum Terdaftar' }}
              </p>
            </div>
          </div>
        </div>
        <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
        >
          <div class="flex flex-row items-center w-full gap-x-6">
            @if($peserta->status_type->id == '35')
            <x-heroicon-s-folder-open class="relative z-0 text-red-800 w-14 h-14" />
            @elseif ($peserta->status_type->id >= '34')
            <x-heroicon-s-folder-open class="relative z-0 text-orange-400 w-14 h-14" />
            @elseif($peserta->status_type->id == '33')
            <x-heroicon-s-folder-open class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
            @endif

            <div class="flex flex-col">
              <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Berkas</p>
              <p
                class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '31') bg-gradient-orange-r bg-clip-text text-transparent @endif"
              >
                @if($peserta->status_type->id == '33')
                  Sedang Diperiksa Admin
                @elseif($peserta->status_type->id == '35')
                <span class="text-red-800">
                  Ditolak Admin
                </span>
                @elseif($peserta->status_type->id >= '34')
                <span class="text-transparent bg-gradient-orange-r bg-clip-text">Terverifikasi</span>
                @endif
              </p>
            </div>
          </div>
        </div>
        <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
        >
          <div class="flex flex-row items-center w-full gap-x-6">
            @if($peserta->status_type->id == '38')
            <x-heroicon-s-pencil class="relative z-0 text-red-800 w-14 h-14" />
            @elseif ($peserta->status_type->id >= '37')
            <x-heroicon-s-pencil class="relative z-0 text-orange-400 w-14 h-14" />
            @elseif($peserta->status_type->id <= '36')
            <x-heroicon-s-pencil class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
            @endif

            <div class="flex flex-col">
              <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Penyisian</p>
              <p
                class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '31') bg-gradient-orange-r bg-clip-text text-transparent @endif"
              >
                @if($peserta->status_type->id == '36')
                  Sedang Diperiksa Admin
                @elseif($peserta->status_type->id == '38')
                <span class="text-red-800">
                  Tidak Lolos
                </span>
                @elseif($peserta->status_type->id >= '37')
                <span class="text-transparent bg-gradient-orange-r bg-clip-text">Lolos</span>
                @else
                  Menunggu berkas
                @endif
              </p>
            </div>
          </div>
        </div>
        <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center">
          <div class="flex flex-row items-center w-full gap-x-6">
            @if($peserta->status_type->id == 41)
              <x-heroicon-s-credit-card class="relative z-0 text-red-800 w-14 h-14" />
            @elseif ($peserta->status_type->id >= 40)
                <x-heroicon-s-credit-card class="relative z-0 text-orange-400 w-14 h-14" />
            @else
                <x-heroicon-s-credit-card class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
            @endif

            <div class="flex flex-col">
              <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Pembayaran</p>
              <p
                class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '3') bg-gradient-orange-r bg-clip-text text-transparent @endif"
              >
                @if($peserta->status_type->id == '39')
                  Sedang Diperiksa Admin
                @elseif($peserta->status_type->id == '41')
                <span class="text-red-800">
                  Pembayaran Ditolak
                </span>
                @elseif($peserta->status_type->id >= '40')
                <span class="text-transparent bg-gradient-orange-r bg-clip-text">
                    Lunas
                </span>
                @else
                  Menunggu Pembayaran
                @endif
              </p>
            </div>
          </div>
        </div>

        {{-- <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center">
          <div class="flex flex-row items-center w-full gap-x-6">
            @if($peserta->status_type->id == 44)
              <x-heroicon-s-user-group class="relative z-0 text-red-800 w-14 h-14" />
            @elseif ($peserta->status_type->id >= 43)
                <x-heroicon-s-user-group class="relative z-0 text-orange-400 w-14 h-14" />
            @else
                <x-heroicon-s-user-group class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
            @endif

            <div class="flex flex-col">
              <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Semifinal</p>
              <p
                class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '3') bg-gradient-orange-r bg-clip-text text-transparent @endif"
              >
                @if($peserta->status_type->id == '42')
                  Sedang Diperiksa Admin
                @elseif($peserta->status_type->id == '44')
                <span class="text-red-800">
                  Tidak Lolos
                </span>
                @elseif($peserta->status_type->id >= '43')
                <span class="text-transparent bg-gradient-orange-r bg-clip-text">
                    Lolos
                </span>
                @else
                  Menunggu Berkas
                @endif
              </p>
            </div>
          </div>
        </div>

        <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center">
          <div class="flex flex-row items-center w-full gap-x-6">
            @if($peserta->status_type->id == 47)
              <x-heroicon-m-trophy class="relative z-0 text-red-800 w-14 h-14" />
            @elseif ($peserta->status_type->id >= 46)
                <x-heroicon-m-trophy class="relative z-0 text-orange-400 w-14 h-14" />
            @else
                <x-heroicon-m-trophy class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
            @endif

            <div class="flex flex-col">
              <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Final    </p>
              <p
                class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '3') bg-gradient-orange-r bg-clip-text text-transparent @endif"
              >
                @if($peserta->status_type->id == '45')
                  Sedang Diperiksa Admin
                @elseif($peserta->status_type->id == '47')
                <span class="text-red-800">
                    Tidak Lolos
                </span>
                @elseif($peserta->status_type->id >= '46')
                <span class="text-transparent bg-gradient-orange-r bg-clip-text">
                    Congratulation !!!
                </span>
                @else
                  Menunggu Berkas
                @endif
              </p>
            </div>
          </div>
        </div> --}}


        <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-5 mb-3.5">Biodata Tim Kamu</div>
        <div
          class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center"
        >
          <div class="flex flex-col justify-center w-full space-y-6 items-left">
            {{-- Data Tim Start--}}
            <div class="flex-col justify-center w-full items-left">
              <div class="flex flex-row items-center w-full gap-2 mb-3">
                <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Data Tim</h3>
                <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
              </div>
              <div class="flex flex-col gap-y-1">
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Tim</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->team_name }}
                </p>
                @if($peserta->answer_file_penyisihan !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban Penyisihan</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->answer_file_penyisihan) }}" target="_blank" class="text-orange-400">Lihat Jawaban</a>
                    </p>
                @endif
                @if($peserta->poster_file_penyisihan !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster Penyisihan</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      <img src="{{ url($peserta->poster_file_penyisihan) }}" alt="Bukti Pembayaran" />
                    </p>
                @endif
                @if($peserta->account_owner !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Rekening Atas Nama</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->account_owner }}
                </p>
                @endif
                @if($peserta->bank_name !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Bank</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->bank_name }}
                </p>
                @endif
                @if($peserta->payment_file !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Pembayaran</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->payment_file) }}" target="_blank" class="text-orange-400">Lihat File</a>
                    </p>
                @endif
                @if($peserta->youtube_link !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Youtube Semifinal</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->youtube_link) }}" target="_blank" class="text-orange-400">Lihat Youtube</a>
                </p>
                @endif
                @if($peserta->answer_file_semifinal !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban Semifinal</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->answer_file_semifinal) }}" target="_blank" class="text-orange-400">Lihat Jawaban</a>
                    </p>
                @endif
                @if($peserta->answer_file_final !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban final</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->answer_file_final) }}" target="_blank" class="text-orange-400">Lihat Jawaban</a>
                    </p>
                @endif
              </div>
            </div>
            {{-- Data Tim End--}} {{-- Ketua Tim Start--}}
            <div class="flex-col justify-center w-full items-left">
              <div class="flex flex-row items-center w-full gap-2 mb-3">
                <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Ketua Tim</h3>
                <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
              </div>
              <div class="flex flex-col gap-y-1">
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->leader->full_name }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->leader->institution }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->leader->email }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->leader->handphone }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <a href="{{ url($peserta->leader_twibbon) }}" target="_blank" class="text-orange-400">Lihat Twibbon</a>
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <img src="{{ url($peserta->leader_student_card) }}" alt="Bukti Mahasiswa Aktif" />
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <img src="{{ url($peserta->leader_ig_follow) }}" alt="Bukti follow" />
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <img src="{{ url($peserta->leader_poster) }}" alt="Bukti follow" />
                </p>
              </div>
            </div>
            {{-- Ketua Tim End--}} {{-- Anggota 1 Start--}}
            <div class="flex-col justify-center w-full items-left">
              <div class="flex flex-row items-center w-full gap-2 mb-3">
                <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 1</h3>
                <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
              </div>
              <div class="flex flex-col gap-y-1">
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->member1_name }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->member1_agency }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->member1_email }}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->member1_phone}}
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon Anggota</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <a href="{{ url($peserta->member1_twibbon) }}" target="_blank" class="text-orange-400"
                    >Lihat Instagram Anggota 1</a
                  >
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <img src="{{ url($peserta->member1_student_card) }}" alt="Bukti Mahasiswa Aktif" />
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <img src="{{ url($peserta->member1_ig_follow) }}" alt="Bukti follow" />
                </p>

                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  <img src="{{ url($peserta->member1_poster) }}" alt="Bukti follow" />
                </p>

                {{-- Anggota 1 End--}} {{-- Anggota 2 Start--}} @if($peserta->member2_name !== NULL && !empty($peserta->member2_name))
                <div class="flex-col justify-center w-full items-left">
                  <div class="flex flex-row items-center w-full gap-2 mb-3">
                    <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 2</h3>
                    <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
                  </div>
                  <div class="flex flex-col gap-y-1">
                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      {{ $peserta->member2_name }}
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      {{ $peserta->member2_agency }}
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      {{ $peserta->member2_email }}
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      {{ $peserta->member2_phone}}
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon Anggota</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      <a href="{{ url($peserta->member2_twibbon) }}" target="_blank" class="text-orange-400"
                        >Lihat Instagram Anggota 2</a
                      >
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      <img src="{{ url($peserta->member2_student_card) }}" alt="Bukti Mahasiswa Aktif" />
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      <img src="{{ url($peserta->member2_ig_follow) }}" alt="Bukti follow" />
                    </p>

                    <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      <img src="{{ url($peserta->member2_poster) }}" alt="Bukti follow" />
                    </p>
                </div>
            </div>
            @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col items-center md:items-start my-1.5 w-full">
        <div class="flex justify-center rounded-xl bg-[#191A1E] p-5 max-w-[580px] md:max-w-[477px] w-full">
          <div class="flex flex-col items-center text-center text-white">
            <p class="text-xl font-medium">Semifinal RISE Dibuka Dalam</p>
            <div class="flex flex-row gap-x-3 my-7">
              <div class="flex flex-col items-center justify-center">
                <div
                  id="days_gts"
                  class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
                >
                  00
                </div>
                <p class="flex text-base font-normal text-white">Hari</p>
              </div>
              <div class="flex items-center self-start pt-3 text-xl font-bold text-white">:</div>
              <div class="flex flex-col items-center justify-center">
                <div
                  id="hours_gts"
                  class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
                >
                  00
                </div>
                <p class="flex text-base font-normal text-white">Jam</p>
              </div>
              <div class="flex items-center self-start pt-3 text-xl font-bold text-white">:</div>
              <div class="flex flex-col items-center justify-center">
                <div
                  id="minutes_gts"
                  class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
                >
                  00
                </div>
                <p class="flex text-base font-normal text-white">Menit</p>
              </div>
              <div class="items-center self-start hidden pt-3 text-xl font-bold text-white xs:flex">:</div>
              <div class="flex-col items-center justify-center hidden xs:flex">
                <div
                  id="seconds_gts"
                  class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
                >
                  00
                </div>
                <p class="flex text-base font-normal text-white">Detik</p>
              </div>
            </div>
            <a
            href="https://drive.google.com/file/d/1S3M0YwfzPA2VpCxlyOpAQs-OQL_aSUDB/view?usp=sharing"
            target="_blank"
            class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-orange-400 hover:bg-[#16171a] hover:brightness-75"
            >Lihat Guidebook</a
          >
          </div>
        </div>
        <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-6 mb-4">Pengumuman</div>
        <div class="flex flex-col space-y-4">
          @if($peserta->status_type->id == '33')
        {{-- After regist --}}
        <div
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
            <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
          >
            Terimakasih sudah mendaftar.
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
                Selamat datang di RISE ISE 2023! Silahkan tunggu verifikasi berkas kamu ya.
            </p>
          </div>
        </div>
      </div>
          @elseif($peserta->status_type->id == '35')
          <!-- Gagal Berkas -->
          <div
            class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
          >
            <div class="flex flex-col gap-y-3">
              <p
                class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
              >
                Verifikasi Gagal
              </p>
              <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
                <p class="text-base font-light">
                  Kamu dinyatakan gagal dalam verifikasi RISE 2023. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
                  Tetap semangat dan terus berjuang!
                  <div class="my-1"></div>
                  Hubungi kami apabila ada pertanyaaan lebih lanjut.
                  <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
                </p>
              </div>
            </div>
          </div>
          @elseif($peserta->status_type->id == '34')
            <!-- Verif Berkas Success -->
            {{-- <div
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
          <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
          >
            Congratulations! <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
                Selamat berkas pendaftaran kamu telah berhasil kami verifikasi, silahkan unduh soal berikut untuk tahap penyisihan            </p>
            <a href="https://drive.google.com/file/d/1HKcnfETvTOFItAC844Gb2-4i3mifbirG/view?usp=sharing" target="blank" class="text-lg font-semibold text-center text-white bg-gradient-orange-r hover:brightness-75 rounded-md py-1.5">Unduh Soal</a>
            <a href="/my/rise/penyisihan" class="text-lg font-semibold text-center text-white hover:bg-gradient-orange-r rounded-md py-1.5 border border-orange-400">Submit Penyisihan</a>
          </div>
        </div>
      </div>
    </div> --}}
    <div
    class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
  >
    <div class="flex flex-col gap-y-3">
        <p
        class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
      >
        Penyisihan telah ditutup
      </p>
      <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
        <p class="text-base font-light">
          Terimakasih telah mendaftar RISE 2023, sayangnya fase penyisihan telah ditutup.
          <div class="my-1"></div>
          Hubungi kami apabila ada pertanyaaan lebih lanjut.
          <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
        </p>
      </div>
    </div>
  </div>
    @elseif($peserta->status_type->id == '36')
    <!-- After Penyisihan -->
    <div
    class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
  >
    <div class="flex flex-col gap-y-3">
        <p
        class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
      >
        Terimakasih Telah Mengirimkan Berkas Penyisihan.
      </p>
      <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
        <p class="text-base font-light">
            Silahkan tunggu seleksi berkas penyisihan kamu ya.
        </p>
      </div>
    </div>
  </div>
    @elseif($peserta->status_type->id == '38')
    <!-- Gagal Penyisihan -->
    <div
    class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
  >
    <div class="flex flex-col gap-y-3">
      <p
        class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
      >
        Gagal Penyisihan
      </p>
      <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
        <p class="text-base font-light">
          Kamu dinyatakan gagal dalam Penyisihan RISE 2023. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
          Tetap semangat dan terus berjuang!
          <div class="my-1"></div>
          Hubungi kami apabila ada pertanyaaan lebih lanjut.
          <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
        </p>
      </div>
    </div>
  </div>
          @elseif($peserta->status_type->id == '37')
            <!-- Berhasil Penyisihan -->
            <div
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
          <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
          >
            Congratulations! <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
                Kamu lolos tahap penyisihan RISE 2023. Silahkan lakukan pembayaran sebelum tanggal 17 September pukul 16:00 untuk melanjutkan ke tahap selanjutnya
            </p>
            <a href="/my/rise/pembayaran" class="text-lg font-semibold text-center text-white bg-gradient-orange-r hover:brightness-75 rounded-md py-1.5">Bayar</a>
          </div>
        </div>
      </div>
      @elseif($peserta->status_type->id == '39')
      <!-- After Pembayaran -->
      <div
      class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
    >
      <div class="flex flex-col gap-y-3">
          <p
          class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
        >
          Terimakasih Mengirimkan Bukti Pembayaran.
        </p>
        <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
          <p class="text-base font-light">
              Silahkan tunggu verifikasi pembayaran kamu ya.
          </p>
        </div>
      </div>
    </div>
      @elseif($peserta->status_type->id == '41')
      <!-- Gagal Pembayaran -->
      <div
      class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
    >
      <div class="flex flex-col gap-y-3">
        <p
          class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
        >
          Pembayaran Gagal Diverifikasi
        </p>
        <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
          <p class="text-base font-light">
            Pembayaran kamu gagal kami verifikasi.
            <div class="my-1"></div>
            Mohon hubungi kami apabila ada pertanyaaan lebih lanjut.
            <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
          </p>
        </div>
      </div>
    </div>
            @elseif($peserta->status_type->id == '40')
              <!-- Temp-->
              <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
            >
              Congratulations! <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">
                  Pembayaran kamu berhasil diverifikasi. Silahkan persiapkan dirimu untuk semifinal pada tanggal 18 September.
              </p>
            </div>
          </div>
        </div>
        <!-- Berhasil Pembayaran -->
              {{-- <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
            >
              Congratulations! <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">
                  Pembayaran kamu berhasil diverifikasi. Silahkan lanjutkan Business Case kamu dan kirimkan hasilnya sebelum deadline.
              </p>
              <a href="/my/rise/semifinal" class="text-lg font-semibold text-center text-white bg-gradient-orange-r hover:brightness-75 rounded-md py-1.5">Semifinal</a>
            </div>
          </div>
        </div> --}}
        @elseif($peserta->status_type->id == '42')
        <!-- After Semifinal -->
        <div
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
            <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
          >
            Terimakasih Telah Mengirimkan Berkas Semifinal.
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
                Silahkan tunggu verifikasi Berkas Semifinal kamu ya.
            </p>
          </div>
        </div>
      </div>
        @elseif($peserta->status_type->id == '44')
        <!-- Gagal Semifinal -->
        <div
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
          <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
          >
            Gagal Lolos Semifinal
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
                Kamu dinyatakan gagal dalam Semifinal RISE 2023. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
                Tetap semangat dan terus berjuang!
              <div class="my-1"></div>
              Mohon hubungi kami apabila ada pertanyaaan lebih lanjut.
              <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
            </p>
          </div>
        </div>
      </div>
              @elseif($peserta->status_type->id == '43')
                <!-- Berhasil Semifinal -->
                <div
            class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
          >
            <div class="flex flex-col gap-y-3">
              <p
                class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
              >
                Congratulations! <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
              </p>
              <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
                <p class="text-base font-light">
                    Kamu lolos semifinal RISE 2023. Silahkan lanjutkan Business Case kamu dan kirimkan hasilnya sebelum deadline.
                </p>
                <a href="/my/rise/final" class="text-lg font-semibold text-center text-white bg-gradient-orange-r hover:brightness-75 rounded-md py-1.5">Final</a>
              </div>
            </div>
          </div>
          @elseif($peserta->status_type->id == '45')
          <!-- After Final -->
          <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
              <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
            >
              Terimakasih Telah Mengirimkan Berkas Final.
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">
                  Silahkan tunggu verifikasi Berkas Final kamu ya.
              </p>
            </div>
          </div>
        </div>
          @elseif($peserta->status_type->id == '47')
          <!-- Gagal Final -->
          <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
            >
              Gagal Lolos Final
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">
                  Kamu dinyatakan gagal dalam Final RISE 2023. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
                  Tetap semangat dan terus berjuang!
                <div class="my-1"></div>
                Mohon hubungi kami apabila ada pertanyaaan lebih lanjut.
                <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
              </p>
            </div>
          </div>
        </div>
                @elseif($peserta->status_type->id == '46')
                  <!-- Berhasil Final -->
                  <div
              class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
            >
              <div class="flex flex-col gap-y-3">
                <p
                  class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-orange-r bg-clip-text font-lg sm:text-2xl font-poppins"
                >
                  Congratulations! <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
                </p>
                <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
                  <p class="text-base font-light">
                      Kamu lolos Final RISE 2023.
                      <div class="my-1"></div>
                      Mohon hubungi kami apabila ada pertanyaaan lebih lanjut.
                      <a href="https://wa.me/+6281332049750" target="blank" class="text-orange-400 hover:underline decoration-orange-400 ">Contact Us</a>
                      </div>
                  </p>
              </div>
            </div>


          @endif

        </div>
      </div>
    </section>
  </div>
@endif

<script type="text/javascript">
  const datetime = 'September 07, 2023 23:59:59';
  const countdownDate = new Date(datetime).getTime();

  // Update the countdown every second
  const countdownTimer = setInterval(() => {
    // Get today's date and time
    const now = new Date().getTime();

    // Find the distance between now and the countdown date
    const distance = countdownDate - now;

    // Calculate the days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown
    document.getElementById('days').innerHTML = `${days}`;
    document.getElementById('hours').innerHTML = `${hours}`;
    document.getElementById('minutes').innerHTML = `${minutes}`;
    document.getElementById('seconds').innerHTML = `${seconds}`;

    // If the countdown is finished, display a message
    if (distance < 0) {
      clearInterval(countdownTimer);
      document.getElementById('days').innerHTML = '0';
      document.getElementById('hours').innerHTML = '0';
      document.getElementById('minutes').innerHTML = '0';
      document.getElementById('seconds').innerHTML = '0';
    }
  }, 1000);

  // After Regist Countdown
  // Set the countdown date and time
  const countdownDate_gts = new Date('September 18, 2023 23:59:59').getTime();

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
    document.getElementById('days_gts').innerHTML = `${days_gts}`;
    document.getElementById('hours_gts').innerHTML = `${hours_gts}`;
    document.getElementById('minutes_gts').innerHTML = `${minutes_gts}`;
    document.getElementById('seconds_gts').innerHTML = `${seconds_gts}`;

    // If the countdown is finished, display a message
    if (distance < 0) {
      clearInterval(countdownTimer_gts);
      document.getElementById('days_gts').innerHTML = '0';
      document.getElementById('hours_gts').innerHTML = '0';
      document.getElementById('minutes_gts').innerHTML = '0';
      document.getElementById('seconds_gts').innerHTML = '0';
    }
  }, 1000);
</script>

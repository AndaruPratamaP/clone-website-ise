@section('title', 'IS Class Home') @if (!$isRegistered)
<div class="min-h-screen w-full p-4 xl:pl-12 font-poppins">
  <section>
    <div class="flex mb-5">
      <p class="text-2xl bg-gradient-green-r font-bold bg-clip-text text-transparent tracking-[0.07em]">
        Information Systems Class
      </p>
    </div>
  </section>
  <section>
    <div class="flex flex-col-reverse xl:flex-row gap-x-5 gap-y-5">
      <div class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] py-8 px-9 max-w-4xl">
        <div class="flex flex-col text-white">
          <p class="text-xl font-medium pb-3 xl:self-start self-center">Deskripsi</p>
          <p class="text-sm sm:text-base font-light text-justify pt-4">
            Information Systems Class ISE! 2023 merupakan kegiatan talkshow interaktif yang diadakan secara online dan
            merupakan rangkaian acara pembuka untuk kegiatan ISE! 2023. Secara umum, Information Systems Class akan membahas
            perkembangan era digital dan isu teknologi terkini. Konsep dari Information Systems Class akan dikemas dengan
            suasana yang lebih santai serta terbuka gratis untuk masyarakat umum. Pada ISE! 2023, Information Systems Class
            akan membawakan tema, yaitu “Tech Innovators: Revolutionizing Industries with IT Solutions”
          </p>
        </div>
      </div>

      <div
        class="flex rounded-xl bg-[#191A1E] p-5 max-w-4xl xl:max-w-[400px] w-full shrink-0 justify-center items-center"
      >
        <div class="flex flex-col text-white items-center text-center">
          <p class="text-xl font-medium">Pendaftaran @if ($isOpen) Ditutup @else Dibuka @endif Dalam</p>
          <div class="flex flex-row gap-x-3 my-7">
            <div class="flex flex-col items-center justify-center">
              <div
                id="days"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Hari</p>
            </div>
            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
            <div class="flex flex-col items-center justify-center">
              <div
                id="hours"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Jam</p>
            </div>
            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
            <div class="flex flex-col items-center justify-center">
              <div
                id="minutes"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Menit</p>
            </div>
            <div class="hidden xs:flex items-center text-white font-bold text-xl self-start pt-3">:</div>
            <div class="hidden xs:flex flex-col items-center justify-center">
              <div
                id="seconds"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Detik</p>
            </div>
          </div>
          <div class="flex flex-col gap-y-2 w-full">
            <a
              href="{{ route('my.gts.registration') }}"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-gradient-green-br hover:brightness-75"
              >Daftar Sekarang!</a
            >
            <a
              href="/"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-green-400 hover:bg-[#16171a] hover:brightness-75"
              >Lihat Guidebook</a
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div
      class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] my-8 pb-16 px-6 h-[250px] items-center justify-center max-w-[896px] lg:max-w-[1150px] 2xl:max-w-[1317px]"
    >
      <div class="flex flex-col w-full items-center">
        <p class="flex text-white text-2xl font-medium self-center xl:self-start -mt-8">Timeline</p>
        <span
          class="flex flex-row max-w-sm xl:max-w-[600px] 2xl:max-w-4xl w-full justify-between items-center h-[4px] bg-[#333333] text-white mt-20"
        >
          <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3 -translate-x-10">
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              12 Jun 2023
            </p>
            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
              <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-green-r rounded-full mx-auto"></div>
            </div>
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Registration <br />
              Open
            </p>
          </div>
          <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3">
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              16 Jul 2022
            </p>
            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
              <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-green-r rounded-full mx-auto"></div>
            </div>
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Registration <br />
              Closed
            </p>
          </div>
          <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3 translate-x-10">
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              22 Jul 2023
            </p>
            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
              <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-green-r rounded-full mx-auto"></div>
            </div>
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">
              Grand
              <br />
              Talk Show
            </p>
          </div>
        </span>
      </div>
    </div>
  </section>

  <section>
    {{--
    <div class="mt-10 overflow-auto">
      <div class="sm:flex hidden sm:self-start text-2xl text-white font-bold mb-6">Speaker</div>
      <div
        class="flex flex-col gap-y-5 sm:flex-row sm:gap-x-8 overflow-x-auto sm:my-3 sm:shrink-0 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-500 scrollbar-rounded-[20px] pb-2"
      >
        <div
          class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100"
        >
          <img class="rounded-full w-36 h-36" src="{{ asset('images/gts/speaker-2.png') }}" alt="speaker-2" />
          <p class="text-white font-montserrat font-bold text-lg mt-4">Irzan Raditya</p>
          <p class="text-[#B5B3BC] font-montserrat font-normal text-base">
            CEO & Co-Founder of <br />
            Kata.ai
          </p>
          <p class="text-sm sm:text-base text-white font-montserrat text-justify mt-4">
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
          <p class="text-white font-montserrat font-bold text-lg mt-4">Belladonna Paramayswari</p>
          <p class="text-[#B5B3BC] font-montserrat font-normal text-base">
            Risk Specialist at PT. Bank Mandiri (Persero) Tbk.
          </p>
          <p class="text-sm sm:text-base text-white font-montserrat text-justify mt-4">
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
            class="rounded-full w-36 h-36 object-cover object-top"
            src="{{ asset('images/gts/speaker-3.png') }}"
            alt="speaker-3"
          />
          <p class="text-white font-montserrat font-bold text-lg mt-4">Sabrina Woro Anggraini</p>
          <p class="text-[#B5B3BC] font-montserrat font-normal text-base">
            Co-Founder & Managing Director of Natuno Design Lab
          </p>
          <p class="text-sm sm:text-base text-white font-montserrat text-justify mt-4">
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
<div class="min-h-screen w-full p-4 xl:pl-12 font-poppins">
  <section>
    <div class="flex mb-8">
      <p class="text-2xl text-center text-white font-bold tracking-[0.09em] md:tracking-[0.09em]">
        Halo, Selamat Datang di Dashboard
        <span class="bg-gradient-green-r font-bold bg-clip-text text-transparent">Information Systems Class</span>
      </p>
    </div>
  </section>

  <div class="hidden self-start text-2xl text-[#B5B3BC] font-bold mb-2 md:flex">Status</div>

  <section class="flex flex-col-reverse md:flex-row justify-center gap-x-8 w-full">
    <div class="flex flex-col my-1.5 w-full items-center md:w-full">
      <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mb-2 md:hidden">Status</div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row gap-x-6 items-center w-full">
          <x-heroicon-s-arrow-left-on-rectangle class="relative z-0 w-14 h-14 rotate-180 text-green-500" />
          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Pendaftaran</p>
            <p class="text-2xl bg-gradient-green-r font-bold bg-clip-text text-transparent">
              {{ $user_data['status'] }}
            </p>
          </div>
        </div>
      </div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row gap-x-6 items-center w-full">
          @if ($user_data['status_id'] == '3')
          <x-heroicon-s-folder-open class="relative z-0 w-14 h-14 text-green-500" />
          @else
          <x-heroicon-s-folder-open class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
          @endif

          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Berkas</p>
            <p
              class="text-2xl font-bold text-[#B5B3BC] @if ($user_data['status_id'] == '3') bg-gradient-green-r bg-clip-text text-transparent @endif"
            >
              @if ($user_data['status_id'] == '2') Belum Terverifikasi @elseif ($user_data['status_id'] == '3')
              Terverifikasi @endif
            </p>
          </div>
        </div>
      </div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row gap-x-6 items-center w-full">
          @if ($user_data['status_id'] == '3')
          <x-heroicon-s-clipboard-document-check class="relative z-0 w-14 h-14 text-green-500" />
          @else
          <x-heroicon-s-clipboard-document-check class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
          @endif

          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Administrasi</p>
            <p
              class="text-2xl font-bold text-[#B5B3BC] @if ($user_data['status_id'] == '3') bg-gradient-green-r bg-clip-text text-transparent @endif"
            >
              @if ($user_data['status_id'] == '2') Belum Terverifikasi @elseif ($user_data['status_id'] == '3')
              Terverifikasi @endif
            </p>
          </div>
        </div>
      </div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row gap-x-6 items-center w-full">
          @if ($user_data['status_id'] == '3')
          <x-heroicon-s-arrow-trending-up class="relative z-0 w-14 h-14 text-green-500" />
          @else
          <x-heroicon-s-arrow-trending-up class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
          @endif

          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Seleksi</p>
            <p
              class="text-2xl font-bold text-[#B5B3BC] @if ($user_data['status_id'] == '3') bg-gradient-green-r bg-clip-text text-transparent @endif"
            >
              @if ($user_data['status_id'] == '2') Belum Terverifikasi @elseif ($user_data['status_id'] == '3')
              Terverifikasi @endif
            </p>
          </div>
        </div>
      </div>

      <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-5 mb-3.5">Biodata Kamu</div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center"
      >
        <div class="flex flex-col items-left justify-center space-y-6 w-full">
          {{-- Ketua Tim Start--}}
          <div class="flex-col items-left justify-center w-full">
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $user_data['full_name'] }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Instansi</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $user_data['institution'] }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $user_data['email'] }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Handphone</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $user_data['handphone'] }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Tahu Information Systems Class Darimana ?</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $user_data['referral'] }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Follow</p>
              <img src="{{ url($user_data['share_proof_file']) }}" />
            </div>
          </div>
          {{-- Ketua Tim End--}}
        </div>
      </div>
    </div>

    <div class="flex flex-col items-center md:items-start my-1.5 w-full">
      <div class="flex justify-center rounded-xl bg-[#191A1E] p-5 max-w-[580px] md:max-w-[477px] w-full">
        <div class="flex flex-col text-white items-center text-center">
          <p class="text-xl font-medium">Information Systems Class Dimulai</p>
          <div class="flex flex-row gap-x-3 my-7">
            <div class="flex flex-col items-center justify-center">
              <div
                id="days_gts"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Hari</p>
            </div>
            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
            <div class="flex flex-col items-center justify-center">
              <div
                id="hours_gts"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Jam</p>
            </div>
            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
            <div class="flex flex-col items-center justify-center">
              <div
                id="minutes_gts"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Menit</p>
            </div>
            <div class="hidden xs:flex items-center text-white font-bold text-xl self-start pt-3">:</div>
            <div class="hidden xs:flex flex-col items-center justify-center">
              <div
                id="seconds_gts"
                class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center"
              >
                00
              </div>
              <p class="flex text-white text-base font-normal">Detik</p>
            </div>
          </div>
        </div>
      </div>
      {{-- Penyisihan Card Start --}}
      <div class="flex justify-center rounded-xl bg-[#191A1E] p-5 max-w-[580px] md:max-w-[477px] w-full mt-4">
        <div class="flex flex-col text-white items-center space-y-4 text-center">
          <p class="text-xl font-medium">
            Currently in <span class="bg-gradient-green-r bg-clip-text text-transparent font-bold">IS Class</span>
          </p>
          <p class="text-3xl sm:text-5xl bg-gradient-green-r bg-clip-text text-transparent font-bold">Penyisihan</p>
          <a
            href="/"
            class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-green-400 hover:bg-[#16171a] hover:brightness-75"
            >Lihat Guidebook</a
          >
        </div>
      </div>
      {{-- Penyisihan Card End --}}
      <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-6 mb-4">Pengumuman</div>
      <div class="flex flex-col space-y-4">
        {{-- Seleksi Pengunguman Card Start --}}
        <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 pb-8 justify-start items-center"
        >
          <div class="flex flex-col gap-y-3">
            <div
              class="flex flex-row justify-between gap-2 bg-gradient-green-r px-4 sm:px-9 rounded-t-xl items-center py-4"
            >
              <p class="flex text-white font-lg text-xl sm:text-2xl font-poppins font-bold tracking-wider">
                Seleksi <br/>IS Class
              </p>
              <img src="{{ asset('images/logo-ise-color.png') }}" alt="logo-ise" class="w-16 sm:w-20 h-12 sm:h-16" />
            </div>
            <div class="flex flex-col items-left justify-center text-left space-y-4 px-4 sm:px-9 text-white">
              <h3 class="font-semibold text-lg">Deadline 24 August 2023</h3>
              <p class="text-base font-light">
                Hi Futurizen! Saat ini kamu dapat mengunduh soal seleksi Information Systems Class ISE! 2023 dengan batas
                pengumpulan <span class="font-semibold">24 Agustus 2023 Pukul 23.59</span>. Jangan lupa untuk
                memperhatikan panduan pengumpulan ya!
              </p>
              <p class="bg-gradient-green-br text-transparent bg-clip-text font-semibold">GoodLuck!</p>
              <a
                href="#"
                class="bg-gradient-green-r w-full py-3 rounded-md text-center font-semibold hover:brightness-75"
                >Find out more</a
              >
            </div>
          </div>
        </div>
        {{-- Seleksi Pengunguman Card End --}} {{-- Congratz Pengunguman Card Start --}}
        <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex text-transparent bg-gradient-green-r bg-clip-text font-lg text-xl sm:text-2xl font-poppins font-bold tracking-wider gap-1 items-center"
            >
              Congratulations <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
            </p>
            <div class="flex flex-col items-left justify-center text-left space-y-4 text-white">
              <p class="text-base font-light">
                Selamat datang di babak Semi-final! Tim kamu berhasil lolos babak penyisihan dan berhak lanjut ke tahap
                berikutnya. Tetap semangat dan terus berjuang!
              </p>
            </div>
          </div>
        </div>
        {{-- Congratz Pengunguman Card End --}} {{-- Gagal Pengunguman Card Start --}}
        <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex text-red-700 font-lg text-xl sm:text-2xl font-poppins font-bold tracking-wider gap-1 items-center"
            >
              Jangan Putus Asa
            </p>
            <div class="flex flex-col items-left justify-center text-left space-y-4 text-white">
              <p class="text-base font-light">
                Tim kamu dinyatakan gagal babak penyisihan. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
                Tetap semangat dan terus berjuang!
              </p>
            </div>
          </div>
        </div>
        {{-- Gagal Pengunguman Card End --}} {{-- Commitment Fee Pengunguman Card Start --}}
        <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 pb-8 justify-start items-center"
        >
          <div class="flex flex-col gap-y-3">
            <div
              class="flex flex-row justify-between gap-2 bg-gradient-green-r px-4 sm:px-9 rounded-t-xl items-center py-4"
            >
              <p class="flex text-white font-lg text-xl sm:text-2xl font-poppins font-bold tracking-wider">Selamat</p>
              <img src="{{ asset('images/logo-ise-color.png') }}" alt="logo-ise" class="w-16 sm:w-20 h-12 sm:h-16" />
            </div>
            <div class="flex flex-col items-left justify-center text-left space-y-4 px-4 sm:px-9 text-white">
              <h3 class="font-bold text-xl">Tim kamu berhasil lolos tahap seleksi Information Systems Class ISE! 2023</h3>
              <p class="text-base font-light">Lakukan pembayaran commitment fee agar dapat mengikuti rangkaian acara</p>
              <p class="text-xl font-bold">
                Jumlah yang harus dibayar: <br />
                <span class="bg-gradient-green-br text-transparent bg-clip-text font-bold">Rp 150.000</span>
              </p>

              <a
                href="#"
                class="bg-gradient-green-r w-full py-3 rounded-md text-center font-semibold hover:brightness-75"
                >Bayar</a
              >
            </div>
          </div>
        </div>
        {{-- Commitment Fee Pengunguman Card End --}}
      </div>
    </div>
  </section>
</div>
@endif

<script type="text/javascript">
  const datetime = '{{ $date }}';
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
  const countdownDate_gts = new Date('July 22, 2023 00:00:00').getTime();

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

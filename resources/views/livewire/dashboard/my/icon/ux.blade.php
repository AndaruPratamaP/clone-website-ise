@section('title', 'UX Academy Home') @if (!$isRegistered)
<div class="w-full min-h-screen p-4 xl:pl-12 font-poppins">
  <section>
    <div class="flex mb-5">
      <p class="text-2xl bg-gradient-blue-r font-bold bg-clip-text text-transparent tracking-[0.07em]">
        User Experience Academy
      </p>
    </div>
  </section>
  <section>
    <div class="flex flex-col-reverse xl:flex-row gap-x-5 gap-y-5">
      <div class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] py-8 px-9 max-w-4xl">
        <div class="flex flex-col text-white">
          <p class="self-center pb-3 text-xl font-medium xl:self-start">Deskripsi</p>
          <p class="pt-4 text-sm font-light text-justify sm:text-base">
            User Experience Academy ISE! 2023 merupakan kegiatan talkshow interaktif yang diadakan secara online dan
            merupakan rangkaian acara pembuka untuk kegiatan ISE! 2023. Secara umum, User Experience Academy akan membahas
            perkembangan era digital dan isu teknologi terkini. Konsep dari User Experience Academy akan dikemas dengan
            suasana yang lebih santai serta terbuka gratis untuk masyarakat umum. Pada ISE! 2023, User Experience Academy
            akan membawakan tema, yaitu “Tech Innovators: Revolutionizing Industries with IT Solutions”
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
              href="{{ route('my.uxacademy.registration') }}"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-gradient-to-r from-[#348BB6] to-[#A3D2F3] hover:brightness-75"
              >Daftar Sekarang!</a
            >
            <a
              href="https://drive.google.com/file/d/1-liBwyDS_FUtt9D0wzE1gHa_DfH8aipl/view"
              target="blank"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-blue-400 hover:bg-[#16171a] hover:brightness-75"
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
            23 Jul
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Registration <br />
              Open
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 translate-x-0 sm:-translate-x-4">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              22 Aug
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Registration <br />
              Closed
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              25-29 Aug
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Pengerjaan <br />
              Seleksi
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              02 Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Hasil <br />
              Seleksi
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              09-10 Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              UXA <br />
              Week 1
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 translate-x-0 sm:translate-x-4">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              16 - 17 Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              UXA <br />
              Week 2
            </p>
          </div>
          <div class="flex gap-1.5 sm:gap-0 flex-col w-24 text-center translate-y-0 sm:translate-y-2 lg:translate-y-3 sm:translate-x-10">
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
              23 - 24 Sep
            </p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-4 h-5 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-blue-r"></div>
            </div>
            <p class="text-sm sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">
                UXA <br />
                Week 3
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
        <span class="font-bold text-transparent bg-gradient-blue-r bg-clip-text">User Experience Academy</span>
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
          <x-heroicon-s-arrow-left-on-rectangle class="relative z-0 text-blue-400 rotate-180 w-14 h-14" />
          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Pendaftaran</p>
            <p class="text-2xl font-bold text-transparent bg-gradient-blue-r bg-clip-text">
              {{ $isRegistered ? 'Sudah Terdaftar' : 'Belum Terdaftar' }}
            </p>
          </div>
        </div>
      </div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row items-center w-full gap-x-6">
          @if($peserta->status_type->id == '7')
          <x-heroicon-s-folder-open class="relative z-0 text-red-800 w-14 h-14" />
          @elseif ($peserta->status_type->id != '4' && $peserta->status_type->id != '7')
          <x-heroicon-s-folder-open class="relative z-0 text-blue-400 w-14 h-14" />
          @else
          <x-heroicon-s-folder-open class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
          @endif

          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Berkas</p>
            <p
              class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '5') bg-gradient-blue-r bg-clip-text text-transparent @endif"
            >
              @if($peserta->status_type->id == '4')
                Sedang Diperiksa Admin
              @elseif($peserta->status_type->id == '7')
              <span class="text-red-800">
                Ditolak Admin
              </span>
              @else
              <span class="text-transparent bg-gradient-blue-r bg-clip-text">Terverifikasi</span>
              @endif
            </p>
          </div>
        </div>
      </div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row items-center w-full gap-x-6">
          @if($peserta->status_type->id == 10)
            <x-heroicon-s-arrow-trending-up class="relative z-0 text-red-800 w-14 h-14" />
          @elseif ($peserta->status_type->id == 8)
            <x-heroicon-s-arrow-trending-up class="relative z-0 text-blue-400 w-14 h-14" />
          @else
            <x-heroicon-s-arrow-trending-up class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
          @endif

          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Seleksi</p>
            <p
              class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '6') bg-gradient-blue-r bg-clip-text text-transparent @endif"
            >
            @if($peserta->status_type->id == '9' && $peserta->answer_file == null)
            <span id="status_seleksi">Silahkan Upload Jawaban</span>
            @elseif($peserta->status_type->id == '9' && $peserta->answer_file !== null)
              Sedang Diperiksa Admin
            @elseif($peserta->status_type->id == '8')
            <span class="text-transparent bg-gradient-blue-r bg-clip-text">
              Lolos Seleksi
            </span>
            @elseif($peserta->status_type->id == '10')
            <span class="text-red-800">
                Tidak Lolos Seleksi
              </span>
            @else
              Menunggu seleksi berkas
            @endif
            </p>
          </div>
        </div>
      </div>

      <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-5 mb-3.5">Biodata Kamu</div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center"
      >
        <div class="flex flex-col justify-center w-full space-y-6 items-left">
          {{-- Ketua Tim Start--}}
          <div class="flex-col justify-center w-full items-left">
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->full_name }}
              </p>
              @if($peserta->answer_file !== NULL)
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File Seleksi</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->answer_file) }}" target="_blank" class="text-blue-400">Lihat File Seleksi</a>
              </p>
              @endif
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Instansi</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->institution }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Jurusan</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->major }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->email }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Handphone</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->handphone }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->instagram_link) }}" target="_blank" class="text-blue-400">Lihat Instagram</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->twibbon_link) }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">CV</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->cv_file) }}" target="_blank">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Pelajar</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->student_card) }}" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Pembayaran</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->payment->payment_proof_file) }}" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa alasan anda mengikuti ISE! User Experience Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_1 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang anda harapkan dari ISE! User Experience Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_2 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang dapat kamu lakukan dengan ilmu yang diperoleh pasca ISE! User Experience Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_3 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Darimana Anda mendapatkan informasi terkait ISE! User Experience Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_4 }}
              </p>
            </div>
          </div>
          {{-- Ketua Tim End--}}
        </div>
      </div>
    </div>

    <div class="flex flex-col items-center md:items-start my-1.5 w-full">
      <div class="flex justify-center rounded-xl bg-[#191A1E] p-5 max-w-[580px] md:max-w-[477px] w-full">
        <div class="flex flex-col items-center text-center text-white">
          <p class="text-xl font-medium">Seleksi User Experience Academy Telah Selesai</p>
          {{-- <div class="flex flex-row gap-x-3 my-7">
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
          </div> --}}
          <a
          href="https://drive.google.com/file/d/1-liBwyDS_FUtt9D0wzE1gHa_DfH8aipl/view"
          target="blank"
          class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-blue-400 hover:bg-[#16171a] hover:brightness-75 mt-4"
          >Lihat Guidebook</a
        >
        </div>
      </div>
      <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-6 mb-4">Pengumuman</div>
      <div class="flex flex-col space-y-4">
        @if($peserta->status_type->id == '4')
        {{-- After Register --}}
         <div class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9">
      <div class="flex flex-col gap-y-3">
        <p
          class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-blue-r bg-clip-text font-lg sm:text-2xl font-poppins"
        >
          Terimakasih Sudah Mendaftar
        </p>
        <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
          <p class="text-base font-light">
            Silahkan persiapkan dirimu untuk mengikuti seleksi User Experience Academy 2023 yang akan dimulai pada tanggal 25 Agustus 2023 hingga 29 Agustus 2023.
          </p>
        </div>
      </div>
    </div>
      </div>
        @elseif($peserta->status_type->id == '9')
        {{-- After Register --}}
         <div class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9">
      <div class="flex flex-col gap-y-3">
        <p
          class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-blue-r bg-clip-text font-lg sm:text-2xl font-poppins"
        >
          Terimakasih Sudah Mengikuti Seleksi
        </p>
        <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
          <p class="text-base font-light">
            Silahkan tunggu hasil seleksi dari kami.
          </p>
        </div>
      </div>
    </div>
      </div>

        @elseif($peserta->status_type->id == '5' && $peserta->answer_file == null)
        <!-- Lolos Berkas -->
        <div id="after_regist_announcement"
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
          <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-blue-r bg-clip-text font-lg sm:text-2xl font-poppins"
          >
            Seleksi telah berakhir
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
              Terimakasih atas antusiasmenya terhadap User Experience Academy.
            </p>
          </div>
        </div>
      </div>
        {{-- <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 pb-8 justify-start items-center"
         >
          <div class="flex flex-col gap-y-3">
            <div
              class="flex flex-row items-center justify-between gap-2 px-4 py-4 bg-gradient-blue-r sm:px-9 rounded-t-xl"
            >
              <p class="flex text-xl font-bold tracking-wider text-white font-lg sm:text-2xl font-poppins">
                Seleksi User <br /> Experience Academy
              </p>
              <img src="{{ asset('images/logo-ise-color.png') }}" alt="logo-ise" class="w-16 h-12 sm:w-20 sm:h-16" />
            </div>
            <div class="flex flex-col justify-center px-4 space-y-4 text-left text-white items-left sm:px-9">
              <h3 class="text-lg font-semibold">Deadline 29 August 2023</h3>
              <p class="text-base font-light">
                Hi Futurizen! Saat ini kamu dapat mengunduh soal seleksi User Experience Academy ISE! 2023 dengan batas
                pengumpulan <span class="font-semibold">29 Agustus 2023 Pukul 23.59</span>. Jangan lupa untuk
                memperhatikan panduan pengumpulan ya!
              </p>
              <p class="font-semibold text-transparent bg-gradient-blue-br bg-clip-text">GoodLuck!</p>
              <a
                href="/my/ux/selection"
                class="w-full py-3 font-semibold text-center rounded-md bg-gradient-blue-r hover:brightness-75"
                >Find out more</a
              >
            </div>
          </div>
        </div> --}}
        {{-- Seleksi Pengunguman Card End --}} {{-- Congratz Pengunguman Card Start --}}
        @elseif($peserta->status_type->id == '7')
          <!-- Gagal Berkas -->
          <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
            >
              Jangan Putus Asa
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">
                Kamu dinyatakan gagal dalam verifikasi berkas UX Academy 2023. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
                Tetap semangat dan terus berjuang!
                <div class="my-1"></div>
                Hubungi kami apabila ada pertanyaaan lebih lanjut.
                <a href="https://wa.me/+6281332049750" target="blank" class="text-blue-400 hover:underline decoration-blue-400 ">Contact Us</a>
              </p>
            </div>
          </div>
        </div>
        @elseif($peserta->status_type->id == '8')
          <!-- Lolos Seleksi -->
          <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-blue-r bg-clip-text font-lg sm:text-2xl font-poppins"
            >
              Congratulations <x-heroicon-s-sparkles class="w-7 h-7 text-amber-400" />
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
                <p class="text-base font-light">
                    Selamat, kamu telah lolos seleksi UX Academy 2023. Silahkan join grup Whatsapp Berikut untuk tahap selanjutnya <a href="https://chat.whatsapp.com/FZDtE0wI9QeEcAE9pkYvKG" target="blank" class="bg-gradient-blue-r text-transparent bg-clip-text font-bold hover:underline underline-offset-4 decoration-blue-500 decoration-2">join</a>
                  </p>
            </div>
          </div>
        </div>
        @elseif($peserta->status_type->id == '10')
        <div
        class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
      >
        <div class="flex flex-col gap-y-3">
          <p
            class="flex items-center gap-1 text-xl font-bold tracking-wider text-red-700 font-lg sm:text-2xl font-poppins"
          >
            Jangan Putus Asa
          </p>
          <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
            <p class="text-base font-light">
              Kamu dinyatakan gagal dalam seleksi UX Academy 2023. Ini bukanlah akhir dan kesempatan lain akan selalu terbuka.
              Tetap semangat dan terus berjuang!
            </p>
          </div>
        </div>
      </div>
        @endif
      </div>
    </div>
  </section>
</div>
@endif

<script type="text/javascript">
  const datetime = "August 22, 2023 23:59:59";
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
  const countdownDate_gts = new Date('August 25, 2023 00:00:00').getTime();
  const countdownDate_seleksi = new Date('August 25, 2023 00:00:00').getTime();
  const countdownDate_close_seleksi = new Date('August 29, 2023 23:59:59').getTime();

  // Update the countdown every second
  const countdownTimer_gts = setInterval(() => {
    // Get today's date and time
    const now = new Date().getTime();

    // Find the distance between now and the countdown date
    let distance;
    if (countdownDate_gts - now < 0) {
        distance = countdownDate_close_seleksi - now;
    } else {
        distance = countdownDate_gts - now;
    }

    const distance_selection = countdownDate_seleksi - now;

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
    document.getElementById('status_seleksi').innerHTML = 'Menunggu seleksi berkas'

    // Seleksi Start
    if (distance_selection < 0) {
      document.getElementById('status_seleksi').innerHTML = 'Silahkan Upload Jawaban'
      document.getElementById('selection_announcement').classList.remove('hidden');
      document.getElementById('after_regist_announcement').classList.add('hidden');
    } else {

    }

    // If the countdown is finished, display a message
    if (distance < 0) {
      clearInterval(countdownTimer_gts);
      document.getElementById('days_gts').innerHTML = '0';
      document.getElementById('hours_gts').innerHTML = '0';
      document.getElementById('minutes_gts').innerHTML = '0';
      document.getElementById('seconds_gts').innerHTML = '0';

    }
  }, 1000);

    //   Start Selection

</script>

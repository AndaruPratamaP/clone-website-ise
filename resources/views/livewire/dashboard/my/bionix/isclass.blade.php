@section('title', 'IS Class Home') @if (!$isRegistered)
<div class="w-full min-h-screen p-4 xl:pl-12 font-poppins">
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
          <p class="self-center pb-3 text-xl font-medium xl:self-start">Deskripsi</p>
          <p class="pt-4 text-sm font-light text-justify sm:text-base">
            Information Systems Class ISE! 2023 merupakan kegiatan talkshow interaktif yang diadakan secara online dan
            merupakan rangkaian acara pembuka untuk kegiatan ISE! 2023. Secara umum, Information Systems Class akan
            membahas perkembangan era digital dan isu teknologi terkini. Konsep dari Information Systems Class akan
            dikemas dengan suasana yang lebih santai serta terbuka gratis untuk masyarakat umum. Pada ISE! 2023,
            Information Systems Class akan membawakan tema, yaitu “Tech Innovators: Revolutionizing Industries with IT
            Solutions”
          </p>
        </div>
      </div>

      <div
        class="flex rounded-xl bg-[#191A1E] p-5 max-w-4xl xl:max-w-[400px] w-full shrink-0 justify-center items-center"
      >
        <div class="flex flex-col items-center text-center text-white">
          <p class="text-xl font-medium">Pendaftaran Ditutup Dalam</p>
          <div class="flex flex-row gap-x-3 my-7">
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
              href="{{ route('my.isclass.registration') }}"
              class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-gradient-green-br hover:brightness-75"
              >Daftar Sekarang!</a
            >
            <a
              href="http://ise-its.com/go/GuidebookISClass"
              target="blank"
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
      <div class="flex flex-col items-center w-full">
        <p class="flex self-center -mt-8 text-2xl font-medium text-white xl:self-start">Timeline</p>
        <span
          class="flex flex-row max-w-sm xl:max-w-[600px] 2xl:max-w-4xl w-full justify-between items-center h-[4px] bg-[#333333] text-white mt-20"
        >
          <div class="flex flex-col w-24 text-center -translate-x-10 translate-y-2 lg:translate-y-3">
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">23 Jul</p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-3 h-4 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-green-r"></div>
            </div>
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Registration <br />
              Open
            </p>
          </div>
          <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3">
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">20 Ags</p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-3 h-4 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-green-r"></div>
            </div>
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
              Registration <br />
              Closed
            </p>
          </div>
          <div class="flex flex-col w-24 text-center translate-x-10 translate-y-2 lg:translate-y-3">
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">28 Ags</p>
            <div class="w-4 h-4 mx-auto bg-black rounded-full sm:w-5 sm:h-5">
              <div class="w-3 h-4 mx-auto rounded-full sm:w-4 sm:h-5 bg-gradient-green-r"></div>
            </div>
            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">
              Pelaksanaan
              <br />
              IS Class
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
        <span class="font-bold text-transparent bg-gradient-green-r bg-clip-text">Information Systems Class</span>
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
          <x-heroicon-s-arrow-left-on-rectangle class="relative z-0 text-green-500 rotate-180 w-14 h-14" />
          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Pendaftaran</p>
            <p class="text-2xl font-bold text-transparent bg-gradient-green-r bg-clip-text">
              {{ $isRegistered ? 'Sudah Terdaftar' : 'Belum Terdaftar' }}
            </p>
          </div>
        </div>
      </div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center"
      >
        <div class="flex flex-row items-center w-full gap-x-6">
          @if ($peserta->status_type->id == '19')
          <x-heroicon-s-folder-open class="relative z-0 text-green-500 w-14 h-14" />
          @else
          <x-heroicon-s-folder-open class="relative z-0 w-14 h-14 text-[#B5B3BC]" />
          @endif

          <div class="flex flex-col">
            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Berkas</p>
            <p
              class="text-2xl font-bold text-[#B5B3BC] @if ($peserta->status_type->id == '19') bg-gradient-green-r bg-clip-text text-transparent @endif"
            >
              @if ($peserta->status_type->id == '18') Belum Terverifikasi @elseif ($peserta->status_type->id == '19')
              Terverifikasi @endif
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

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Instansi</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Pelajar</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->student_card_file) }}" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->twibbon_link) }}" target="_blank" >
                    Lihat Twibbon
                </a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Pembayaran</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->payment->payment_proof_file) }}" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Upload Poster</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->upload_poster_file) }}" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Follow Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->follow_proof_file) }}" />
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
          <p class="text-xl font-medium">Information Systems Class Dimulai</p>
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
            href="http://ise-its.com/go/GuidebookISClass"
            target="blank"
            class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-green-400 hover:bg-[#16171a] hover:brightness-75"
            >Lihat Guidebook</a
          >
        </div>
      </div>
      <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-6 mb-4">Pengumuman</div>
      <div class="flex flex-col space-y-4">
        {{-- After Registration Start --}}
        <div
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-green-r bg-clip-text font-lg sm:text-2xl font-poppins"
            >
              Terimakasih Sudah Mendaftar
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">Silahkan tunggu pengunguman lebih lanjut dari kami.</p>
            </div>
          </div>
        </div>
        {{-- After Registration End --}}
        {{-- After Verification Start --}}
        {{-- <div
          id="after_regist_announcement"
          class="flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 justify-start items-center px-4 sm:px-9"
        >
          <div class="flex flex-col gap-y-3">
            <p
              class="flex items-center gap-1 text-xl font-bold tracking-wider text-transparent bg-gradient-green-r bg-clip-text font-lg sm:text-2xl font-poppins"
            >
              Berkas Berhasil Diverifikasi
            </p>
            <div class="flex flex-col justify-center space-y-4 text-left text-white items-left">
              <p class="text-base font-light">
                Berkas kamu berhasil diverifikasi, untuk informasi lebih lanjutnya silahkan ikuti Whatsapp Group <a href="https://chat.whatsapp.com/F4hQL7ZXVp9It2wFQf2rJb" class="text-green-500 hover:underline decoration-green-500">ini</a>
              </p>
            </div>
          </div>
        </div> --}}
        {{-- Gagal Pengunguman Card End --}}
      </div>
    </div>
  </section>
</div>
@endif

<script type="text/javascript">
  const datetime = 'August 21, 2023 00:00:00';
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
  const countdownDate_gts = new Date('August 29, 2023 00:00:00').getTime();

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

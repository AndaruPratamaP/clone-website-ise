@section('title', 'Home Dashboard')
<div class="flex flex-col w-full min-h-screen m-4 space-y-6 text-white sm:space-y-10 sm:m-6 font-montserrat">
  <h1 class="text-2xl font-bold sm:text-3xl md:text-4xl">Halo, Selamat Datang {{ Auth::user()->full_name }}</h1>
  <div>
    <h2 class="text-xl md:text-2xl font-bold text-[#B5B3BC]">Pengumuman</h2>
    <div class="grid w-full grid-cols-1 gap-4 mt-4 sm:grid-cols-2 2xl:grid-cols-3">
      {{-- GTS Card --}} {{--
      <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <h2 class="mt-3 text-xl font-bold text-blue-400 md:text-2xl sm:mt-4">Grand Talk Show</h2>
        <p class="text-sm font-semibold text-gray-500">Untuk Mahasiswa Sederajat</p>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran Grand Talk Show telah ditutup, terimakasih atas antusiasmenya. Saksikan acara-acara lain dari kami
          <a
            href="https://www.instagram.com/is_expo/"
            target="blank"
            class="text-transparent bg-gradient-green-r bg-clip-text hover:border-b-[2px] border-green-400"
            >disini</a
          >
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/gts"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div>
      --}} {{-- BIONIX ROADSHOW Class Card --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <div>
        <h2 class="mt-3 text-xl font-bold text-transparent bg-gradient-green-br bg-clip-text md:text-2xl sm:mt-4">
          BIONIX Roadshow
        </h2>
        <p class="text-sm font-semibold text-gray-500">Untuk SMA/SMK Sederajat</p>
    </div>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
            Pendaftaran BIONIX Competition Roadshow telah dibuka. Bagi anda yang <span class="font-bold">mengikuti Roadshow kami</span> , silahkan daftar melalui tombol dibawah:
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/bionix-rd"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-green-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div> --}}
      {{-- BIONIX Card --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <div>
        <h2 class="mt-3 text-xl font-bold text-transparent bg-gradient-green-br bg-clip-text md:text-2xl sm:mt-4">
          BIONIX
        </h2>
        <p class="text-sm font-semibold text-gray-500">Untuk SMA/SMK Sederajat</p>
    </div>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran BIONIX Competition telah dibuka, cepat daftar sebelum kehabisan quota. Ikuti kompetisinya dan raih free pass departemen Sistem Informasi ITS.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/bionix"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-green-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div> --}}
      {{-- UX Academy Card --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <div>
        <h2 class="mt-3 text-xl font-bold text-blue-400 md:text-2xl sm:mt-4">User Experience Academy</h2>
        <p class="text-sm font-semibold text-gray-500">Untuk Mahasiswa Sederajat</p>
            </div>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran User Experience Academy telah dibuka. Segera daftarkan dirimu sekarang juga dan pelajari User
          Experience (UX) bersama kami.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/ux"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div> --}}
      {{-- DS Academy Card --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <div>
        <h2 class="mt-3 text-xl font-bold text-blue-400 md:text-2xl sm:mt-4">Data Science Academy</h2>
        <p class="text-sm font-semibold text-gray-500">Untuk Mahasiswa Sederajat</p>
            </div>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran Data Science Academy telah dibuka. Segera daftarkan dirimu sekarang juga dan pelajari Data Science
          (DS) bersama kami.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/ds"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div> --}}
      {{-- IS Class Card --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <div>
        <h2 class="mt-3 text-xl font-bold text-transparent bg-gradient-green-br bg-clip-text md:text-2xl sm:mt-4">
          Information Systems Class
        </h2>
        <p class="text-sm font-semibold text-gray-500">Untuk SMA/SMK Sederajat</p>
    </div>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran Information Systems Class telah dibuka. Alami dan nikmati suasana perkuliahan di jurusan Sistem
          Informasi ITS bersama kami.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/isclass"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-green-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div> --}}
      {{-- RISE --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl w-full px-7 pt-4 pb-6 justify-between">
        <div>
        <h2 class="mt-3 text-xl font-bold text-transparent bg-gradient-orange-br bg-clip-text md:text-2xl sm:mt-4">
          RISE
        </h2>
        <p class="text-sm font-semibold text-gray-500">Untuk Mahasiswa Sederajat</p>
        </div>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
            Pendaftaran RISE telah dibuka, jadi jangan lewatkan kesempatan emas ini! Ikuti lomba business case dan berkesempatan untuk meraih total hadiah sebesar 10 juta rupiah.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/rise"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-orange-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div> --}}
    </div>
  </div>
</div>

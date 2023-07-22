@section('title', 'Home Dashboard')
<div class="flex flex-col w-full min-h-screen m-4 space-y-6 text-white sm:space-y-10 sm:m-6 font-montserrat">
  <h1 class="text-2xl font-bold sm:text-3xl md:text-4xl">Halo, Selamat Datang {{ Auth::user()->full_name }}</h1>
  <div>
    <h2 class="text-xl md:text-2xl font-bold text-[#B5B3BC]">Pengumuman</h2>
    <div class="flex flex-row flex-wrap w-full gap-4 mt-4">
      {{-- GTS Card --}}
      {{-- <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-md w-full px-7 pt-4 pb-6">
        <h2 class="mt-3 text-xl font-bold text-blue-400 md:text-2xl sm:mt-4">Grand Talk Show</h2>
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
      </div> --}}
      {{-- UX Academy Card --}}
      <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-md w-full px-7 pt-4 pb-6">
        <h2 class="mt-3 text-xl font-bold text-blue-400 md:text-2xl sm:mt-4">User Experience Academy</h2>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran User Experience Academy telah dibuka. Segera daftarkan dirimu sekarang juga dan pelajari User Experience (UX) bersama kami.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/ux"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div>
      {{-- DS Academy Card --}}
      <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-md w-full px-7 pt-4 pb-6">
        <h2 class="mt-3 text-xl font-bold text-blue-400 md:text-2xl sm:mt-4">Data Science Academy</h2>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran Data Science Academy telah dibuka. Segera daftarkan dirimu sekarang juga dan pelajari Data Science (DS) bersama kami.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/ds"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div>
      {{-- IS Class Card --}}
      <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-md w-full px-7 pt-4 pb-6">
        <h2 class="mt-3 text-xl font-bold text-transparent bg-gradient-green-br bg-clip-text md:text-2xl sm:mt-4">Information Systems Class</h2>
        <p class="mt-1 text-sm font-medium tracking-wide md:text-base sm:mt-2">
          Pendaftaran Information Systems Class telah dibuka. Alami dan nikmati suasana perkuliahan di jurusan Sistem Informasi ITS bersama kami.
        </p>
        <div class="flex flex-row items-center justify-center w-full gap-4 mt-4 sm:mt-6">
          <a
            href="/my/isclass"
            class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-green-r hover:brightness-75"
            >Continue</a
          >
        </div>
      </div>
    </div>
  </div>
</div>

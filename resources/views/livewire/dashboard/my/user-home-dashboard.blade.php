@section('title', 'Home Dashboard')
<div class="flex flex-col w-full space-y-6 sm:space-y-10 text-white m-4 sm:m-6 font-montserrat min-h-screen">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Halo, Selamat Datang {{ Auth::user()->full_name }}</h1>
    <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#B5B3BC]">Pengumuman</h2>
        <div class="flex flex-row flex-wrap gap-4 mt-4 w-full">
            <div class="flex flex-col items-start bg-[#191A1E] rounded-3xl max-w-xs lg:max-w-md w-full px-7 pt-4 pb-6">
                <p class="text-base md:text-lg font-bold">Announcement</p>
                <h2 class="text-xl md:text-2xl font-bold text-blue-400 mt-3 sm:mt-4">Grand Talk Show</h2>
                <p class="text-sm md:text-base font-medium tracking-wide mt-1 sm:mt-2">Pendaftaran Grand Talk Show telah dibuka.</p>
                {{-- <p class="text-sm md:text-base font-medium tracking-wide mt-1 sm:mt-2">Pendaftaran Grand Talk Show telah ditutup, terimakasih atas antusiasmenya.</p> --}}
                <div class="flex flex-row justify-center items-center w-full gap-4 mt-4 sm:mt-6">
                    <a href="/my/gts"class="text-sm md:text-base font-medium rounded-md px-4 sm:px-6 py-1.5 sm:py-2 bg-gradient-blue-r hover:brightness-75">Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>

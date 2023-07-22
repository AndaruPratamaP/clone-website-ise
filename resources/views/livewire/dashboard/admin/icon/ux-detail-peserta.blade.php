@section('title', 'UX Academy Detail Peserta')
<div class="flex flex-col min-h-screen w-11/12 mx-auto font-poppins">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl sm:text-5xl bg-gradient-blue-r bg-clip-text text-transparent font-bold">Detail Peserta UX Academy</h1>
            <p class="text-base text-white font-semibold">{{ $peserta->user->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white">{{ $peserta->status_type->name }}</span></p>
        </div>
        <div class="flex flex-row justify-between items-center gap-4 text-white text-xl font-semibold" x-data="{openReject: false}">
            @if($peserta->status_type->id >= 4 && $peserta->status_type->id <= 7 && $peserta->status_type->id != 5)
            <a href="{{ $peserta->user->id }}/accept-berkas"
                class="bg-gradient-green-r px-6 py-2 rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if(($peserta->status_type->id >= 4 && $peserta->status_type->id <= 7 && $peserta->status_type->id != 7) || $peserta->status_type->id == 10)
            <a href="{{ $peserta->user->id }}/reject-berkas"
                class="bg-red-600 px-6 py-2 rounded-xl hover:brightness-75">Reject Berkas</a>
            @endif
            @if($peserta->status_type->id >= 5 && $peserta->status_type->id <= 10 && $peserta->status_type->id != 8 && $peserta->status_type->id != 7)
            <a href="{{ $peserta->user->id }}/accept-seleksi-soal"
                class="bg-gradient-green-r px-6 py-2 rounded-xl hover:brightness-75">Accept Seleksi Soal</a>
            @endif
            @if($peserta->status_type->id >= 8 && $peserta->status_type->id <= 10 && $peserta->status_type->id != 10)
            <a href="{{ $peserta->user->id }}/reject-seleksi-soal"
                class="bg-red-600 px-6 py-2 rounded-xl hover:brightness-75">Reject Seleksi Soal</a>
            @endif
        </div>
    </div>
    <div class="flex flex-col gap-y-1 bg-[#191A1E] p-6 rounded-xl mt-12 text-base sm:text-lg">
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->user->full_name }}
        </p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Instansi</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->user->institution }}
        </p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Jurusan</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->major }}
        </p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->user->email }}
        </p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Handphone</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->user->handphone }}
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Instagram</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->instagram_link }}
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Twibbon</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->twibbon_link }}
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">CV</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        <a href="{{ url($peserta->cv_file) }}" target="_blank">Lihat CV</a>
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Pelajar</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        <img src="{{ url($peserta->student_card) }}" />
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa alasan anda mengikuti ISE! User Experience Academy?</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->motive_1 }}
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang anda harapkan dari ISE! User Experience Academy?</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->motive_2 }}
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang dapat kamu lakukan dengan ilmu yang diperoleh pasca ISE! User Experience Academy?</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->motive_3 }}
        </p>

        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Darimana Anda mendapatkan informasi terkait ISE! User Experience Academy?</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
        {{ $peserta->motive_4 }}
        </p>

        @if($peserta->answer_file !== NULL)
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban Seleksi Soal</p>
        <a href="{{ url($peserta->answer_file) }}" target="_blank">Lihat Jawaban</a>
        </p>
        @endif


    </div>
</div>

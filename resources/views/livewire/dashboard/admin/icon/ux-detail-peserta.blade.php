@section('title', 'UX Academy Detail Peserta')
<div class="flex flex-col w-11/12 min-h-screen mx-auto font-poppins">
    <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl font-bold text-transparent sm:text-5xl bg-gradient-blue-r bg-clip-text">Detail Peserta UX Academy</h1>
            <p class="text-base font-semibold text-white">{{ $peserta->user->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status:
                @if($peserta->status_type->name == 'UX.RevisiSeleksi')
                <span class="text-white">UX.RegisteredSeleksi</span></p>
                @else
                <span class="text-white">{{ $peserta->status_type->name }}</span>
                @endif
            </p>
        </div>
        <div class="flex flex-row flex-wrap items-center justify-between gap-4 text-xl font-semibold text-center text-white sm:flex-nowrap" x-data="{openReject: false}">
            @if($peserta->status_type->id == 4 || $peserta->status_type->id == 7)
            <a href="{{ $peserta->user->id }}/accept-berkas"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if($peserta->status_type->id == 4 || $peserta->status_type->id == 5)
            <a href="{{ $peserta->user->id }}/reject-berkas"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Berkas</a>
            @endif
            @if($peserta->status_type->id == 9 || $peserta->status_type->id == 10)
            <a href="{{ $peserta->user->id }}/accept-seleksi-soal"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Seleksi Soal</a>
            @endif
            @if($peserta->status_type->id == 9 || $peserta->status_type->id == 8)
            <a href="{{ $peserta->user->id }}/reject-seleksi-soal"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Seleksi Soal</a>
            @endif
        </div>
    </div>
    <div class="flex flex-col gap-y-1 bg-[#191A1E] p-6 rounded-xl mt-12 text-base sm:text-lg">
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
          <img
            src="{{ url($peserta->payment->payment_proof_file) }}"
            alt="Bukti Pembayaran"
          />
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

        @if($peserta->answer_file !== NULL)
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban Seleksi Soal</p>
        <a href="{{ url($peserta->answer_file) }}" target="_blank">Lihat Jawaban</a>
        </p>
        @endif


    </div>
</div>

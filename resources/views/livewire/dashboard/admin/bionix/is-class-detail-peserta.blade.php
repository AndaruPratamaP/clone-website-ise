@section('title', 'IS Class Detail Peserta')
<div class="flex flex-col w-11/12 min-h-screen mx-auto font-poppins">
    <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl font-bold text-transparent sm:text-5xl bg-gradient-green-r bg-clip-text">Detail Peserta IS Class</h1>
            <p class="text-base font-semibold text-white">{{ $peserta->user->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white">{{ $peserta->status_type->name }}</span></p>
        </div>
        <div class="flex flex-row flex-wrap items-center justify-between gap-4 text-xl font-semibold text-center text-white sm:flex-nowrap" x-data="{openReject: false}">
            @if($peserta->status_type->id == 18 || $peserta->status_type->id == 20)
            <a href="{{ $peserta->user->id }}/accept-berkas"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if($peserta->status_type->id == 18 || $peserta->status_type->id == 19)
            <a href="{{ $peserta->user->id }}/reject-berkas"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Berkas</a>
            @endif
        </div>
    </div>
    <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-5 mb-3.5">Biodata Kamu</div>
    <div
      class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center"
    >
      <div class="flex flex-col justify-center w-full space-y-6 items-left">
        {{-- Pelajar Start--}}
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

            <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Phone Number</p>
            <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
              {{ $peserta->user->handphone }}
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
                  {{-- Pelajar End--}}
      </div>
    </div>

        </div>
      </div>
    </div>
</div>

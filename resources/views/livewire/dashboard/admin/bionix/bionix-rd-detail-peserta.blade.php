@section('title', 'Bionix Roadshow Detail Peserta')
<div class="flex flex-col w-11/12 min-h-screen mx-auto font-poppins">
    <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl font-bold text-transparent sm:text-5xl bg-gradient-green-r bg-clip-text">Detail Peserta Bionix Roadshow</h1>
            <p class="text-base font-semibold text-white">{{ $peserta->ketua->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white">{{ $peserta->status_type->name }}</span></p>
        </div>
        <div class="flex flex-row flex-wrap items-center justify-between gap-4 text-xl font-semibold text-center text-white sm:flex-nowrap" x-data="{openReject: false}">
            @if($peserta->status_type->id >= 21 && $peserta->status_type->id <= 23 && $peserta->status_type->id != 22)
            <a href="{{ $peserta->ketua->id }}/accept-dp"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Dp</a>
            @endif
            @if($peserta->status_type->id >= 21 && $peserta->status_type->id < 23)
            <a href="{{ $peserta->ketua->id }}/reject-dp"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Dp</a>
            @endif
            @if($peserta->status_type->id >= 24 && $peserta->status_type->id <= 26 && $peserta->status_type->id != 25)
            <a href="{{ $peserta->ketua->id }}/accept-pelunasan"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Pelunasan</a>
            @endif
            @if($peserta->status_type->id >= 24 && $peserta->status_type->id < 26)
            <a href="{{ $peserta->ketua->id }}/reject-pelunasan"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Pelunasan</a>
            @endif
            @if($peserta->status_type->id >= 27 && $peserta->status_type->id <= 29 && $peserta->status_type->id != 28 )
            <a href="{{ $peserta->ketua->id }}/accept-berkas"
                 class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if($peserta->status_type->id >= 27 && $peserta->status_type->id < 29)
            <a href="{{ $peserta->ketua->id }}/reject-berkas"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Berkas</a>
            @endif
        </div>
    </div>
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
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->school }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Rekening Bank</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->bank_account }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nominal DP</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->dp_amount }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti DP</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->payment_proof_dp) }}"
                  alt="Bukti Pembayaran DP"
                />
              </p>
              @if($peserta->payment_proof_pelunasan !== NULL)
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Pelunasan</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->payment_proof_pelunasan) }}"
                  alt="Bukti Pembayaran Pelunasan"
                />
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
                {{ $peserta->ketua->full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->ketua->email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->ketua->handphone }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Metode Pembayaran</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->payment_method }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Rekening</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->bank_account}}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nominal DP</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->bank_account }}
              </p>
              @if($peserta->ketua_student_card !== NULL)
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->ketua_twibbon_link) }}" target="_blank" class="text-green-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Foto Kartu Pelajar</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->ketua_student_card) }}"
                  alt="Foto Kartu Pelajar"
                />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Foto Poster</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->ketua_poster_file) }}"
                  alt="Foto Poster"
                />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Foto Follow IG</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->ketua_follow_ig_proof) }}"
                  alt="Foto Follow IG"
                />
              </p>
              @endif

            </div>
          </div>
          {{-- Ketua Tim End--}} {{-- Anggota 1 Start--}}
          @if($peserta->anggota_full_name !== NULL)
          <div class="flex-col justify-center w-full items-left">
            <div class="flex flex-row items-center w-full gap-2 mb-3">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->anggota_full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->anggota_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->anggota_wa }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->anggota_twibbon_link) }}" target="_blank" class="text-green-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Foto Kartu Pelajar</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->anggota_student_card) }}"
                  alt="Foto Kartu Pelajar"
                />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Foto Poster</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->anggota_poster_file) }}"
                  alt="Foto Poster"
                />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Foto Follow IG</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->anggota_follow_ig_proof) }}"
                  alt="Foto Follow IG"
                />
              </p>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
</div>

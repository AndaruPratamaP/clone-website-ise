@section('title', 'Rise Detail Peserta')
<div class="flex flex-col w-11/12 min-h-screen mx-auto font-poppins">
  <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
    <div class="flex flex-col items-start gap-2">
      <h1 class="text-4xl font-bold text-transparent sm:text-5xl bg-gradient-orange-r bg-clip-text">
        Detail Peserta Rise
      </h1>
      <p class="text-base font-semibold text-white">{{ $peserta->leader->id }}</p>
      <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">
        Status: <span class="text-white">{{ $peserta->status_type->name }}</span>
      </p>
    </div>
    <div
      class="flex flex-row flex-wrap items-center justify-between gap-4 text-xl font-semibold text-center text-white sm:flex-nowrap"
      x-data="{openReject: false}"
    >
      @if($peserta->status_type->id == 33 || $peserta->status_type->id == 35)
      <a
        href="{{ $peserta->leader->id }}/accept-berkas"
        class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75"
        >Accept Berkas</a
      >
      @endif @if($peserta->status_type->id == 33 || $peserta->status_type->id == 34)
      <a href="{{ $peserta->leader->id }}/reject-berkas" class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75"
        >Reject Berkas</a
      >
      @endif
      @if($peserta->status_type->id == 36 || $peserta->status_type->id == 38)
      <a
        href="{{ $peserta->leader->id }}/accept-penyisihan"
        class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75"
        >Accept Penyisihan</a
      >
      @endif @if($peserta->status_type->id == 36 || $peserta->status_type->id == 37)
      <a href="{{ $peserta->leader->id }}/reject-penyisihan" class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75"
        >Reject Penyisihan</a
      >
      @endif
      @if($peserta->status_type->id == 39 || $peserta->status_type->id == 41)
      <a
        href="{{ $peserta->leader->id }}/accept-pembayaran"
        class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75"
        >Accept Pembayaran</a
      >
      @endif @if($peserta->status_type->id == 39 || $peserta->status_type->id == 40)
      <a href="{{ $peserta->leader->id }}/reject-pembayaran" class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75"
        >Reject Pembayaran</a
      >
      @endif
      @if($peserta->status_type->id == 42 || $peserta->status_type->id == 44)
      <a
        href="{{ $peserta->leader->id }}/accept-semifinal"
        class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75"
        >Accept Semifinal</a
      >
      @endif @if($peserta->status_type->id == 42 || $peserta->status_type->id == 43)
      <a href="{{ $peserta->leader->id }}/reject-semifinal" class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75"
        >Reject Semifinal</a
      >
      @endif
      @if($peserta->status_type->id == 45 || $peserta->status_type->id == 47)
      <a
        href="{{ $peserta->leader->id }}/accept-final"
        class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75"
        >Accept Final</a
      >
      @endif @if($peserta->status_type->id == 45 || $peserta->status_type->id == 46)
      <a href="{{ $peserta->leader->id }}/reject-final" class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75"
        >Reject Final</a
      >
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
          @if($peserta->answer_file_penyisihan !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban Penyisihan</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->answer_file_penyisihan) }}" target="_blank" class="text-orange-400">Lihat Jawaban</a>
                    </p>
                @endif
                @if($peserta->poster_file_penyisihan !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster Penyisihan</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                      <img src="{{ url($peserta->poster_file_penyisihan) }}" alt="Bukti Pembayaran" />
                    </p>
                @endif
                @if($peserta->account_owner !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Rekening Atas Nama</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->account_owner }}
                </p>
                @endif
                @if($peserta->bank_name !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Bank</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                  {{ $peserta->bank_name }}
                </p>
                @endif
                @if($peserta->payment_file !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Pembayaran</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->payment_file) }}" target="_blank" class="text-orange-400">Lihat File</a>
                    </p>
                @endif
                @if($peserta->youtube_link !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Youtube Semifinal</p>
                <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->youtube_link) }}" target="_blank" class="text-orange-400">Lihat Youtube</a>
                </p>
                @endif
                @if($peserta->answer_file_semifinal !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban Semifinal</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->answer_file_semifinal) }}" target="_blank" class="text-orange-400">Lihat Jawaban</a>
                    </p>
                @endif
                @if($peserta->answer_file_final !== NULL)
                <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jawaban final</p>
                    <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                        <a href="{{ url($peserta->answer_file_final) }}" target="_blank" class="text-orange-400">Lihat Jawaban</a>
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
            {{ $peserta->leader->full_name }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->leader->asal_sekolah }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->leader->email }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->leader->handphone }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <a href="{{ url($peserta->leader_twibbon) }}" target="_blank" class="text-orange-400">Lihat Twibbon</a>
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <img src="{{ url($peserta->leader_student_card) }}" alt="Bukti Mahasiswa Aktif" />
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <img src="{{ url($peserta->leader_ig_follow) }}" alt="Bukti follow" />
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <img src="{{ url($peserta->leader_poster) }}" alt="Bukti follow" />
          </p>
        </div>
      </div>
      {{-- Ketua Tim End--}} {{-- Anggota 1 Start--}}
      <div class="flex-col justify-center w-full items-left">
        <div class="flex flex-row items-center w-full gap-2 mb-3">
          <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 1</h3>
          <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
        </div>
        <div class="flex flex-col gap-y-1">
          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->member1_name }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->member1_agency }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->member1_email }}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            {{ $peserta->member1_phone}}
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon Anggota</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <a href="{{ url($peserta->member1_twibbon) }}" target="_blank" class="text-orange-400"
              >Lihat Instagram Anggota 1</a
            >
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <img src="{{ url($peserta->member1_student_card) }}" alt="Bukti Mahasiswa Aktif" />
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <img src="{{ url($peserta->member1_ig_follow) }}" alt="Bukti follow" />
          </p>

          <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster</p>
          <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
            <img src="{{ url($peserta->member1_poster) }}" alt="Bukti follow" />
          </p>

          {{-- Anggota 1 End--}} {{-- Anggota 2 Start--}} @if($peserta->member2_name !== NULL && !empty($peserta->member2_name))
          <div class="flex-col justify-center w-full items-left">
            <div class="flex flex-row items-center w-full gap-2 mb-3">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 2</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->member2_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->member2_agency }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->member2_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->member2_phone}}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon Anggota</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->member2_twibbon) }}" target="_blank" class="text-orange-400"
                  >Lihat Instagram Anggota 2</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->member2_student_card) }}" alt="Bukti Mahasiswa Aktif" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->member2_ig_follow) }}" alt="Bukti follow" />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Poster</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img src="{{ url($peserta->member2_poster) }}" alt="Bukti follow" />
              </p>
            </div>
        </div>
        @endif
        </div>
      </div>
    </div>
  </div>
</div>

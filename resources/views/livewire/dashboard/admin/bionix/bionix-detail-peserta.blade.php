@section('title', 'Bionix Detail Peserta')
<div class="flex flex-col w-11/12 min-h-screen mx-auto font-poppins">
    <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl font-bold text-transparent sm:text-5xl bg-gradient-blue-r bg-clip-text">Detail Peserta Bionix</h1>
            <p class="text-base font-semibold text-white">{{ $peserta->user->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white">{{ $peserta->status_type->name }}</span></p>
        </div>
        <div class="flex flex-row flex-wrap items-center justify-between gap-4 text-xl font-semibold text-center text-white sm:flex-nowrap" x-data="{openReject: false}">
            @if($peserta->status_type->id == 30 || $peserta->status_type->id == 32)
            <a href="{{ $peserta->user->id }}/accept-berkas"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if($peserta->status_type->id == 30 || $peserta->status_type->id == 31)
            <a href="{{ $peserta->user->id }}/reject-berkas"
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

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Pembayaran</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->payment->payment_proof_file) }}"
                  alt="Bukti Pembayaran"
                />
              </p>
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
                {{ $peserta->user->full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->asal_sekolah }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->user->handphone }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->ketua_twibbon) }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->ketua_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->ketua_bukti_insta) }}"
                  alt="Bukti Instagram"
                />
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
                {{ $peserta->anggota_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Sekolah</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->asal_sekolah }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->anggota_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->anggota_hp}}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon Anggota</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a
                  href="{{ url($peserta->anggota_twibbon) }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Anggota 1</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Kartu Mahasiswa</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                src="{{ url($peserta->anggota_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                src="{{ url($peserta->anggota_bukti_insta) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>
            </div>
          </div>
          {{-- Anggota 1 End--}} {{-- Anggota 2 Start
          <div class="flex-col justify-center w-full items-left">
            <div class="flex flex-row items-center w-full gap-2 mb-3">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 2</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->second_full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Institusi</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->second_institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jurusan</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->second_major }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->second_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->second_wa }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Akun Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a
                  href="{{ url($peserta->second_instagram_link) }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Anggota 2</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->second_twibbon_link) }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File CV</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->second_cv_file) }}" target="_blank" class="text-blue-400">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Mahasiswa Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->second_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>
            </div>
          </div>
          --}}
        </div>
      </div>
    </div>
</div>

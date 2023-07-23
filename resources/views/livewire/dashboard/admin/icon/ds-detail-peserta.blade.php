@section('title', 'DS Academy Detail Peserta')
<div class="flex flex-col w-11/12 min-h-screen mx-auto font-poppins">
    <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-center">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl font-bold text-transparent sm:text-5xl bg-gradient-blue-r bg-clip-text">Detail Peserta DS Academy</h1>
            <p class="text-base font-semibold text-white">{{ $peserta->ketua->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white">{{ $peserta->status_type->name }}</span></p>
        </div>
        <div class="flex flex-row flex-wrap items-center justify-between gap-4 text-xl font-semibold text-center text-white sm:flex-nowrap" x-data="{openReject: false}">
            @if($peserta->status_type->id >= 11 && $peserta->status_type->id <= 14 && $peserta->status_type->id != 12)
            <a href="{{ $peserta->ketua->id }}/accept-berkas"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if(($peserta->status_type->id >= 11 && $peserta->status_type->id <= 14 && $peserta->status_type->id != 14) || $peserta->status_type->id == 17)
            <a href="{{ $peserta->ketua->id }}/reject-berkas"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Berkas</a>
            @endif
            @if($peserta->status_type->id >= 12 && $peserta->status_type->id <= 17 && $peserta->status_type->id != 15 && $peserta->status_type->id != 14)
            <a href="{{ $peserta->ketua->id }}/accept-seleksi-soal"
                class="px-6 py-2 bg-gradient-green-r rounded-xl hover:brightness-75">Accept Seleksi Soal</a>
            @endif
            @if($peserta->status_type->id >= 15 && $peserta->status_type->id <= 17 && $peserta->status_type->id != 17)
            <a href="{{ $peserta->ketua->id }}/reject-seleksi-soal"
                class="px-6 py-2 bg-red-600 rounded-xl hover:brightness-75">Reject Seleksi Soal</a>
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
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa alasan tim Anda mengikuti ISE! Data Science Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_1 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang tim Anda harapkan dari ISE! Data Science Academy?
              </p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_2 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang dapat kamu lakukan dengan ilmu yang diperoleh pasca ISE! Data Science Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_3 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Darimana tim Anda mendapatkan informasi terkait ISE! User Experience Academy?</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->motive_4 }}
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
                {{ $peserta->ketua->full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Institusi</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->ketua->institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jurusan</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->ketua_major }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->ketua->email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->ketua->handphone }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Akun Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a
                  href="{{ url($peserta->ketua_instagram_link) }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Ketua</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->ketua_twibbon_link) }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File CV</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->ketua_cv_file) }}" target="_blank" class="text-blue-400">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Mahasiswa Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->ketua_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
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
                {{ $peserta->first_full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Institusi</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->first_institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jurusan</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->first_major }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->first_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                {{ $peserta->first_wa }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Akun Instagram</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a
                  href="{{ url($peserta->first_instagram_link) }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Anggota 1</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->first_twibbon_link) }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File CV</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <a href="{{ url($peserta->first_cv_file) }}" target="_blank" class="text-blue-400">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Mahasiswa Aktif</p>
              <p class="flex mb-3 text-base font-medium tracking-wider text-white font-lg font-poppins">
                <img
                  src="{{ url($peserta->first_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>
            </div>
          </div>
          {{-- Anggota 1 End--}} {{-- Anggota 2 Start--}}
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
          {{-- Anggota 2 End--}}
        </div>
      </div>
    </div>
</div>

@section('title', 'DS Academy Detail Peserta')
<div class="flex flex-col min-h-screen w-11/12 mx-auto font-poppins">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl sm:text-5xl bg-gradient-blue-r bg-clip-text text-transparent font-bold">Detail Peserta DS Academy</h1>
            <p class="text-base text-white font-semibold">{{ $peserta->ketua->id }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white">{{ $peserta->status_type->name }}</span></p>
        </div>
        <div class="flex flex-row justify-between items-center gap-4 text-white text-xl font-semibold" x-data="{openReject: false}">
            @if($peserta->status_type->id >= 11 && $peserta->status_type->id <= 14 && $peserta->status_type->id != 12)
            <a href="{{ $peserta->ketua->id }}/accept-berkas"
                class="bg-gradient-green-r px-6 py-2 rounded-xl hover:brightness-75">Accept Berkas</a>
            @endif
            @if(($peserta->status_type->id >= 11 && $peserta->status_type->id <= 14 && $peserta->status_type->id != 14) || $peserta->status_type->id == 17)
            <a href="{{ $peserta->ketua->id }}/reject-berkas"
                class="bg-red-600 px-6 py-2 rounded-xl hover:brightness-75">Reject Berkas</a>
            @endif
            @if($peserta->status_type->id >= 12 && $peserta->status_type->id <= 17 && $peserta->status_type->id != 15 && $peserta->status_type->id != 14)
            <a href="{{ $peserta->ketua->id }}/accept-seleksi-soal"
                class="bg-gradient-green-r px-6 py-2 rounded-xl hover:brightness-75">Accept Seleksi Soal</a>
            @endif
            @if($peserta->status_type->id >= 15 && $peserta->status_type->id <= 17 && $peserta->status_type->id != 17)
            <a href="{{ $peserta->ketua->id }}/reject-seleksi-soal"
                class="bg-red-600 px-6 py-2 rounded-xl hover:brightness-75">Reject Seleksi Soal</a>
            @endif
        </div>
    </div>
    <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-5 mb-3.5">Biodata Tim Kamu</div>
      <div
        class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center"
      >
        <div class="flex flex-col items-left justify-center space-y-6 w-full">
          {{-- Data Tim Start--}}
          <div class="flex-col items-left justify-center w-full">
            <div class="flex flex-row items-center mb-3 w-full gap-2">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Data Tim</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Tim</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->team_name }}
              </p>
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa alasan tim Anda mengikuti ISE! Data Science Academy?</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->motive_1 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang tim Anda harapkan dari ISE! Data Science Academy?
              </p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->motive_2 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Apa yang dapat kamu lakukan dengan ilmu yang diperoleh pasca ISE! Data Science Academy?</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->motive_3 }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Darimana tim Anda mendapatkan informasi terkait ISE! User Experience Academy?</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->motive_4 }}
              </p>
            </div>
          </div>
          {{-- Data Tim End--}} {{-- Ketua Tim Start--}}
          <div class="flex-col items-left justify-center w-full">
            <div class="flex flex-row items-center mb-3 w-full gap-2">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Ketua Tim</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->ketua->full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Institusi</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->ketua->institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jurusan</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->ketua_major }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->ketua->email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->ketua->handphone }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Akun Instagram</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a
                  href="{{ $peserta->ketua_instagram_link }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Ketua</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a href="{{ $peserta->ketua_twibbon_link }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File CV</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a href="{{ url($peserta->ketua_cv_file) }}" target="_blank" class="text-blue-400">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Mahasiswa Aktif</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <img
                  src="{{ url($peserta->ketua_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>

            </div>
          </div>
          {{-- Ketua Tim End--}} {{-- Anggota 1 Start--}}
          <div class="flex-col items-left justify-center w-full">
            <div class="flex flex-row items-center mb-3 w-full gap-2">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 1</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->first_full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Institusi</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->first_institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jurusan</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->first_major }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->first_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->first_wa }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Akun Instagram</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a
                  href="{{ $peserta->first_instagram_link }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Ketua</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a href="{{ $peserta->first_twibbon_link }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File CV</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a href="{{ url($peserta->first_cv_file) }}" target="_blank" class="text-blue-400">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Mahasiswa Aktif</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <img
                  src="{{ url($peserta->first_student_card) }}"
                  alt="Bukti Mahasiswa Aktif"
                />
              </p>
            </div>
          </div>
          {{-- Anggota 1 End--}} {{-- Anggota 2 Start--}}
          <div class="flex-col items-left justify-center w-full">
            <div class="flex flex-row items-center mb-3 w-full gap-2">
              <h3 class="flex text-[#B5B3BC] text-2xl font-semibold whitespace-nowrap">Anggota 2</h3>
              <hr class="w-full h-[2px] bg-[#171717] opacity-30" />
            </div>
            <div class="flex flex-col gap-y-1">
              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->second_full_name }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Institusi</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->second_institution }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Jurusan</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->second_major }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->second_email }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">No WA Aktif</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                {{ $peserta->second_wa }}
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Akun Instagram</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a
                  href="{{ $peserta->second_instagram_link }}"
                  target="_blank"
                  class="text-blue-400"
                  >Lihat Instagram Ketua</a
                >
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Link Twibbon</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a href="{{ $peserta->second_twibbon_link }}" target="_blank" class="text-blue-400">Lihat Twibbon</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">File CV</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                <a href="{{ url($peserta->second_cv_file) }}" target="_blank" class="text-blue-400">Lihat CV</a>
              </p>

              <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Mahasiswa Aktif</p>
              <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
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

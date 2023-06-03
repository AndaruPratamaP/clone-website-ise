@if (!$isRegistered)
    <div class=" min-h-screen w-full p-4 xl:pl-12 font-poppins">
        <section>
            <div class="flex mb-5">
                <p class="text-2xl bg-gradient-blue-r font-bold bg-clip-text text-transparent tracking-[0.07em]">Grand
                    Talkshow</p>
            </div>
        </section>
        <section>
            <div class="flex flex-col-reverse xl:flex-row gap-x-5 gap-y-5">
                <div class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] py-8 px-9 max-w-4xl">
                    <div class="flex flex-col text-white">
                        <p class="text-xl font-medium pb-3 xl:self-start self-center">Deskripsi</p>
                        <p class="text-sm sm:text-base font-light text-justify pt-4">Selamat tim kamu berhak mengikuti
                            Data
                            Science
                            Academy ISE! 2023.
                            Selamat tim kamu berhak mengikuti Data Science Academy ISE! 2023. Selamat tim kamu berhak
                            mengikuti Data Selamat tim kamu berhak mengikuti Data Science Academy ISE! 2023. Apakah
                            ingin
                            mengikuti kegiatan ini? Science Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?
                            Apakah
                            ingin mengikuti kegiatan?
                            Selamat tim kamu berhak mengikuti Data Science Academy ISE! 2023. Selamat tim kamu berhak
                            mengikuti Data Science Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim
                            kamu berhak mengikuti Data Science Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?
                            Science Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini? Apakah ingin mengikuti
                            kegiatan?
                        </p>
                    </div>
                </div>


                <div
                    class="flex rounded-xl bg-[#191A1E] p-5 max-w-4xl xl:max-w-[400px] w-full shrink-0 justify-center items-center">
                    <div class="flex flex-col text-white items-center">
                        <p class="text-xl font-medium">
                            Pendaftaran @if ($isOpen)
                                Dibuka
                            @else
                                Ditutup
                            @endif
                        </p>
                        <div class="flex flex-row gap-x-3 my-7">
                            <div class="flex flex-col items-center justify-center">
                                <div id="days"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00</div>
                                <p class="flex text-white text-base font-normal">Hari</p>
                            </div>
                            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
                            <div class="flex flex-col items-center justify-center">
                                <div id="hours"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00</div>
                                <p class="flex text-white text-base font-normal">Jam</p>
                            </div>
                            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
                            <div class="flex flex-col items-center justify-center">
                                <div id="minutes"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00</div>
                                <p class="flex text-white text-base font-normal">Menit</p>
                            </div>
                            <div class="hidden xs:flex items-center text-white font-bold text-xl self-start pt-3">:
                            </div>
                            <div class="hidden xs:flex flex-col items-center justify-center">
                                <div id="seconds"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00</div>
                                <p class="flex text-white text-base font-normal">Detik</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-2 w-full">
                            <a href="{{ route('gts.registration') }}"
                                class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-gradient-to-r from-[#348BB6] to-[#A3D2F3] hover:brightness-75">Daftar
                                Sekarang!</a>
                            <a href="/"
                                class="flex max-w-[400px] w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-blue-400 hover:bg-[#16171a] hover:brightness-75">Lihat
                                Guidebook</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>





        <section>
            <div
                class="flex rounded-xl bg-[#121316] sm:bg-[#191A1E] my-8 pb-16 px-6 h-[250px] items-center justify-center max-w-[896px] lg:max-w-[1150px] 2xl:max-w-[1317px]">
                <div class="flex flex-col w-full gap-y-16 items-center">
                    <p class="flex text-white text-2xl font-medium self-center xl:self-start ">Timeline</p>
                    <span
                        class="flex flex-row max-w-xl xl:max-w-[800px] 2xl:max-w-4xl w-full justify-between items-center h-[4px] bg-[#333333] text-white ">
                        <div
                            class="flex flex-col w-24 text-center translate-y-3.5 sm:translate-y-[1.125rem] md:translate-y-4 lg:translate-y-5 xl:translate-y-6 -translate-x-5 sm:-translate-x-10">
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
                                Jun 2022</p>
                            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
                                <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-blue-r rounded-full mx-auto"></div>
                            </div>
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
                                Bionix <br> Student <br> Level</p>
                        </div>
                        <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3 -translate-x-4">
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
                                Jun 2022</p>
                            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
                                <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-blue-r rounded-full mx-auto"></div>
                            </div>
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins text-center">
                                IS <br> Class</p>
                        </div>
                        <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3 -translate-x-2">
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
                                Jul 2022</p>
                            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
                                <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-blue-r rounded-full mx-auto"></div>
                            </div>
                            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">ICON
                                <br>
                                Academy</p>
                        </div>
                        <div
                            class="flex flex-col w-24 text-center translate-y-3.5 sm:translate-y-4 lg:translate-y-5 xl:translate-y-6 translate-x-2">
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
                                Sep 2022</p>
                            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
                                <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-blue-r rounded-full mx-auto"></div>
                            </div>
                            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">BIONIX
                                <br>
                                College <br> Level</p>
                        </div>
                        <div class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3 translate-x-4">
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
                                Sep 2022</p>
                            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
                                <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-blue-r rounded-full mx-auto"></div>
                            </div>
                            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">Virtual
                                <br> Tour
                            </p>
                        </div>
                        <div
                            class="flex flex-col w-24 text-center translate-y-2 lg:translate-y-3 translate-x-5 sm:translate-x-10">
                            <p
                                class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins font-bold">
                                Nov 2022</p>
                            <div class="sm:w-5 sm:h-5 w-4 h-4 bg-black mx-auto rounded-full">
                                <div class="sm:w-4 sm:h-5 w-3 h-4 bg-gradient-blue-r rounded-full mx-auto"></div>
                            </div>
                            <p class="text-[9px] sm:text-[11px] md:text-xs lg:text-sm xl:text-base font-poppins">Grand
                                <br>
                                Talkshow</p>
                        </div>
                    </span>
                </div>
            </div>
        </section>

        <section>
            <div class="mt-10 overflow-auto">
                <div class="sm:flex hidden sm:self-start text-2xl text-white font-bold mb-6">Speaker</div>
                <div
                    class="flex flex-col gap-y-5 sm:flex-row sm:gap-x-8 overflow-x-auto sm:my-3 sm:shrink-0 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-500 scrollbar-rounded-[20px]">
                    <div
                        class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] max-h-[700px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100">
                        <img class="rounded-full w-36 h-36" src="{{ asset('images/gts/solid_white.png') }}"
                            alt="">
                        <p class="text-white font-montserrat font-bold text-lg mt-4">Rifyal Rachmat</p>
                        <p class="text-[#B5B3BC] font-montserrat font-normal text-base">Data Scientist at Telkomsel</p>
                        <p class="text-sm sm:text-base text-white font-montserrat text-justify mt-4">Selamat tim kamu
                            berhak
                            mengikuti Data Science Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Science
                            Academy
                            ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim kamu berhak mengikuti Data
                            Science
                            Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim kamu berhak mengikuti
                            Data
                            Sciece.</p>
                    </div>
                    <div
                        class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] max-h-[700px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100">
                        <img class="rounded-full w-36 h-36" src="{{ asset('images/gts/solid_white.png') }}"
                            alt="">
                        <p class="text-white font-montserrat font-bold text-lg mt-4">Rifyal Rachmat</p>
                        <p class="text-[#B5B3BC] font-montserrat font-normal text-base">Data Scientist at Telkomsel</p>
                        <p class="text-sm sm:text-base text-white font-montserrat text-justify mt-4">Selamat tim kamu
                            berhak
                            mengikuti Data Science Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Science
                            Academy
                            ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim kamu berhak mengikuti Data
                            Science
                            Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim kamu berhak mengikuti
                            Data
                            Sciece.</p>
                    </div>
                    <div
                        class="flex flex-col text-center max-w-[600px] sm:max-w-[400px] max-h-[700px] w-full h-full bg-[#303030] rounded-xl items-center p-9 sm:shrink-0 sm:opacity-80 hover:opacity-100">
                        <img class="rounded-full w-36 h-36" src="{{ asset('images/gts/solid_white.png') }}"
                            alt="">
                        <p class="text-white font-montserrat font-bold text-lg mt-4">Rifyal Rachmat</p>
                        <p class="text-[#B5B3BC] font-montserrat font-normal text-base">Data Scientist at Telkomsel</p>
                        <p class="text-sm sm:text-base text-white font-montserrat text-justify mt-4">Selamat tim kamu
                            berhak
                            mengikuti Data Science Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Science
                            Academy
                            ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim kamu berhak mengikuti Data
                            Science
                            Academy ISE! 2023. Selamat tim kamu berhak mengikuti Data Selamat tim kamu berhak mengikuti
                            Data
                            Sciece.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@else
    {{-- vvv Sesudah daftar vvv --}}
    <div class="min-h-screen w-full p-4 xl:pl-12 font-poppins">

        <section>
            <div class="flex mb-8">
                <p class="text-2xl text-center text-white font-bold tracking-[0.09em] md:tracking-[0.09em]">Halo,
                    Selamat Datang di Dashboard <span
                        class="bg-gradient-blue-r font-bold bg-clip-text text-transparent">Grand Talkshow</span></p>
            </div>
        </section>

        <div class="hidden self-start text-2xl text-[#B5B3BC] font-bold mb-2 md:flex">Status</div>

        <section class="flex flex-col-reverse md:flex-row justify-center gap-x-8 w-full">
            <div class="flex flex-col my-1.5 w-full items-center md:w-full">
                <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mb-2 md:hidden">Status
                </div>
                <div
                    class="flex max-w-[580px] xl:max-w-full w-full rounded-2xl bg-[#191A1E] mb-1.5 py-8 px-5 justify-start items-center">
                    <div class="flex flex-row gap-x-6 items-center w-full">
                        <x-heroicon-s-arrow-left-on-rectangle
                            class="relative z-0 w-14 h-14 rotate-180 text-blue-400" />
                        <div class="flex flex-col">
                            <p class="text-base font-normal text-[#B5B3BC] mb-1 font-poppins">Status Pendaftaran</p>
                            <p class="text-2xl bg-gradient-blue-r font-bold bg-clip-text text-transparent">Terdaftar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex self-center md:self-start text-2xl text-[#B5B3BC] font-bold mt-5 mb-3.5">Biodata Kamu
                </div>
                <div
                    class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center">
                    <div class="flex flex-col gap-y-1">
                        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
                        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">Tyas
                            Sukmaningsih</p>
                        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Perguruan tinggi</p>
                        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
                            Institut
                            Teknologi Bandung</p>
                        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
                        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider">
                            tyas77@gmail.com</p>
                    </div>
                </div>
                <div class="flex md:hidden md:self-start self-center text-2xl text-[#B5B3BC] font-bold mt-6 mb-4">
                    Pengumuman</div>
                <div
                    class="flex md:hidden max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center">
                    <div class="flex flex-col gap-y-3">
                        <p class="flex text-white font-lg text-lg sm:text-2xl font-poppins font-bold tracking-wider">
                            Lorem Ipsum</p>
                        <p class="text-sm sm:text-base text-white font-light text-justify">Selamat tim kamu berhak
                            mengikuti UX Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini? Selamat tim kamu berhak
                            mengikuti UX Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?Selamat tim kamu berhak
                            mengikuti UX Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?Selamat tim kamu berhak
                            mengikuti UX Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?Selamat tim kamu berhak
                            mengikuti UX Academy ISE! 2023. Apakah ingin
                            mengikuti kegiatan ini?</p>
                    </div>
                </div>
            </div>


            <div class="flex flex-col items-center md:items-start my-1.5 w-full">
                <div class="flex justify-center rounded-xl bg-[#191A1E] p-5 max-w-[580px] md:max-w-[477px] w-full">
                    <div class="flex flex-col text-white items-center">
                        <p class="text-xl font-medium">Grand Talkshow Dimulai</p>
                        <div class="flex flex-row gap-x-3 my-7">
                            <div class="flex flex-col items-center justify-center">
                                <div id="days"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00
                                </div>
                                <p class="flex text-white text-base font-normal">Hari</p>
                            </div>
                            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
                            <div class="flex flex-col items-center justify-center">
                                <div id="hours"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00
                                </div>
                                <p class="flex text-white text-base font-normal">Jam</p>
                            </div>
                            <div class="flex items-center text-white font-bold text-xl self-start pt-3">:</div>
                            <div class="flex flex-col items-center justify-center">
                                <div id="minutes"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00
                                </div>
                                <p class="flex text-white text-base font-normal">Menit</p>
                            </div>
                            <div class="hidden xs:flex items-center text-white font-bold text-xl self-start pt-3">:
                            </div>
                            <div class="hidden xs:flex flex-col items-center justify-center">
                                <div id="seconds"
                                    class="flex w-16 h-16 rounded-3xl bg-[#303030] items-center text-white font-bold text-xl justify-center">
                                    00
                                </div>
                                <p class="flex text-white text-base font-normal">Detik</p>
                            </div>
                        </div>
                        <button
                            class="flex md:hidden my-3 w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-gradient-to-r from-[#348BB6] to-[#A3D2F3]">Daftar
                            Sekarang!</button>
                        <button
                            class="flex md:hidden w-full h-[52px] rounded-lg justify-center items-center text-white text-lg font-normal bg-[#191A1E] border border-blue-400 hover:bg-[#16171a]">Lihat
                            Guidebook</button>
                    </div>

                </div>
                <div class="hidden md:flex self-start text-2xl text-[#B5B3BC] font-bold mt-6 mb-4">Pengumuman</div>
                <div
                    class="hidden md:flex max-w-[580px] md:max-w-[477px] w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center">
                    <div class="flex flex-col gap-y-3">
                        <p class="flex text-white font-lg text-2xl font-poppins font-bold tracking-wider">Lorem Ipsum
                        </p>
                        <p class="text-base text-white font-light text-justify">Selamat tim kamu berhak mengikuti UX
                            Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini? Selamat tim kamu berhak mengikuti UX
                            Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?Selamat tim kamu berhak mengikuti UX
                            Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?Selamat tim kamu berhak mengikuti UX
                            Academy ISE! 2023. Apakah ingin mengikuti kegiatan ini?Selamat tim kamu berhak mengikuti UX
                            Academy ISE! 2023. Apakah ingin
                            mengikuti kegiatan ini?</p>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endif

<script type="text/javascript">
    const datetime = "{{ $date }}";
    const countdownDate = new Date(datetime).getTime();

    // Update the countdown every second
    const countdownTimer = setInterval(() => {
        // Get today's date and time
        const now = new Date().getTime();

        // Find the distance between now and the countdown date
        const distance = countdownDate - now;

        // Calculate the days, hours, minutes, and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        document.getElementById("days").innerHTML = `${days}`;
        document.getElementById("hours").innerHTML = `${hours}`;
        document.getElementById("minutes").innerHTML = `${minutes}`;
        document.getElementById("seconds").innerHTML = `${seconds}`;

        // If the countdown is finished, display a message
        if (distance < 0) {
            clearInterval(countdownTimer);
            document.getElementById("days").innerHTML = "0";
            document.getElementById("hours").innerHTML = "0";
            document.getElementById("minutes").innerHTML = "0";
            document.getElementById("seconds").innerHTML = "0";
        }
    }, 1000);
</script>

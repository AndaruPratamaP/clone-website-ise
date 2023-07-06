@section('title', 'Login')
<div class="bg-[#121316] min-h-screen flex justify-center items-center relative overflow-x-hidden">
  <img class="absolute top-0 left-0 z-10" src="{{ asset('images/Login_Register_Top_Left_Background.png') }}" alt="" />
  <img class="absolute top-0 right-0 z-10" src="{{ asset('images/Login_Register_Top_Right_Background.png') }}" alt="" />
  <div x-data="{ show: false, show_again: false, password: '' }">
    <form wire:submit.prevent="authenticate">
      <div class="flex justify-center items-center mt-36 mb-20 z-20">
        <div
          class="grid gap-0 w-[323px] h-[679px] grid-cols-1 lg:grid-flow-col lg:h-[564px] md:w-[400px] lg:w-[959px] z-20"
        >
          <div
            class="z-20 rounded-bl-[22px] rounded-br-[22px] w-[323px] md:w-[400px] h-[422px] order-2 lg:w-[486px] lg:h-[564px] lg:rounded-tl-[45px] lg:rounded-bl-none lg:rounded-br-none lg:order-1"
          >
            <div
              class="relative py-8 z-20 px-7 lg:px-10 bg-[#191A1E] rounded-bl-[22px] rounded-br-[22px] lg:w-[486px] lg:h-[564px] lg:rounded-none"
            >
              <div class="relative">
                <img
                  class="absolute bottom-[16.25rem] md:bottom-[20.25rem] left-[4rem] md:left-[6.75rem] w-[9rem] h-[5.5rem] lg:w-max lg:h-max lg:bottom-[-0.6rem] lg:left-[7rem]"
                  src="{{ asset('images/LoginRegisterDecor1.png') }}"
                  alt=""
                />
                <img
                  class="absolute z-30 w-[0.35rem] h-[0.3rem] left-[11.5rem] top-[1rem] lg:left-[23.25rem] lg:top-10 lg:w-max lg:h-max"
                  src="{{ asset('images/Login_Register_Green_Dot.png') }}"
                  alt=""
                />
              </div>
              <div
                class="text-[#FFFFFF] font-montserrat mb-10 drop-shadow-[0_4px_4px_rgba(0,0,0,1)] text-[24px] font-bold lg:font-extrabold lg:text-[48px]"
              >
                Login Account
              </div>
              <div class="text-[#FFFFFF] font-montserrat font-semibold text-[14px] lg:text-[20px]">
                <label for="email">Alamat Email</label>
                <div class="inline text-[#A31400] font-montserrat font-semibold text-[14px] lg:text-[20px]">*</div>
              </div>
              <div class="relative">
                <input
                  required
                  class="w-full px-[2.5px] bg-transparent border-b-2 text-[12px] lg:text-[18px] font-montserrat font-[400] h-[28px] lg:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] lg:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('email') border-b-[#A31400] text-[#A31400] @enderror"
                  type="text"
                  name="email"
                  id="email"
                  placeholder="Masukkan alamat email anda disini"
                  wire:model="email"
                />
                @error('email')
                <span class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                @enderror
              </div>
              <div class="relative">
                <div class="text-[#FFFFFF] font-montserrat mt-6 lg:mt-10 font-semibold text-[14px] lg:text-[20px]">
                  <label for="password">Kata Sandi</label>
                  <div class="inline text-[#A31400] font-montserrat font-semibold text-[14px] lg:text-[20px]">*</div>
                </div>
                <div class="relative">
                  <input
                    required
                    class="w-full px-[2.5px] bg-transparent border-b-2 text-[12px] lg:text-[18px] font-montserrat font-[400] h-[28px] lg:h-[34px] outline-none placeholder:text-[#7C7C7C] placeholder:font-montserrat placeholder:text-[12px] lg:placeholder:text-[18px] placeholder:font-medium hover:placeholder:text-[#6B6B6B] hover:text-[#6B6B6B] text-[#6B6B6B] hover:border-b-[#6B6B6B] active:placeholder:text-[#00668F] active:text-[#00668F] active:border-b-[#00668F] focus:placeholder:text-[#00668F] focus:text-[#00668F] focus:border-b-[#00668F] @error('password') border-b-[#A31400] text-[#A31400] @enderror"
                    id="password"
                    x-bind:type="show ? 'text' : 'password'"
                    x-model="password"
                    wire:model="password"
                    name="password"
                    placeholder="Masukkan kata sandi anda disini"
                  />
                  @error('password')
                  <span class="text-[#A31400] text-[12px] font-montserrat font-medium">{{ $message }}</span>
                  @enderror
                  <button
                    class="absolute top-[0.25rem] left-[14.5rem] lg:top-[0.4rem] md:left-[19rem] lg:left-[23.5rem]"
                    x-show="!show"
                    @click="show = !show"
                    type="button"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      class="w-[17px] h-[16px] lg:w-[17px] lg:h-[21px] text-gray-400"
                    >
                      <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                      <path
                        fill-rule="evenodd"
                        d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </button>
                  <button
                    class="absolute top-[0.25rem] left-[14.5rem] lg:top-[0.4rem] md:left-[19rem] lg:left-[23.5rem]"
                    type="button"
                    x-show="show"
                    @click="show = !show"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      class="w-[17px] h-[16px] lg:w-[17px] lg:h-[21px] text-gray-400"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.091 1.092a4 4 0 00-5.557-5.557z"
                        clip-rule="evenodd"
                      />
                      <path
                        d="M10.748 13.93l2.523 2.523a9.987 9.987 0 01-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 010-1.186A10.007 10.007 0 012.839 6.02L6.07 9.252a4 4 0 004.678 4.678z"
                      />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="flex mt-6 lg:mt-4 mb-5 lg:mb-14">
                {{--
                <input
                  class="mr-2 relative top-[0.05rem] lg:top-0.5 w-[10px] h-[10px] lg:w-[15px] lg:h-[15px]"
                  type="checkbox"
                  name="remind"
                  id="remind"
                  wire:model="remember"
                />
                <div
                  class="inline-block text-[#B5B3BC] font-[400] self-center grow font-montserrat text-[8px] lg:text-[12px]"
                >
                  Ingatkan saya
                </div>
                --}}
                <a
                  href="{{route('request-forgot')}}"
                  class="inline-block text-[#B5B3BC] hover:text-[#6B6B6B] font-[400] self-center font-montserrat text-[8px] lg:text-[12px]"
                  >Lupa Password?</a
                >
              </div>
              @if (!empty($msg['error']))
              <span class="text-[#A31400]">{{ $msg['error'] }}</span>
              @endif
              <button
                class="rounded-full w-full h-[29px] md:h-[36px] lg:h-[46px] mb-2 text-white bg-gradient-to-r from-[#006C56] to-[#AFD196] active:border-[#66C1A7] border-2 border-[#191A1E]"
                type="submit"
              >
                <span
                  wire:loading.remove
                  class="block px-6 w-full h-full py-0.5 md:py-[0.35rem] font-montserrat font-[700] rounded-full text-white bg-transparent hover:bg-[#006C56] transition text-[14px] lg:text-[20px] cursor-pointer"
                >
                  Login
                </span>
                <div
                  wire:loading
                  class="inline-block w-4 h-4 md:h-6 md:w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                  role="status"
                ></div>
              </button>
              <div class="text-center">
                <div class="inline-block text-[#B5B3BC] text-[12px] lg:text-[16px] font-[600] font-montserrat">
                  Belum punya akun?
                </div>
                <a
                  class="inline-block bg-gradient-to-r from-[#006C56] to-[#DBFEC1] bg-clip-text text-transparent text-[12px] lg:text-[16px] font-[700] font-montserrat"
                  href="/register"
                  >Daftar disini</a
                >
              </div>
              <img
                class="absolute -bottom-10 -right-10 w-[6rem] h-[6rem] block lg:hidden"
                src="{{ asset('images/login1decor1.png') }}"
                alt=""
              />
            </div>
          </div>
          <div
            class="bg-[#141414] z-20 rounded-tl-[22px] rounded-tr-[22px] w-[323px] md:w-[400px] h-[257px] md:h-[320px] order-1 lg:p-0 lg:rounded-tl-none lg:rounded-tr-none lg:rounded-br-[45px] lg:w-[473px] lg:h-[564px] lg:order-2"
          >
            <div class="relative">
              <img
                class="absolute hidden lg:block w-[323px] h-[257px] lg:w-[473px] lg:h-[564px]"
                src="images/Login_FrontDecor.png"
                alt=""
              />
              <img
                class="absolute z-30 hidden left-0 lg:left-[21rem]"
                src="{{ asset('images/Login_Register_ISE.png') }}"
                alt=""
              />
              <img
                class="absolute min-w-max z-40 hidden lg:right-[-2.5rem] lg:top-[2.5rem]"
                src="{{ asset('images/Login_Register_Dev_Man.png') }}"
                alt=""
              />
              <img
                class="absolute z-30 hidden lg:min-w-[33rem] lg:top-[0rem] lg:left-[-4rem]"
                src="{{ asset('images/Login_Register_Dev_Shadow.png') }}"
                alt=""
              />
              <img
                class="block lg:hidden rounded-tl-[22px] rounded-tr-[22px]"
                src="{{ asset('images/Login_Register_Mobile_Cover.png') }}"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <img
    class="absolute -bottom-0 left-0 z-10"
    src="{{ asset('images/Login_Register_Bottom_Left_Background.png') }}"
    alt=""
  />
  <img
    class="absolute -bottom-0 right-0 z-10"
    src="{{ asset('images/Login_Register_Bottom_Right_Background.png') }}"
    alt=""
  />
</div>

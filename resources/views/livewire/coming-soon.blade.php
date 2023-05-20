@extends('layouts.only-layout')

@section('content')
<div class="bg-[#121316]">
    <div class="flex h-screen items-center justify-center overflow-hidden">
        <div class=" relative w-[280px] min-[450px]:w-[333px] sm:w-[600px] lg:w-[826px] ">
            <img class="w-[400px] absolute top-[-347px] left-[-195px] mix-blend-overlay blur-[197px] xl:hidden" src="{{asset('images/comingsoon/Vector1.png')}}" alt="vector1">
            <img class="absolute w-[400px] top-[-175px] left-[-90px] mix-blend-overlay blur-[197px] xl:hidden" src="{{asset('images/comingsoon/Vector2.png')}}" alt="Vector2">
            <img class="absolute w-[400px] top-[-341px] left-[-90px] mix-blend-overlay blur-[197px] xl:hidden" src="{{asset('images/comingsoon/Vector3.png')}}" alt="Vector3">
            <img class="absolute w-[400px] top-[-400px] left-[-150px] mix-blend-overlay blur-[197px] max-[1280px]:hidden" src="{{asset('images/comingsoon/Vector4.png')}}" alt="Vector4">
            <img class="absolute w-[400px] right-[30px] top-[-160px] mix-blend-overlay blur-[197px] max-[1280px]:hidden" src="{{asset('images/comingsoon/Vector5.png')}}" alt="Vector5">
            <img class="absolute w-[400px] left-[-55px] top-[-220px] mix-blend-overlay blur-[197px] max-[1280px]:hidden" src="{{asset('images/comingsoon/Vector6.png')}}" alt="Vector6">
            <img class="absolute w-[650px] left-[60px] top-[-300px] mix-blend-overlay blur-[197px] max-[1280px]:hidden" src="{{asset('images/comingsoon/Vector7.png')}}" alt="Vector7">
        </div>
        <div class="absolute z-20">
                
            <div class="relative">
                <img class="mb-[35px] w-[280px] min-[450px]:w-[333px] sm:w-[600px] lg:w-[826px]" src="{{asset('images/comingsoon/comingsoon.svg')}}" alt="">
            </div>
            <div class="relative">
                <p class="text-center font-['Montserrat'] font-[600] text-[#FFEEE4] text-[13px] min-[450px]:text-[16px] sm:text-[20px] lg:text-[24px] mb-[6px] md:mb-[14px]">Please wait for further confirmation.</p>
                <div class="flex justify-center z-20">
                    <a href="#">
                        <button class="font-['Montserrat'] font-[600] text-[#121316] bg-[#FFEEE4] rounded-[18px]  sm:rounded-[20px] lg:rounded-[24px] px-[18px] sm:px-[20px] lg:px-[24px] py-[11px] sm:py-[12px] lg:py-[14px] text-[11px] min-[450px]:text-[12px] sm:text-[13px] lg:text-[16px]">
                        <img class="h-[15px] sm:h-[17px] lg:h-[20px] float-left mr-2  my-[2px] sm:my-[3px] lg:my-[3px]" src="{{asset('images/comingsoon/Fill.png')}}" alt=""> 
                        Notify me when it went live</button>
                    </a>
                </div>
            </div>

        </div>
        <div class="absolute z-10 bottom-0 left-0 w-full overflow-hidden mix-blend-color-dodge ">
            <img class="w-full min-[450px]:mb-[-50px] sm:mb-[-400px] lg:mb-[-600px] xl:mb-[-800px] 2xl:mb-[-1000px]" src="{{asset('images/comingsoon/Union.png')}}" alt="">
        </div>

    </div>
</div>
@endsection

@section('title', '403 Forbidden')
<div class="bg-[#121316] flex w-full h-screen text-white justify-center items-center flex-col text-center px-4 overflow-hidden">
    <div class="absolute z-0 bg-blue-700 rounded-full w-72 sm:w-96 h-72 sm:h-96 blur-3xl backdrop-blur-3xl"></div>
    <div class="relative z-10 flex flex-col items-center justify-center gap-6 sm:gap-12">
    <h1 class="text-[6rem] font-bold sm:text-[8rem]">403</h1>
    <h1 class="text-3xl font-bold sm:text-5xl">You're Unauthorized</h1>
    @if (Auth::check())
    <a href="{{ Auth::user()->isAdmin() ? route('admin.') : route('my.') }}"
        class="text-center px-[5.313rem] py-[5.79px] font-semibold rounded-[4.12px] text-[#F3F3F3] bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:brightness-90">Go Back</a>

@else
    <a href="/login"
        class="text-center px-[5.313rem] py-[5.79px] font-semibold rounded-[4.12px] text-[#F3F3F3] bg-gradient-to-r from-[#006C56] to-[#AFD196] hover:brightness-90">Login</a>
@endif
</div>
</div>

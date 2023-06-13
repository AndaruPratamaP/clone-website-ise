@section('title', 'GTS Detail Peserta')
<div class="flex flex-col min-h-screen w-11/12 mx-auto font-poppins">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="flex flex-col items-start gap-2">
            <h1 class="text-4xl sm:text-5xl bg-gradient-blue-r bg-clip-text text-transparent font-bold">Detail Peserta GTS</h1>
            <p class="text-base text-white font-semibold">{{ $user_data['user_id'] }}</p>
            <p class="bg-[#191A1E] px-4 py-1.5 rounded-2xl text-base text-[#B5B3BC] font-semibold">Status: <span class="text-white {{ $user_data['status'] == 'Verified' ? 'text-blue-500' : '' }}">{{ $user_data['status'] }}</span></p>
        </div>
        <div class="flex flex-row justify-between items-center gap-4 text-white text-xl font-semibold" x-data="{openReject: false}">
            <a href="{{ $user_data['user_id'] }}/accept"
                class="bg-gradient-green-r px-6 py-2 rounded-xl hover:brightness-75">Accept</a>
            <div
                class="relative z-0" >
                <button @click="openReject = !openReject" class="bg-red-600 px-6 py-2 rounded-xl active:bg-red-800 hover:brightness-75">
                    Reject
                </button>
                <form class="absolute z-50 flex flex-col justify-center items-center gap-3 w-72 h-auto sm:w-96 sm:h-auto bg-black rounded-lg top-16 -right-10 sm:right-4 p-4" x-show="openReject" action="{{ $user_data['user_id'] }}/reject" method="GET">
                    <div class="flex flex-row justify-between items-center w-full">
                        <label for="reason" class="text-xl font-bold text-white tracking-wider">Reason</label>
                        <p class="text-sm font-light text-white cursor-pointer" @click="openReject = false">Close</p>
                    </div>
                    <textarea type="text" placeholder="Place your reason for rejecting here.. (max: 255)." name="reason" id="reason" class="px-4 py-3 outline-none select-none text-white border-[1px] border-white rounded-lg w-full h-36 bg-transparent text-base" maxlength="255" ></textarea>
                    <button type="submit" class="bg-red-600 py-1.5 text-base rounded-xl hover:brightness-75 w-full">Send</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-y-1 bg-[#191A1E] p-6 rounded-xl mt-12 text-base sm:text-lg">
        <p class="flex text-[#B5B3BC] font-normal ">Nama Lengkap</p>
        <p class="flex text-white font-lg font-medium tracking-wider mb-3 break-all">
            {{ $user_data['full_name'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal">Asal Instansi</p>
        <p class="flex text-white font-lg font-medium tracking-wider mb-3 break-all">
            {{ $user_data['institution'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal">Email</p>
        <p class="flex text-white font-lg font-medium tracking-wider mb-3 break-all">
            {{ $user_data['email'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal">Handphone</p>
        <p class="flex text-white font-lg font-medium tracking-wider mb-3 break-all">
            {{ $user_data['handphone'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal">Tahu Grand Talkshow Darimana
            ?</p>
        <p class="flex text-white font-lg font-medium tracking-wider mb-3 break-all">
            {{ $user_data['referral'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal">Bukti Follow</p>
        <img src="{{ url($user_data['share_proof_file']) }}" />
    </div>
</div>

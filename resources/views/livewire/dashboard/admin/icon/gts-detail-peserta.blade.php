<div class="flex max-w-[580px] xl:max-w-full w-full rounded-xl bg-[#191A1E] mb-1.5 py-8 px-9 justify-start items-center">
    <div class="flex flex-col gap-y-1">
        <div class="flex flex-row justify-between items-center my-4">
            <button wire:click="accept" class="bg-green-500 px-4 py-1.5 rounded-xl text-white font-medium">Accept</button>
            <button wire:click="reject" class="bg-red-500 px-4 py-1.5 rounded-xl text-white font-medium">Reject</button>
        </div>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Nama Lengkap</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
            {{ $user_data['full_name'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Asal Instansi</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
            {{ $user_data['institution'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Email</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
            {{ $user_data['email'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Handphone</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
            {{ $user_data['handphone'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Tahu Grand Talkshow Darimana
            ?</p>
        <p class="flex text-white font-lg text-base font-poppins font-medium tracking-wider mb-3">
            {{ $user_data['referral'] }}</p>
        <p class="flex text-[#B5B3BC] font-normal text-base font-poppins">Bukti Follow</p>
        <img src="{{ url($user_data['share_proof_file']) }}" />
    </div>
</div>

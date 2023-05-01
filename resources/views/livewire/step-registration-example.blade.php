<div x-data="{step: 1}" class="bg-slate-500 relative">
    <div class="w-96 mx-auto flex flex-col justify-center items-center h-screen">
        <div class="bg-slate-900 py-10 rounded-xl text-white space-y-24 flex flex-col">
            <div class="relative flex my-8">
                <div class="relative h-[1px] w-44 flex items-end justify-center flex-col" x-bind:class="step>=1 ? 'bg-green-500' : 'bg-black'">
                    <div class="w-10 h-10 rounded-full p-2"
                    x-bind:class="step>=1 ? 'bg-green-500' : 'bg-red-500'"><x-heroicon-s-wallet/>
                {{-- <div class="flex items-center justify-center mt-2 whitespace-nowrap">Step 1</div> --}}
            </div>
                </div>
                <div class="relative h-[1px] w-32 flex items-end justify-center flex-col"
                x-bind:class="step>=2 ? 'bg-green-500' : 'bg-black'">
                    <div class="w-10 h-10 rounded-full p-2"
                    x-bind:class="step>=2 ? 'bg-green-500' : 'bg-red-500'"><x-heroicon-o-circle-stack/>
                {{-- <div class="flex items-center justify-center mt-2 whitespace-nowrap">Step 2</div> --}}
            </div>
                </div>
                <div class="relative h-[1px] w-32 flex items-end justify-center flex-col"
                x-bind:class="step>=3 ? 'bg-green-500' : 'bg-black'">
                    <div class="w-10 h-10 rounded-full p-2"
                    x-bind:class="step>=3 ? 'bg-green-500' : 'bg-red-500'"><x-heroicon-o-arrow-left/>
                {{-- <div class="flex items-center justify-center mt-2 whitespace-nowrap font-[1100]">Step 3</div> --}}
            </div>
                </div>
                <div class="relative h-[1px] w-44 flex items-end justify-center flex-col"
                x-bind:class="step>=3 ? 'bg-green-500' : 'bg-black'">
                </div>
            </div>
            <form wire:submit.prevent="submit"  class="w-72 flex flex-col items-center justify-center mx-auto">
            <div x-show="step == 1" class="flex flex-col">
                <label for="email">Email :</label>
                <input id="email" type="text" wire:model="email">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

                <label for="anggota_1">anggota_1 :</label>
                <input id="anggota_1" type="text" wire:model="anggota_1">
                @error('anggota_1')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <label for="anggota_2">anggota_2 :</label>
                <input id="anggota_2" type="text" wire:model="anggota_2">
                @error('anggota_2')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div x-show="step == 2" class="flex flex-col">
                <label for="anggota_3">anggota_3 :</label>
                <input id="anggota_3" type="text" wire:model="anggota_3">
                @error('anggota_3')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div x-show="step == 3" class="flex flex-col">
                <label for="anggota_4">anggota_4 :</label>
                <input id="anggota_4" type="text" wire:model="anggota_4">
                @error('anggota_4')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-10">
            <p class="bg-green-500 px-4 py-2 " @click="step=2" x-show="step==1">Next</p>
            <p class="bg-green-500 px-4 py-2 " @click="step=3" x-show="step==2">Next</p>
            <p class="bg-red-500 px-4 py-2 " @click="step=1" x-show="step==2">Back</p>
            <p class="bg-red-500 px-4 py-2 " @click="step=2" x-show="step==3">Back</p>
                <div x-show="step==3">
                <button type="submit" @if ($errors->any() || !$isValid) disabled @endif
                    class="disabled:bg-red-500 bg-blue-500 px-4">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

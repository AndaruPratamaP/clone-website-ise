@section('title', 'Link Shortener')
<div class="min-h-screen p-6 w-full">
    <h1 class="text-4xl sm:text-5xl bg-gradient-orange-r bg-clip-text text-transparent font-bold self-start mb-10">URL Shortener</h1>
    <div x-data="{ customLink: false}" wire:loading.attr="disabled"
        class="flex flex-col items-center justify-center w-full">
        @if (!$is_done)
            <form wire:submit.prevent="submit" class="flex flex-col items-center justify-center w-full">
                <div class="flex flex-row w-full gap-2 sm:gap-4 h-8 sm:h-12">
                    <label for="long_url" class="hidden"></label>
                    <input type="text" id="long_url" wire:model="long_url" class="bg-white w-full px-4 py-1.5 text-black select-none outline-none rounded-md" placeholder="Masukan link yang panjang!">
                    <button type="submit" @if (strlen($long_url) < 5 || $errors->any()) disabled @endif
                        class="bg-gradient-green-r disabled:brightness-50 text-white font-semibold whitespace-nowrap w-32 sm:w-44 px-2 rounded-md cursor-pointer hover:brightness-75">
                        <span wire:loading.remove class="font-semibold text-base">Shorten!</span>
                        <div wire:loading
                        class="inline-block h-6 w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                        role="status">
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                            >Loading...</span
                        >
                        </div>
                    </button>
                </div>
                @error('long_url')
                <span class="text-red-500 self-start">{{ $message }}</span>
                @enderror
                <!-- If Custom Start -->
                <h1 x-show='!customLink' x-cloak @click="customLink = true" class="bg-clip-text bg-gradient-orange-r text-transparent font-semibold text-sm sm:text-lg hover:brightness-75 cursor-pointer self-start mt-1">Custom Link?</h1>
                <div x-show='customLink' x-cloak class="flex w-full h-8 sm:h-12 mt-2">
                    <div class="flex flex-row items-center bg-white w-full px-4 py-1.5 text-black select-none outline-none rounded-md">
                        <span class="text-black text-xs sm:text-base whitespace-nowrap font-semibold sm:mb-0.5">ise-its.com/go/</span>
                        <label for="short_url" class="hidden"></label>
                        <input type="text" id="short_url" wire:model="short_url" class="bg-white w-full px-4 py-1.5 h-8 sm:h-12 text-black select-none outline-none rounded-md" placeholder="Masukan link custom yang diinginkan!" />
                    </div>
                </div>
                @error('short_url')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <!-- If Custom End -->

            </form>
        @else
            <div class="flex flex-row w-full gap-2 sm:gap-4 h-8 sm:h-12">
                <input type="text" id='shortened' wire:model="shortened" class="bg-white w-full px-4 py-1.5 text-black select-none outline-none rounded-md" placeholder="Link pendek">
                <button @click="copyToClipboard('{{ $shortened }}')"
                    class="bg-gradient-green-r text-white font-semibold whitespace-nowrap w-28 sm:w-44 px-2 rounded-md cursor-pointer hover:brightness-75 focus:brightness-125">
                    <span class="font-semibold text-base">Copy!</span>
                </button>
            </div>

            <span class="text-red-500">{{ $msg['error'] }}</span>
        @endif

    </div>
</div>


<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<script>
    function copyToClipboard(text) {
      navigator.clipboard.writeText(text)
        .then(() => {
          console.log('Text copied to clipboard: ' + text);
        })
        .catch((error) => {
          console.error('Unable to copy text to clipboard: ', error);
        });
    }
  </script>
{{-- @endsection --}}

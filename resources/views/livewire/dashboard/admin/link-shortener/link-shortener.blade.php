@section('title', 'Link Shortener')
<div x-data="{ customLink: false, isSubmitted: false }" wire:loading.attr="disabled"
    class="flex flex-col items-center justify-center bg-slate-300 p-2">
    <form wire:submit.prevent="submit" :class="{ 'hidden': isSubmitted }"
        class="flex flex-col items-center justify-center">
        <label for="long_url">Original Link</label>
        <input type="text" id="long_url" wire:model="long_url">
        @error('long_url')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <!-- If Custom Start -->
        <h1 @click="customLink = !customLink">Custom?</h1>
        <div x-show='customLink'>
            <label for="short_url">Custom URL</label>
            <input type="text" id="short_url" wire:model="short_url">
            @error('short_url')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <!-- If Custom End -->

        <button type="submit" @click=" isSubmitted = true " @if (strlen($long_url) < 5 || $errors->any()) disabled @endif
            class="disabled:bg-red-500">Submit</button>
    </form>
    <div x-show="isSubmitted">
        <label for="shortened">Shortened Link</label>
        <input type="text" id='shortened' wire:model="shortened">
        <span class="text-red-500">{{ $msg['error'] }}</span>
        <span class="text-red-500">
            @if ($errors->any())
                {{-- @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach --}}
            @endif
        </span>
    </div>
</div>
{{-- @endsection --}}

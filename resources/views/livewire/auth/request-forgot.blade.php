<div x-data="{ show: false, password: '' }">
    <form wire:submit.prevent="request">
        <label for="email">Email :</label>
        <input id="email" type="text" wire:model="email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <button type="submit" @if ($errors->any() || !$isValid) disabled @endif
            class="disabled:bg-red-500">Submit</button>
    </form>
</div>

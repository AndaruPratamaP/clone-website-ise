<div x-data="{ show: false, password: '' }" class="bg-slate-300 py-[500px]">
    <form wire:submit.prevent="authenticate">
        <label for="email">Email :</label>
        <input id="email" type="text" wire:model="email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label for="password">Password :</label>
        <input id="password" x-bind:type="show ? 'text' : 'password'" x-model="password" wire:model="password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <h1 @click="show = !show">Show Password?</h1>
        <input type="checkbox" wire:model="remember">
        @if (!empty($msg['error']))
            <span class="text-red-500">{{ $msg['error'] }}</span>
        @endif
        <button type="submit" @if ($errors->any() || !$isValid) disabled @endif
            class="disabled:bg-red-500">Submit</button>
    </form>
</div>

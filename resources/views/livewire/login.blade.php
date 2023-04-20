<div x-data="{ show: false, password: '' }">
    <form wire:submit.prevent="authenticate">
        <input type="text" wire:model="email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <input x-bind:type="show ? 'text' : 'password'" x-model="password" wire:model="password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <h1 @click="show = !show">Show Password?</h1>
        <input type="checkbox" wire:model="remember">
        @if (!empty($msg['error']))
            <span class="text-red-500">{{ $msg['error'] }}</span>
        @endif
        <button type="submit" @if (strlen($email) < 5 || strlen($password) < 8 || $errors->any()) disabled @endif
            class="disabled:bg-red-500">Submit</button>
    </form>
</div>

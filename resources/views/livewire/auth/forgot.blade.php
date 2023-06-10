@section('title', 'Forgot Password')
<div x-data="{ show: false, password: '' }">
    <form wire:submit.prevent="change">

        <label for="password">New Password :</label>
        <input id="password" x-bind:type="show ? 'text' : 'password'" x-model="password" wire:model="new_password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <h1 @click="show = !show">Show Password?</h1>

        <button type="submit" @if ($errors->any() || !$isValid) disabled @endif
            class="disabled:bg-red-500">Submit</button>
    </form>
</div>

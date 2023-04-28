<div x-data="{ password: '', password_again: '', password_match: false, other_ref: false }">
    <form wire:submit.prevent="regist">
        <label for="email">Email :</label>
        <input id="email" type="text" wire:model="email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label for="password">Password :</label>
        <input id="password" type="password" x-model="password" wire:model="password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <label for="password_again">Password Again :</label>
        <input id="password_again" type="password" x-model="password_again" wire:model="password_again"
            x-on:input="password_match = (password === password_again) && password !== '' && password_again !== ''">
        <span
            x-bind:class="{
                'block': (password != password_again && password.length > 0 && password_again.length > 0),
                'hidden': !(
                    password != password_again && password.length > 0 && password_again.length > 0)
            }"
            class="text-red-500">Password tidak sama</span>

        <label for="full_name">Full Name :</label>
        <input id="full_name" type="text" wire:model="full_name">
        @error('full_name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label for="phone">Phone :</label>
        <input id="phone" type="text" wire:model="phone">
        @error('phone')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label for="institution">Institution :</label>
        <input id="institution" type="text" wire:model="institution">
        @error('institution')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label x-bind:for="referral === 'Lainnya' ? 'referral2' : 'referral'">Tahu ISE Darimana :</label>
        <select id="referral" wire:model="referral" x-model="referral" x-on:change="other_ref = ''">
            <option value="" selected>Select Tahu ISE darimana ?</option>
            @foreach ($referrals as $referral)
                <option value="{{ $referral }}">{{ $referral }}</option>
            @endforeach
        </select>
        <input id="referral2" wire:model="otherRef" type="text" x-model="other_ref" x-show="referral === 'Lainnya'"
            x-on:input="referral = 'Lainnya'" x-on:focusout="if(!other_ref) referral = ''" />
        @error('referral')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label for="province_id">Province :</label>
        <select id="province_id" wire:model="province_id">
            <option value="" selected>Select Province</option>
            @foreach ($provinces as $province)
                {{-- Check if is ProvinsiResponse --}}
                @if (is_a($province, 'App\Core\Application\Services\Provinsi\ProvinsiResponse'))
                    <option value="{{ $province->getId() }}">{{ $province->getName() }}</option>
                @else
                    <option value="{{ $province['id'] }}">{{ $province['name'] }}</option>
                @endif
            @endforeach
        </select>
        @error('province_id')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <label for="role_id">Status :</label>
        <select id="role_id" wire:model="role_id">
            <option value="" selected>Select Status</option>
            @foreach ($roles as $role)
                {{-- Check if is ProvinsiResponse --}}
                @if (is_a($role, 'App\Core\Application\Services\Role\RoleResponse'))
                    <option value="{{ $role->getId() }}">{{ $role->getName() }}</option>
                @else
                    <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                @endif
            @endforeach
        </select>
        @error('role_id')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <button type="submit" @if ($errors->any() || !$isValid) disabled @endif
            class="disabled:bg-red-500">Submit</button>
    </form>
</div>

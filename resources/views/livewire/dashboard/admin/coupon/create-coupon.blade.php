@section('title', 'Create Coupon')
<div class="min-h-screen p-6 w-full">
  <h1 class="text-4xl sm:text-5xl bg-gradient-orange-r bg-clip-text text-transparent font-bold self-start mb-10">
    Create Coupon
  </h1>
  <div wire:loading.attr="disabled" class="flex flex-col items-center justify-center w-full">
    <form wire:submit.prevent="submit" class="flex flex-col items-center justify-center w-full">
      <div class="flex flex-col w-full gap-2 py-2">
        <label for="coupon_code" class="text-base sm:text-lg text-white">Coupon</label>
        <input
          type="text"
          id="coupon_code"
          wire:model="coupon_code"
          class="bg-white w-full px-4 py-1.5 text-black select-none outline-none rounded-md"
          placeholder="Masukan nama coupon"
        />
        @error('coupon_code')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="flex flex-col w-full gap-2 py-2">
        <label for="school_name" class="text-base sm:text-lg text-white">School Name</label>
        <input
          type="text"
          id="school_name"
          wire:model="school_name"
          class="bg-white w-full px-4 py-1.5 text-black select-none outline-none rounded-md"
          placeholder="Masukan nama sekolah"
        />
        @error('school_name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <div class="flex flex-col w-full gap-2 py-2">
        <label for="end_date" class="text-base sm:text-lg text-white">End Date</label>
        <input
          type="date"
          id="end_date"
          wire:model="end_date"
          class="bg-white w-full px-4 py-1.5 text-black select-none outline-none rounded-md"
          placeholder="7"
        />
        @error('end_date')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
      </div>
      <button type="submit" class="bg-gradient-green-r disabled:brightness-50 text-white font-semibold mt-4
        whitespace-nowrap w-32 sm:w-44 px-4 rounded-md cursor-pointer hover:brightness-75 py-2">
        <span wire:loading.remove class="font-semibold text-base">Create</span>
        <div
          wire:loading
          class="inline-block h-6 w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
          role="status"
        >
          <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
            >Loading...</span
          >
        </div>
      </button>
    </form>
  </div>
</div>

@section('title', 'Coupon Table')
<div class="flex flex-col items-center w-[95%] mx-auto p-4 min-h-screen oveflow-hidden font-montserrat">
    <h1 class="text-4xl sm:text-5xl bg-gradient-orange-r bg-clip-text text-transparent font-bold self-start mb-10">Coupon Data</h1>
    <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center w-full gap-4 font-semibold sm:font-bold text-sm sm:text-xl">
        <div class="flex flex-row items-center gap-2">
            <p class="text-white">Show</p>
            <select name="entries" wire:model="entries" id="entries" class="px-3 py-2 rounded-lg">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <p class="text-white">entries</p>
        </div>
        <div class="flex flex-row items-center gap-2">
            <p class="text-white">Search</p>
            <input type="text" placeholder="Budi..." wire:model="search" name="search"
                class="px-4 py-2 rounded-lg select-none outline-none w-48 sm:w-auto placeholder:text-sm sm:placeholder:text-base" />
        </div>
    </div>
    <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center w-full gap-4 font-semibold sm:font-bold text-sm sm:text-xl mt-4">
        <div class="flex flex-row items-center gap-2">
            <p class="text-white">Order By</p>
            <select name="orderby" wire:model="orderby" id="orderby" class="px-3 py-2 rounded-lg">
                <option value="shorteners.created_at" selected>Time</option>
                <option value="visitor" selected>Visitor</option>
                <option value="short_url">Short Url</option>
                <option value="full_name">Pembuat</option>
            </select>
        </div>
        <div class="flex flex-row items-center gap-2">
            <p class="text-white">Order</p>
            <select name="order" wire:model="order" id="order" class="px-3 py-2 rounded-lg">
                <option value="ASC" selected>Ascending</option>
                <option value="DESC">Descending</option>
            </select>
        </div>
    </div>
    <div
        class="overflow-x-auto w-full h-[700px] mt-8 scrollbar-thin scrollbar-thumb-amber-800 scrollbar-track-amber-500">
        <table class="table-auto text-start w-full text-white">
            <thead class="font-bold text-2xl border-b-2 border-white h-12">
                <th class="pr-8 text-start">#</th>
                <th class="pr-40 whitespace-nowrap text-start">Coupon</th>
                <th class="pr-32 text-start">School</th>
                <th class="pr-14 text-start">Used</th>
                <th class="pr-4 text-center">Pembuat</th>
                <th class="pr-4 text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($coupons as $coupon)
                    <tr class="font-medium text-lg h-16 border-b-[1px] border-white">
                        <td class="pr-8 ">{{ $loop->iteration }}</td>
                        <td class="pr-40 whitespace-nowrap ">{{ $coupon->coupon }}</td>
                        <td class="pr-32 ">{{ $coupon->sekolah }}</td>
                        <td class="pr-32 ">{{ $coupon->used }}</td>
                        <td class="pr-32 ">{{ $coupon->createdBy->full_name }}</td>
                        <td class="pr-4 text-center font-semibold"><a
                                class="py-2 px-4 bg-red-500 rounded-2xl hover:brightness-75"
                                href="{{ route('admin.coupon.delete', ['code' => $coupon->code]) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-12 bg-transparent rounded-lg px-4 py-2 w-full">
        {{ $coupons->links() }}
    </div>
</div>

@section('title', 'GTS Table')
<div class="flex flex-col items-center w-[95%] mx-auto p-4 min-h-screen oveflow-hidden font-montserrat">
    <h1 class="text-4xl sm:text-5xl bg-gradient-blue-r bg-clip-text text-transparent font-bold self-start mb-10">Data
        Pendaftar Grand Talkshow</h1>
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
        class="overflow-x-auto w-full h-[700px] mt-8 scrollbar-thin scrollbar-thumb-amber-800 scrollbar-track-amber-500">
        <table class="table-auto text-start w-full text-white">
            <thead class="font-bold text-2xl border-b-2 border-white h-12">
                <th class="pr-8 text-start">#</th>
                <th class="pr-40 whitespace-nowrap text-start">Nama</th>
                <th class="pr-32 text-start">Referral</th>
                <th class="pr-14 text-start">Status</th>
                <th class="pr-4 text-center">Detail</th>
            </thead>
            <tbody>
                @foreach ($gtss as $gts)
                    <tr class="font-medium text-lg h-16 border-b-[1px] border-white">
                        <td class="pr-8 ">{{ $loop->iteration }}</td>
                        <td class="pr-40 whitespace-nowrap ">{{ $gts->user->full_name }}</td>
                        <td class="pr-32 ">{{ $gts->referral }}</td>
                        <td
                            class="pr-14 font-semibold @if ($gts->status_type->name == 'Verified') bg-gradient-blue-r bg-clip-text text-transparent @else text-[#B5B3BC] @endif">
                            {{ $gts->status_type->name }}</td>
                        <td class="pr-4 text-center font-semibold"><a
                                class="py-2 px-4 bg-gradient-orange-r rounded-2xl hover:brightness-75"
                                href=" /admin/gts/{{ $gts->user->id }}">Action</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-12 bg-transparent rounded-lg px-4 py-2 w-full">
        {{ $gtss->links() }}
    </div>

</div>

<div class="flex w-11/12 flex-col justify-center items-center mx-auto bg-green-500 w-full">
    <div class="flex justify-between items-center">
        <select name="entries" wire:model="entries" id="entries">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <input type="text" placeholder="Search" wire:model="search" name="search" />
    </div>
    <div class="flex overlfow-auto h-96 w-full mx-auto">
        <table class="table-auto ">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Referral</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($gtss as $gts)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gts->user->full_name }}</td>
                        <td>{{ $gts->referral }}</td>
                        <td>{{ $gts->status_type->name }}</td>
                        <td><a href=" /gts-table/{{ $gts->user->id }}">Action</a></td>
                    </tr>
                @endforeach
            </tbody>
    </div>

    <div id="link">
        {{ $gtss->links() }}
    </div>
</div>

<div class="">
    <table class="table-auto bg-slate-300 p-4 rounded-lg">
        <thead>
            <tr class="px-4 py-2 font-bold">
                <th>No.</th>
                <th>Shortened Link</th>
                <th>Original Link</th>
                <th>Visitors</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shorteners as $shortenerObj)
                <tr>
                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2">{{ $shortenerObj->getShortUrl() }}</td>
                    <td class="px-4 py-2">{{ $shortenerObj->getLongUrl() }}</td>
                    <td class="px-4 py-2">{{ $shortenerObj->getVisitor() }}</td>
                    <td class="px-4 py-2">{{ $shortenerObj->getUserId()->toString() }}</td>
                    <td class="px-4 py-2"><a href="#">Edit</Button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

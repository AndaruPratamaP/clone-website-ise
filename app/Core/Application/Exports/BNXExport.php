<?php

namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use Maatwebsite\Excel\Concerns\FromCollection;

class BNXExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Bionix::join('users', 'bionix.ketua_id', '=', 'users.id')
            ->join('status_types', 'bionix.status_type_id', '=', 'status_types.id')
            ->select('bionix.id', 'bionix.team_name', 'users.full_name','bionix.anggota_name', )
            ->get();
        return $data;
    }
}
<?php

namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\BionixMoodle\BionixMoodle;
use Maatwebsite\Excel\Concerns\FromCollection;

class BionixMoodleExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = BionixMoodle::select('username', 'firstname', 'lastname', 'email', 'password', 'course1', 'role1')
            ->get();

        return $data;
    }
}

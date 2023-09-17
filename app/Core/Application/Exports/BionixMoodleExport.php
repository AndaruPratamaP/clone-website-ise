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
        $data = BionixMoodle::all()
            ->pluck('username', 'firstname', 'lastname', 'email', 'password', 'course1', 'role1')
            ->prepend('username', 'firstname', 'lastname', 'email', 'password', 'course1', 'role1');

        foreach ($data as $data=>$value) 
        {
            $value['lastname'] = empty($value['lastname']) ? $value['firstname'] : $value['lastname'];
        }

        return $data;
    }
}

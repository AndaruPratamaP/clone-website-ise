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

        // Modify 'lastname' to be 'firstname' if it's empty
        $data->each(function ($item, $key) {
            if (empty($item['lastname'])) {
                $item['lastname'] = $item['firstname'];
            }
        });

        // add data to first rows
        $data->prepend([
            'username' => 'username',
            'firstname' => 'firstname',
            'lastname' => 'lastname',
            'email' => 'email',
            'password' => 'password',
            'course1' => 'course1',
            'role1' => 'role1',
        ]);

        return $data;
    }
}

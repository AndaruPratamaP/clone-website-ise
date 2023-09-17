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

        // foreach through each row
        $data = $data->map(function ($user){
            if (empty($user->lastname)) {
                $user->lastname = $user->firstname;
            }
        });

        return $data;
    }
}

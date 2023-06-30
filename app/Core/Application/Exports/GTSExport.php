<?php

namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\GrandTalkshow\GrandTalkshow;
use Maatwebsite\Excel\Concerns\FromCollection;

class GTSExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = GrandTalkshow::join('users', 'grand_talkshow.user_id', '=', 'users.id')
            ->join('status_types', 'grand_talkshow.status_type_id', '=', 'status_types.id')
            ->select('grand_talkshow.id', 'users.full_name', 'users.email', 'users.handphone', 'users.institution', 'grand_talkshow.referral', 'grand_talkshow.share_proof_file', 'status_types.name')
            ->get();

        foreach ($data as $key => $value) {
            $data[$key]['share_proof_file'] = config('app.url') . $value['share_proof_file'];
        }

        return $data;
    }
}

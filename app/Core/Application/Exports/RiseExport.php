<?php
namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\Rise\Rise;
use Illuminate\Support\Facades\Schema; // Add this import
use Illuminate\Database\Schema\Blueprint; // Add this import
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RiseExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Retrieve data from the database using joins and select statement
        $data = Rise::join('users', 'rise.leader_id', '=', 'users.id')
            ->join('status_types', 'rise.status_type_id', '=', 'status_types.id')
            ->leftJoin('payment', 'rise.payment_id', '=', 'payment.id')
            ->leftJoin('payment_status', 'payment.payment_status_id', '=', 'payment_status.id')
            ->leftJoin('bank_list', 'payment.bank_list_id', '=', 'bank_list.id')
            ->select(
                'rise.id',
                'users.id as leader_id',
                'rise.team_name',
                'users.full_name as leader_full_name',
                'users.email as leader_email',
                'users.handphone as leader_handphone',
                'users.institution as leader_institution',
                'rise.leader_twibbon',
                'rise.referral_code',
                'payment_status.name as payment_status',
                'bank_list.account_number',
                'status_types.name as status_type_name',
                'rise.leader_student_card',
                'rise.leader_poster',
                // ... (previous member1 columns)
                'rise.member1_name',
                'rise.member1_agency',
                'rise.member1_phone',
                'rise.member1_email',
                'rise.member1_twibbon',
                'rise.member1_student_card',
                'rise.member1_poster',
                // ... (previous member2 columns)
                'rise.member2_name',
                'rise.member2_agency',
                'rise.member2_phone',
                'rise.member2_email',
                'rise.member2_twibbon',
                'rise.member2_student_card',
                'rise.member2_poster',
                /// .. data tambaan
                'rise.answer_file_final',
                'rise.answer_file_semifinal',
                'rise.answer_file_penyisihan',
                'rise.poster_file_penyisihan',
                'rise.account_owner',
                'rise.bank_name',
                'rise.payment_file',
                'rise.youtube_link',
                'rise.created_at as create_at' ,
                'rise.updated_at as update_at',
            )
            ->get();

        // Update URLs for file paths
        foreach ($data as $key => $value) {
            // ... (previous URL updates)
            $data[$key]['answer_file_final'] = config('app.url') . $value['answer_file_final'];
            $data[$key]['answer_file_semifinal'] = config('app.url') . $value['answer_file_semifinal'];
            $data[$key]['answer_file_penyisihan'] = config('app.url') . $value['answer_file_penyisihan'];
            $data[$key]['poster_file_penyisihan'] = config('app.url') . $value['poster_file_penyisihan'];
            $data[$key]['payment_file'] = config('app.url') . $value['payment_file'];
        }

        return $data;
    }

    /**
     * Define the headings for the exported Excel file.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Leader ID',
            'Team Name',
            'Leader Full Name',
            'Leader Email',
            'Leader Handphone',
            'Leader Institution',
            'Leader Twibbon Link',
            'Referral',
            'Payment Status',
            'Account Number',
            'Status Type',
            'Leader Student Card File',
            'Leader Poster File',
            // ... (previous member1 headings)
            'Member1 Name',
            'Member1 Agency',
            'Member1 Phone',
            'Member1 Email',
            'Member1 Twibbon',
            'Member1 Student Card',
            'Member1 Poster',
            // ... (previous member2 headings)
            'Member2 Name',
            'Member2 Agency',
            'Member2 Phone',
            'Member2 Email',
            'Member2 Twibbon',
            'Member2 Student Card',
            'Member2 Poster',
            // data tambahan
            'Answer File Final',
            'Answer File Semifinal',
            'Answer File Penyisihan',
            'Poster File Penyisihan',
            'Account Owner',
            'Bank Name',
            'Payment File',
            'YouTube Link',
            'Created At',
            'Updated At',
        ];
    }
}

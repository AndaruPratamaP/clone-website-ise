<?php

namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\ISClass\ISClass;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ISClassExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = ISClass::join('users', 'is_class.user_id', '=', 'users.id')
            ->join('status_types', 'is_class.status_type_id', '=', 'status_types.id')
            ->join('payment', 'is_class.payment_id', '=', 'payment.id')
            ->join('payment_status', 'payment.payment_status_id', '=', 'payment_status.id')
            ->join('bank_list', 'payment.bank_list_id', '=', 'bank_list.id')
            ->select(
            'is_class.id',
            'users.id as user_id', // Using an alias for users.id
            'users.full_name',
            'users.email',
            'users.handphone',
            'users.institution',
            'is_class.twibbon_link',
            'is_class.referral',
            'payment_status.name',
            'bank_list.account_number',
            'status_types.name as status_type_name',  // Using an alias for status_types.name
            'is_class.student_card_file',
            'is_class.follow_proof_file',
            'is_class.upload_poster_file',
            'is_class.created_at as create_at',
            'is_class.updated_at as update_at',
            )
            ->get();

        foreach ($data as $key => $value) {
            $data[$key]['student_card_file'] = config('app.url') . $value['student_card_file'];
            $data[$key]['follow_proof_file'] = config('app.url') . $value['follow_proof_file'];
            $data[$key]['upload_poster_file'] = config('app.url') . $value['upload_poster_file'];
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
            'User ID',
            'Full Name',
            'Email',
            'Handphone',
            'Institution',
            'Twibbon Link',
            'Referral',
            'Payment Status',
            'Account Number',
            'Status Type',
            'Student Card File',
            'Follow Proof File',
            'Upload Poster File',
            'Created At',
            'Updated At',
        ];
    }
}


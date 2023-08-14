<?php

namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\BionixRoadshow\BionixRoadshow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BionixRdExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = BionixRoadshow::join('users', 'bionix_roadshow.ketua_id', '=', 'users.id')
            ->join('status_types', 'bionix_roadshow.status_type_id', '=', 'status_types.id')
            ->join('payment', 'bionix_roadshow.payment_id', '=', 'payment.id')
            ->join('payment_status', 'payment.payment_status_id', '=', 'payment_status.id')
            ->join('bank_list', 'payment.bank_list_id', '=', 'bank_list.id')
            ->select(
                'bionix_roadshow.id as bionix_roadshow_id',
                'users.id',
                'users.full_name',
                'users.email',
                'users.handphone',
                'users.institution',
                'bank_list.account_number as bank_account_number',
                'payment_status.name as payment_status_name',
                'bionix_roadshow.school',
                'bionix_roadshow.bank_account',
                'bionix_roadshow.dp_amount',
                'bionix_roadshow.payment_method',
                'bionix_roadshow.payment_proof_dp',
                'bionix_roadshow.payment_proof_pelunasan',
                'bionix_roadshow.promo_code',
                'bionix_roadshow.ketua_student_card',
                'bionix_roadshow.ketua_poster_file',
                'bionix_roadshow.ketua_follow_ig_proof',
                'bionix_roadshow.ketua_twibbon_link',
                'bionix_roadshow.anggota_full_name',
                'bionix_roadshow.anggota_email',
                'bionix_roadshow.anggota_wa',
                'bionix_roadshow.anggota_student_card',
                'bionix_roadshow.anggota_poster_file',
                'bionix_roadshow.anggota_follow_ig_proof',
                'bionix_roadshow.anggota_twibbon_link',
                'status_types.name',
                'bionix_roadshow.created_at as create_at',
                'bionix_roadshow.updated_at as update_at',
            )
            ->get();

        foreach ($data as $key => $value) {
            $data[$key]['payment_proof_dp'] = config('app.url') . $value['payment_proof_dp'];
            $data[$key]['payment_proof_pelunasan'] = config('app.url') . $value['payment_proof_pelunasan'];
            $data[$key]['ketua_student_card'] = config('app.url') . $value['ketua_student_card'];
            $data[$key]['ketua_poster_file'] = config('app.url') . $value['ketua_poster_file'];
            $data[$key]['ketua_follow_ig_proof'] = config('app.url') . $value['ketua_follow_ig_proof'];
            $data[$key]['anggota_student_card'] = config('app.url') . $value['anggota_student_card'];
            $data[$key]['anggota_poster_file'] = config('app.url') . $value['anggota_poster_file'];
            $data[$key]['anggota_follow_ig_proof'] = config('app.url') . $value['anggota_follow_ig_proof'];
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
            'Bionix Roadshow ID',
            'Ketua ID',
            'Ketua Full Name',
            'Ketua Email',
            'Ketua Handphone',
            'Ketua Institution',
            'Bank Account Number', // Added column
            'Payment Status',      // Added column
            'School',
            'Bank Account',
            'DP Amount',
            'Payment Method',
            'Payment Proof DP',
            'Payment Proof Pelunasan',
            'Promo Code',
            'Ketua Student Card File',
            'Ketua Poster File',
            'Ketua Follow IG Proof',
            'Ketua Twibbon Link',
            'Anggota Full Name',
            'Anggota Email',
            'Anggota WA',
            'Anggota Student Card File',
            'Anggota Poster File',
            'Anggota Follow IG Proof',
            'Anggota Twibbon Link',
            'Status Type',
            'Created At',
            'Updated At',
        ];
    }
}

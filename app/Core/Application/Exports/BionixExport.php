<?php

namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BionixExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Bionix::join('users', 'bionix.ketua_id', '=', 'users.id')
            ->join('status_types', 'bionix.status_type_id', '=', 'status_types.id')
            ->join('payment', 'bionix.payment_id', '=', 'payment.id')
            ->join('payment_status', 'payment.payment_status_id', '=', 'payment_status.id')
            ->join('bank_list', 'payment.bank_list_id', '=', 'bank_list.id')
            ->select(
                'bionix.id as bionix_id',
                'users.id',
                'bionix.team_name',
                'users.full_name',
                'users.email',
                'users.institution',
                'users.handphone',
                'bionix.anggota_name',
                'bionix.anggota_email',
                'bionix.anggota_hp',
                'bionix.asal_sekolah',
                'bionix.ketua_student_card',
                'bionix.ketua_poster',
                'bionix.ketua_bukti_insta',
                'bionix.anggota_student_card',
                'bionix.anggota_poster',
                'bionix.anggota_bukti_insta',
                'payment.id as payment_id',
                'payment_status.name as payment_status',
                'bank_list.account_number as bank_account_number',
                'status_types.name as status_type',
                'bionix.created_at as Created_at',
                'bionix.updated_at as Updated_at'
            )
            ->get();

        foreach ($data as $key => $value) {
            $data[$key]['ketua_student_card'] = config('app.url') . $value['ketua_student_card'];
            $data[$key]['ketua_poster'] = config('app.url') . $value['ketua_poster'];
            $data[$key]['ketua_bukti_insta'] = config('app.url') . $value['ketua_bukti_insta'];
            $data[$key]['anggota_student_card'] = config('app.url') . $value['anggota_student_card'];
            $data[$key]['anggota_poster'] = config('app.url') . $value['anggota_poster'];
            $data[$key]['anggota_bukti_insta'] = config('app.url') . $value['anggota_bukti_insta'];
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
            'Bionix ID',
            'Users ID',
            'Team Name',
            'Ketua Name',
            'Ketua Email',
            'Ketua Institution',
            'Ketua Phone Number',
            'Anggota Name',
            'Anggota Email',
            'Anggota Phone Number',
            'Asal Sekolah',
            'Ketua Student Card File',
            'Ketua Poster File',
            'Ketua Bukti Insta File',
            'Anggota Student Card File',
            'Anggota Poster File',
            'Anggota Bukti Insta File',
            'Payment ID',
            'Payment Status',
            'Bank Account Number',
            'Status Type ID',
            'Created At',
            'Updated At',
        ];
    }
}

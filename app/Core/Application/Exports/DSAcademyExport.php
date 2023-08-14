<?php
namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\DSAcademy\DSAcademy; // Update namespace and model name
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DSAcademyExport implements FromCollection, WithHeadings // Update class name
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = DSAcademy::join('users', 'ds_academy.ketua_id', '=', 'users.id')
            ->join('status_types', 'ds_academy.status_type_id', '=', 'status_types.id')
            ->join('payment', 'ds_academy.payment_id', '=', 'payment.id')
            ->join('payment_status', 'payment.payment_status_id', '=', 'payment_status.id')
            ->join('bank_list', 'payment.bank_list_id', '=', 'bank_list.id')
            ->select(
                'ds_academy.id as ds_academy_id',
                'users.id as ketua_id',
                'users.full_name',
                'users.email',
                'users.handphone',
                'users.institution',
                'ds_academy.ketua_instagram_link',
                'ds_academy.ketua_twibbon_link',
                'ds_academy.ketua_cv_file',
                'ds_academy.ketua_student_card',
                'ds_academy.first_full_name',
                'ds_academy.first_institution',
                'ds_academy.first_major',
                'ds_academy.first_email',
                'ds_academy.first_wa',
                'ds_academy.first_instagram_link',
                'ds_academy.first_twibbon_link',
                'ds_academy.first_cv_file',
                'ds_academy.first_student_card',
                'ds_academy.second_full_name',
                'ds_academy.second_institution',
                'ds_academy.second_major',
                'ds_academy.second_email',
                'ds_academy.second_wa',
                'ds_academy.second_instagram_link',
                'ds_academy.second_twibbon_link',
                'ds_academy.second_cv_file',
                'ds_academy.second_student_card',
                'ds_academy.motive_1',
                'ds_academy.motive_2',
                'ds_academy.motive_3',
                'ds_academy.motive_4',
                'status_types.name as status_type_name',
                'payment_status.name as payment_status_name',
                'bank_list.account_number',
                'ds_academy.created_at as create_at',
                'ds_academy.updated_at as update_at',
            )
            ->get();

        foreach ($data as $key => $value) {
            $data[$key]['ketua_cv_file'] = config('app.url') . $value['ketua_cv_file'];
            $data[$key]['ketua_student_card'] = config('app.url') . $value['ketua_student_card'];
            $data[$key]['first_cv_file'] = config('app.url') . $value['first_cv_file'];
            $data[$key]['first_student_card'] = config('app.url') . $value['first_student_card'];
            $data[$key]['second_cv_file'] = config('app.url') . $value['second_cv_file'];
            $data[$key]['second_student_card'] = config('app.url') . $value['second_student_card'];
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
            'DS Academy ID', // Update headings accordingly
            'Ketua ID',
            'Ketua Full Name',
            'Ketua Email',
            'Ketua Handphone',
            'Ketua Institution',
            'Ketua Instagram Link',
            'Ketua Twibbon Link',
            'Ketua CV File',
            'Ketua Student Card File',
            'First Full Name',
            'First Institution',
            'First Major',
            'First Email',
            'First WA',
            'First Instagram Link',
            'First Twibbon Link',
            'First CV File',
            'First Student Card File',
            'Second Full Name',
            'Second Institution',
            'Second Major',
            'Second Email',
            'Second WA',
            'Second Instagram Link',
            'Second Twibbon Link',
            'Second CV File',
            'Second Student Card File',
            'Motive 1',
            'Motive 2',
            'Motive 3',
            'Motive 4',
            'Status Type',
            'Payment Status',
            'Bank Account Number',
            'Created At',
            'Updated At',
        ];
    }
}

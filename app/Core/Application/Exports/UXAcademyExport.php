<?php
namespace App\Core\Application\Exports;

use App\Core\Domain\Models\Eloquents\UXAcademy\UXAcademy;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UXAcademyExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = UXAcademy::join('users', 'ux_academy.user_id', '=', 'users.id')
            ->join('status_types', 'ux_academy.status_type_id', '=', 'status_types.id')
            ->join('payment', 'ux_academy.payment_id', '=', 'payment.id')
            ->join('payment_status', 'payment.payment_status_id', '=', 'payment_status.id')
            ->join('bank_list', 'payment.bank_list_id', '=', 'bank_list.id')
            ->select(
                'ux_academy.id as ux_academy_id',
                'users.id as user_id',
                'users.full_name',
                'users.email',
                'users.handphone',
                'users.institution',
                'ux_academy.instagram_link',
                'ux_academy.twibbon_link',
                'ux_academy.cv_file',
                'ux_academy.student_card',
                'ux_academy.answer_file',
                'ux_academy.major',
                'ux_academy.motive_1',
                'ux_academy.motive_2',
                'ux_academy.motive_3',
                'ux_academy.motive_4',
                'ux_academy.motive_5',
                'status_types.name as status_type_name',
                'payment_status.name as payment_status_name',
                'bank_list.account_number',
                'ux_academy.created_at as create_at' ,
                'ux_academy.updated_at as update_at',
            )
            ->get();

        foreach ($data as $key => $value) {
            $data[$key]['cv_file'] = config('app.url') . $value['cv_file'];
            $data[$key]['student_card'] = config('app.url') . $value['student_card'];
            $data[$key]['answer_file'] = config('app.url') . $value['answer_file'];
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
            'Ux Academy ID',
            'User ID',
            'Full Name',
            'Email',
            'Handphone',
            'Institution',
            'Instagram Link',
            'Twibbon Link',
            'CV File',
            'Student Card File',
            'Answer File',
            'Major',
            'Motive 1',
            'Motive 2',
            'Motive 3',
            'Motive 4',
            'Motive 5',
            'Status Type',
            'Payment Status',
            'Bank Account Number',
            'Created At',
            'Updated At',
        ];
    }
}

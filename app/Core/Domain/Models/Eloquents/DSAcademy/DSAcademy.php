<?php

namespace App\Core\Domain\Models\Eloquents\DSAcademy;

use Illuminate\Database\Eloquent\Model;

class DSAcademy extends model
{
    protected $table = 'ds_academy';

    protected $fillable = [
        'id',
        'team_name',
        'ketua_id',
        'payment_id',
        'status_type_id',
        'ketua_major',
        'ketua_instagram_link',
        'ketua_twibbon_link',
        'ketua_cv_file',
        'ketua_student_card',
        'first_full_name',
        'first_institution',
        'first_major',
        'first_email',
        'first_wa',
        'first_instagram_link',
        'first_twibbon_link',
        'first_cv_file',
        'first_student_card',
        'second_full_name',
        'second_institution',
        'second_major',
        'second_email',
        'second_wa',
        'second_instagram_link',
        'second_twibbon_link',
        'second_cv_file',
        'second_student_card',
        'motive_1',
        'motive_2',
        'motive_3',
        'motive_4',
        'answer_file',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $casts = [
        'id' => 'string',
        'team_name' => 'string',
        'ketua_id' => 'string',
        'payment_id' => 'string',
        'status_type_id' => 'integer',
        'ketua_major' => 'string',
        'ketua_instagram_link' => 'string',
        'ketua_twibbon_link' => 'string',
        'ketua_cv_file' => 'string',
        'ketua_student_card' => 'string',
        'first_full_name' => 'string',
        'first_institution' => 'string',
        'first_major' => 'string',
        'first_email' => 'string',
        'first_wa' => 'string',
        'first_instagram_link' => 'string',
        'first_twibbon_link' => 'string',
        'first_cv_file' => 'string',
        'first_student_card' => 'string',
        'second_full_name' => 'string',
        'second_institution' => 'string',
        'second_major' => 'string',
        'second_email' => 'string',
        'second_wa' => 'string',
        'second_instagram_link' => 'string',
        'second_twibbon_link' => 'string',
        'second_cv_file' => 'string',
        'second_student_card' => 'string',
        'motive_1' => 'string',
        'motive_2' => 'string',
        'motive_3' => 'string',
        'motive_4' => 'string',
        'answer_file' => 'string',
    ];

    public function ketua()
    {
        return $this->belongsTo('App\Core\Domain\Models\Eloquents\User\User', 'ketua_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Core\Domain\Models\Eloquents\Payment\Payment', 'payment_id');
    }

    public function status_type()
    {
        return $this->belongsTo('App\Core\Domain\Models\Eloquents\StatusType\StatusType', 'status_type_id');
    }
}

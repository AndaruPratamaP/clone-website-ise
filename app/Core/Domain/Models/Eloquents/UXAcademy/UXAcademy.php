<?php

namespace App\Core\Domain\Models\Eloquents\UXAcademy;

use Illuminate\Database\Eloquent\Model;

class UXAcademy extends model
{
    protected $table = 'ux_academy';
    protected $fillable = [
        'id',
        'user_id',
        'payment_id',
        'status_type_id',
        'instagram_link',
        'twibbon_link',
        'cv_file',
        'student_card',
        'major',
        'motive_1',
        'motive_2',
        'motive_3',
        'motive_4',
        'motive_5',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $casts = [
        'id' => 'string',
        'user_id' => 'string',
        'payment_id' => 'string',
        'status_type_id' => 'integer',
        'instagram_link' => 'string',
        'twibbon_link' => 'string',
        'cv_file' => 'string',
        'student_card' => 'string',
        'major' => 'string',
        'motive_1' => 'string',
        'motive_2' => 'string',
        'motive_3' => 'string',
        'motive_4' => 'string',
        'motive_5' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo('App\Core\Domain\Models\Eloquents\User\User', 'user_id');
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

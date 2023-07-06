<?php

namespace App\Core\Domain\Models\Eloquents\ISClass;

use Illuminate\Database\Eloquent\Model;

class ISClass extends model
{
    protected $table = 'is_class';

    protected $fillable = [
        "id",
        "student_card_file",
        "twibbon_link",
        "referral",
        "user_id",
        "payment_id",
        "status_type_id"
    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';

    protected $casts = [
        'id' => 'string',
        'student_card_file' => 'string',
        'twibbon_link' => 'string',
        'referral' => 'string',
        'user_id' => 'string',
        'payment_id' => 'string',
        'status_type_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status_type()
    {
        return $this->belongsTo(StatusType::class, 'status_type_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}

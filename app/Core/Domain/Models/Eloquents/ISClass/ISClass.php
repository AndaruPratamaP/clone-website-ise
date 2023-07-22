<?php

namespace App\Core\Domain\Models\Eloquents\ISClass;

use App\Core\Domain\Models\Eloquents\Payment\Payment;
use App\Core\Domain\Models\Eloquents\StatusType\StatusType;
use App\Core\Domain\Models\Eloquents\User\User;
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
        "status_type_id",
        "upload_poster_file",
        "follow_proof_file",
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
        'upload_poster_file' => 'string',
        'follow_proof_file' => 'string',
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

<?php

namespace App\Core\Domain\Models\Eloquents\Payment;

use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends model
{
    protected $table = 'payment';

    protected $fillable = [
        "id",
        "user_id",
        "event_id",
        "bill",
        "payment_proof_file",
        "deadline",
        "bank_list_id",
        "payment_status_id"
    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';

    protected $casts = [
        'id' => 'string',
        'user_id' => 'string',
        'event_id' => 'string',
        'bill' => 'double',
        'payment_proof_file' => 'string',
        'deadline' => 'timestamp',
        'bank_list_id' => 'integer',
        'payment_status_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Core\Domain\Models\Eloquents\GrandTalkshow;

use App\Core\Domain\Models\Eloquents\StatusType\StatusType;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class GrandTalkshow extends model
{
    protected $table = 'grand_talkshow';
    protected $fillable = ['id', 'share_proof_file', 'referral', 'user_id', 'status_type_id'];
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $casts = [
        'id' => 'string',
        'share_proof_file' => 'string',
        'referral' => 'string',
        'user_id' => 'string',
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
}

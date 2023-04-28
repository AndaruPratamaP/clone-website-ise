<?php

namespace App\Core\Domain\Models\Eloquents\Verification;

use Illuminate\Database\Eloquent\Model;

class Verification extends model
{
    protected $table = 'verifications';
    protected $primaryKey = ['code', 'user_id', 'verification_type_id'];
    public $incrementing = false;
    protected $fillable = ['code', 'user_id', 'verification_type_id', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];

    // relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function verificationType()
    {
        return $this->belongsTo(VerificationType::class, 'verification_type_id');
    }
}

<?php

namespace App\Core\Domain\Models\Eloquents\GrandTalkshow;

use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class GrandTalkshow extends model
{
  protected $table = 'grand_talkshow';
  protected $fillable = ['id', 'share_proof_file', 'referral', 'user_id'];
  protected $hidden = ['created_at', 'updated_at'];

  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
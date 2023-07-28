<?php

namespace App\Core\Domain\Models\Eloquents\BionixCoupon;

use Illuminate\Database\Eloquent\Model;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\BionixRoadshow\BionixRoadshow;

class BionixCoupon extends model
{
  // Specify the table name
  protected $table = 'bionix_coupon';
  protected $fillable = ['code', 'sekolah', 'discount', 'deadline', 'created_by'];
  protected $hidden = ['created_at', 'updated_at'];
  protected $casts = [
    'code' => 'string',
    'sekolah' => 'string',
    'discount' => 'string',
    'deadline' => 'string',
    'created_by' => 'string',
  ];
  protected $primaryKey = 'code';
  public function createdBy()
  {
    return $this->belongsTo(User::class, 'created_by');
  }
  public function bionix()
  {
    return $this->hasMany(BionixRoadshow::class, 'promo_code', 'code');
  }
}

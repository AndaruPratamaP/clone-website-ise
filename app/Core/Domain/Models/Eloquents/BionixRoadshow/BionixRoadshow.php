<?php

namespace App\Core\Domain\Models\Eloquents\BionixRoadshow;

use Illuminate\Database\Eloquent\Model;
use App\Core\Domain\Models\Eloquents\StatusType\StatusType;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\Payment\Payment;
use App\Core\Domain\Models\Eloquents\BionixCoupon\BionixCoupon;

class BionixRoadshow extends model
{
  protected $table = 'bionix_roadshow';

  protected $fillable = [
    'id',
    'team_name',
    'ketua_id',
    'payment_id',
    'status_type_id',
    'school',
    'bank_account',
    'dp_amount',
    'payment_method',
    'payment_proof_dp',
    'payment_proof_pelunasan',
    'promo_code',
    'ketua_student_card',
    'ketua_poster_file',
    'ketua_follow_ig_proof',
    'ketua_twibbon_link',
    'anggota_full_name',
    'anggota_email',
    'anggota_wa',
    'anggota_student_card',
    'anggota_poster_file',
    'anggota_follow_ig_proof',
    'anggota_twibbon_link',
  ];

  protected $hidden = ['created_at', 'updated_at'];

  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected $casts = [
    'id' => 'string',
    'team_name' => 'string',
    'ketua_id' => 'string',
    'payment_id' => 'string',
    'status_type_id' => 'string',
    'school' => 'string',
    'bank_account' => 'string',
    'dp_amount' => 'string',
    'payment_method' => 'string',
    'payment_proof_dp' => 'string',
    'payment_proof_pelunasan' => 'string',
    'promo_code' => 'string',
    'ketua_student_card' => 'string',
    'ketua_poster_file' => 'string',
    'ketua_follow_ig_proof' => 'string',
    'ketua_twibbon_link' => 'string',
    'anggota_full_name' => 'string',
    'anggota_email' => 'string',
    'anggota_wa' => 'string',
    'anggota_student_card' => 'string',
    'anggota_poster_file' => 'string',
    'anggota_follow_ig_proof' => 'string',
    'anggota_twibbon_link' => 'string',
  ];

  public function ketua()
  {
    return $this->belongsTo(User::class, 'ketua_id');
  }

  public function payment()
  {
    return $this->belongsTo(Payment::class, 'payment_id');
  }

  public function status_type()
  {
    return $this->belongsTo(StatusType::class, 'status_type_id');
  }
  public function promoCode()
  {
    return $this->belongsTo(BionixCoupon::class, 'promo_code');
  }
}

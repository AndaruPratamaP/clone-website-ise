<?php

namespace App\Core\Domain\Models\Eloquents\Bionix;

use App\Core\Domain\Models\Eloquents\Payment\Payment;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class Bionix extends model
{
    protected $table = 'bionix';
    protected $fillable = ['id', 'team_name', 'ketua_id', 'ketua_student_card', 'ketua_poster','ketua_twibbon','anggota_name','anggota_email','anggota_hp','anggota_student_card','anggota_poster','anggota_twibbon','payment_id','status_type_id','asal_sekolah','ketua_bukti_insta','anggota_bukti_insta'];
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $casts = [
        'id' => 'string',
        'team_name' => 'string',
        'ketua_id' => 'string',
        'ketua_student_card' => 'string',
        'ketua_poster' => 'string',
        'ketua_twibbon' => 'string',
        'anggota_name' => 'string',
        'anggota_email' => 'string',
        'anggota_hp' => 'string',
        'anggota_student_card' => 'string',
        'anggota_poster' => 'string',
        'anggota_twibbon' => 'string',
        'payment_id' => 'string',
        'status_type_id' => 'string',
        'asal_sekolah' => 'string',
        'ketua_bukti_insta' => 'string',
        'anggota_bukti_insta' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ketua_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
    public function status_type()
    {
        return $this->belongsTo('App\Core\Domain\Models\Eloquents\StatusType\StatusType', 'status_type_id');
    }
}

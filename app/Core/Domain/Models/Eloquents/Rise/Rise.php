<?php

namespace App\Core\Domain\Models\Eloquents\Rise;

// use App\Core\Domain\Models\Eloquents\Payment\Payment;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class Rise extends model
{
    protected $table = 'rise';
    protected $fillable = [
        'id',
        'status_type_id',
        'team_name',
        'leader_id',
        // 'leader_agency',
        // 'leader_name',
        // 'leader_phone',
        // 'leader_email',
        'leader_twibbon',
        'referral_code',
        'leader_student_card',
        'leader_poster',
        'leader_ig_follow',

        'member1_name',
        'member1_agency',
        'member1_phone',
        'member1_email',
        'member1_twibbon',
        'member1_student_card',
        'member1_poster',
        'member1_ig_follow',

        'member2_name',
        'member2_agency',
        'member2_phone',
        'member2_email',
        'member2_twibbon',
        'member2_student_card',
        'member2_poster',
        'member2_ig_follow',

        /// form penyisihan

        'answer_file_penyisihan',
        'poster_file_penyisihan',

        /// form pembayaran

        'account_owner',
        'bank_name',
        'payment_file',

        /// form semifinal

        'youtube_link',
        'answer_file_semifinal',

        /// final

        'answer_file_final'

    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $casts = [
        'id' => 'string',
        'status_type_id' => 'integer',
        'team_name' => 'string',
        'leader_id' => 'string',
        // 'leader_agency' => 'string',
        // 'leader_name' => 'string',
        // 'leader_phone' => 'string',
        // 'leader_email' => 'string',
        'leader_twibbon' => 'string',
        'referral_code' => 'string',
        'leader_student_card' => 'string',
        'leader_poster' => 'string',
        'leader_ig_follow' => 'string',

        'member1_name' => 'string',
        'member1_agency' => 'string',
        'member1_phone' => 'string',
        'member1_email' => 'string',
        'member1_twibbon' => 'string',
        'member1_student_card' => 'string',
        'member1_poster' => 'string',
        'member1_ig_follow' => 'string',

        'member2_name' => 'string',
        'member2_agency' => 'string',
        'member2_phone' => 'string',
        'member2_email' => 'string',
        'member2_twibbon' => 'string',
        'member2_student_card' => 'string',
        'member2_poster' => 'string',
        'member2_ig_follow' => 'string',


        /// form penyisihan

        'answer_file_penyisihan'=> 'string',
        'poster_file_penyisihan'=> 'string',

        /// form pembayaran

        'account_owner'=> 'string',
        'bank_name'=> 'string',
        'payment_file'=> 'string',

        /// form semifinal

        'youtube_link'=> 'string',
        'answer_file_semifinal'=> 'string',

        /// final

        'answer_file_final'=> 'string'

    ];

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    // public function payment()
    // {
    //     return $this->belongsTo(Payment::class, 'payment_id');
    // }

    public function status_type()
    {
        return $this->belongsTo('App\Core\Domain\Models\Eloquents\StatusType\StatusType', 'status_type_id');
    }
}

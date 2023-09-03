<?php

namespace App\Core\Domain\Models\Eloquents\BionixMoodle;

use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class BionixMoodle extends model
{
    protected $table = 'bionix_moodle';
    protected $fillable = [
        'users_id',
        'username',
        'firstname',
        'lastname',
        'email',
        'password',
        'course1',
        'role1',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}

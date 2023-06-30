<?php

namespace App\Core\Domain\Models\Eloquents\Shortener;

use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class Shortener extends model
{
    protected $table = 'shorteners';
    protected $fillable = ['user_id', 'short_url', 'long_url', 'is_customized', 'visitor'];
    protected $guarded = ['id'];
    protected $hidden = [''];
    protected $primaryKey = 'id';
    protected $casts = [
        'id' => 'int',
        'user_id' => 'string',
        'short_url' => 'string',
        'long_url' => 'string',
        'is_customized' => 'boolean',
        'visitor' => 'int',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

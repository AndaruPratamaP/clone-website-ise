<?php

namespace App\Core\Domain\Models\Eloquents\UserHasEvent;

use Illuminate\Database\Eloquent\Model;

class UserHasEvent extends model
{
    // Specify the table name
    protected $table = 'user_has_event';
    protected $primaryKey = ['users_id', 'events_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'events_id');
    }
}

<?php

namespace App\Core\Domain\Models\Eloquents\Event;

use Illuminate\Database\Eloquent\Model;

class Event extends model
{
    // Specify the table name
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
    ];
    protected $dates = ['start_date', 'end_date'];
}

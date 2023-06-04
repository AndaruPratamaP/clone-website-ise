<?php

namespace App\Core\Domain\Models\Eloquents\StatusType;

use Illuminate\Database\Eloquent\Model;

class StatusType extends model
{
    // Specify the table name
    protected $table = 'status_types';
    protected $fillable = ['id', 'name'];
}

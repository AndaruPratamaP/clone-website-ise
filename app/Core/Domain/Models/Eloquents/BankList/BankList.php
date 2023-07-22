<?php

namespace App\Core\Domain\Models\Eloquents\BankList;

use Illuminate\Database\Eloquent\Model;

class BankList extends model
{
    protected $table = 'bank_list';

    protected $fillable = [
        'id',
        'name',
        'account_number',
    ];

    public $incrementing = false;

    public $timestamps = false;
}

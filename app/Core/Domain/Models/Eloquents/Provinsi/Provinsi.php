<?php

namespace App\Core\Domain\Models\Eloquents\Provinsi;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends model
{
    protected $table = 'provinsi';
    protected $fillable = ['id', 'name'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = [
        'id' => 'int',
        'name' => 'string'
    ];

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }
}

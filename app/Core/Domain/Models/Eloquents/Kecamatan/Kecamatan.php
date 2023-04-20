<?php

namespace App\Core\Domain\Models\Eloquents\Kecamatan;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends model
{
    protected $table = 'kecamatan';
    protected $fillable = ['id', 'nama', 'kabupaten_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = [
        'id' => 'int',
        'nama' => 'string',
        'kabupaten_id' => 'int',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }
}

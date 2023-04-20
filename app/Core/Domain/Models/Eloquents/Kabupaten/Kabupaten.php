<?php

namespace App\Core\Domain\Models\Eloquents\Kabupaten;

use App\Core\Domain\Models\Eloquents\Kecamatan\Kecamatan;
use App\Core\Domain\Models\Eloquents\Provinsi\Provinsi;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends model
{
    protected $table = 'kabupaten';
    protected $fillable = ['id', 'nama', 'provinsi_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = [
        'id' => 'int',
        'nama' => 'string',
        'provinsi_id' => 'int',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class);
    }
}

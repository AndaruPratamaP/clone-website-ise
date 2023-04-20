<?php

namespace App\Core\Domain\Models\Eloquents\Desa;

use App\Core\Domain\Models\Eloquents\Kecamatan\Kecamatan;
use Illuminate\Database\Eloquent\Model;

class Desa extends model
{
    protected $table = 'desa';
    protected $fillable = ['id', 'nama', 'kecamatan_id'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = [
        'id' => 'int',
        'nama' => 'string',
        'kecamatan_id' => 'int',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}

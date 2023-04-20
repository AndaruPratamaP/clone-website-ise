<?php

namespace App\Core\Domain\Models\Eloquents\Permission;

use Illuminate\Database\Eloquent\Model;

class Permission extends model
{
    protected $table = 'permissions';
    protected $fillable = [
        'route',
    ];
    protected $guarded = ['id'];

    // make relationship
    public function roleHasPermission()
    {
        return $this->hasMany(RoleHasPermission::class, 'permission_id', 'id');
    }
}

<?php

namespace App\Core\Domain\Models\Eloquents\Role;

use App\Core\Domain\Models\Eloquents\RoleHasPermission\RoleHasPermission;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class Role extends model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function roleHasPermission()
    {
        return $this->hasMany(RoleHasPermission::class);
    }
}

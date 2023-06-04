<?php

namespace App\Core\Domain\Models\Eloquents\User;

use App\Core\Domain\Models\Eloquents\Permission\Permission;
use App\Core\Domain\Models\Eloquents\Provinsi\Provinsi;
use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Core\Domain\Models\Eloquents\RoleHasPermission\RoleHasPermission;
use Database\Factories\UserFactory;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Core\Domain\Models\Eloquents\GrandTalkshow\GrandTalkshow;

class User extends model implements AuthenticatableContract
{
    use HasFactory, Authorizable, Authenticatable;

    protected $table = 'users';
    protected $fillable = [
        'id',
        'full_name',
        'email',
        'password',
        'handphone',
        'referral',
        'institution',
        'is_verified',
        'provinsi_id',
        'role_id',
    ];
    protected $casts = [
        'id' => 'string',
    ];

    protected $guarded = ['id'];
    protected $hidden = ['password'];
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];

    // make relationship
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function grandtalkshow()
    {
        return $this->hasOne(GrandTalkshow::class, 'user_id', 'id');
    }

    public function hasPermission($route)
    {
        // Best-scenario O(1), Worst-scenario O(n)
        $role_id = $this->role->getAttribute('id');
        $permission_id = Permission::where('route', $route)
            ->first()
            ->getAttribute('id');
        // check if role id and permission id is exist in role_has_permission table
        $roleHasPermission = RoleHasPermission::where('role_id', $role_id)
            ->where('permission_id', $permission_id)
            ->first();
        if ($roleHasPermission) {
            return true;
        } else {
            return false;
        }
    }

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}

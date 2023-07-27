<?php

namespace App\Core\Domain\Models\Eloquents\User;

use App\Core\Domain\Models\Eloquents\Permission\Permission;
use App\Core\Domain\Models\Eloquents\Provinsi\Provinsi;
use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Core\Domain\Models\Eloquents\RoleHasPermission\RoleHasPermission;
use App\Core\Domain\Models\Eloquents\GrandTalkshow\GrandTalkshow;
use App\Core\Domain\Models\Eloquents\BionixCoupon\BionixCoupon;
use App\Core\Domain\Models\Eloquents\BionixRoadshow\BionixRoadshow;
use App\Core\Domain\Models\Eloquents\Payment;
use Database\Factories\UserFactory;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

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

  protected $adminRolesId = [2, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17];
  protected $userRolesId = [1, 3, 4, 5];

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
  public function BionixCoupon()
  {
    return $this->hasOne(BionixCoupon::class, 'created_by', 'id');
  }
  public function BionixRoadshow()
  {
    return $this->hasOne(BionixRoadshow::class, 'ketua_id', 'id');
  }
  public function Payment()
  {
    return $this->hasMany(Payment::class, 'user_id', 'id');
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

  public function isAdmin()
  {
    $role_id = $this->role->getAttribute('id');

    if (in_array($role_id, $this->adminRolesId)) {
      return true;
    } else {
      return false;
    }
  }

  public function isUser()
  {
    $role_id = $this->role->getAttribute('id');

    if (in_array($role_id, $this->userRolesId)) {
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

<?php

namespace App\Core\Domain\Models\Eloquents\RoleHasPermission;

use App\Core\Domain\Models\Eloquents\Permission\Permission;
use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends model
{
  protected $table = 'role_has_permission';
  protected $fillable = ['role_id', 'permission_id'];
  protected $primaryKey = ['role_id', 'permission_id'];

  // make relation
  public function role()
  {
    return $this->belongsTo(Role::class, 'role_id', 'id');
  }

  public function permission()
  {
    return $this->belongsTo(Permission::class, 'permission_id', 'id');
  }
}

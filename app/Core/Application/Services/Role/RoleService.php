<?php

namespace App\Core\Application\Services\Role;

use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Exceptions\IseException;

class RoleService
{

    public function __construct()
    {
    }

    public function getAllRoles(): array
    {
        $roles = Role::all();

        if ($roles === null) {
            IseException::throw("Roles not found", 1300);
        }

        $rolesResponse = [];
        foreach ($roles as $role) {
            $rolesResponse[] = new RoleResponse(
                $role->getId(),
                $role->getName()
            );
        }

        return $rolesResponse;
    }

    public function getApplicableRoles(): array
    {
        // get roles with name SMA/Sederajat, Mahasiswa, Umum
        $roles = Role::whereIn('name', ['SMA/Sederajat', 'Mahasiswa', 'Umum'])->get()->toArray();

        if ($roles === null) {
            IseException::throw("Roles not found", 1301);
        }

        // $$roles is from eloquent loop through it and create RoleResponse
        $rolesResponse = [];
        foreach ($roles as $role) {
            $rolesResponse[] = new RoleResponse(
                $role['id'],
                $role['name']
            );
        }

        return $rolesResponse;
    }

    public function isApplicableRole(int $roleId): bool
    {
        $applicable_role_name = ['SMA/Sederajat', 'Mahasiswa', 'Umum'];
        $role = Role::find($roleId)->toArray();

        if ($role === null) {
            IseException::throw("Role with id {$roleId} not found", 1302);
        }

        if (!in_array($role['name'], $applicable_role_name)) {
            return false;
        }

        return true;
    }
}

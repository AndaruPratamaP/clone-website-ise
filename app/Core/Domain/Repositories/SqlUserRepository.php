<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\User\User;
use Illuminate\Support\Facades\DB;

class SqlUserRepository
{
    public function getAll(): array
    {
        $rows = DB::table('User')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?User
    {
        $row = DB::table('User')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Users = [];
        foreach ($rows as $row) {
            $Users[] = new User(
                $row->id,
            );
        }
        return $Users;
    }
}

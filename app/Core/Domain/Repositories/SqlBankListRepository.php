<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\BankList\BankList;
use Illuminate\Support\Facades\DB;

class SqlBankListRepository
{
    public function getAll(): array
    {
        $rows = DB::table('BankList')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?BankList
    {
        $row = DB::table('BankList')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $BankLists = [];
        foreach ($rows as $row) {
            $BankLists[] = new BankList(
                $row->id,
            );
        }
        return $BankLists;
    }
}

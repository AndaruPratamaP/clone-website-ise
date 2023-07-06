<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Payment\Payment;
use Illuminate\Support\Facades\DB;

class SqlPaymentRepository
{
    public function getAll(): array
    {
        $rows = DB::table('Payment')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Payment
    {
        $row = DB::table('Payment')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Payments = [];
        foreach ($rows as $row) {
            $Payments[] = new Payment(
                $row->id,
            );
        }
        return $Payments;
    }
}

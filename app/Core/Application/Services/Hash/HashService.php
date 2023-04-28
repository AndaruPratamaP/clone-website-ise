<?php

namespace App\Core\Application\Services\Hash;

use Illuminate\Support\Facades\Hash;

class HashService
{
    public static function argon(string $message, string $algorithm): string
    {
        return Hash::make($message, [
            'memory' => 65536,
            'time' => 4,
            'threads' => 1,
            $algorithm
        ]);
    }
}

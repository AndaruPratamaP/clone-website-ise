<?php

namespace App\Core\Application\Services\Auth;

use JsonSerializable;

class AuthResponse implements JsonSerializable
{
    public function __construct()
    {

    }

    public function jsonSerialize(): array
    {
        return [];
    }
}

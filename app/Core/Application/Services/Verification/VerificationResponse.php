<?php

namespace App\Core\Application\Services\Verification;

use JsonSerializable;

class VerificationResponse implements JsonSerializable
{
    public function __construct()
    {

    }

    public function jsonSerialize(): array
    {
        return [];
    }
}

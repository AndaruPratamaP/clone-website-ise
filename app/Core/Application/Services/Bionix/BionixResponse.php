<?php

namespace App\Core\Application\Services\Bionix;

use JsonSerializable;

class BionixResponse implements JsonSerializable
{
    public function __construct()
    {

    }

    public function jsonSerialize(): array
    {
        return [];
    }
}

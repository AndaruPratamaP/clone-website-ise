<?php

namespace App\Core\Application\Services\GrandTalkshow;

use JsonSerializable;

class GrandTalkshowResponse implements JsonSerializable
{
    public function __construct()
    {

    }

    public function jsonSerialize(): array
    {
        return [];
    }
}

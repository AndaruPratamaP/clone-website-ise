<?php

namespace App\Core\Application\Services\Event;

use JsonSerializable;

class EventResponse implements JsonSerializable
{
    public function __construct()
    {

    }

    public function jsonSerialize(): array
    {
        return [];
    }
}

<?php

namespace App\Core\Application\Services\Role;

use JsonSerializable;

class RoleResponse implements JsonSerializable
{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    public function jsonSerialize(): array
    {
        return [
            "id"   => $this->id,
            "name" => $this->name,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return strtoupper($this->name);
    }
}

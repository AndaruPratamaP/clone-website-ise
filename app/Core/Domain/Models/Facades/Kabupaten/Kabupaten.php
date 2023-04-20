<?php

namespace App\Core\Domain\Models\Facades\Kabupaten;

class Kabupaten
{
    private int $id;
    private string $name;
    private int $provinsiId;

    /**
     * @param int $id
     */
    public function __construct(int $id, string $name, int $provinsiId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->provinsiId = $provinsiId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getProvinsiId(): int
    {
        return $this->provinsiId;
    }
}

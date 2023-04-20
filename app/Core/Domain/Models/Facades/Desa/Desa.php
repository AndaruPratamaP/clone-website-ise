<?php

namespace App\Core\Domain\Models\Facades\Desa;

class Desa
{
    private int $id;
    private string $name;
    private int $kecamatanId;

    /**
     * @param int $id
     * @param string $name
     * @param int $kecamatanId
     */
    public function __construct(int $id, string $name, int $kecamatanId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->kecamatanId = $kecamatanId;
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
    public function getKecamatanId(): int
    {
        return $this->kecamatanId;
    }
}

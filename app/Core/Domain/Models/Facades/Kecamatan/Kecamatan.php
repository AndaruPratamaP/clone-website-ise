<?php

namespace App\Core\Domain\Models\Facades\Kecamatan;

class Kecamatan
{
    private int $id;
    private string $name;
    private int $kabupatenId;

    /**
     * @param int $id
     * @param string $name
     * @param int $kabupatenId
     */
    public function __construct(int $id, string $name, int $kabupatenId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->kabupatenId = $kabupatenId;
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
    public function getKabupatenId(): int
    {
        return $this->kabupatenId;
    }
}

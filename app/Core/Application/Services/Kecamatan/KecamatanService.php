<?php

namespace App\Core\Application\Services\Kecamatan;

use App\Core\Domain\Models\Facades\Kecamatan\Kecamatan;
use App\Core\Domain\Repositories\SqlKecamatanRepository;
use App\Exceptions\IseException;

class KecamatanService
{
    private SqlKecamatanRepository $repository;

    public function __construct(SqlKecamatanRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllKecamatan(): array
    {
        $kecamatan = $this->repository->getAll();

        if ($kecamatan === null) {
            IseException::throw("Kecamatan tidak ditemukan", 200);
        }

        return array_map(function (Kecamatan $result) {
            return new KecamatanResponse(
                $result->getId(),
                $result->getName()
            );
        }, $kecamatan);
    }

    public function getKecamatan(int $id): ?KecamatanResponse
    {
        $kecamatan = $this->repository->find($id);

        if ($kecamatan === null) {
            IseException::throw("Kecamatan dengan id {$id} tidak ditemukan", 201);
        }

        return new KecamatanResponse(
            $kecamatan->getId(),
            $kecamatan->getName()
        );
    }
}

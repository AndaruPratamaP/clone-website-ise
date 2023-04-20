<?php

namespace App\Core\Application\Services\Provinsi;

use App\Core\Domain\Models\Facades\Provinsi\Provinsi;
use App\Core\Domain\Repositories\SqlProvinsiRepository;
use App\Exceptions\Exception;

class ProvinsiService
{
    private SqlProvinsiRepository $repository;

    public function __construct(SqlProvinsiRepository $repository) {
        $this->repository = $repository;
    }

    public function getAllProvinsi(): array
    {
        $provinsi = $this->repository->getAll();

        if($provinsi === null) {
            Exception::throw("Provinsi tidak ditemukan", 100, 404);
        }

        return array_map(function (Provinsi $result) {
            return new ProvinsiResponse(
                $result->getId(),
                $result->getName()
            );
        }, $provinsi);
    }

    public function getProvinsi(int $id): ?ProvinsiResponse
    {
        $provinsi = $this->repository->find($id);

        if ($provinsi === null) {
            Exception::throw("Provinsi dengan id {$id} tidak ditemukan", 101, 404);
        }

        return new ProvinsiResponse(
            $provinsi->getId(),
            $provinsi->getName()
        );
    }
}

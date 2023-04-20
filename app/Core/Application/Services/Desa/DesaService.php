<?php

namespace App\Core\Application\Services\Desa;

use App\Core\Application\Services\Desa\DesaResponse;
use App\Core\Domain\Models\Facades\Desa\Desa;
use App\Core\Domain\Repositories\SqlDesaRepository;
use App\Exceptions\Exception;

class DesaService
{
    private SqlDesaRepository $repository;

    public function __construct(SqlDesaRepository $repository) {
        $this->repository = $repository;
    }

    public function getAllDesa(): array
    {
        // Eloquent example : $desas = Desa::with('kecamatan.kabupaten.provinsi')->get();
        $desa = $this->repository->getAll();

        if($desa === null) {
            Exception::throw("Desa tidak ditemukan", 300, 404);
        }

        return array_map(function (Desa $result) {
            return new DesaResponse(
                $result->getId(),
                $result->getName()
            );
        }, $desa);
    }

    public function getDesa(int $id): ?DesaResponse
    {
        $desa = $this->repository->find($id);

        if ($desa === null) {
            Exception::throw("Desa dengan id {$id} tidak ditemukan", 301, 404);
        }

        return new DesaResponse(
            $desa->getId(),
            $desa->getName()
        );
    }
}

<?php

namespace App\Core\Application\Services\Desa;

use App\Core\Domain\Models\Facades\Desa\Desa;
use App\Core\Domain\Repositories\SqlDesaRepository;
use App\Exceptions\IseException;

class DesaService
{
    private SqlDesaRepository $repository;

    public function __construct(SqlDesaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllDesa(): array
    {
        // Eloquent example : $desas = Desa::with('kecamatan.kabupaten.provinsi')->get();
        $desa = $this->repository->getAll();

        if ($desa === null) {
            IseException::throw("Desa tidak ditemukan", 300);
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
            IseException::throw("Desa dengan id {$id} tidak ditemukan", 301);
        }

        return new DesaResponse(
            $desa->getId(),
            $desa->getName()
        );
    }
}

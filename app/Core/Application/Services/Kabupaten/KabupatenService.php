<?php

namespace App\Core\Application\Services\Kabupaten;

use App\Core\Domain\Models\Facades\Kabupaten\Kabupaten;
use App\Core\Domain\Repositories\SqlKabupatenRepository;
use App\Exceptions\Exception;

class KabupatenService
{
    private SqlKabupatenRepository $repository;

    public function __construct(SqlKabupatenRepository $repository) {
        $this->repository = $repository;
    }

    public function getAllKabupaten(): array
    {
        $kabupaten = $this->repository->getAll();

        if($kabupaten === null) {
            Exception::throw("Kabupaten tidak ditemukan", 400, 404);
        }

        return array_map(function (Kabupaten $result) {
            return new KabupatenResponse(
                $result->getId(),
                $result->getName()
            );
        }, $kabupaten);
    }

    public function getKabupaten(int $id): ?KabupatenResponse
    {
        $kabupaten = $this->repository->find($id);

        if ($kabupaten === null) {
            Exception::throw("Kabupaten dengan id {$id} tidak ditemukan", 401, 404);
        }

        return new KabupatenResponse(
            $kabupaten->getId(),
            $kabupaten->getName()
        );
    }
}

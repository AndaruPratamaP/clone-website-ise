<?php

namespace App\Core\Application\Services\BionixRoadshow;

use Illuminate\Http\UploadedFile;

class BionixRdPelunasanRequest
{
    protected UploadedFile $bukti;

    // constructor
    public function __construct(
        UploadedFile $bukti,

    ) {
        $this->bukti = $bukti;
    }

    // getters
    public function getBukti(): UploadedFile
    {
        return $this->bukti;
    }
}

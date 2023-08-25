<?php

namespace App\Core\Application\Services\UXAcademy;

use Illuminate\Http\UploadedFile;

class UXAcademySelectionRequest
{
    protected UploadedFile $answer;

    // constructor
    public function __construct(
        UploadedFile $answer
    ) {
        $this->answer = $answer;
    }

    // getters

    public function getAnswerFile(): UploadedFile
    {
        return $this->answer;
    }
}

<?php

namespace App\Core\Application\Services\DSAcademy;

use Illuminate\Http\UploadedFile;

class DSAcademySelectionRequest
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

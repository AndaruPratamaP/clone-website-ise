<?php

namespace App\Core\Application\Services\Rise;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class RiseFinalRequest
{
  protected UploadedFile $answer_file_final;

  // constructor
  public function __construct(
    UploadedFile $answer_file_final,
  ) {
    $this->answer_file_final = $answer_file_final;
  }

  // getters
  public function getAnswerFileFinal(): UploadedFile
  {
    return $this->answer_file_final;
  }

}

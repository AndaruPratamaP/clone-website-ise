<?php

namespace App\Core\Application\Services\Rise;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class RisePenyisihanRequest
{
  protected UploadedFile $answer_file_penyisihan;
  protected UploadedFile $poster_file_penyisihan;

  // constructor
  public function __construct(
    UploadedFile $answer_file_penyisihan,
    UploadedFile $poster_file_penyisihan,
  ) {
    $this->answer_file_penyisihan = $answer_file_penyisihan;
    $this->poster_file_penyisihan = $poster_file_penyisihan;
  }

  // getters
  public function getAnswerFilePenyisihan(): UploadedFile
  {
    return $this->answer_file_penyisihan;
  }
  public function getPosterFilePenyisihan(): UploadedFile
  {
    return $this->poster_file_penyisihan;
  }

}

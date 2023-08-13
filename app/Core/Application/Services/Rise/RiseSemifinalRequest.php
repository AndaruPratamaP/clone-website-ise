<?php

namespace App\Core\Application\Services\Rise;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class RiseSemifinalRequest
{
  protected string $youtube_link;
  protected UploadedFile $answer_file_semifinal;

  // constructor
  public function __construct(
    string $youtube_link,
    UploadedFile $answer_file_semifinal,
  ) {
    $this->youtube_link = $youtube_link;
    $this->answer_file_semifinal = $answer_file_semifinal;
  }

  // getters
  public function getYoutubeLink(): string
  {
    return $this->youtube_link;
  }

  public function getAnswerFileSemifinal(): UploadedFile
  {
    return $this->answer_file_semifinal;
  }


}

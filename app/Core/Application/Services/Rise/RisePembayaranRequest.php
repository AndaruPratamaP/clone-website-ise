<?php

namespace App\Core\Application\Services\Rise;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class RisePembayaranRequest
{
  protected string $account_owner;
  protected string $bank_name;
  protected UploadedFile $payment_file;

  // constructor
  public function __construct(
    string $account_owner,
    string $bank_name,
    UploadedFile $payment_file,
  ) {
    $this->account_owner = $account_owner;
    $this->bank_name = $bank_name;
    $this->payment_file = $payment_file;
  }

  // getters
  public function getAccountOwner(): string
  {
    return $this->account_owner;
  }

  public function getBankName(): string
  {
    return $this->bank_name;
  }

  public function getPaymentFile(): UploadedFile
  {
    return $this->payment_file;
  }


}

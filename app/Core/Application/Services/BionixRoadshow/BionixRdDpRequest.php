<?php

namespace App\Core\Application\Services\BionixRoadshow;

use Illuminate\Http\UploadedFile;

class BionixRdDpRequest
{
  protected string $nama_tim;
  protected string $school;
  protected string $rek_name;
  protected string $nominal_dp;
  protected string $promo_code;
  protected string $payment_method;
  protected UploadedFile $payment_file;

  // constructor
  public function __construct(
    string $nama_tim,
    string $school,
    string $rek_name,
    string $nominal_dp,
    string $promo_code,
    string $payment_method,
    UploadedFile $payment_file
  ) {
    $this->nama_tim = $nama_tim;
    $this->school = $school;
    $this->rek_name = $rek_name;
    $this->nominal_dp = $nominal_dp;
    $this->promo_code = $promo_code;
    $this->payment_method = $payment_method;
    $this->payment_file = $payment_file;
  }

  // getters
  public function getTeamName(): string
  {
    return $this->nama_tim;
  }

  public function getSchool(): string
  {
    return $this->school;
  }

  public function getRekName(): string
  {
    return $this->rek_name;
  }

  public function getNominalDp(): string
  {
    return $this->nominal_dp;
  }

  public function getPromoCode(): string
  {
    return $this->promo_code;
  }

  public function getPaymentMethod(): string
  {
    return $this->payment_method;
  }

  public function getPaymentFile(): UploadedFile
  {
    return $this->payment_file;
  }

}

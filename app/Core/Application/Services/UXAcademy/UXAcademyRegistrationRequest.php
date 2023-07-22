<?php

namespace App\Core\Application\Services\UXAcademy;

use Illuminate\Http\UploadedFile;

class UXAcademyRegistrationRequest
{
    private string $instagram_link;
    private string $twibbon_link;
    private UploadedFile $cv_file;
    private UploadedFile $student_card;
    private UploadedFile $payment_proof;
    private string $major;
    private string $motive_1;
    private string $motive_2;
    private string $motive_3;
    private string $motive_4;
    private string $motive_5;

    public function __construct(
        string $instagram_link,
        string $twibbon_link,
        UploadedFile $cv_file,
        UploadedFile $student_card,
        UploadedFile $payment_proof,
        string $major,
        string $motive_1,
        string $motive_2,
        string $motive_3,
        string $motive_4,
        string $motive_5
    ) {
        $this->instagram_link = $instagram_link;
        $this->twibbon_link = $twibbon_link;
        $this->cv_file = $cv_file;
        $this->student_card = $student_card;
        $this->payment_proof = $payment_proof;
        $this->major = $major;
        $this->motive_1 = $motive_1;
        $this->motive_2 = $motive_2;
        $this->motive_3 = $motive_3;
        $this->motive_4 = $motive_4;
        $this->motive_5 = $motive_5;
    }
    
    public function getInstagramLink(): string
    {
        return $this->instagram_link;
    }

    public function getTwibbonLink(): string
    {
        return $this->twibbon_link;
    }

    public function getCvFile(): UploadedFile
    {
        return $this->cv_file;
    }

    public function getStudentCard(): UploadedFile
    {
        return $this->student_card;
    }

    public function getPaymentProofFile(): UploadedFile
    {
        return $this->payment_proof;
    }

    public function getMajor(): string
    {
        return $this->major;
    }

    public function getMotive1(): string
    {
        return $this->motive_1;
    }

    public function getMotive2(): string
    {
        return $this->motive_2;
    }

    public function getMotive3(): string
    {
        return $this->motive_3;
    }

    public function getMotive4(): string
    {
        return $this->motive_4;
    }

    public function getMotive5(): string
    {
        return $this->motive_5;
    }
}

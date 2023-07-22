<?php

namespace App\Core\Application\Services\ISClass;

use Illuminate\Http\UploadedFile;

class ISClassRegistrationRequest
{
    private UploadedFile $student_card_file;
    private UploadedFile $upload_poster_file;
    private UploadedFile $follow_proof_file;
    private string $twibbon_link;
    private UploadedFile $payment_proof_file;
    private int $bank_id;

    public function __construct(
        UploadedFile $student_card_file,
        UploadedFile $upload_poster_file,
        UploadedFile $follow_proof_file,
        string $twibbon_link,
        UploadedFile $payment_proof_file,
        int $bank_id
    ) {
        $this->student_card_file = $student_card_file;
        $this->upload_poster_file = $upload_poster_file;
        $this->follow_proof_file = $follow_proof_file;
        $this->twibbon_link = $twibbon_link;
        $this->payment_proof_file = $payment_proof_file;
        $this->bank_id = $bank_id;
    }

    public function getStudentCardFile(): UploadedFile
    {
        return $this->student_card_file;
    }

    public function getUploadPosterFile(): UploadedFile
    {
        return $this->upload_poster_file;
    }

    public function getFollowProofFile(): UploadedFile
    {
        return $this->follow_proof_file;
    }

    public function getTwibbonLink(): string
    {
        return $this->twibbon_link;
    }

    public function getPaymentProofFile(): UploadedFile
    {
        return $this->payment_proof_file;
    }

    public function getBankId(): int
    {
        return $this->bank_id;
    }
}

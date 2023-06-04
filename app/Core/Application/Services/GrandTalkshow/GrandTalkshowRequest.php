<?php

namespace App\Core\Application\Services\GrandTalkshow;

use Illuminate\Http\UploadedFile;

class GrandTalkshowRequest
{
    private string $referral;
    private UploadedFile $share_proof_file;

    public function __construct(
        string $referral,
        UploadedFile $share_proof_file
    ) {
        $this->referral = $referral;
        $this->share_proof_file = $share_proof_file;
    }

    public function getReferral(): string
    {
        return $this->referral;
    }

    public function getShareProofFile(): UploadedFile
    {
        return $this->share_proof_file;
    }
}

<?php

namespace App\Core\Application\Services\BionixRoadshow;

use Illuminate\Http\UploadedFile;

class BionixRdRegistrationRequest
{
    protected string $leader_name;
    protected UploadedFile $leader_student_card;
    protected UploadedFile $leader_poster_file;
    protected UploadedFile $leader_follow_ig_proof;
    protected string $leader_twibbon_link;
    protected string $member_name;
    protected string $member_email;
    protected string $member_phone_number;
    protected UploadedFile $member_student_card;
    protected UploadedFile $member_poster_file;
    protected UploadedFile $member_follow_ig_proof;
    protected string $member_twibbon_link;

    // constructor
    public function __construct(
        string $leader_name,
        UploadedFile $leader_student_card,
        UploadedFile $leader_poster_file,
        UploadedFile $leader_follow_ig_proof,
        string $leader_twibbon_link,
        string $member_name,
        string $member_email,
        string $member_phone_number,
        UploadedFile $member_student_card,
        UploadedFile $member_poster_file,
        UploadedFile $member_follow_ig_proof,
        string $member_twibbon_link

    ) {
        $this->leader_name = $leader_name;
        $this->leader_student_card = $leader_student_card;
        $this->leader_poster_file = $leader_poster_file;
        $this->leader_follow_ig_proof = $leader_follow_ig_proof;
        $this->leader_twibbon_link = $leader_twibbon_link;
        $this->member_name = $member_name;
        $this->member_email = $member_email;
        $this->member_phone_number = $member_phone_number;
        $this->member_student_card = $member_student_card;
        $this->member_poster_file = $member_poster_file;
        $this->member_follow_ig_proof = $member_follow_ig_proof;
        $this->member_twibbon_link = $member_twibbon_link;
    }

    // getters
    public function getLeadName(): string
    {
        return $this->leader_name;
    }

    public function getLeadStudentCard(): UploadedFile
    {
        return $this->leader_student_card;
    }

    public function getLeadPoster(): UploadedFile
    {
        return $this->leader_poster_file;
    }

    public function getLeadIgProof(): UploadedFile
    {
        return $this->leader_follow_ig_proof;
    }

    public function geLeadTwibbon(): string
    {
        return $this->leader_twibbon_link;
    }
    public function getMemberName(): string
    {
        return $this->member_name;
    }

    public function getMemberEmail(): string
    {
        return $this->member_email;
    }

    public function getMemberPhoneNumber(): string
    {
        return $this->member_phone_number;
    }

    public function getMemberStudentCard(): UploadedFile
    {
        return $this->member_student_card;
    }

    public function getMemberPoster(): UploadedFile
    {
        return $this->member_poster_file;
    }

    public function getMemberIgProof(): UploadedFile
    {
        return $this->member_follow_ig_proof;
    }

    public function getMemberTwibbon(): string
    {
        return $this->member_twibbon_link;
    }
    
}

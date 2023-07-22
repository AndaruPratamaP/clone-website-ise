<?php

namespace App\Core\Application\Services\DSAcademy;

use Illuminate\Http\UploadedFile;

class DSAcademyRegistrationRequest
{
    protected string $team_name;
    protected string $ketua_major;
    protected string $ketua_instagram_link;
    protected string $ketua_twibbon_link;
    protected UploadedFile $ketua_cv_file;
    protected UploadedFile $ketua_student_card;
    protected string $first_full_name;
    protected string $first_institution;
    protected string $first_major;
    protected string $first_email;
    protected string $first_wa;
    protected string $first_instagram_link;
    protected string $first_twibbon_link;
    protected UploadedFile $first_cv_file;
    protected UploadedFile $first_student_card;
    protected string $second_full_name;
    protected string $second_institution;
    protected string $second_major;
    protected string $second_email;
    protected string $second_wa;
    protected string $second_instagram_link;
    protected string $second_twibbon_link;
    protected UploadedFile $second_cv_file;
    protected UploadedFile $second_student_card;
    protected string $motive_1;
    protected string $motive_2;
    protected string $motive_3;
    protected string $motive_4;
    protected UploadedFile $payment_file;

    // constructor
    public function __construct(
        string $team_name,
        string $ketua_major,
        string $ketua_instagram_link,
        string $ketua_twibbon_link,
        UploadedFile $ketua_cv_file,
        UploadedFile $ketua_student_card,
        string $first_full_name,
        string $first_institution,
        string $first_major,
        string $first_email,
        string $first_wa,
        string $first_instagram_link,
        string $first_twibbon_link,
        UploadedFile $first_cv_file,
        UploadedFile $first_student_card,
        string $second_full_name,
        string $second_institution,
        string $second_major,
        string $second_email,
        string $second_wa,
        string $second_instagram_link,
        string $second_twibbon_link,
        UploadedFile $second_cv_file,
        UploadedFile $second_student_card,
        string $motive_1,
        string $motive_2,
        string $motive_3,
        string $motive_4,
        UploadedFile $payment_file
    ) {
        $this->team_name = $team_name;
        $this->ketua_major = $ketua_major;
        $this->ketua_instagram_link = $ketua_instagram_link;
        $this->ketua_twibbon_link = $ketua_twibbon_link;
        $this->ketua_cv_file = $ketua_cv_file;
        $this->ketua_student_card = $ketua_student_card;
        $this->first_full_name = $first_full_name;
        $this->first_institution = $first_institution;
        $this->first_major = $first_major;
        $this->first_email = $first_email;
        $this->first_wa = $first_wa;
        $this->first_instagram_link = $first_instagram_link;
        $this->first_twibbon_link = $first_twibbon_link;
        $this->first_cv_file = $first_cv_file;
        $this->first_student_card = $first_student_card;
        $this->second_full_name = $second_full_name;
        $this->second_institution = $second_institution;
        $this->second_major = $second_major;
        $this->second_email = $second_email;
        $this->second_wa = $second_wa;
        $this->second_instagram_link = $second_instagram_link;
        $this->second_twibbon_link = $second_twibbon_link;
        $this->second_cv_file = $second_cv_file;
        $this->second_student_card = $second_student_card;
        $this->motive_1 = $motive_1;
        $this->motive_2 = $motive_2;
        $this->motive_3 = $motive_3;
        $this->motive_4 = $motive_4;
        $this->payment_file = $payment_file;
    }

    // getters
    public function getTeamName(): string
    {
        return $this->team_name;
    }

    public function getKetuaMajor(): string
    {
        return $this->ketua_major;
    }

    public function getKetuaInstagramLink(): string
    {
        return $this->ketua_instagram_link;
    }

    public function getKetuaTwibbonLink(): string
    {
        return $this->ketua_twibbon_link;
    }

    public function getKetuaCvFile(): UploadedFile
    {
        return $this->ketua_cv_file;
    }

    public function getKetuaStudentCard(): UploadedFile
    {
        return $this->ketua_student_card;
    }

    public function getFirstFullName(): string
    {
        return $this->first_full_name;
    }

    public function getFirstInstitution(): string
    {
        return $this->first_institution;
    }

    public function getFirstMajor(): string
    {
        return $this->first_major;
    }

    public function getFirstEmail(): string
    {
        return $this->first_email;
    }

    public function getFirstWa(): string
    {
        return $this->first_wa;
    }

    public function getFirstInstagramLink(): string
    {
        return $this->first_instagram_link;
    }

    public function getFirstTwibbonLink(): string
    {
        return $this->first_twibbon_link;
    }

    public function getFirstCvFile(): UploadedFile
    {
        return $this->first_cv_file;
    }

    public function getFirstStudentCard(): UploadedFile
    {
        return $this->first_student_card;
    }

    public function getSecondFullName(): string
    {
        return $this->second_full_name;
    }

    public function getSecondInstitution(): string
    {
        return $this->second_institution;
    }

    public function getSecondMajor(): string
    {
        return $this->second_major;
    }

    public function getSecondEmail(): string
    {
        return $this->second_email;
    }

    public function getSecondWa(): string
    {
        return $this->second_wa;
    }

    public function getSecondInstagramLink(): string
    {
        return $this->second_instagram_link;
    }

    public function getSecondTwibbonLink(): string
    {
        return $this->second_twibbon_link;
    }

    public function getSecondCvFile(): UploadedFile
    {
        return $this->second_cv_file;
    }

    public function getSecondStudentCard(): UploadedFile
    {
        return $this->second_student_card;
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

    public function getPaymentFile(): UploadedFile
    {
        return $this->payment_file;
    }
}

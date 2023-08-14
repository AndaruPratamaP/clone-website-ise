<?php

namespace App\Core\Application\Services\Rise;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class RiseRegistrationRequest
{
  protected string $team_name;
//   protected string $leader_id;
//   protected string $leader_agency;
//   protected string $leader_name;
//   protected string $leader_phone;
//   protected string $leader_email;
  protected string $leader_twibbon;
  protected ?string $referral_code;
  protected UploadedFile $leader_student_card;
  protected UploadedFile $leader_poster;
  protected UploadedFile $leader_ig_follow;
  protected string $member1_name;
  protected string $member1_agency;
  protected string $member1_phone;
  protected string $member1_email;
  protected string $member1_twibbon;
  protected UploadedFile $member1_student_card;
  protected UploadedFile $member1_poster;
  protected UploadedFile $member1_ig_follow;
  protected ?string $member2_name;
  protected ?string $member2_agency;
  protected ?string $member2_phone;
  protected ?string $member2_email;
  protected ?string $member2_twibbon;
  protected ?UploadedFile $member2_student_card;
  protected ?UploadedFile $member2_poster;
  protected ?UploadedFile $member2_ig_follow;

  // constructor
  public function __construct(
    string $team_name,
//  string $leader_id;
//  string $leader_agency;
//  string $leader_name;
//  string $leader_phone;
//  string $leader_email;
    string $leader_twibbon,
    ?string $referral_code = null,
    UploadedFile $leader_student_card,
    UploadedFile $leader_poster,
    UploadedFile $leader_ig_follow,
    string $member1_name,
    string $member1_agency,
    string $member1_phone,
    string $member1_email,
    string $member1_twibbon,
    UploadedFile $member1_student_card,
    UploadedFile $member1_poster,
    UploadedFile $member1_ig_follow,
    ?string $member2_name = null,
    ?string $member2_agency = null,
    ?string $member2_phone = null,
    ?string $member2_email = null,
    ?string $member2_twibbon = null,
    ?UploadedFile $member2_student_card = null,
    ?UploadedFile $member2_poster = null,
    ?UploadedFile $member2_ig_follow = null,
  ) {
    $this->team_name = $team_name;
    // $this->leader_agency = $leader_agency;
    // $this->leader_name = $leader_name;
    // $this->leader_phone = $leader_phone;
    // $this->leader_email = $leader_email;
    $this->leader_twibbon = $leader_twibbon;
    $this->referral_code = $referral_code;
    $this->leader_student_card = $leader_student_card;
    $this->leader_poster = $leader_poster;
    $this->leader_ig_follow = $leader_ig_follow;
    $this->member1_name = $member1_name;
    $this->member1_agency = $member1_agency;
    $this->member1_phone = $member1_phone;
    $this->member1_email = $member1_email;
    $this->member1_twibbon = $member1_twibbon;
    $this->member1_student_card = $member1_student_card;
    $this->member1_poster = $member1_poster;
    $this->member1_ig_follow = $member1_ig_follow;
    $this->member2_name = $member2_name;
    $this->member2_agency = $member2_agency;
    $this->member2_phone = $member2_phone;
    $this->member2_email = $member2_email;
    $this->member2_twibbon = $member2_twibbon;
    $this->member2_student_card = $member2_student_card;
    $this->member2_poster = $member2_poster;
    $this->member2_ig_follow = $member2_ig_follow;
  }

  // getters
  public function getTeamName(): string
  {
    return $this->team_name;
  }

//   public function getLeaderAgency(): string
//   {
//     return $this->leader_agency;
//   }

//   public function getLeaderName(): string
//   {
//     return $this->leader_name;
//   }

//   public function getLeaderPhone(): string
//   {
//     return $this->leader_phone;
//   }

//   public function getLeaderEmail(): string
//   {
//     return $this->leader_email;
//   }

  public function getLeaderTwibbon(): string
  {
    return $this->leader_twibbon;
  }

  public function getReferralCode(): ?string
  {
    return $this->referral_code;
  }

  public function getLeaderStudentCard(): UploadedFile
  {
    return $this->leader_student_card;
  }

  public function getLeaderPoster(): UploadedFile
  {
    return $this->leader_poster;
  }

  public function getLeaderIgFollow(): UploadedFile
  {
    return $this->leader_ig_follow;
  }

  public function getMember1Name(): string
  {
    return $this->member1_name;
  }

  public function getMember1Agency(): string
  {
    return $this->member1_agency;
  }

  public function geMember1Phone(): string
  {
    return $this->member1_phone;
  }

  public function getMember1Email(): string
  {
    return $this->member1_email;
  }

  public function getMember1Twibbon(): string
  {
    return $this->member1_twibbon;
  }

  public function getMember1StudentCard(): UploadedFile
  {
    return $this->member1_student_card;
  }

  public function getMember1Poster(): UploadedFile
  {
    return $this->member1_poster;
  }

  public function getMember1IgFollow(): UploadedFile
  {
    return $this->member1_ig_follow;
  }

  public function getMember2Name(): ?string
  {
    return $this->member2_name;
  }

  public function getMember2Agency(): ?string
  {
    return $this->member2_agency;
  }

  public function getMember2Phone(): ?string
  {
    return $this->member2_phone;
  }

  public function getMember2Email(): ?string
  {
    return $this->member2_email;
  }

  public function getMember2Twibbon(): ?string
  {
    return $this->member2_twibbon;
  }

  public function getMember2StudentCard(): ?UploadedFile
  {
    return $this->member2_student_card;
  }

  public function getMember2Poster(): ?UploadedFile
  {
    return $this->member2_poster;
  }

  public function getMember2IgFollow(): ?UploadedFile
  {
    return $this->member2_ig_follow;
  }

}

<?php

namespace App\Core\Application\Services\Auth;

class RegisterRequest
{
    private string $full_name;
    private string $email;
    private string $phone;
    private string $password;
    private string $institution;
    private string $referral;
    private int $province_id;
    private int $role_id;

    public function __construct(
        string $full_name,
        string $email,
        string $phone,
        string $password,
        string $institution,
        string $referral,
        int $province_id,
        int $role_id
    ) {
        $this->full_name = $full_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->institution = $institution;
        $this->referral = $referral;
        $this->province_id = $province_id;
        $this->role_id = $role_id;
    }

    public function getFullName(): string
    {
        return $this->full_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getInstitution(): string
    {
        return $this->institution;
    }

    public function getReferral(): string
    {
        return $this->referral;
    }

    public function getProvinceId(): int
    {
        return $this->province_id;
    }

    public function getRoleId(): int
    {
        return $this->role_id;
    }
}

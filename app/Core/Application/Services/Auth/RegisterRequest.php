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
    private int $province;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}

<?php

namespace App\Core\Application\Services\Auth;

class ForgotPasswordChangeRequest
{
    private string $token;
    private string $new_password;

    public function __construct(string $token, string $new_password)
    {
        $this->token = $token;
        $this->new_password = $new_password;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getNewPassword(): string
    {
        return $this->new_password;
    }
}

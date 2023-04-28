<?php

namespace App\Core\Application\Services\Auth;

class VerifyRequest
{
    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}

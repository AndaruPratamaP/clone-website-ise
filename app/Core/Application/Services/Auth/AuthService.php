<?php

namespace App\Core\Application\Services\Auth;

use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{

    public function __construct()
    {
    }

    public function login(AuthRequest $request): bool
    {
        $attempt = Auth::attemptWhen(
            [
                'email' => $request->getEmail(),
                'password' => $request->getPassword(),
            ],
            function (User $user) {
                return $user->verified_at !== null;
            },
            $request->getRemember()
        );

        if (!$attempt) {
            return false;
        }

        // regenerate session
        session()->regenerate();
        return true;
    }

    public function logout(): void
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerate();
    }
}

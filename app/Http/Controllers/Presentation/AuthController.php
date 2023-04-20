<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\Auth\AuthRequest;
use App\Core\Application\Services\Auth\AuthResponse;
use App\Core\Application\Services\Auth\AuthService;
use Livewire\Component;

class AuthController extends Component
{
    private AuthService $service;
    private AuthRequest $request;

    public array $msg = [
        "error" => "",
        "success" => ""
    ];

    public function boot(AuthService $service)
    {
        $this->service = $service;
    }

    public function login()
    {
        $this->request = new AuthRequest(
            $this->email,
            $this->password,
            $this->remember,
        );

        $login = $this->service->login($this->request);

        if (!$login) {
            $this->msg['error'] = "Email atau password salah";
            return;
        }

        $this->msg['success'] = "Login berhasil";
        return redirect()->intended('dashboard');
    }

    public function logout()
    {
        $this->service->logout();
        return redirect()->intended('login');
    }
}

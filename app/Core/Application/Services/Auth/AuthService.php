<?php

namespace App\Core\Application\Services\Auth;

use App\Core\Application\Mail\EmailVerificationMail;
use App\Core\Application\Mail\RequestPasswordEmail;
use App\Core\Application\Services\Hash\HashService;
use App\Core\Application\Services\Role\RoleService;
use App\Core\Application\Services\Verification\VerificationService;
use App\Core\Domain\Models\Eloquents\Provinsi\Provinsi;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Exceptions\IseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;
use Throwable;

class AuthService
{
    private VerificationService $verificationService;
    private RoleService $roleService;

    public function __construct(VerificationService $verificationService, RoleService $roleService)
    {
        $this->verificationService = $verificationService;
        $this->roleService = $roleService;
    }

    public function login(LoginRequest $request): bool
    {
        $attempt = Auth::attemptWhen(
            [
                'email' => $request->getEmail(),
                'password' => $request->getPassword(),
            ],
            function (User $user) {
                $verified = $user->verified_at !== null;
                if (!$verified) {
                    IseException::throw("Akun belum diverifikasi", 1500);
                }
                return $verified;
            },
            $request->getRemember()
        );

        if (!$attempt) {
            IseException::throw("Email atau Password salah", 1501);
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

    public function register(RegisterRequest $request): void
    {
        $province = Provinsi::find($request->getProvinceId());
        if (!$province) {
            IseException::throw("Provinsi tidak ditemukan", 1200);
        }

        $applicable_role = $this->roleService->isApplicableRole($request->getRoleId());
        if (!$applicable_role) {
            IseException::throw("Role tidak ditemukan", 1201);
        }
        $user_id = Uuid::uuid4()->toString();

        $user = User::create([
            'id' => $user_id,
            'full_name' => $request->getFullName(),
            'email' => $request->getEmail(),
            'password' => HashService::argon($request->getPassword(), 'argon2i'),
            'handphone' => $request->getPhone(),
            'referral' => $request->getReferral(),
            'institution' => $request->getInstitution(),
            'provinsi_id' => $request->getProvinceId(),
            'role_id' => $request->getRoleId(),
        ]);

        $token = $this->verificationService->create(
            1,
            'uuid',
            $user_id,
            0,
            4320
        );

        try {
            Mail::to($user->email)->send(new EmailVerificationMail(
                $user->email,
                $user->full_name,
                $token
            ));
        } catch (Throwable $e) {
            IseException::throw("Gagal mengirim email verifikasi", 1202);
        }
    }

    public function verify(VerifyRequest $request): bool
    {
        try {
            $user_verified = $this->verificationService->verify(
                $request->getToken(),
                1,
            );
        } catch (IseException $e) {
            IseException::throw($e->getMessage(), 1203);
        } catch (Throwable $e) {
            IseException::throw("Token tidak valid", 1201);
        }

        if (!$user_verified) {
            IseException::throw("Token tidak valid", 1201);
        }

        $user = User::find($user_verified);

        if (!$user) {
            IseException::throw("User tidak ditemukan", 1202);
        }

        $user->verified_at = now();
        $user->save();

        return true;
    }

    public function forgotPassword(ForgotPasswordRequest $request): void
    {
        $user = User::where('email', $request->getEmail())->first();

        if (!$user) {
            IseException::throw("Email tidak ditemukan", 1604);
        }

        $token = $this->verificationService->create(
            2,
            'uuid',
            $user->id,
            0,
            4320
        );

        try {
            Mail::to($user->email)->send(new RequestPasswordEmail(
                $token
            ));
        } catch (Throwable $e) {
            IseException::throw("Gagal mengirim email", 1601);
        }
    }

    public function changeForgotPassword(ForgotPasswordChangeRequest $request): bool
    {
        try {
            $user_verified = $this->verificationService->verify(
                $request->getToken(),
                2,
            );
        } catch (IseException $e) {
            IseException::throw($e->getMessage(), 1603);
        } catch (Throwable $e) {
            IseException::throw("Token tidak valid", 1601);
        }

        if (!$user_verified) {
            IseException::throw("Token tidak valid", 1601);
        }

        $user = User::find($user_verified);

        if (!$user) {
            IseException::throw("User tidak ditemukan", 1602);
        }

        $user->password = HashService::argon($request->getNewPassword(), 'argon2i');
        $user->save();

        return true;
    }
}

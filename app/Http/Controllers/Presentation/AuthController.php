<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\Auth\LoginRequest;
use App\Core\Application\Services\Auth\AuthService;
use App\Core\Application\Services\Auth\ForgotPasswordChangeRequest;
use App\Core\Application\Services\Auth\ForgotPasswordRequest;
use App\Core\Application\Services\Auth\RegisterRequest;
use App\Core\Application\Services\Auth\VerifyRequest;
use App\Core\Application\Services\Provinsi\ProvinsiService;
use App\Core\Application\Services\Role\RoleService;
use App\Exceptions\IseException;
use App\Http\Controllers\Pages\BaseController;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Livewire\Component;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Support\Facades\DB;
use Throwable;

class AuthController extends Component
{
    use BaseController;
    use WithRateLimiting;

    private AuthService $service;
    private ProvinsiService $provinsiService;
    private RoleService $roleService;
    private LoginRequest|RegisterRequest|VerifyRequest|ForgotPasswordRequest|ForgotPasswordChangeRequest $request;

    public array $provinces = [];
    public array $roles = [];
    public array $referrals = [
        "Media Sosial ISE!",
        "Media Partner ISE!",
        "Sekolah",
        "Teman/Keluarga",
        "Lainnya"
    ];

    public array $msg = [
        "error" => "",
        "success" => ""
    ];

    public function boot(AuthService $service, ProvinsiService $provinsiService, RoleService $roleService)
    {
        $this->service = $service;
        $this->provinsiService = $provinsiService;
        $this->roleService = $roleService;
    }

    public function mount()
    {
        $this->provinces = $this->provinsiService->getAllProvinsi();
        $this->roles = $this->roleService->getApplicableRoles();
    }

    public function login()
    {
        try {
            $this->rateLimit(3);

            $this->request = new LoginRequest(
                $this->email,
                $this->password,
                $this->remember,
            );

            $login = $this->service->login($this->request);

            if (!$login) {
                $this->dispatchToast('error', 'Login gagal', 'Email atau password salah');
                $this->msg['error'] = "Email atau password salah";
                return;
            }

            $this->dispatchToast('success', 'Login berhasil');
            $this->msg['success'] = "Login berhasil";
            return redirect()->intended('login');
        } catch (TooManyRequestsException $exception) {
            $this->dispatchToast('error', 'Login gagal', "Anda terlalu banyak gagal mencoba, coba lagi dalam {$exception->secondsUntilAvailable} detik");
        } catch (Throwable $e) {
            $this->dispatchToast('error', 'Login gagal', $e->getMessage());
            $this->msg['error'] = $e->getMessage();
            return;
        }
    }

    public function logout()
    {
        $this->service->logout();
        return redirect()->intended('login')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Logout berhasil',
            'text' => 'Anda telah logout dari sistem',
        ]);
    }

    public function register()
    {

        $this->request = new RegisterRequest(
            $this->full_name,
            $this->email,
            $this->phone,
            $this->password,
            $this->institution,
            $this->referral,
            $this->province_id,
            $this->role_id
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Mengirim data...', 'Mohon tunggu sebentar');
            if (!$this->roleService->isApplicableRole($this->role_id)) {
                IseException::throw("Role invalid", 1400);
            }
            $this->service->register($this->request);
            $this->dispatchToast('success', 'Registrasi berhasil', 'Silahkan cek email anda untuk verifikasi');
        } catch (IseException $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();
            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return null;
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e;
            $this->dispatchToast('error', 'Something went wrong', 'Please try again later');
            return null;
        }
        DB::commit();

        return redirect()->intended('login')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Registrasi berhasil',
            'text' => 'Silahkan cek email anda untuk verifikasi',
        ]);
    }

    public function verify()
    {
        $this->request = new VerifyRequest(
            $this->token,
        );

        DB::beginTransaction();
        try {
            $this->service->verify($this->request);
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            return redirect()->intended('login')->with('toastr-toast', [
                'type' => 'error',
                'title' => 'Verification failed',
                'text' => $e->getMessage(),
            ]);
        }
        DB::commit();

        return redirect()->intended('login')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Verification successful',
            'text' => 'Please login',
        ]);
    }

    public function requestForgotPassword()
    {
        $this->request = new ForgotPasswordRequest(
            $this->email,
        );

        DB::beginTransaction();
        try {
            $this->rateLimit(3);
            $this->service->forgotPassword($this->request);
        } catch (TooManyRequestsException $exception) {
            $this->dispatchToast('error', 'Terjadi kegagalan', "Anda terlalu banyak gagal mencoba, coba lagi dalam {$exception->secondsUntilAvailable} detik");
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            // check if error code is 1604
            if ($e->getCode() != 1604) {
                $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
                return;
            }
        }
        DB::commit();

        return redirect()->intended('login')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil melakukan reset password',
            'text' => 'Silahkan cek email anda untuk melakukan reset password jika email anda terdaftar',
        ]);
    }

    public function changeForgotPassword()
    {
        $this->request = new ForgotPasswordChangeRequest(
            $this->token,
            $this->new_password,
        );

        DB::beginTransaction();
        try {
            $this->service->changeForgotPassword($this->request);
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            return redirect()->intended('login')->with('toastr-toast', [
                'type' => 'error',
                'title' => 'Gagal melakukan reset password',
                'text' => $e->getMessage(),
            ]);
        }
        DB::commit();

        return redirect()->intended('login')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil melakukan reset password',
            'text' => 'Silahkan login dengan password baru anda',
        ]);
    }
}

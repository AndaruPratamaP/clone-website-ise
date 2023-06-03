<?php

namespace App\Core\Application\Services\Verification;

use App\Core\Domain\Models\Eloquents\Verification\Verification;
use App\Core\Domain\Repositories\SqlVerificationTypeRepository;
use App\Exceptions\IseException;
use Ramsey\Uuid\Uuid;

class VerificationService
{
    private SqlVerificationTypeRepository $sqlVerificationType;
    private array $verificationTypes;

    private array $generateToken;

    public function __construct(SqlVerificationTypeRepository $sqlVerificationTypeRepository)
    {
        $this->sqlVerificationType = $sqlVerificationTypeRepository;
        $this->verificationTypes = $this->getVerificationTypes();
        $this->generateToken = [
            'bytes' => function (int $length = 16) {
                return $this->generateBytesToken($length);
            },
            'uuid' => function (int $length = 0) {
                return $this->generateUUIDToken();
            },
            'otp' => function (int $length = 6) {
                return $this->generateOTPToken($length);
            }
        ];
    }

    private function getVerificationTypes()
    {
        return $this->sqlVerificationType->getAll();
    }

    /*
        * @param int $type
        * @param string $token_type
        * @param sting $user_id
        * @param float $expires_at (in minutes)
    */
    public function create(int $type, string $token_type, string $user_id, int $length, float $expires_at = 4320): null|string
    {
        // check if verification type exists
        if (!array_key_exists($type, $this->verificationTypes)) {
            return null;
        }

        // check if token type exists
        if (!array_key_exists($token_type, $this->generateToken)) {
            return null;
        }

        // generate token
        $token = $this->generateToken[$token_type]($length);
        $expire = now()->addMinutes($expires_at);

        // create verification
        Verification::create([
            'code' => $token,
            'user_id' => $user_id,
            'verification_type_id' => $type,
            'expires_at' => $expire
        ]);

        return $token;
    }

    public function verify(string $code, int $verification_type): null|string
    {
        $verification = Verification::where('code', $code)
            ->where('verification_type_id', $verification_type)
            ->firstOrFail();

        if ($verification->expires_at < now()) {
            IseException::throw("Kode verifikasi sudah kadaluarsa", 1502);
            return null;
        }

        $user_id = $verification->user_id;

        Verification::where([
            'code' => $verification->code,
            'verification_type_id' => $verification->verification_type_id,
            'user_id' => $verification->user_id
        ])->delete();

        return $user_id;
    }

    private function generateBytesToken(int $length = 16)
    {
        return bin2hex(random_bytes($length));
    }

    private function generateUUIDToken()
    {
        return Uuid::uuid4()->toString();
    }

    private function generateOTPToken(int $length = 6)
    {
        $otp = "";
        for ($i = 0; $i < $length; $i++) {
            $otp .= rand(0, 9);
        }
        return $otp;
    }
}

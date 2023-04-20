<?php

namespace App\Exceptions;

use Exception as BaseException;
use Illuminate\Http\JsonResponse;

class Exception extends BaseException
{
    private static int $status;

    public function __construct(string $message, int $code, int $status = 500)
    {
        self::$status = $status;
        parent::__construct($message, $code);
    }

    /**
     * @throws Exception
     */
    public static function throw(string $message, int $code, int $status = 500)
    {
        throw new self($message, $code, $status);
    }

    public function render()
    {
        return response()->view('errors.error', [
            "message" => $this->message,
            "code" => $this->code,
            "status_code" => self::$status,
        ], self::$status);
    }
}

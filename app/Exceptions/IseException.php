<?php

namespace App\Exceptions;

use Exception as BaseException;

class IseException extends BaseException
{
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    /**
     * @throws IseException
     */
    public static function throw(string $message, int $code)
    {
        throw new self($message, $code);
    }
}

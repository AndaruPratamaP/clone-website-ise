<?php

namespace App\Core\Domain\Traits;

use App\Exceptions\IseException;
use Exception as BaseException;
use Ramsey\Uuid\Uuid as Ramsey;

trait Uuid
{
    private ?string $uuid;

    /**
     * @param string $uuid
     * @throws Exception
     */

    public function __construct(?string $uuid)
    {
        if ($uuid && !Ramsey::isValid($uuid)) {
            IseException::throw("Invalid UUID", 101);
        }
        $this->uuid = $uuid;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->uuid = Ramsey::uuid4()->toString();
            } catch (BaseException $e) {
                IseException::throw($e->getMessage(), 100);
            }
        });
    }

    public function toString(): ?string
    {
        return $this->uuid;
    }

    /**
     * @throws Exception
     */
    public static function generate(): self
    {
        return new self(Ramsey::uuid4());
    }
}

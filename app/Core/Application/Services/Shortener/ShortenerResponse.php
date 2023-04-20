<?php

namespace App\Core\Application\Services\Shortener;

use App\Core\Domain\Models\Facades\User\UserId;
use JsonSerializable;

class ShortenerResponse implements JsonSerializable
{
    private string $short_url;
    private string $long_url;
    private int $visitor;
    private UserId $user_id;

    public function __construct(string $short_url, string $long_url, int $visitor, UserId $user_id)
    {
        $this->short_url = $short_url;
        $this->long_url = $long_url;
        $this->visitor = $visitor;
        $this->user_id = $user_id;
    }

    public function jsonSerialize(): array
    {
        return [
            'short_url' => $this->short_url,
            'long_url' => $this->long_url,
            'visitor' => $this->visitor,
            'user_id' => $this->user_id->toString(),
        ];
    }

    public function getShortUrl(): string
    {
        return $this->short_url;
    }

    public function getLongUrl(): string
    {
        return $this->long_url;
    }

    public function getVisitor(): int
    {
        return $this->visitor;
    }

    public function getUserId(): UserId
    {
        return $this->user_id;
    }
}

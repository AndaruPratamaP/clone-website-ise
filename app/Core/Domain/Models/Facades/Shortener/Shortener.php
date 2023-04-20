<?php

namespace App\Core\Domain\Models\Facades\Shortener;

use App\Core\Domain\Models\Facades\User\UserId;

class Shortener
{
    private string $short_url;
    private string $long_url;
    private bool $is_customized;
    private int $visitor;
    private UserId $user_id;

    /**
     * @param int $id
     */
    public function __construct(string $short_url, string $long_url, bool $is_customized, UserId $user_id, int $visitor = 0)
    {
        $this->short_url = $short_url;
        $this->long_url = $long_url;
        $this->is_customized = $is_customized;
        $this->visitor = $visitor;
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getShortUrl(): string
    {
        return $this->short_url;
    }

    /**
     * @return string
     */
    public function getLongUrl(): string
    {
        return $this->long_url;
    }

    /**
     * @return bool
     */
    public function getIsCustomized(): bool
    {
        return $this->is_customized;
    }

    /**
     * @return int
     */
    public function getVisitor(): int
    {
        return $this->visitor;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->user_id;
    }
}

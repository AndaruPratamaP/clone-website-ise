<?php

namespace App\Core\Application\Services\Shortener;

class ShortenerRequest
{
    private string $long_url;
    private ?string $short_url;

    public function __construct(string $long_url, ?string $short_url)
    {
        $this->long_url = $long_url;
        $this->short_url = $short_url;
    }

    public function getLongUrl(): string
    {
        return $this->long_url;
    }

    public function getShortUrl(): ?string
    {
        return $this->short_url;
    }
}

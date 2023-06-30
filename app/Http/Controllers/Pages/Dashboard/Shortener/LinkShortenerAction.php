<?php

namespace App\Http\Controllers\Pages\Dashboard\Shortener;

use App\Http\Controllers\Pages\BaseController;
use App\Http\Controllers\Presentation\ShortenerController;

class LinkShortenerAction extends ShortenerController
{
    use BaseController;

    public function render()
    {
        return view('livewire.empty')
            ->layout('layouts.only-layout');
    }

    public function mount()
    {
        $this->delete(request()->route("short"));
    }
}

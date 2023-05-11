<?php

namespace App\Http\Controllers\Pages\Dashboard\Shortener;

use App\Http\Controllers\Presentation\ShortenerController;

class LinkShortenerTable extends ShortenerController
{
    public $shorteners = [];

    public function render()
    {
        return view('livewire.dashboard.admin.link-shortener.link-shortener-table')
            ->layout('layouts.dashboard.admin.base');
    }

    public function mount()
    {
        $this->shorteners = $this->index();
    }
}

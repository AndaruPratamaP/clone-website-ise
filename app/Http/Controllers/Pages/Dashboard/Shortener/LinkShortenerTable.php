<?php

namespace App\Http\Controllers\Pages\Dashboard\Shortener;

use App\Http\Controllers\Presentation\ShortenerController;

class LinkShortenerTable extends ShortenerController
{
    public $shorteners = [];

    public function render()
    {
        return view('livewire.link-shortener-table')
            ->layout('layouts.app');
    }

    public function mount()
    {
        $this->shorteners = $this->index();
    }
}

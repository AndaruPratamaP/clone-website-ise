<?php

namespace App\Http\Controllers\Pages\Redirect;

use App\Http\Controllers\Presentation\ShortenerController;

class RedirectShortener extends ShortenerController
{
    public $long_url = '';

    public function render()
    {
        return view('livewire.redirect-shortener')->layout('layouts.only-layout');
    }

    public function mount($short)
    {
        $response = $this->show($short);
        if (!$response) {
            return redirect()->route('404');
        }
        $this->long_url = $response->getLongUrl();
    }
}

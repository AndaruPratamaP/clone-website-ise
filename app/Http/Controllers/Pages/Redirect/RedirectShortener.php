<?php

namespace App\Http\Controllers\Pages\Redirect;

use App\Exceptions\IseException;
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
        try {
            $response = $this->show($short);
            $this->long_url = $response->getLongUrl();
        } catch (IseException $e) {
            return redirect()->route('404')->with('toastr-toast', [
                'type' => 'error',
                'title' => 'Error',
                'text' => $e->getMessage(),
            ]);;
            return null;
        }
    }
}

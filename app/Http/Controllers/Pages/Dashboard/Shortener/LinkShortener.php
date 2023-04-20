<?php

namespace App\Http\Controllers\Pages\Dashboard\Shortener;

use App\Http\Controllers\Presentation\ShortenerController;

class LinkShortener extends ShortenerController
{
    public $long_url;
    public $short_url;
    protected $user_id;

    public $shortened = "";

    protected $rules = [
        'long_url' => 'required|url|min:5|max:255',
        'short_url' => 'nullable|string',
    ];

    public function render()
    {
        return view('livewire.link-shortener')
            ->layout('layouts.app');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected function error($error)
    {
        // Handle the error here
        logger()->error($error);

        // Optionally, you can set a message to be displayed in the UI
        $this->msg["error"] = 'An error occurred. Please try again later.';
    }

    public function submit()
    {
        $this->validate($this->rules);
        $response = $this->store();
        if (!$response) {
            if ($this->msg["error"] == "")
                $this->msg["error"] = 'Something went wrong!';
            return;
        }
        $this->shortened = $response->getShortUrl();
        $this->msg["success"] = 'Your message has been sent!';
    }
}

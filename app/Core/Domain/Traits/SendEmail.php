<?php

namespace App\Core\Domain\Traits;

use Illuminate\Support\Facades\Mail;

trait SendsEmails
{
    public function sendEmail($to, $subject, $view, $data = [])
    {
        Mail::send($view, $data, function ($message) use ($to, $subject) {
            $message->to($to)
                ->subject($subject);
        });
    }
}

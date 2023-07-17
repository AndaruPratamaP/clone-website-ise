<?php

namespace App\Core\Application\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use function config;

class GtsStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param string $reason
     * @param string $name
     * @param bool $isVerified
     */
    public function __construct(){ }

    public function build(): GtsStatusMail
    {
        return $this->from(config('mail.from'))
            ->markdown('emails.notify-gts');
    }
}

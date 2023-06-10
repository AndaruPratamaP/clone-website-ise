<?php

namespace App\Core\Application\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use function config;

class GtsStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $reason;
    private string $name;
    private bool $isVerified;

    /**
     * @param string $reason
     * @param string $name
     * @param bool $isVerified
     */
    public function __construct(string $reason, string $name, bool $isVerified)
    {
        $this->reason = $reason;
        $this->name = $name;
        $this->isVerified = $isVerified;
    }

    public function build(): GtsStatusMail
    {
        return $this->from(config('mail.from'))
            ->markdown('emails.gts_reg_status_mail', [
                "name" => $this->name,
                "reason" => $this->reason,
                "isVerified" => $this->isVerified,
            ]);
    }
}

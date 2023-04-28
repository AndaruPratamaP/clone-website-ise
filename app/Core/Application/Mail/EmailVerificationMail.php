<?php

namespace App\Core\Application\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use function config;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $email;
    private string $name;
    private string $token;

    /**
     * @param string $email
     * @param string $name
     * @param string $token
     */
    public function __construct(string $email, string $name, string $token)
    {
        $this->email = $email;
        $this->name = $name;
        $this->token = $token;
    }

    public function build(): EmailVerificationMail
    {
        return $this->from(config('mail.from'))
            ->markdown('emails.email_verification_mail', [
                "email" => $this->email,
                "name" => $this->name,
                "token" => $this->token,
                "app_url" => config('app.url')
            ]);
    }
}

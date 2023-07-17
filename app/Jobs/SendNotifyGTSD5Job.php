<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNotifyGTSD5Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipientEmail;

    public function __construct($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
    }

    public function handle()
    {
        // Send the notification email
        Mail::send('emails.notify-gts', [], function ($message) {
            $message->to($this->recipientEmail)->subject('[D-5] ISE! Grand Talkshow 2023');
        });
    }
}

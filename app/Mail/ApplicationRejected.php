<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationRejected extends Mailable
{
    use Queueable, SerializesModels;
    public $reject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reject)
    {
        $this->reject = $reject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Permit Application Rejected')->markdown('emails.PermitRejected');
    }
}

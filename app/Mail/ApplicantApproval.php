<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicantApproval extends Mailable
{
    use Queueable, SerializesModels;
    public $approve;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($approve)
    {
        $this->approve = $approve;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Vehicle Permit Approval')->markdown('emails.FinalApproval');
    }
}

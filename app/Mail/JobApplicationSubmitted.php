<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    private $applicationData = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appData = [])
    {
        $this->applicationData = $appData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $to = config('mail.to');
        $from = config('mail.from');
        $name = $this->applicationData['firstName'] . ' ' . $this->applicationData['lastName'];
        $subject = "Job Application Submitted ($name)";

        return $this
            ->from($from)
            ->subject($subject)
            ->view('emails.job-application.submitted')
            ->with($this->applicationData);
    }
}

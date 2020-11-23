<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $subject = 'Job Application Submitted';
        $body = view('emails.job-application.submitted', [
            'firstName'         => 'Donald',
            'lastName'          => 'Pittard',
            'address'           => '7712 Secretariat Dr',
            'address2'          => '',
            'city'              => 'Midlothian',
            'state'             => 'VA',
            'zip'               => '23112',
            'phoneNumber'       => '757-450-1576',
            'email'             => 'donaldpittard@gmail.com',
            'position'          => 'Hotdog Salesman',
            'hearAboutUs'       => 'Google',
            'eligible'          => 'yes',
            'salary'            => '$1000',
            'startNow'          => 'no',
            'startWhen'         => 'January 2, 2021',
            'highSchoolName'    => 'Bishop Sullivan High School',
            'highSchoolDiploma' => 'High School',
            'collegeName'       => 'Old Dominion University',
            'collegeMajor'      => 'Computer Science',
            'collegeDegree'     => 'Bachelor of Science',
            'collegeYears'      => '3',
            'otherEdName'       => '',
            'otherEdMajor'      => '',
            'otherEdDegree'     => '',
            'otherEdYears'      => '',
            'otherCourseWork'   => '',
            'employment1Name'   => 'Synalloy',
            'employment1Start'  => 'March 03, 2018',
            'employment1Stop'   => 'March 03, 2020',
            'employment1Duties' => '',
            'employment1Reason' => '' 
         ])->render();

        return $this
            ->from($from)
            ->subject($subject)
            ->setBody($body);
    }
}

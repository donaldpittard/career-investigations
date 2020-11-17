<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewJobApplicationController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('review-job-application', [
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
         ]);
    }
}
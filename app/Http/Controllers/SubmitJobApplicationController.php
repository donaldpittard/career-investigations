<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationSubmitted;
use InvalidArgumentException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class SubmitJobApplicationController extends Controller
{
    const DATE_FORMAT = 'm/d/Y';

    public function __invoke(Request $request) {
        $firstName = $request->input('firstName', '');
        $lastName = $request->input('lastName', '');
        $address = $request->input('address', '');
        $address2 = $request->input('address2', '');
        $city = $request->input('city', '');
        $state = $request->input('state', '');
        $zip = $request->input('zip', '');
        $phoneNumber = $request->input('phoneNumber', '');
        $email = $request->input('email', '');
        $position = $request->input('position', '');
        $heardAboutUsHow = $request->input('heard-about-us-how', '');
        $isEligibleToWork = $request->input('is-eligible-to-work', true);
        $salary = $request->input('salary', '');
        $canStartNow = $request->input('can-start-now', true);
        $dateCanStart = $request->input('date-can-start', '');
        $highSchoolName = $request->input('high-school-name', '');
        $highSchoolDiploma = $request->input('high-school-diploma', '');
        $collegeName = $request->input('college-name', '');
        $collegeMajor = $request->input('college-major', '');
        $collegeDegree = $request->input('college-degree', '');
        $collegeYears = $request->input('college-years', '');
        $otherEducationName = $request->input('other-education-name', '');
        $otherEducationMajor = $request->input('other-education-major', '');
        $otherEducationDegree = $request->input('other-education-degree', '');
        $otherEducationYears = $request->input('other-education-years', '');
        $otherCourseWork = $request->input('other-work-certs', '');
        $employment1Name = $request->input('employment-1-name', '');
        $employment1Duties = $request->input('employment-1-duties', '');
        $employment1Start = $request->input('employment-1-start', '');
        $employment1End = $request->input('employment-1-end', '');
        $employment1Reason = $request->input('employment-1-reason', '');
        $employment2Name = $request->input('employment-2-name', '');
        $employment2Duties = $request->input('employment-2-duties', '');
        $employment2Start = $request->input('employment-2-start', '');
        $employment2End = $request->input('employment-2-end', '');
        $employment2Reason = $request->input('employment-2-reason', '');
        $employment3Name = $request->input('employment-3-name', '');
        $employment3Duties = $request->input('employment-3-duties', '');
        $employment3Start = $request->input('employment-3-start', '');
        $employment3End = $request->input('employment-3-end', '');
        $employment3Reason = $request->input('employment-3-reason', '');
        $references1Name = $request->input('references-1-name', '');
        $references1Relationship = $request->input('references-1-relationship', '');
        $references1PhoneNumber = $request->input('references-1-phone-number', '');
        $references2Name = $request->input('references-2-name', '');
        $references2Relationship = $request->input('references-2-relationship', '');
        $references2PhoneNumber = $request->input('references-2-phone-number', '');
        $references3Name = $request->input('references-3-name', '');
        $references3Relationship = $request->input('references-3-relationship', '');
        $references3PhoneNumber = $request->input('references-3-phone-number', '');

        $data = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'address' => $address,
            'address2' => $address2,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'position' => $position,
            'hearAboutUs' => $heardAboutUsHow,
            'eligible' => $isEligibleToWork,
            'salary' => $salary,
            'startNow' => $canStartNow,
            'startWhen' => $dateCanStart,
            'highSchoolName' => $highSchoolName,
            'highSchoolDiploma' => $this->parseDiploma($highSchoolDiploma),
            'collegeName' => $collegeName,
            'collegeMajor' => $collegeMajor,
            'collegeDegree' => $this->parseDegree($collegeDegree),
            'collegeYears' => $collegeYears,
            'otherEdName' => $otherEducationName,
            'otherEdMajor' => $otherEducationMajor,
            'otherEdDegree' => $this->parseDegree($otherEducationDegree),
            'otherEdYears' => $otherEducationYears,
            'otherCourseWork' => $otherCourseWork,
            'employment1Name' => $employment1Name,
            'employment1Duties' => $employment1Duties,
            'employment1Start' => date_format(
                date_create($employment1Start), self::DATE_FORMAT),
            'employment1End' => date_format(
                date_create($employment1End), self::DATE_FORMAT),
            'employment1Reason' => $employment1Reason,
            'employment2Name' => $employment2Name,
            'employment2Duties' => $employment2Duties,
            'employment2Start' => date_format(date_create($employment2Start), self::DATE_FORMAT),
            'employment2End' => date_format(date_create($employment2End), self::DATE_FORMAT),
            'employment2Reason' => $employment2Reason,
            'employment3Name' => $employment3Name,
            'employment3Duties' => $employment3Duties,
            'employment3Start' => date_format(date_create($employment3Start), self::DATE_FORMAT),
            'employment3End' => date_format(date_create($employment3End), self::DATE_FORMAT),
            'employment3Reason' => $employment3Reason,
            'reference1Name' => $references1Name,
            'reference1Relationship' => $references1Relationship,
            'reference1PhoneNumber' => $references1PhoneNumber,
            'reference2Name' => $references2Name,
            'reference2Relationship' => $references2Relationship,
            'reference2PhoneNumber' => $references2PhoneNumber,
            'reference3Name' => $references3Name,
            'reference3Relationship' => $references3Relationship,
            'reference3PhoneNumber' => $references3PhoneNumber,
        ];

        return view('emails.job-application.submitted', $data);
    }

    private function parseDiploma(string $diploma): string 
    {
        switch (strtolower($diploma)) {
            case 'highschool':
                return 'High School';
            case 'ged':
                return 'General Education Development (GED)';
            case 'none':
                return 'None';
            default:
                return $diploma;
        }
    }

    private function parseDegree(string $degree): string 
    {
        switch (strtolower($degree)) {
            case 'none':
                return 'None';
            case 'associateofarts':
                return 'Associate of Arts';
            case 'associateofscience':
                return 'Associate of Science';
            case 'bachelorofarts':
                return 'Bachelor of Arts';
            case 'bachelorofscience':
                return 'Bachelor of Science';
            case 'masterofartsorscience':
                return 'Master of Arts or Science';
            case 'other':
                return 'Other';
            default:
                return $degree;
        }
    }
}
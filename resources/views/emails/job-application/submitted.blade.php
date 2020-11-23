@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-striped">
    <tbody>
        <tr>
            <th>First Name</th>
            <td>{{ $firstName }}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $lastName }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $address }}</td>
        </tr>
        <tr>
            <th>Address2</th>
            <td>{{ $address2 }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $city }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{ $state }}</td>
        </tr>
        <tr>
            <th>Zip</th>
            <td>{{ $zip }}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $phoneNumber }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <th>Position</th>
            <td>{{ $position }}</td>
        </tr>
        <tr>
            <th>How did you hear about us?</th>
            <td>{{ $hearAboutUs }}</td>
        </tr>
        <tr>
            <th>Eligible to work in US?</th>
            <td>{{ $eligible }}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{ $salary }}</td>
        </tr>
        <tr>
            <th>Can start now?</th>
            <td>{{ $startNow }}</td>
        </tr>
        <tr>
            <th>Preferred Start Date</th>
            <td>{{ $startWhen }}</td>
        </tr>
        <tr>
            <th>High School Name</th>
            <td>{{ $highSchoolName }}</td>
        </tr>
        <tr>
            <th>High School Diploma</th>
            <td>{{ $highSchoolDiploma }}</td>
        </tr>
        <tr>
            <th>College Name</th>
            <td>{{ $collegeName }}</td>
        </tr>
        <tr>
            <th>College Major</th>
            <td>{{ $collegeMajor }}</td>
        </tr>
        <tr>
            <th>College Degree</th>
            <td>{{ $collegeDegree }}</td>
        </tr>
        <tr>
            <th>College Years</th>
            <td>{{ $collegeYears }}</td>
        </tr>
        <tr>
            <th>Other Institution Name</th>
            <td>{{ $otherEdName }}</td>
        </tr>
        <tr>
            <th>Other Institution Major</th>
            <td>{{$otherEdMajor}}</td>
        </tr>
        <tr>
            <th>Other Institution Degree</th>
            <td>{{$otherEdDegree}}</td>
        </tr>
        <tr>
            <th>Other Institution Years</th>
            <td>{{$otherEdYears}}</td>
        </td>
        <tr>
            <th>Other Course Work</th>
            <td>{{$otherCourseWork}}</td>
        </tr>
        <tr>
            <th>Employer 1 Name</th>
            <td>{{ $employment1Name }}</td>
        </tr>
        <tr>
            <th>Employer 1 Duties</th>
            <td>{{ $employment1Duties }}</td>
        </tr>
        <tr>
            <th>Employmer 1 Start Date</th>
            <td>{{ $employment1Start }}</td>
        </tr>
        <tr>
            <th>Employer 1 End Date</th>
            <td>{{ $employment1End }}</td>
        </tr>
        <tr>
            <th>Reason for leaving Employer 1</th>
            <td>{{ $employment1Reason }}</td>
        </tr>
        <tr>
            <th>Employer 2 Name</th>
            <td>{{ $employment2Name }}</td>
        </tr>
        <tr>
            <th>Employer 2 Duties</th>
            <td>{{ $employment2Duties }}</td>
        </tr>
        <tr>
            <th>Employmer 2 Start Date</th>
            <td>{{ $employment2Start }}</td>
        </tr>
        <tr>
            <th>Employer 2 End Date</th>
            <td>{{ $employment2End }}</td>
        </tr>
        <tr>
            <th>Reason for leaving Employer 2</th>
            <td>{{ $employment2Reason }}</td>
        </tr>
        <tr>
            <th>Employer 3 Name</th>
            <td>{{ $employment3Name }}</td>
        </tr>
        <tr>
            <th>Employer 3 Duties</th>
            <td>{{ $employment3Duties }}</td>
        </tr>
        <tr>
            <th>Employmer 3 Start Date</th>
            <td>{{ $employment3Start }}</td>
        </tr>
        <tr>
            <th>Employer 3 End Date</th>
            <td>{{ $employment3End }}</td>
        </tr>
        <tr>
            <th>Reason for leaving Employer 3</th>
            <td>{{ $employment3Reason }}</td>
        </tr>
        <tr>
            <th>1st Reference Name<th>
            <td>{{ $reference1Name }}</td>
        </tr>
        <tr>
            <th>1st Reference Relationship<th>
            <td>{{ $reference1Relationship }}</td>
        </tr>
        <tr>
            <th>1st Reference Phone Number<th>
            <td>{{ $reference1PhoneNumber }}</td>
        </tr>
        <tr>
            <th>2nd Reference Name<th>
            <td>{{ $reference2Name }}</td>
        </tr>
        <tr>
            <th>2nd Reference Relationship<th>
            <td>{{ $reference2Relationship }}</td>
        </tr>
        <tr>
            <th>2nd Reference Phone Number<th>
            <td>{{ $reference2PhoneNumber }}</td>
        </tr>
        <tr>
            <th>3rd Reference Name<th>
            <td>{{ $reference3Name }}</td>
        </tr>
        <tr>
            <th>3rd Reference Relationship<th>
            <td>{{ $reference3Relationship }}</td>
        </tr>
        <tr>
            <th>3rd Reference Phone Number<th>
            <td>{{ $reference3PhoneNumber }}</td>
        </tr>
    </tbody>
</table>
</div>
@endsection
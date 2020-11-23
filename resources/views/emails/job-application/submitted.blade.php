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
            <td>{{ $collegeYears }}
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
            <th>Other Course Workd</th>
            <td>{{$otherCourseWork}}</td>
        </tr>
    </tbody>
</table>
</div>
@endsection
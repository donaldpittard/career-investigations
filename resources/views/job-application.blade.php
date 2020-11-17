@extends('layouts.app')
@section('content')
<div class="container">
<h1>Career Investigations Practice Job Application</h1>
<form>
    <div class="contact mt-5">
        <h2>Contact Information</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" required aria-required>
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" required aria-required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="address" placeholder="1234 Main St" required aria-required>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city" required aria-required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <select id="state" class="form-control" name="state" required aria-required>
                    <option selected disabled>Choose...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" name="zip" required aria-required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" name="phoneNumber" placeholder="###-###-####" required aria-required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required aria-required>
            </div>
        </div>
    </div>
    
    <div class="general mt-5">
        <h2>General Information</h2>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="position">Tell us which position you are applying for</label>
                <input type="text" class="form-control" name="position" required aria-required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="hear-about-us">How did you hear about us?</label>
                <input class="form-control" name="hear-about-us">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">Are you eligible to work in the United States?</label>
                
                <div class="form-row">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="eligible" value="yes" required aria-required>
                        <label class="form-check-label" for="eligble">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="eligible" value="no" required aria required>
                        <label class="form-check-label" for="eligible">No</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="salary">What is your desired salary</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input class="form-control" type="number" name="salary" min="1" step="any" required aria-required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">If hired, would you be able to start immediately?</label>
                
                <div class="form-row">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="start-now" value="yes" required>
                    <label class="form-check-label" for="start-now">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="start-now" value="no">
                    <label class="form-check-label" for="start-now">No</label>
                </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="form-label">If unable to start immediately, when could you start?</label>
                <input type="date" class="form-control col-md-6" name="start-date">
            </div>
        </div>
    </div>

    <div class="education mt-5">
        <h2>Education</h2>

        <section class="education__high-school mt-2">
            <h3>High School</h3>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="high-school-name" required aria-required>
                </div>
                <div class="form-group col-md-6">
                    <label>Diploma Earned</label>
                    <select class="form-control" name="high-school-diploma" required aria-required>
                        <option disabled selected>Choose...</option>
                        <option value="highSchool">High School</option>
                        <option value="ged">General Education Development (GED)</option>
                        <option value="none">None</option>
                    </select>
                </div>
            </div>
        </section>
        
        <section class="education__college">
            <h3>College</h3>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Institution Name</label>
                    <input type="text" class="form-control" name="college-name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Major or Course of Study</label>
                    <input type="text" class="form-control" name="college-major">
                </div>
                <div class="form-group col-md-4">
                    <label>Degree</label>
                    <select class="form-control" name="college-degree">
                        <option disabled selected>Choose...</option>
                        <option value="none">None</option>
                        <option value="associateOfArts">Associate of Arts</option>
                        <option value="assoicateOfScience">Associate of Science</option>
                        <option value="bachelorOfArts">Bachelor of Arts</option>
                        <option value="bachelorOfScience">Bachelor of Science</option>
                        <option value="masterOfArtsOrScience">Master of Arts or Science</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label>Years attended</label>
                    <select class="form-control" name="college-years">
                        <option disabled selected>Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8OrMore">8 or more</option>
                    </select>
                </div>
                
            </div>
        </section>

        <section class="education__other">
            <h3>Other Education</h3>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Institution Name</label>
                    <input type="text" class="form-control" name="other-education-name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Course of Study</label>
                    <input type="text" class="form-control" name="other-education-major">
                </div>

                <div class="form-group col-md-4">
                    <label>Degree</label>
                    <select class="form-control" name="other-education-degree">
                        <option disabled selected>Choose...</option>
                        <option value="none">None</option>
                        <option value="associateOfArts">Associate of Arts</option>
                        <option value="assoicateOfScience">Associate of Science</option>
                        <option value="bachelorOfArts">Bachelor of Arts</option>
                        <option value="bachelorOfScience">Bachelor of Science</option>
                        <option value="masterOfArtsOrScience">Master of Arts or Science</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group col-md-4">
                    <label>Years attended</label>
                    <select class="form-control" name="other-education-years">
                        <option disabled selected>Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8OrMore">8 or more</option>
                    </select>
                </div>
            </div>
        </section>
    </div>

    <div class="other-skills mt-5">
        <h2>Other Coursework, Licenses, and Certifications</h2>
        <div class="form-row">
            <div class="form-group col-md-12">
                <textarea class="form-control" name="other-work-certs"></textarea>
            </div>
        </div>
    </div>

    <div class="employment-history mt-5">
        <h2>Employment History</h2>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Employer Name</label>
                <input type="text" class="form-control" name="employment-1-name">
                <label>Start Date</label>
                <input type="date" class="form-control" name="employment-1-start">
                <label>End Date</label>
                <input type="date" class="form-control" name="employment-1-end">
            </div>
        
            <div class="form-group col-md-6">
                <label>Description of Duties</label>
                <textarea class="form-control" name="employment-1-duties"></textarea>
                <label>Reason for Leaving</label>
                <input type="text" class="form-control" name="employment-1-reason">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Employer Name</label>
                <input type="text" class="form-control" name="employment-2-name">
                <label>Start Date</label>
                <input type="date" class="form-control" name="employment-2-start">
                <label>End Date</label>
                <input type="date" class="form-control" name="employment-2-end">
            </div>
        
            <div class="form-group col-md-6">
                <label>Description of Duties</label>
                <textarea class="form-control" name="employment-2-duties"></textarea>
                <label>Reason for Leaving</label>
                <input type="text" class="form-control" name="employment-2-reason">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Employer Name</label>
                <input type="text" class="form-control" name="employment-3-name">
                <label>Start Date</label>
                <input type="date" class="form-control" name="employment-3-start">
                <label>End Date</label>
                <input type="date" class="form-control" name="employment-3-end">
            </div>
        
            <div class="form-group col-md-6">
                <label>Description of Duties</label>
                <textarea class="form-control" name="employment-3-duties"></textarea>
                <label>Reason for Leaving</label>
                <input type="text" class="form-control" name="employment-3-reason">
            </div>
        </div>
        

        <button type="button" class="btn btn-primary">Add Employment</button>
    </div>

    <div class="references mt-5">
        <h2>References</h2>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Name</label>
                <input type="text" class="form-control" required aria-required>
            </div>

            <div class="form-group col-md-4">
                <label>Relationship</label>
                <input type="text" class="form-control" required aria-required>
            </div>

            <div class="form-group col-md-4">
                <label>Phone Number</label>
                <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control" placeholder="###-###-####" required aria-required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label>Relationship</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label>Phone Number</label>
                <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control" placeholder="###-###-####">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label>Relationship</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label>Phone Number</label>
                <input pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control" placeholder="###-###-####">
            </div>
        </div>
    </div>

    <div class="form-row mt-2">
        <div class="col-md-5"></div>
        <div class="col-md-1">
            <button type="button" class="btn btn-primary" id="form__btn--previous">Previous</button>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-primary" id="form__btn--next">Next</button>
        </div>
        <div class="col-md-5"></div>
    </div>
    
    <div class="form-row mt-2">
        <div class="col-md-5"></div>
        <div class="col-md-1">
            <button type="button" class="btn btn-primary" id="form__btn--review">Review</button>
        </div>
        <div class="col-md-1">
            <button type="submit" action="/review" method="POST" class="btn btn-primary" id="form__btn--submit">Submit</button>
        </div>
        <div class="col-md-5"></div>
    </div>
</form>
</div>
@push('body-scripts')
<script src="{{ asset('js/job-application.js') }}" defer></script>
@endpush
@endsection
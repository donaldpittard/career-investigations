@extends('layouts.app')
@section('content')
<div class="container">
<h1>Career Investigations Practice Job Application</h1>
<form>
    <div class="contact mt-5" id="contact-information">
        <h2>Contact Information</h2>    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">First Name <span class="text-danger">*</span></label>
                <input id="firstName" type="text" class="form-control contact-information__input" name="firstName">
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control contact-information__input" name="lastName">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control contact-information__input" name="address" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control contact-information__input" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City <span class="text-danger">*</span></label>
                <input type="text" class="form-control contact-information__input" name="city">
            </div>
            <div class="form-group col-md-4">
                <label for="state">State <span class="text-danger">*</span></label>
                <select id="state" class="form-control contact-information__input" name="state">
                    <option selected disabled>Choose...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip <span class="text-danger">*</span></label>
                <input type="text" class="form-control contact-information__input" name="zip">
                <div class="d-none text-danger" id="zip-code-warning">Zip code must have 5 digits</div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phoneNumber">Phone Number <span class="text-danger">*</span></label>
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control contact-information__input" name="phoneNumber" placeholder="###-###-####">
                <div class="d-none text-danger" id="phone-number-warning">Phone number must match the pattern ###-###-####</div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control contact-information__input" name="email">
                <div class="d-none text-danger" id="email-warning">Invalid email</div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-7">
                <div>
                    All fields marked with&nbsp;<span class="text-danger">*</span>&nbsp;are Required
                </div>
            </div>
            <div class="col-md-1">
                <button id="contact-information__btn--next" type="button" class="disabled btn btn-primary" disabled>Next</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
    <div class="general-information mt-5" id="general-information">
        <h2>General Information</h2>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="position">Tell us which position you are applying for <span class="text-danger">*</span></label>
                <input type="text" class="form-control general-information__input" name="position">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="heard-about-us-how">How did you hear about us? <span class="text-danger">*</span></label>
                <input class="form-control general-information__input" name="heard-about-us-how">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">Are you eligible to work in the United States? <span class="text-danger">*</span></label>
                
                <div class="form-row">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input general-information__input" name="is-eligible-to-work" value="yes">
                        <label class="form-check-label" for="is-eligible-to-work">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input general-information__input" name="is-eligible-to-work" value="no">
                        <label class="form-check-label" for="is-eligible-to-work">No</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="salary">What is your desired salary <span class="text-danger">*</span></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input class="form-control general-information__input" type="number" name="salary" min="1" step="any">
                    <div class="text-danger d-none" id="salary-warning">Salary must be a number</div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">If hired, would you be able to start immediately? <span class="text-danger">*</span></label>
                
                <div class="form-row">
                <div class="form-check form-check-inline">
                    <input class="form-check-input general-information__input" type="radio" name="can-start-now" value="yes">
                    <label class="form-check-label" for="can-start-now">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input general-information__input" type="radio" name="can-start-now" value="no">
                    <label class="form-check-label" for="can-start-now">No</label>
                </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="form-label" for="date-can-start">If unable to start immediately, when could you start?</label>
                <input type="date" class="form-control col-md-6 general-information__input" name="date-can-start">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4">
                <div>
                    All fields marked with&nbsp;<span class="text-danger">*</span>&nbsp;are Required
                </div>
            </div>
            <div class="col-md-1">
                <button id="general-information__btn--previous" type="button" class="btn btn-primary">Previous</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button id="general-information__btn--next" type="button" class="disabled btn btn-primary" disabled>Next</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="education mt-5" id="education">
        <section class="education__high-school mt-2">
            <h3>High School</h3>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control education__input" name="high-school-name">
                </div>
                <div class="form-group col-md-6">
                    <label>Diploma Earned <span class="text-danger">*</span></label>
                    <select class="form-control education__input" name="high-school-diploma">
                        <option disabled selected>Choose...</option>
                        <option value="highSchool">High School</option>
                        <option value="ged">General Education Development (GED)</option>
                        <option value="none">None</option>
                    </select>
                </div>
            </div>
        </section>
        
        <section class="education__college mt-2">
            <h3>College</h3>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Institution Name</label>
                    <input type="text" class="form-control education__input" name="college-name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Major or Course of Study</label>
                    <input type="text" class="form-control education__input" name="college-major">
                </div>
                <div class="form-group col-md-4">
                    <label>Degree</label>
                    <select class="form-control education__input" name="college-degree">
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
                    <select class="form-control education__input" name="college-years">
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

        <section class="education__other mt-2">
            <h3>Other Education</h3>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Institution Name</label>
                    <input type="text" class="form-control education__input" name="other-education-name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Course of Study</label>
                    <input type="text" class="form-control education__input" name="other-education-major">
                </div>

                <div class="form-group col-md-4">
                    <label>Degree</label>
                    <select class="form-control education__input" name="other-education-degree">
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
                    <select class="form-control education__input" name="other-education-years">
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

        <div class="form-row">
            <div class="col-md-4">
                <div>
                    All fields marked with&nbsp;<span class="text-danger">*</span>&nbsp;are Required
                </div>
            </div>
            <div class="col-md-1">
                <button id="education__btn--previous" type="button" class="btn btn-primary">Previous</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button id="education__btn--next" type="button" class="disabled btn btn-primary" disabled>Next</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="other-skills mt-5" id="other-skills">
        <h2>Other Coursework, Licenses, and Certifications</h2>
        <div class="form-row">
            <div class="form-group col-md-12">
                <textarea class="form-control" name="other-work-certs"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4"></div>
            <div class="col-md-1">
                <button id="other-education__btn--previous" type="button" class="btn btn-primary">Previous</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button id="other-education__btn--next" type="button" class="btn btn-primary">Next</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="employment-history mt-5" id="employment-history">
        <h2>Employment History</h2>

        <section>
            <div class="form-row">
                <label class="font-weight-bold">Employer Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control employment-history__input" name="employment-1-name">
            </div>
            <div class="form-row">
                <label>Description of Duties <span class="text-danger">*</span></label>
                <textarea class="form-control employment-history__input" name="employment-1-duties"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Start Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control employment-history__input" name="employment-1-start">
                </div>
            
                <div class="form-group col-md-6">
                    <label>End Date</label>
                    <input type="date" class="form-control employment-history__input" name="employment-1-end">
                </div>
            </div>
            
            <div class="form-row">
                <label>Reason for Leaving</label>
                <input type="text" class="form-control employment-history__input" name="employment-1-reason">
            </div>
            

        </section>
        <section class="mt-5">
            <div class="form-row">
                    <label class="font-weight-bold">Employer Name</label>
                    <input type="text" class="form-control employment-history__input" name="employment-2-name">
            </div>
            <div class="form-row">
                <label>Description of Duties</label>
                <textarea class="form-control employment-history__input" name="employment-2-duties"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Start Date</label>
                    <input type="date" class="form-control employment-history__input" name="employment-2-start">
                </div>
            
                <div class="form-group col-md-6">
                    <label>End Date</label>
                    <input type="date" class="form-control employment-history__input" name="employment-2-end">
                </div>
            </div>
            
            <div class="form-row">
                <label>Reason for Leaving</label>
                <input type="text" class="form-control employment-history__input" name="employment-2-reason">
            </div>
            
        </section>
        <section class="mt-5">
            <div class="form-row">
                    <label class="font-weight-bold">Employer Name</label>
                    <input type="text" class="form-control employment-history__input" name="employment-3-name">
            </div>
            <div class="form-row">
                <label>Description of Duties</label>
                <textarea class="form-control employment-history__input" name="employment-3-duties"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Start Date</label>
                    <input type="date" class="form-control employment-history__input" name="employment-3-start">
                </div>
            
                <div class="form-group col-md-6">
                    <label>End Date</label>
                    <input type="date" class="form-control employment-history__input" name="employment-3-end">
                </div>
            </div>
            
            <div class="form-row">
                <label>Reason for Leaving</label>
                <input type="text" class="form-control employment-history__input" name="employment-3-reason">
            </div>
            
        </section>
        <div class="form-row mt-5">
            <div class="col-md-4">
                <div>
                    All fields marked with&nbsp;<span class="text-danger">*</span>&nbsp;are Required
                </div>
            </div>
            <div class="col-md-1">
                <button id="employment-history__btn--previous" type="button" class="btn btn-primary">Previous</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button id="employment-history__btn--next" type="button" class="btn btn-primary disabled" disabled>Next</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="references mt-5" id="references">
        <h2>References</h2>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Name<span class="text-danger">*</span></label>
                <input name="references-1-name" type="text" class="form-control references__input">
            </div>

            <div class="form-group col-md-4">
                <label>Relationship<span class="text-danger">*</span></label>
                <input name="references-1-relationship" type="text" class="form-control references__input">
            </div>

            <div class="form-group col-md-4">
                <label>Phone Number<span class="text-danger">*</span></label>
                <input name="references-1-phone-number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control references__input" placeholder="###-###-####">
                <div class="text-danger d-none invisible" id="references-1-phone-number-warning">Invalid phone number format</div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Name</label>
                <input name="references-2-name" type="text" class="form-control references__input">
            </div>

            <div class="form-group col-md-4">
                <label>Relationship</label>
                <input name="references-2-relationship" type="text" class="form-control references__input">
            </div>

            <div class="form-group col-md-4">
                <label>Phone Number</label>
                <input name="references-2-phone-number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control references__input" placeholder="###-###-####">
                <div class="text-danger d-none invisible" id="references-2-phone-number-warning">Invalid phone number format</div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Name</label>
                <input name="references-3-name" type="text" class="form-control references__input">
            </div>

            <div class="form-group col-md-4">
                <label>Relationship</label>
                <input name="references-3-relationship" type="text" class="form-control references__input">
            </div>

            <div class="form-group col-md-4">
                <label>Phone Number</label>
                <input name="references-3-phone-number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" class="form-control references__input" placeholder="###-###-####">
                <div class="text-danger d-none invisible" id="references-3-phone-number-warning">Invalid phone number format</div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4">
                <div>
                    All fields marked with&nbsp;<span class="text-danger">*</span>&nbsp;are Required
                </div>
            </div>
            <div class="col-md-1">
                <button id="references__btn--previous" type="button" class="btn btn-primary">Previous</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <button disabled id="references__btn--submit" type="button" class="btn btn-primary" disabled>Submit</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</form>
</div>
@push('body-scripts')
<script src="{{ asset('js/job-application.js') }}" defer></script>
@endpush
@endsection
@extends('backend.layouts.app')
@section('backend_content')
    <div class="add-student-div">
        <form id="regForm" action="{{ route('student.information.save') }}" method="post">
            @csrf
            <h1>Student Info:</h1>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <div class="row">
                    <div class="col-sm-4 fs-5">
                        <label for="salutation" class=" col-form-label text-start">Salutation</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <select aria-label=""name="salutation" id="salutation" oninput="this.className = ''"
                            @error('salutation') is-invalid @enderror value="{{ old('salutation') }}">
                            <option value="" selected hidden>Select One</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Prf.">Prf.</option>
                        </select>
                        @error('salutation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-4 fs-5">
                        <label for="first_name" class=" col-form-label text-start">First Name</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="First name..." name="first_name" id="first_name" oninput="this.className = ''"
                            @error('first_name') is-invalid @enderror value="{{ old('first_name') }}">
                        @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-4 fs-5">
                        <label for="last_name" class=" col-form-label text-start">Last Name</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Last name..." name="last_name" id="last_name" oninput="this.className = ''"
                            @error('last_name') is-invalid @enderror value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="email" class=" col-form-label text-start">Email</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input type="email" placeholder="Email..." name="email" id="email"
                            oninput="this.className = ''" @error('email') is-invalid @enderror value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="date_of_birth" class=" col-form-label text-start">Date of birth</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input type="date" name="date_of_birth" id="date_of_birth" oninput="this.className = ''"
                            @error('date_of_birth') is-invalid @enderror value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="phone" class=" col-form-label text-start">Student Mobile number</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Phone number" type="phone" name="phone" id="phone"
                            oninput="this.className = ''" @error('phone') is-invalid @enderror value="{{ old('phone') }}">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="language" class=" col-form-label text-start">Language</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Language" type="text" name="language" id="language"
                            oninput="this.className = ''" @error('language') is-invalid @enderror
                            value="{{ old('language') }}">
                        @error('language')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="gender" class="col-form-label text-start">Gender</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <select aria-label="" name="gender" id="gender" oninput="this.className = ''"
                            @error('gender') is-invalid @enderror value="{{ old('gender') }}">
                            <option value="" selected hidden>Select One</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="marital_status" class="col-form-label text-start">Marital status</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <select aria-label="" name="marital_status" id="marital_status" oninput="this.className = ''"
                            @error('marital_status') is-invalid @enderror value="{{ old('marital_status') }}">
                            <option value="" selected hidden>Select One</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Engaged">Engaged</option>
                            <option value="De Facto">De Facto</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Never married or been in a de facto relationship">Never married or been in a de
                                facto relationship</option>
                        </select>
                        @error('marital_status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="country_of_birth" class=" col-form-label text-start">Country of birth</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Country of birth" type="text" name="country_of_birth"
                            id="country_of_birth" oninput="this.className = ''"
                            @error('country_of_birth') is-invalid @enderror value="{{ old('country_of_birth') }}">
                        @error('country_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="passport_number" class=" col-form-label text-start">Passport Number</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Passport Number" type="text" name="passport_number" id="passport_number"
                            oninput="this.className = ''" @error('passport_number') is-invalid @enderror
                            value="{{ old('passport_number') }}">
                        @error('passport_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="country_of_passport" class=" col-form-label text-start">Country of passport</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Country of passport" type="text" name="country_of_passport"
                            id="country_of_passport" oninput="this.className = ''"
                            @error('country_of_passport') is-invalid @enderror value="{{ old('country_of_passport') }}">
                        @error('country_of_passport')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="passport_expiry_date" class=" col-form-label text-start">Passport expiry date</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Passport expiry date" type="date" name="passport_expiry_date"
                            id="passport_expiry_date" oninput="this.className = ''"
                            @error('passport_expiry_date') is-invalid @enderror
                            value="{{ old('passport_expiry_date') }}">
                        @error('passport_expiry_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="current_student_location" class=" col-form-label text-start">Current student
                            location</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Current student location" type="text" name="current_student_location"
                            id="current_student_location" oninput="this.className = ''"
                            @error('current_student_location') is-invalid @enderror
                            value="{{ old('current_student_location') }}">
                        @error('current_student_location')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="age_eighteen_or_not" class="col-form-label text-start">Is the student 18+ years of
                            age?</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <select aria-label="" name="age_eighteen_or_not" id="age_eighteen_or_not"
                            oninput="this.className = ''" @error('age_eighteen_or_not') is-invalid @enderror
                            value="{{ old('age_eighteen_or_not') }}">
                            <option value="" selected hidden>Select One</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        @error('age_eighteen_or_not')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="tab">Student Address:
                <div class="row">
                    <div class="col-sm-6 fs-5">
                        <label for="street_address" class=" col-form-label text-start"> Street address</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Current student location" type="text" name="street_address"
                            id="street_address" oninput="this.className = ''"
                            @error('street_address') is-invalid @enderror value="{{ old('street_address') }}">
                        @error('street_address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="address_line_two" class=" col-form-label text-start"> Address line two</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Address line two" type="text" name="address_line_two"
                            id="address_line_two" @error('address_line_two') is-invalid @enderror
                            value="{{ old('address_line_two') }}">
                        @error('address_line_two')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="city" class=" col-form-label text-start"> City</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="City" type="text" name="city" id="city"
                            @error('city') is-invalid @enderror value="{{ old('city') }}">
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="postal_code" class=" col-form-label text-start"> City</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Postal code" type="text" name="postal_code" id="postal_code"
                            @error('postal_code') is-invalid @enderror value="{{ old('postal_code') }}">
                        @error('postal_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="country" class=" col-form-label text-start"> Country</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="Country" type="text" name="country" id="country"
                            @error('country') is-invalid @enderror value="{{ old('country') }}">
                        @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="state" class=" col-form-label text-start"> State</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="State" type="text" name="state" id="state"
                            @error('state') is-invalid @enderror value="{{ old('state') }}">
                        @error('state')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div style="overflow:auto;" class="mt-3">
                <div style="float:right;">
                    <button type="button" class="btn btn-info" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" class="btn btn-success" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                {{-- <span class="step"></span>
                <span class="step"></span> --}}
            </div>

        </form>
    </div>
@endsection
@push('custom-scripts')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
                // document.getElementById("nextBtn").type = "submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }

        $(document).ready(function() {
            jQuery('.datepicker').datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'dd-mm-yyyy',
                todayBtn: 'linked'
            });
        })
    </script>
@endpush
@push('custom-css')
    <style>
        body {
            background-image: url("{{ asset('/backend/image/add_student_image.jpg') }}");
            background-repeat: no-repeat;
            background-size: auto 1290px;
            background-attachment: fixed;
            background-position: center;
        }

        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        select,
        option {
            padding: 12px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }
    </style>
@endpush

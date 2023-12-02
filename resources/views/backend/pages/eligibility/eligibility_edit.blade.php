@extends('backend.layouts.app')
@section('backend_content')
    <div class="add-student-div">
        <form id="InsregForm" action="{{ route('eligibility.information.update') }}" method="post">
            @csrf
            <h1>Update eligibility Info:</h1>
                <div class="row">
                <input  Type="hidden" name="id" id="id" value="{{ $eligibility->id }}">
                    <div class="col-8 fs-5">
                        <label for="name" class=" col-form-label text-start">Eligibility Name</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input  Type="text" name="name" id="name" 
                             value="{{ $eligibility->name }}">
                    </div>
            <div style="overflow:auto;" class="mt-3">
                <div style="float:left;">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection
@push('custom-scripts')
    
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

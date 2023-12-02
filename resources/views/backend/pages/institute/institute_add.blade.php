@extends('backend.layouts.app')
@section('backend_content')
    <div class="add-student-div">
        <form id="InsregForm" action="{{ route('institute.information.save') }}" method="post">
            @csrf
            <h1>Institute Info:</h1>
                <div class="row">
                    <div class="col-sm-6 fs-5">
                        <label for="name" class=" col-form-label text-start">Institute Name</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="name..." Type="text" name="name" id="name" 
                            @error('name') is-invalid @enderror value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="type" class=" col-form-label text-start">Institute Type</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input type="text" placeholder="type..." name="type" id="type"
                            @error('type') is-invalid @enderror value="{{ old('type') }}">
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="established" class=" col-form-label text-start">Institute Established</label>
                        <input type="text" placeholder="established..." name="established" id="established"
                            @error('established') is-invalid @enderror value="{{ old('established') }}">
                        @error('established')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="ranking" class=" col-form-label text-start">Rankings</label>
                        <input type="text" name="ranking" id="ranking"
                            @error('ranking') is-invalid @enderror value="{{ old('ranking') }}">
                        @error('ranking')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 fs-5">
                        <label for="about" class=" col-form-label text-start">About Institute</label>
                                <div class="">
                                    <textarea class="form-control summernote @error('about') is-invalid @enderror" name="about"
                                        id="about"> </textarea>
                                    @error('about')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                    </div>
                    
                </div>
            <div style="overflow:auto;" class="mt-3">
                <div style="float:right;">
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

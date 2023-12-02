@extends('backend.layouts.app')
@section('backend_content')
    <div class="add-student-div">
        <form id="InsregForm" action="{{ route('campus.information.save') }}" method="post">
            @csrf
            <h1>Campus Info:</h1>
                <div class="row">
                    <div class="col-sm-6 fs-5">
                        <label for="name" class=" col-form-label text-start">Campus Name</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <input placeholder="name..." Type="text" name="name" id="name" 
                            @error('name') is-invalid @enderror value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                    <label for="institute" class=" col-form-label text-start">Institute Name</label>
                        <span class="float-end text-danger fs-5 mt-3">*</span>
                        <select aria-label=""name="institute_id" id="institute" oninput="this.className = ''"
                            @error('institute') is-invalid @enderror value="{{ old('institute_id') }}">
                            <option value="" selected hidden>Select One</option>
                            @forelse($institutes as $institute)
                            <option value="{{$institute->id}}">{{$institute->name}}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('institute')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="address" class=" col-form-label text-start">Campus Address</label>
                        <input type="text" placeholder="Address..." name="address" id="address"
                            @error('address') is-invalid @enderror value="{{ old('address') }}">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="city" class=" col-form-label text-start">City</label>
                        <input type="text" name="city" id="city"
                            @error('city') is-invalid @enderror value="{{ old('city') }}">
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="country" class=" col-form-label text-start">Country</label>
                        <input type="text" name="country" id="country"
                            @error('country') is-invalid @enderror value="{{ old('country') }}">
                        @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6 fs-5">
                        <label for="living_cost" class=" col-form-label text-start">Living Cost</label>
                        <input type="text" name="living_cost" id="living_cost"
                            @error('living_cost') is-invalid @enderror value="{{ old('living_cost') }}">
                        @error('living_cost')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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

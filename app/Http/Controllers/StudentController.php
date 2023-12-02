<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use DataTables;
use Auth;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function studentAdd(){
        return view('backend.pages.student.student_add');
    }
    public function studentInformationSave(Request $request){
        // return $request;
        $validator = $request->validate([
            'salutation' => ['required'],
            'first_name' => ['required','string'],
            'phone' => ['required', 'unique:students'],
            'last_name' => ['required','string'],
            'email' => ['required', 'string', 'email', 'unique:students'],
            'gender' => ['required'],
            'marital_status' => ['required'],
            'country_of_birth' => ['required', 'string'],
            'passport_number' => ['required', 'string'],
            'country_of_passport' => ['required', 'string'],
            'passport_expiry_date' => ['required', 'date'],
            'current_student_location' => ['required', 'string'],
            'age_eighteen_or_not' => ['required'],
            'street_address' => ['required'],
            'city' => ['required', 'string'],
            'postal_code' => ['required'],
            'country' => ['required', 'string']
        ]);
        // if ($validator->fails()) {
        //     return back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        // return $request;
        $student = new Student();
        $student->salutation = $request->salutation;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->phone = $request->phone;
        $student->language = $request->language;
        $student->gender = $request->gender;
        $student->marital_status = $request->marital_status;
        $student->country_of_birth = $request->country_of_birth;
        $student->passport_number = $request->passport_number;
        $student->country_of_passport = $request->country_of_passport;
        $student->passport_expiry_date = $request->passport_expiry_date;
        $student->current_student_location = $request->current_student_location;
        $student->age_eighteen_or_not = $request->age_eighteen_or_not;
        $student->street_address = $request->street_address;
        $student->address_line_two = $request->address_line_two;
        $student->city = $request->city;
        $student->postal_code = $request->postal_code;
        $student->country = $request->country;
        $student->state = $request->state;
        $student->recruiter = Auth::user()->id;
        $student->save();
        $student = Student::find($student->id);
        $student->student_id = 'SID'.$student->id;
        $student->update();

        toast('Student save successfully!','success')->autoClose(3000);
        return back();
    }
    public function allStudent(){
        return view('backend.pages.student.student_all');
    }
    public function allStudentTable(Request $request){
        if ($request->ajax()) {
            $data = Student::orderBy('first_name', 'asc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                    ->addColumn('full_name', function($student){
                        $fullName = $student->first_name.' '.$student->last_name;
                        return $fullName;
                    })
                    ->editColumn('recruiter', function($student){
                        $user = User::find($student->recruiter);
                        return $user->name;
                    })
                    ->addColumn('action', function($student){
                        $btn = '<a class="btn btn-sm btn-danger" target="_blank"
                        href=""><i class="fa-solid fa-square-xmark"></i></a>&nbsp;';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }
}

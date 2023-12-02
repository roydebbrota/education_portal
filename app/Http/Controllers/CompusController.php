<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\Campus;
use DataTables;

class CompusController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function campusAdd(){
        $institutes = Institute::all();
        return view('backend.pages.campus.campus_add')->with(compact('institutes'));
    }
    public function campusSave(Request $request){
        $validator = $request->validate([
            'name' => ['required', 'string'],
            'institute_id' => ['required'],
            'address' => ['required'],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'living_cost' => ['required']
        ],[
            'name.required'=> 'Required',
            'institute_id.required'=> 'Required',
            'address.required'=> 'Required',
            'city.required'=> 'Required',
            'country.required'=> 'Required',
            'living_cost.required'=> 'Required',
        ]);
        // return $request;
        $campus = new Campus();
        $campus->name = $request->name;
        $campus->institute_id = $request->institute_id;
        $campus->address = $request->address;
        $campus->city = $request->city;
        $campus->country = $request->country;
        $campus->living_cost = $request->living_cost;
        $campus->save();
        toast('Institute save successfully!','success')->autoClose(3000);
        return back();
    }
    public function allCampus(){
        return view('backend.pages.campus.campus_all');
    }
    public function allCampusTable(Request $request){
        if ($request->ajax()) {
            $data = Campus::orderBy('name', 'asc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                    ->editColumn('institute_id', function($campus){
                        $institute = Institute::find($campus->institute_id);
                        return $institute->name;
                    })
                    ->addColumn('action', function($campus){
                        $btn = '<a class="btn btn-sm btn-danger" target="_blank"
                        href="'.route('edit.campus.info', $campus->id).'"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }
    public function editCampusInfo($campus_id)
    {
        $institutes = Institute::all();
        $campus = Campus::find($campus_id);
        return view('backend.pages.campus.campus_edit')->with(compact('institutes', 'campus'));
    }
    public function updateCampusInfo(Request $request){
        $validator = $request->validate([
            'name' => ['required', 'string'],
            'institute_id' => ['required'],
            'address' => ['required'],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'living_cost' => ['required']
        ],[
            'name.required'=> 'Required',
            'institute_id.required'=> 'Required',
            'address.required'=> 'Required',
            'city.required'=> 'Required',
            'country.required'=> 'Required',
            'living_cost.required'=> 'Required',
        ]);
        // return $request;
        $campus = Campus::find($request->id);
        $campus->name = $request->name;
        $campus->institute_id = $request->institute_id;
        $campus->address = $request->address;
        $campus->city = $request->city;
        $campus->country = $request->country;
        $campus->living_cost = $request->living_cost;
        $campus->update();
        toast('Institute update successfully!','success')->autoClose(3000);
        return back();
    }
}

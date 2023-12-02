<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eligibility;
use DataTables;
use auth;

class EligibilityController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function eligibilityAdd(){
        return view('backend.pages.eligibility.eligibility_add');
    }
    public function eligibilitySave(Request $request){
        $validator = $request->validate([
            'name' => ['required', 'string']
        ],[
            'name.required'=> 'Required',
        ]);
        // return $request;
        $eligibility = new Eligibility();
        $eligibility->name = $request->name;
        $eligibility->save();
        toast('Eligibility name save successfully!','success')->autoClose(3000);
        return back();
    }
    public function allEligibility(){
        return view('backend.pages.eligibility.eligibility_all');
    }
    public function allEligibilityTable(Request $request){
        if ($request->ajax()) {
            $data = Eligibility::orderBy('name', 'asc')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                    ->addColumn('action', function($eligibility){
                        $btn = '<a class="btn btn-sm btn-danger" target="_blank"
                        href="'.route('edit.eligibility.info', $eligibility->id).'"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }
    public function editEligibilityInfo($id){
        $eligibility = Eligibility::find($id);
        return view('backend.pages.eligibility.eligibility_edit')->with(compact('eligibility'));
    }
    public function eligibilityUpdate(Request $request){
        $eligibility = Eligibility::find($request->id);
        $eligibility->name = $request->name;
        $eligibility->update();
        toast('Eligibility name update successfully!','success')->autoClose(3000);
        return back();
    }

}

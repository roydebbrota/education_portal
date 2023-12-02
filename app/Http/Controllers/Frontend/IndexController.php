<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Degree;
use App\Models\ChamberDayTime;
use App\Models\PublicationHistory;
use App\Models\JobHistory;
use App\Models\PackageItem;
use App\Models\PublicHoliday;
use App\Models\ChamberClosed;
use DB;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index(){
        return redirect()->route('login');
    }
    


}

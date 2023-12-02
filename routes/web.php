<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\CompusController;
use App\Http\Controllers\EligibilityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('home');



Route::middleware(['admin'])->group(function () {
    Route::get('/admin-dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/student-add', [StudentController::class, 'studentAdd'])->name('student.add');
    Route::post('/student-information-save', [StudentController::class, 'studentInformationSave'])->name('student.information.save');
    Route::get('/student-all', [StudentController::class, 'allStudent'])->name('student.all');
    Route::get('/student-all-table', [StudentController::class,'allStudentTable'])->name('all.student.table');
    Route::get('/member-all-table', [MemberController::class,'allMemberTable'])->name('member.all');
    Route::get('/member-details/{member_id}', [MemberController::class, 'memberDetails'])->name('member.details.view');
    Route::get('/share-details/{member_id}', [ShareController::class, 'shareDetails'])->name('share.details.view');

//institute
    Route::get('/institute-add', [InstituteController::class, 'instituteAdd'])->name('institute.add');
    Route::post('/institute-save', [InstituteController::class, 'instituteSave'])->name('institute.information.save');
    Route::get('/institute-all', [InstituteController::class, 'allInstitute'])->name('institute.all');
    Route::get('/institute-all-table', [InstituteController::class,'allInstituteTable'])->name('all.institute.table');
    Route::get('/edit-institute-info/{institute_id}', [InstituteController::class, 'editInstitute'])->name('edit.institute.info');
    Route::post('/edit-institute-info-update', [InstituteController::class, 'updateInstitute'])->name('institute.information.update');

    //Campuses
    Route::get('/campus-add', [CompusController::class, 'campusAdd'])->name('campus.add');
    Route::post('/campus-save', [CompusController::class, 'campusSave'])->name('campus.information.save');
    Route::get('/campus-all', [CompusController::class, 'allCampus'])->name('campus.all');
    Route::get('/campus-all-table', [CompusController::class,'allCampusTable'])->name('all.campus.table');
    Route::get('/edit-campus-info/{campus_id}', [CompusController::class, 'editCampusInfo'])->name('edit.campus.info');
    Route::post('/update-campus-info', [CompusController::class, 'updateCampusInfo'])->name('campus.information.update');
    
    
    //Eligibilities
    Route::get('/eligibility-add', [EligibilityController::class, 'eligibilityAdd'])->name('eligibility.add');
    Route::post('/eligibility-save', [EligibilityController::class, 'eligibilitySave'])->name('eligibility.information.save');
    Route::get('/eligibility-all', [EligibilityController::class, 'allEligibility'])->name('eligibility.all');
    Route::get('/eligibility-all-table', [EligibilityController::class,'allEligibilityTable'])->name('all.eligibility.table');
    Route::get('/edit-eligibility-info/{eligibility_id}', [EligibilityController::class, 'editEligibilityInfo'])->name('edit.eligibility.info');
    Route::post('/eligibility-update', [EligibilityController::class, 'eligibilityUpdate'])->name('eligibility.information.update');


    Route::get('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPasswordPage'])->name('password.change');
    Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'changePassword'])->name('password.change');

});

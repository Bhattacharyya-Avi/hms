<?php


use App\Http\Controllers\TestController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\EmployeeloginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
// front page
Route::get('/',[CustomController::class,'index'])->name('index');
// user
Route::get('/login',[CustomController::class,'login'])->name('user.login');
Route::get('/signup',[CustomController::class,'signup'])->name('user.signup');
Route::post('/user/open-account',[CustomController::class,'openaccount'])->name('open.account');
Route::get('/dashboard',[CustomController::class,'dashboard'])->name('user.dashboard');
Route::get('/appointment',[CustomController::class,'bookAppointment'])->name('user.appointment_book');
Route::post('/appointment/book',[CustomController::class,'submitappointment'])->name('user.appointment.submit');
Route::get('/history',[CustomController::class,'appointmenthistory'])->name('user.appointment_history');
Route::get('/profile',[CustomController::class,'profile'])->name('user.profile');
Route::get('/payment',[CustomController::class,'payment'])->name('user.payment');

// employee login
Route::get('/employee-login',[EmployeeloginController::class,'employeelogin'])->name('employee_login');

//Doctor
Route::get('/doctor/dashboard',[DoctorController::class,'dashboard'])->name('doctor.dashboard');
Route::get('/doctor/profile',[DoctorController::class,'profile'])->name('doctor.profile');
Route::get('/doctor/Appointmentlist',[DoctorController::class,'appointmentlist'])->name('doctor.appointmentlist');
Route::get('/doctor/otlist',[DoctorController::class,'otlist'])->name('doctor.otlist');
Route::get('/doctor/addot',[DoctorController::class,'addotlist'])->name('doctor.add_ot_list');
Route::post('/doctor/addot/form',[DoctorController::class,'addotlistform'])->name('doctor.add.ot.form');

// nurse
Route::get('/nurse-dashboard',[NurseController::class,'dashboard'])->name('nurse.dashboard');
Route::get('/nurse-profile',[NurseController::class,'profile'])->name('nurse.profile');
Route::get('/nurse-otlist',[NurseController::class,'otlist'])->name('nurse.otlist');
Route::get('/nurse-admit_patient',[NurseController::class,'admitpatient'])->name('nurse.admit');
Route::get('/nurse-bedinfo',[NurseController::class,'bedinformation'])->name('nurse.bedinfo');
Route::get('/nurse-admited_patient',[NurseController::class,'admitedpatient'])->name('nurse.admited_patient_list');

// accountent
Route::get('/accountant',[AccountantController::class,'test'])->name('nurse.dashboard');
Route::get('/paymentlistin',[AccountantController::class,'accept_indor_payment'])->name('nurse.dashboard');
Route::get('/paymentlistout',[AccountantController::class,'accept_outdor_payment'])->name('nurse.dashboard');

//Admin
Route::get('/admin',[AdminController::class,'testadmin'])->name('admin.dashboard');
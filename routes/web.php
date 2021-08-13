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
Route::post('/nurse/admit_patient',[NurseController::class,'admit_patient'])->name('nurse.admit_patient');
Route::get('/nurse-bedinfo',[NurseController::class,'bedinformation'])->name('nurse.bedinfo');
Route::get('/nurse-admited_patient',[NurseController::class,'admitedpatient'])->name('nurse.admited_patient_list');

// accountent
Route::get('/accountant/dashboard',[AccountantController::class,'dashboard'])->name('accountant.dashboard');
Route::get('/accountant/profile',[AccountantController::class,'profile'])->name('accountant.profile');
Route::get('/paymentlistin',[AccountantController::class,'accept_indor_payment'])->name('accountant.indoorpay');
Route::get('/paymentlistout',[AccountantController::class,'accept_outdor_payment'])->name('accountant.outdoorpay');

//Admin
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/employee-list',[AdminController::class,'stafflist'])->name('admin.stafflist');
Route::post('/admin/add-staff',[AdminController::class,'add_staff'])->name('admin.add_staff');
Route::get('/admin/appointmentlist',[AdminController::class,'appointmentlist'])->name('admin.appointmentlist');
Route::get('/admin/OTlist',[AdminController::class,'OTlist'])->name('admin.OTlist');
Route::get('/admin/payment/indoor',[AdminController::class,'indoorpay'])->name('admin.indoor');
Route::get('/admin/payment/outdoor',[AdminController::class,'outdoorpay'])->name('admin.outdoor');
Route::get('/admin/information/bed',[AdminController::class,'bedinfo'])->name('admin.bedinfo');
Route::post('/admin/add_bed',[AdminController::class,'addbed'])->name('admin.addbed');





/*
things need to do
want to show only doctors name from Staff module
in appoitment table it shows id in place of name


*/
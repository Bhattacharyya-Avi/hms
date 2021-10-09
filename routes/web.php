<?php

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
Route::get('/user/login',[CustomController::class,'login'])->name('user.login');
Route::post('/user/login/post',[CustomController::class,'loginpost'])->name('user.login.post');
Route::get('/user/signup',[CustomController::class,'signup'])->name('user.signup');
Route::post('/open-account',[CustomController::class,'openaccount'])->name('open.account');
Route::group(['prefix'=>'/user','middleware'=>'auth'],function (){
    Route::get('/logout',[CustomController::class,'logout'])->name('user.logout');
    Route::get('/dashboard',[CustomController::class,'dashboard'])->name('user.dashboard');
    Route::get('/appointment',[CustomController::class,'bookAppointment'])->name('user.appointment_book');
    Route::post('/appointment/book',[CustomController::class,'submitappointment'])->name('user.appointment.submit');
    Route::get('/history',[CustomController::class,'appointmenthistory'])->name('user.appointment_history');
    Route::get('/appointment/delete{id}',[CustomController::class,'appointmentDelete'])->name('user.appointment.delete');
    Route::get('/appointment/report{id}',[CustomController::class,'appointmentReport'])->name('user.appointment.report');
    Route::get('/profile',[CustomController::class,'profile'])->name('user.profile');
    Route::put('/profile/update/{id}',[CustomController::class,'profileUpdate'])->name('user.profile.update');
    Route::get('/payment',[CustomController::class,'payment'])->name('user.payment');
});
//Employee login
Route::get('/admin-login',[EmployeeloginController::class,'employeelogin'])->name('employee_login');
Route::post('/admin-login/post',[EmployeeloginController::class,'employeeloginPost'])->name('employee_login.post');
Route::group(['middleware'=>'auth'],function (){
//    employee logout
    Route::get('/logout',[EmployeeloginController::class,'logout'])->name('employee.logout');
//Doctor
    Route::group(['prefix'=>'/doctor','middleware'=>['roledoctor']],function (){
        Route::get('/dashboard',[DoctorController::class,'dashboard'])->name('doctor.dashboard');
        Route::get('/logout',[DoctorController::class,'logout'])->name('doctor.logout');
        Route::get('/profile',[DoctorController::class,'profile'])->name('doctor.profile');
        Route::get('/profile/update/{id}',[DoctorController::class,'profileUpdate'])->name('doctor.profile.update');
        Route::get('/Appointmentlist',[DoctorController::class,'appointmentlist'])->name('doctor.appointmentlist');
        Route::get('{id}/appointment/delete',[DoctorController::class,'appointmentCancel'])->name('doctor.appointment.cancel');
        Route::get('{id}/appointment/report',[DoctorController::class,'appointmentReport'])->name('doctor.appointment.report');
        Route::post('{id}/appointment/report/post',[DoctorController::class,'appointmentReportPost'])->name('doctor.appointment.report.post');
        Route::get('/otlist',[DoctorController::class,'otlist'])->name('doctor.otlist');
        Route::get('/addot',[DoctorController::class,'addotlist'])->name('doctor.add_ot_list');
        Route::post('/addot/form',[DoctorController::class,'addotlistform'])->name('doctor.add.ot.form');
        Route::get('/addot/delete/{id}',[DoctorController::class,'OTdelete'])->name('doctor.delete.ot');
        Route::get('/addot/edit/{id}',[DoctorController::class,'OTEdit'])->name('doctor.edit.ot');
        Route::put('/addot/update/{id}',[DoctorController::class,'OTUpdate'])->name('doctor.update.ot');
        Route::get('/admidtpatient/note',[DoctorController::class,'admit_relese'])->name('doctor.admitrelese.note');
        Route::get('{id}/admidtedpatient/note',[DoctorController::class,'admit_relese_note'])->name('doctor.admit.relese.note');
        Route::get('/report/test',[DoctorController::class,'reportTest'])->name('doctor.report.test');
    });
// nurse
    Route::group(['prefix'=>'/nurse','middleware'=>['rolenurse']],function (){
        Route::get('/dashboard',[NurseController::class,'dashboard'])->name('nurse.dashboard');
        Route::get('/logout',[NurseController::class,'logout'])->name('nurse.logout');
        Route::get('/profile',[NurseController::class,'profile'])->name('nurse.profile');
        Route::get('/otlist',[NurseController::class,'otlist'])->name('nurse.otlist');
        Route::get('/admit_patient',[NurseController::class,'admitpatient'])->name('nurse.admit');
        Route::post('/admit_patient',[NurseController::class,'admit_patient'])->name('nurse.admit_patient');
        Route::get('/bedinfo',[NurseController::class,'bedinformation'])->name('nurse.bedinfo');
        Route::get('/admited_patient',[NurseController::class,'admitedpatient'])->name('nurse.admited_patient_list');
    });
// accountent
    Route::group(['prefix'=>'/accountant', 'middleware'=>['roleaccountant']],function (){
        Route::get('/dashboard',[AccountantController::class,'dashboard'])->name('accountant.dashboard');
        Route::get('/logout',[AccountantController::class,'logout'])->name('accountant.logout');
        Route::get('/profile',[AccountantController::class,'profile'])->name('accountant.profile');
        Route::get('/paymentlistin',[AccountantController::class,'accept_indor_payment'])->name('accountant.indoorpay');
        Route::get('/paymentlistout',[AccountantController::class,'accept_outdor_payment'])->name('accountant.outdoorpay');
        Route::get('/paymentlistout/{id}/accept',[AccountantController::class,'accept_outdor_accept'])->name('accountant.outdoorpay.accept');
        Route::get('/paymentlistout/{id}/bill',[AccountantController::class,'outdor_bill'])->name('accountant.outdoorpay.bill');
        Route::get('/payment/indoor/{id}/{bill}',[AccountantController::class,'outdoorBill'])->name('accountant.outdoor.bill');
        Route::get('/payment/indoor/release/{id}',[AccountantController::class,'indoorRelease'])->name('accountant.indoor.release');
    });
//Admin
    Route::group(['prefix'=>'/admin','middleware'=>['roleadmin']],function (){

        Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/employee-list',[AdminController::class,'stafflist'])->name('admin.stafflist');
        Route::post('/add-staff',[AdminController::class,'add_staff'])->name('admin.add_staff');
        Route::get('/staff/delete{id}',[AdminController::class,'staffdelete'])->name('admin.staff.delete');
        Route::get('/staff/edit{id}',[AdminController::class,'staffEdit'])->name('admin.staff.edit');
        Route::put('/staff/update{id}',[AdminController::class,'staffUpdate'])->name('admin.staff.update');
        Route::get('/appointmentlist',[AdminController::class,'appointmentlist'])->name('admin.appointmentlist');
        Route::get('/OTlist',[AdminController::class,'OTlist'])->name('admin.OTlist');
        Route::get('/payment/indoor',[AdminController::class,'indoorpay'])->name('admin.indoor');
        Route::get('/payment/outdoor',[AdminController::class,'outdoorpay'])->name('admin.outdoor');
        Route::get('/information/bed',[AdminController::class,'bedinfo'])->name('admin.bedinfo');
        Route::post('/add_bed',[AdminController::class,'addbed'])->name('admin.addbed');
        Route::get('/bed/delete/{id}',[AdminController::class,'beddelete'])->name('admin.delete.bed');
        Route::get('/bed/edit/{id}',[AdminController::class,'bededit'])->name('admin.edit.bed');
        Route::put('/bed/update/{id}',[AdminController::class,'bedupdate'])->name('admin.update.bed');
        Route::get('/slot/list',[AdminController::class,'slotlist'])->name('admin.slotlist');
        Route::post('/slot/add',[AdminController::class,'slotadd'])->name('admin.slotadd');
        Route::get('/slot/delete{id}',[AdminController::class,'SlotDelete'])->name('admin.slot.delete');
        Route::get('/slot/edit{id}',[AdminController::class,'SlotEdit'])->name('admin.slot.edit');
        Route::put('/slot/Update{id}',[AdminController::class,'SlotUpdate'])->name('admin.slot.update');
        Route::get('/doctor/list',[AdminController::class,'doctorlist'])->name('admin.doctor list');
        Route::get('/{id}/appointment/details',[AdminController::class,'appointlist'])->name('appointlist');
        Route::get('/services',[AdminController::class,'services'])->name('services');
        Route::post('/services/add',[AdminController::class,'serviceadd'])->name('admin.serviceadd');
        Route::get('/services/delete{id}',[AdminController::class,'serviceDelete'])->name('admin.service.delete');
        Route::get('/services/edit{id}',[AdminController::class,'serviceEdit'])->name('admin.service.edit');
        Route::put('/services/update{id}',[AdminController::class,'serviceUpdate'])->name('admin.service.Update');
        Route::get('/Chamber/list',[AdminController::class,'chamberlist'])->name('chamberlist');
        Route::post('/Chamber/add',[AdminController::class,'chamberadd'])->name('chamberadd');
        Route::get('/Chamber/delete{id}',[AdminController::class,'chamberDelete'])->name('chamber.delete');
        Route::get('/Chamber/edit{id}',[AdminController::class,'chamberEdit'])->name('chamber.edit');
        Route::put('/Chamber/update{id}',[AdminController::class,'chamberUpdate'])->name('chamber.update');
        Route::get('/admited_patient/list',[AdminController::class,'admitedpatient'])->name('admin.admited.patient');
        Route::get('{id}/admited_patient/release_note',[AdminController::class,'releaseNote'])->name('admin.admited.release');
        Route::get('{id}/admited_patient/status/update',[AdminController::class,'releaseUpdate'])->name('admin.admited.status.update');
        Route::get('/operation/list',[AdminController::class,'operationlist'])->name('admin.operation list');
        Route::post('/add/operation',[AdminController::class,'AddOperation'])->name('admin.operation.add');
        Route::get('/operation/delete/{id}',[AdminController::class,'DeleteOperation'])->name('admin.operation.delete');
        Route::get('/operation/edit/{id}',[AdminController::class,'EditOperation'])->name('admin.operation.edit');
        Route::put('/operation/update/{id}',[AdminController::class,'UpdateOperation'])->name('admin.operation.update');

    });
});





/*
things need to do

-> make validation on employee add area so that room number can unique
->add status field in bed table

*/
/*
 * main work bill making
 * */

<?php
use App\Http\Controllers\CustomController;
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

Route::get('/',[CustomController::class,'index']);
Route::get('/login',[CustomController::class,'login']);
Route::get('/signup',[CustomController::class,'signup']);
Route::get('/dashboard',[CustomController::class,'dashboard']);
Route::get('/appointment',[CustomController::class,'bookAppointment']);
Route::get('/history',[CustomController::class,'appointmenthistory']);
Route::get('/profile',[CustomController::class,'profile']);
Route::get('/payment',[CustomController::class,'payment']);



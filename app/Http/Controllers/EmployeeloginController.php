<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeloginController extends Controller
{
    public function employeelogin()
    {
        return view('employee.employee-login');
    }

    public function employeeloginPost(Request $request)
    {
//      dd($request->all());
        $userinput = $request->except('_token');
//        dd(Auth::attempt($userinput));
        if (Auth::attempt($userinput)) {
//            dd(Auth::attempt($userinput));
            if (auth()->user()->role == 'Admin') {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role == 'Doctor') {
                return redirect()->route('doctor.dashboard');
            } elseif (auth()->user()->role == 'Accountant') {
                return redirect()->route('accountant.dashboard');
            } elseif (auth()->user()->role == 'Nurse') {
                return redirect()->route('nurse.dashboard');
            }
        }
        return redirect()->back()->with('message', 'Incorrect Email or Password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}

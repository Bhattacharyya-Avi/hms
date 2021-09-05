<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeloginController extends Controller
{
    public function employeelogin(){
        return view('employee.employee-login');
    }
    public function employeeloginPost(Request $request){
//      dd($request->all());
        $userinput=$request->except('_token');
//        dd(Auth::attempt($userinput));
        if (Auth::attempt($userinput)){
//            dd(Auth::attempt($userinput));
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('message','Incorrect Email or Password');
    }

    public function doctor_login(){
        return view('employee.doctor.doctor-login');
    }

    public function doctor_loginPost(Request $request){
//        dd($request->all());
        $userinput=$request->except('_token');
//        dd(Auth::attempt($userinput));
        if (Auth::attempt($userinput)){
//            dd(Auth::attempt($userinput));
            return redirect()->route('doctor.dashboard');
        }
        return redirect()->back()->with('message','Incorrect Email or Password');
    }

    public function nurse_login(){
        return view('employee.nurse.nurse-login');
    }

    public function nurse_loginPost(Request $request){
//        dd($request->all());
        $userinput=$request->except('_token');
//        dd(Auth::attempt($userinput));
        if (Auth::attempt($userinput)){
//            dd(Auth::attempt($userinput));
            return redirect()->route('nurse.dashboard');
        }
        return redirect()->back()->with('message','Incorrect Email or Password');
    }

    public function accountant_login(){
        return view('employee.accountant.accountant-login');
    }

    public function accountant_loginPost(Request $request){
//        dd($request->all());
        $userinput=$request->except('_token');
//        dd(Auth::attempt($userinput));
        if (Auth::attempt($userinput)){
//            dd(Auth::attempt($userinput));
            return redirect()->route('accountant.dashboard');
        }
        return redirect()->back()->with('message','Incorrect Email or Password');
    }
}

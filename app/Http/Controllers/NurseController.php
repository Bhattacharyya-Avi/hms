<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function dashboard(){
        return view('employee.nurse.backend.layouts.nurse-dashboard');
    }

    public function profile(){
        return view('employee.nurse.backend.layouts.nurse-profile');
    }

    public function otlist(){
        return view('employee.nurse.backend.layouts.nurse-otlist');
    }

    public function admitpatient(){
        return view('employee.nurse.backend.layouts.nurse-admit');
    }

    public function admitedpatient(){
        return view('employee.nurse.backend.layouts.nurse-admitedpatients');
    }

    public function bedinformation(){
        return view('employee.nurse.backend.layouts.nurse-bedinfo');
    }
}

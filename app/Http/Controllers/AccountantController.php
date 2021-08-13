<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountantController extends Controller
{
    public function dashboard(){
        return view('employee.accountant.backend.layouts.accountant-dashboard');
    }
    public function profile(){
        return view('employee.accountant.backend.layouts.accountant-profile');
    }

    public function accept_indor_payment(){
        return view('employee.accountant.backend.layouts.accountant-indor_payment');
    }

    public function accept_outdor_payment(){
        return view('employee.accountant.backend.layouts.accountant-outdor_payment');
    }
}
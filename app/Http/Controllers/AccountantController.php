<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountantController extends Controller
{
    public function test(){
        return view('employee.accountant.accountant-master');
    }

    public function accept_indor_payment(){
        return view('employee.accountant.backend.layouts.accountant-indor_payment');
    }

    public function accept_outdor_payment(){
        return view('employee.accountant.backend.layouts.accountant-outdor_payment');
    }
}

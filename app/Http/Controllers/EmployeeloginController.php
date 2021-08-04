<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeloginController extends Controller
{
    public function employeelogin(){
        return view('employee.employee-login');
    }
}

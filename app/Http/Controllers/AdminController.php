<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function testadmin(){
        return view('employee.admin.backend.admin-master');
    }
}

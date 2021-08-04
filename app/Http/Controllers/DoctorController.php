<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addot;

class DoctorController extends Controller
{
    public function dashboard(){
        return view('employee.doctor.backend.layout.doc-dashboard');
    }

    public function appointmentlist(){
        return view('employee.doctor.backend.layout.doc-appointmentlist');
    }

    public function profile(){
        return view('employee.doctor.backend.layout.doc-profile');
    }

    public function otlist(){
        return view('employee.doctor.backend.layout.doc-OTlist');
    }

    public function addotlist(){
        return view('employee.doctor.backend.layout.doc-addot');
    }

    public function addotlistform(Request $addotform){
        // dd($addotform->all());
        Addot::create([
            'Patient_name'=>$addotform->Patient_name,
            'time'=>$addotform->time,
            'date'=>$addotform->date
        ]);
        return redirect()->back();
        
    }
    
}

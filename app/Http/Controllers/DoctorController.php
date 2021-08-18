<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addot;

class DoctorController extends Controller
{
    public function dashboard(){
        $ots=Addot::paginate(4);
        return view('employee.doctor.backend.layout.doc-dashboard',compact('ots'));
    }

    public function appointmentlist(){
        return view('employee.doctor.backend.layout.doc-appointmentlist');
    }

    public function profile(){
        return view('employee.doctor.backend.layout.doc-profile');
    }

    public function otlist(){
        $otlists=Addot::paginate(10);
        return view('employee.doctor.backend.layout.doc-OTlist',compact('otlists'));
    }

    public function addotlist(){
        return view('employee.doctor.backend.layout.doc-addot');
    }

    public function addotlistform(Request $addotform){
        // dd($addotform->all());
        Addot::create([
            'doctor_name'=>$addotform->doctor_name,
            'doctor_email'=>$addotform->doctor_email,
            'Patient_name'=>$addotform->Patient_name,
            'time'=>$addotform->time,
            'date'=>$addotform->date
        ]);
        return redirect()->back();
        
    }
    
}

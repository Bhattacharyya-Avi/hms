<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admitpatients;

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

    public function admit_patient(Request $admit){
        // dd($admit->all());
        Admitpatients::create([
            'patient_name'=>$admit->patient_name,
            'doctor_name'=>$admit->doctor_name,
            'patient_email'=>$admit->patient_email,
            'patient_phone'=>$admit->patient_phone,
            'patient_address'=>$admit->patient_address,
            'bed_type'=>$admit->bed_type,
            'bed_number'=>$admit->bed_number,
            'add_note'=>$admit->add_note,
            'admission_date'=>$admit->admission_date,
            'release_date'=>$admit->release_date,
            'admission_time'=>$admit->admission_time
        ]);
        return redirect()->route('nurse.admit');
    }

    public function admitedpatient(){
        return view('employee.nurse.backend.layouts.nurse-admitedpatients');
    }

    public function bedinformation(){
        return view('employee.nurse.backend.layouts.nurse-bedinfo');
    }
}

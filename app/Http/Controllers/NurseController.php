<?php

namespace App\Http\Controllers;

use App\Models\Addot;
use App\Models\Bed;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Admitpatients;
use App\Models\Service;

class NurseController extends Controller
{
    public function dashboard(){
        return view('employee.nurse.backend.layouts.nurse-dashboard');
    }

    public function profile(){
        return view('employee.nurse.backend.layouts.nurse-profile');
    }

    public function otlist(){
        $ots=Addot::paginate(10);
        return view('employee.nurse.backend.layouts.nurse-otlist',compact('ots'));
    }

    public function admitpatient(){
        $bedstype=Bed::all();
        $bedsnum=Bed::all();
        $doctors=Staff:: where('employeetype','Doctor')->get();
        $services=Service::all();
        return view('employee.nurse.backend.layouts.nurse-admit',compact('bedstype','bedsnum','doctors','services'));
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
            'services'=>$admit->services,
            'admission_date'=>$admit->admission_date,
            'release_date'=>$admit->release_date,
            'admission_time'=>$admit->admission_time
        ]);
        return redirect()->route('nurse.admit');
    }

    public function admitedpatient(){
        $details=Admitpatients::paginate(10);

        return view('employee.nurse.backend.layouts.nurse-admitedpatients',compact('details'));
    }

    public function bedinformation(){
        $bedsinfo= Bed::all();
        return view('employee.nurse.backend.layouts.nurse-bedinfo',compact('bedsinfo'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Addot;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function dashboard(){
        $ots=Addot::paginate(4);
        return view('employee.doctor.backend.layout.doc-dashboard',compact('ots'));
    }

    public function appointmentlist(){
        $data=Auth::user()->id;
//        dd($data);
        $appointment=Appointment::where('doctor_id',$data)->get();
//        dd($appointment);
        return view('employee.doctor.backend.layout.doc-appointmentlist',compact('appointment'));
    }

    public function profile(){
        $profile=Auth::user();

        return view('employee.doctor.backend.layout.doc-profile',compact('profile'));
    }

    public function otlist(){
        $otlists=Addot::paginate(10);
        return view('employee.doctor.backend.layout.doc-OTlist',compact('otlists'));
    }

    public function addotlist(){
        $info=Auth::user();
        return view('employee.doctor.backend.layout.doc-addot',compact('info'));
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
        return redirect()->route('doctor.add_ot_list');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

}

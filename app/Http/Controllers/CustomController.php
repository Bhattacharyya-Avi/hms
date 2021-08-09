<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointment;

class CustomController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('backend.layout.login');
    }

    public function signup(){
        return view('backend.layout.signup');
    }

    public function openaccount(Request $openacc){ 
            //dd($openacc->all());
            Patient::create([
                'name'=>$openacc->full_name,
                'address'=>$openacc->address,
                'phone_no'=>$openacc->phone_no,
                'gender'=>$openacc->gender,
                'email'=>$openacc->email,
                'password'=>$openacc->password,
                'confirm_password'=>$openacc->confirm_password

            ]);
            return redirect()->back();
    }

    public function dashboard(){
        return view('backend.layout.dashboard');
    }

    public function bookAppointment(){
        return view('backend.layout.appointment');
    }

    public function submitappointment(Request $appointmentbook){
        //dd($appointmentbook-> all());
        //field name db ||| field name of form
        Appointment::create([
            'full_name'=>$appointmentbook->full_name,
            'phone_no'=>$appointmentbook->phone_no,
            'email'=>$appointmentbook->email,
            'doctorname'=>$appointmentbook->doctorname,
            'appointmentfee'=>$appointmentbook->appointmentfee,
            'date'=>$appointmentbook->date,
            'time'=>$appointmentbook->time
        ]);
        return redirect()->back();
    }

    public function appointmenthistory(){
        return view('backend.layout.history');
    }

    public function profile(){
        return view('backend.layout.profile');
    }

    public function payment(){
        return view('backend.layout.payment');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;

class CustomController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('backend.layout.login');
    }

    public function loginpost(Request $request){
        $userinput=$request->except('_token');
//        dd($userinput);
        if (Auth::attempt($userinput)){
//            dd(Auth::attempt($userinput));
            return redirect()->route('user.dashboard');
        }
        return redirect()->back()->with('message','Incorrect Email or Password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function signup(){
        return view('backend.layout.signup');
    }

    public function openaccount(Request $openacc){
//            dd($openacc->all());
        $openacc->validate([
           'full_name'=>'required',
            'address'=>'required',
            'phone_no'=>'required',
            'gender'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5',
        ]);
            User::create([
                'name'=>$openacc->full_name,
                'address'=>$openacc->address,
                'phone_no'=>$openacc->phone_no,
                'gender'=>$openacc->gender,
                'email'=>$openacc->email,
                'password'=>bcrypt($openacc->password)

            ]);
            return redirect()->back()->with('success','User Registration Successful ');
    }

    public function dashboard(){
        return view('backend.layout.dashboard');
    }

    public function bookAppointment(){
        // $doctors=Staff:: all();
        $doctors=User:: where('role','Doctor')->get(); // for only showing the type of doctor
        $slots=Slot::all();
        $data=Auth::user();
        return view('backend.layout.appointment',compact('doctors','slots','data'));
    }

    public function submitappointment(Request $appointmentbook){
//        dd($appointmentbook-> all());
        //field name db ||| field name of form
        Appointment::create([
            'full_name'=>$appointmentbook->full_name,
            'phone_no'=>$appointmentbook->phone_no,
            'email'=>$appointmentbook->email,
            'user_id'=>Auth::user()->id,
            'doctor_id'=>$appointmentbook->doctorname,
            'appointmentfee'=>$appointmentbook->appointmentfee,
            'date'=>$appointmentbook->date,
            'time'=>$appointmentbook->time
        ]);
        return redirect()->back();
    }

    public function appointmenthistory(){
        $data=Auth::user()->id;
//        dd($data);
        $appointment=Appointment::where('user_id',$data)->get();
//        dd($appointment);
        return view('backend.layout.history',compact('appointment'));
    }

    public function profile(){
        $profile=Auth::user();
//        dd($profile);
        return view('backend.layout.profile',compact('profile'));
    }

    public function payment(){
        return view('backend.layout.payment');
    }
}

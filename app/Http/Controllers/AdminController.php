<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Bed;
use App\Models\Appointment;
use App\Models\Addot;



class AdminController extends Controller
{
    public function dashboard(){
        return view('employee.admin.backend.layouts.admin-dashboard');
    }

    public function stafflist(){
        $employees=Staff::all();
        return view('employee.admin.backend.layouts.admin-staff_list',compact('employees'));
    }

    public function add_staff(Request $addstaff){
        //dd($addstaff->all());
        Staff::create([
            'employee_name'=>$addstaff->employee_name,
            'employee_address'=>$addstaff->employee_address,
            'phone_no'=>$addstaff->phone_no,
            'email'=>$addstaff->email,
            'password'=>$addstaff->password,
            'employeetype'=>$addstaff->employeetype
        ]);
        return redirect()->back();
    }

    public function appointmentlist(){
        // $appointment=Appointment::all();
        $appointment=Appointment::paginate(10);
        // dd($appointment->all());
        return view('employee.admin.backend.layouts.admin-appointment_list', compact('appointment'));
    }

    public function OTlist(){
        $otlist = Addot::all();
        // dd($otlist->all());
        return view('employee.admin.backend.layouts.admin-OT_list',compact('otlist'));
    }

    public function indoorpay(){
        return view('employee.admin.backend.layouts.admin-indoor_payment');
    }

    public function outdoorpay(){
        return view('employee.admin.backend.layouts.admin-outdoor_payment');
    }

    public function bedinfo(){
        return view('employee.admin.backend.layouts.admin-bed');
    }

    public function addbed(Request $addbed){
        // dd($addbed->all());
        Bed::create([
            'bed_number'=>$addbed->bed_number,
            'bed_type'=>$addbed->bed_type,
            'bed_status'=>$addbed->bed_status,
            'bed_description'=>$addbed->bed_description,
            'bed_cost'=>$addbed->bed_cost
        ]);
        return redirect()->back();
    }
    
}

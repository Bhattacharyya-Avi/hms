<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Bed;
use App\Models\Appointment;
use App\Models\Addot;
use App\Models\Admitpatients;
use App\Models\Admitpatients_service;
use App\Models\Chamber;
use App\Models\Service;
use PhpParser\Builder\Function_;

class AdminController extends Controller
{
    public function dashboard(){
        return view('employee.admin.backend.layouts.admin-dashboard');
    }

    public function stafflist(){
        $employees=Staff::paginate(10);
        $chambers= Chamber::all();
        return view('employee.admin.backend.layouts.admin-staff_list',compact('employees','chambers'));
    }

    public function add_staff(Request $addstaff){
        //dd($addstaff->all());
        Staff::create([
            'employee_name'=>$addstaff->employee_name,
            'employee_address'=>$addstaff->employee_address,
            'phone_no'=>$addstaff->phone_no,
            'email'=>$addstaff->email,
            'password'=>$addstaff->password,
            'employeetype'=>$addstaff->employeetype,
            'employee_room'=>$addstaff->employeeroom
        ]);
        return redirect()->back();
    }

    public function appointmentlist(){

        // $appointment=Appointment::all();
        $appointments=Appointment::with('staff')->get();
        // dd($appointments);

        // dd($appointments);
        return view('employee.admin.backend.layouts.admin-appointment_list', compact('appointments'));
    }

    public function OTlist(){
        $otlist = Addot::paginate(10);
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
        $bedsinfo = Bed::paginate(10);
        return view('employee.admin.backend.layouts.admin-bed',compact('bedsinfo'));
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

    public function slotlist(){
        $slots=Slot::paginate(10);
        return view('employee.admin.backend.layouts.admin-slot',compact('slots'));
    }

    public function slotadd(Request $slots){
        Slot::create([
            'slot_name'=>$slots->slot_name,
            'slot_start'=>$slots->start_time,
            'slot_end'=>$slots->End_time,
        ]);
        return redirect()->back();
    }

    public function doctorlist(){
//        $doctors= Staff::all();
        $doctors=Staff::where('employeetype','Doctor')->get();
        return view('employee.admin.backend.layouts.admin-doctorlist',compact('doctors'));
    }

    public function appointlist($id){
        $appointment_details=Appointment::where('staff_id',$id)->get();
        $doctor_name = Staff::where('id',$id)->first();

        return view('employee.admin.backend.layouts.admin-appointment-details',compact('appointment_details','doctor_name'));
    }

    public function services(){
        $services=Service::paginate(10);
        return view('employee.admin.backend.layouts.admin-service',compact('services'));
    }

    public function serviceadd(Request $service){
        Service::create([
            'service_name'=>$service->service_name,
            'service_description'=>$service->service_description,
            'service_cost'=>$service->service_cost
        ]);
        return redirect()->back();
    }

    public function chamberlist(){
        $chambers=Chamber::paginate(10);
        return view('employee.admin.backend.layouts.admin-chamber',compact('chambers'));
    }

    public Function chamberadd(Request $chamber){
        Chamber::create([
            'chamber_number'=>$chamber->chamber_number,
            'chamber_discription'=>$chamber->chamber_description,
            'chamber_status'=>$chamber->chamber_status
        ]);
        return redirect()->back();
    }

    public function admitedpatient(){
        $details=Admitpatients::with('admitService')->paginate(10);
      
        return view('employee.admin.backend.layouts.admin-admitedpatient',compact('details'));
    }

}

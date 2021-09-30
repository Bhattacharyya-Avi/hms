<?php

namespace App\Http\Controllers;

use App\Models\Admitpatients;
use App\Models\Appointment;
use App\Models\Operation;
use App\Models\User;
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

    public function appointmentCancel($id){
//        dd($id);
        Appointment::find($id)->update([
            'status'=>'Cancel by doctor'
        ]);
        return redirect()->back()->with('message','Appointment updated!!');
    }

    public function appointmentReport($id)
    {
        $info=Appointment::find($id);

        return view('employee.doctor.backend.layout.doc-report',compact('info'));
    }

    public function appointmentReportPost(Request $request,$id)
    {
//        dd($request->all());
       $report=Appointment::find($id);
       $report->update([
            'report'=>$request->report
       ]);

        return redirect()->route('doctor.appointmentlist');
    }

    public function profile(){
        $profile=Auth::user();

        return view('employee.doctor.backend.layout.doc-profile',compact('profile'));
    }

    public function profileUpdate(Request $request,$id){
            $profile=User::find($id);
//        dd($profile);
            $profile->update([
                'name'=>$request->name,
                'phone_no'=>$request->phone_no,
                'gender'=>$request->gender,
                'address'=>$request->address
            ]);
            return redirect()->route('doctor.profile')->with('message','Information updated');

    }

    public function otlist(){
        $otlists=Addot::paginate(10);
        return view('employee.doctor.backend.layout.doc-OTlist',compact('otlists'));
    }

    public function addotlist(){
        $info=Auth::user();
        $operations=Operation::all();
        $patients=Admitpatients::where('Status','Admitted')->get();
        return view('employee.doctor.backend.layout.doc-addot',compact('info', 'operations','patients'));
    }

    public function addotlistform(Request $addotform){
//         dd($addotform->all());
        Addot::create([
            'doctor_name'=>$addotform->doctor_name,
            'doctor_email'=>$addotform->doctor_email,
            'operation_name'=>$addotform->operation_name,
            'Patient_name'=>$addotform->Patient_name,
            'time'=>$addotform->time,
            'date'=>$addotform->date
        ]);
        return redirect()->route('doctor.add_ot_list');

    }
    public function OTdelete($id){
        $OT=Addot::find($id);
        if ($OT){
            $OT->delete();
            return redirect()->back()->with('message','OT information deleted successfully');
        }
        return redirect()->back()->with('message','Information not found');
    }

    public function OTEdit($id){
        $ot=Addot::find($id);
        return view('employee.doctor.backend.layout.doc-editot',compact('ot'));
    }

    public function OTUpdate(Request $request,$id){
        $ot=Addot::find($id);
        $ot->update([
            'doctor_name'=>$request->doctor_name,
            'doctor_email'=>$request->doctor_email,
            'Patient_name'=>$request->Patient_name,
            'time'=>$request->time,
            'date'=>$request->date,
            'status'=>$request->ot_status
        ]);
        return redirect()->route('doctor.otlist')->with('message','OT updated successfully.');
    }
    public function admit_relese(){
        $data=Auth::user()->id;
//        dd($data);
        $admit=Admitpatients::where('doctor_id',$data)->get();
        // dd($admit);
        return view('employee.doctor.backend.layout.doctor-admitedpatient', compact('admit'));
    }

    public function admit_relese_note($id)
    {
//        dd($id);
        $notes=Admitpatients::find($id);
        return view('employee.doctor.backend.layout.doctor-release', compact('notes'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

}

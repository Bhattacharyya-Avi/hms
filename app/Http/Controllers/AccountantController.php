<?php

namespace App\Http\Controllers;

use App\Models\Addot;
use App\Models\Admitpatients;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountantController extends Controller
{
    public function dashboard(){
        return view('employee.accountant.backend.layouts.accountant-dashboard');
    }
    public function profile(){
        return view('employee.accountant.backend.layouts.accountant-profile');
    }

    public function accept_indor_payment(){
        $data = Admitpatients::with(['user:id,name','bed','service'])->where('status','Admitted')->get();
        return view('employee.accountant.backend.layouts.accountant-indor_payment',compact('data'));
    }

    public function accept_outdor_payment(){
        $payments=Payment::where('appointment status','Active')->get();

        return view('employee.accountant.backend.layouts.accountant-outdor_payment',compact('payments'));
    }

    public function outdor_bill($id)
    {
//        dd($id);
        $info=Payment::find($id);
        return view('employee.accountant.backend.layouts.accountant-out_bill_download',compact('info'));
    }

    public function outdoorBill($id,$total)
    {
//        dd($total);
//        dd($id);
        $info=Admitpatients::find($id);
//        dd($info);
        return view('employee.accountant.backend.layouts.accountant-in_bill_download',compact('info','total'));
    }

    public function indoorRelease($id)
    {
//        dd($id);
    }

    public function accept_outdor_accept($id)
    {
//        dd($id);
        Payment::find($id)->update([
            'payment_status'=>'Paid'
        ]);
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}

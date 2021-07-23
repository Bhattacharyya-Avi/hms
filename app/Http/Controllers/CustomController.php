<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function dashboard(){
        return view('backend.layout.dashboard');
    }

    public function bookAppointment(){
        return view('backend.layout.appointment');
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

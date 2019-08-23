<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DoctorController extends Controller
{
   
    public function index()
    {
        return view('Doctor.index');
    }

    public function profile()
    {
        return view('Doctor.profile');
    }

    public function notification()
    {
        return view('Doctor.notification');
    }

    public function patient()
    {
        return view('Doctor.patientlist');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PatientController extends Controller
{
   
    public function index()
    {
        return view('Patient.index');
    }

    public function profile()
    {
        return view('Patient.profile');
    }

    public function notification()
    {
        return view('Patient.notification');
    }
    
}



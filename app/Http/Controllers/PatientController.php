<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Reg;
use Illuminate\Http\Request;


class PatientController extends Controller
{
   
    public function index()
    {
        $doctors = Doctor::all();
        $users = Reg::all();
        return view('Patient.index', compact(['doctors','users']));
    }

    public function profile()
    {
        return view('Patient.profile');
    }

    public function notification()
    {
        return view('Patient.notification');
    }

    public function archive()
    {
        return view('Patient.archive');
    }
    
}



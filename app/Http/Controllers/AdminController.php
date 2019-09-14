<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Reg;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function notification()

    {
        $notificationList = Doctor::where('status', NULL)
                            ->get();
        return view('admin.notification', ['notification'=> $notificationList]);
    }

    public function patient(){

        $patientList = User::all();
        return view('admin.patientList', ['patient'=> $patientList]);
    }

    public function doctor(){

        $doctorList = Doctor::all();
        return view('admin.doctorList', ['doctor'=> $doctorList]);
    }

    public function gallery()
    {
        return view('admin.gallery');
    }
    public function todo()
    {
        return view('admin.todo_list');
    }

}

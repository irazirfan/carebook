<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function notification()
    {
        return view('admin.notification');
    }

    public function patient()
    {
        return view('admin.patientlist');
    }

    public function doctor()
    {
        return view('admin.doctorlist');
    }

    public function technician()
    {
        return view('admin.technicianlist');
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

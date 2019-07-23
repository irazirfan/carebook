<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reg;
use App\Doctor;
use App\Tech;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function signup()
    {
        return view('signup');
    }
    public function store(Request $request)
    {
        $reg  = new Reg([
          'firstname' => $request->get('firstname'),
          'lastname' => $request->get('lastname'),
          'eamil' => $request->get('email'),
          'password' => $request->get('password'),
          'address' => $request->get('address'),
          'phone' => $request->get('phone'),
          'gender' => $request->get('gender')
        ]);
        Reg::create($request->all());
        //dd($request->all());
        $usertype = $request->get('usertype');
        if ($usertype == 'Doctor') {
            $doctor = new Doctor([
                'eamil' => $request->get('email'),
                'bmdc' => $request->get('bmdc')
            ]);
            Doctor::create($request->all());
        }
        elseif ($usertype == 'Technation') {
            Tech::create($request->all());
        }
        
        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reg;
use App\Doctor;
use App\Tech;
use DB;
 
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
    public function doctorlogin()
    {
        return view('doctorlogin');
    }
    public function doctorloginVerify(Request $request)
    {
        if ($request->type == 'doctor') {
          return redirect()->route('doctor');
        }
        else
           return redirect()->route('patient');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'Required',
            'lastname'=>'Required',
            'phone'=>'Required',
            'email'=>'Required|email|unique:user',// required and must be unique in the user table
            'address'=>'Required',     
            'password'=> 'Required',
            'compass'=> 'same:password'
        ]);
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
            $doctor = new Doctor;
            $doctor->email = $request->email;
            $doctor->bmdc = $request->bmdc;
            $doctor->degree = $request->degree;
            $doctor->specialized = $request->specialized;
            $doctor->consulting = $request->consulting;
            $doctor->location = $request->location;
            $doctor->contact = $request->phone;
            $doctor->save();
        }
        elseif ($usertype == 'Technation') {
            Tech::create($request->all());
        }

        return redirect()->route('home');
    }
    public function verify(Request $request){

        $email = $request->email;
        $password = $request->password;

        $user = DB::table('user')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

        //dd($user);
         if($user != null){
             $request->session()->put('email', $email);
             $doctor = DB::table('doctor')
                ->where('email', $email)
                ->first();
              if($doctor != null){
                return redirect()->route('doctorlogin');
              }
              else
                return redirect()->route('patient');
         }else{

             $admin = DB::table('admin')
                 ->where('email', $email)
                 ->where('password', $password)
                 ->first();
             if($admin != null) {
                 $request->session()->put('email', $email);
                 return redirect()->route('admin');
             }
             else {
                 $request->session()->flash('message', 'Invalid username or password');
                 return redirect()->route('home');
             }
        }

    }

    public function signout(Request $request)
    {
        $request->session()->flash('message', 'Invalid username or password');
        return redirect()->route('home');
    }
}

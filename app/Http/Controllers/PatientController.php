<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Reg;
use DB;
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
    public function imageStore(Request $request)
    {
        $email = session('email');
        $reg = Reg::where('email',$email)->get();
        $reg->accName           = $reg->accName;
        $reg->save();

        return redirect()->route('patient.profile');
    }
    public function profileStore(Request $request)
    {
        /*$email = session('email');
        $account = Account::where('email',$email)->get();
        $account->accName           = $request->accName;
        $account->balance           = $request->accbalance;
        $account->save();

        return redirect()->route('account.index');*/
    }
    public function notification()
    {
        return view('Patient.notification');
    }

    public function archive()
    {
        return view('Patient.archive');
    }
    
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="abc";
            $doctors=DB::table('doctor')->where('email',$request->search)->get();
            if($doctors)
            {
                foreach ($doctors as $key => $doctor) {
                $output.='<tr>'.
                '<td>'.$doctor->email.'</td>'.
                '<td>'.$doctor->specialized.'</td>'.
                '<td>'.$doctor->total_day.'</td>'.
                '<td>'.$doctor->location.'</td>'.
                /*'<td>'.$doctor->bags_pay.'</td>'.
                '<td>'.$doctor->quantity_pay.'</td>'.
                '<td>'.$doctor->total_price.'</td>'.*/
                '</tr>';
                }
             return Response($output);
            }
        }
    }
}



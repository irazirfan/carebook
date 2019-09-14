<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Prescription;
use App\Test;
use App\Symptom;
use App\Medicine;
use App\MedicalTest;
use App\Reg;
use DB;
use Illuminate\Http\Request;


class PatientController extends Controller
{
   
    public function index()
    {
        $doctors= DB::table('doctor')
        ->join('user', 'user.email', '=' ,'doctor.email')
        ->select('doctor.*', 'user.firstname', 'user.lastname', 'user.image' )
        ->get();
        return view('Patient.index', compact('doctors'));
    }
    public function doctorlist($id)
    {
        $doctor= DB::table('doctor')
        ->join('user', 'user.email', '=' ,'doctor.email')
        ->where('id', $id)
        ->select('doctor.*', 'user.firstname', 'user.lastname', 'user.image' )
        ->first();
        return view('Patient.doctorSingle', compact('doctor'));
    }

    public function profile()
    {
        $user = DB::table('user')->where('email', session('email'))->first();
        return view('Patient.profile',compact('user'));
    }
    public function profileStore(Request $request)
    {
        $this->validate($request, [
            'first_name'=>'Required',
            'last_name'=>'Required',
            'phone'=>'Required',
            //'email'=>'Required|email|unique:user',// required and must be unique in the user table
            'address'=>'Required',     
            //'new_password'=> 'Required',
            'confirm_password'=> 'same:new_password'
        ]);
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        DB::table('user')
            ->where('email', session('email'))
            ->update(['image' => $name]);
        
        }

        if($request->confirm_password != null){
            $user = Reg::where('email',session('email'))->first();
            $user->phone = $request->phone;
            $user->firstname = $request->first_name;
            $user->lastname = $request->last_name;
            $user->address = $request->address;
            $user->password = $request->confirm_password;
            $user->update();
        }
        else
        {
            $user = Reg::where('email',session('email'))->first();
            $user->phone = $request->phone;
            $user->firstname = $request->first_name;
            $user->lastname = $request->last_name;
            $user->address = $request->address;
            $user->update();
        }
        return back();
    }
    public function Password(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $user=DB::table('user')->where('email',session('email'))
                    ->first();
            if($user)
            {
              if($user->password != $request->search)
                $output='true';
              else
                $output='false';
              return Response($output);
            }
        }
    }
    public function notification()
    {
         $prescriptions= DB::table('prescription')
        ->join('user', 'user.email', '=' ,'prescription.doctor_email')
        ->where('patient_email', session('email'))
        ->where('notification', 0)
        ->select('prescription.*', 'user.firstname', 'user.lastname', 'user.image' )
        ->get();
        return view('Patient.notification', compact('prescriptions'));
    }
    public function notificationSingle($id)
    {
        $prescription = Prescription::find($id);
        $dis = Prescription::all();
        $count = count($dis);
        DB::table('prescription')
            ->where('prescription_id', $id)
            ->update(['notification' => 1]);
        return view('Patient.notificationSingle',compact(['prescription','count']));
    }
    public function archive()
    {
         $prescriptions= DB::table('prescription')
        ->join('user', 'user.email', '=' ,'prescription.doctor_email')
        ->where('patient_email', session('email'))
        ->select('prescription.*', 'user.firstname', 'user.lastname', 'user.image' )
        ->get();
        return view('Patient.archive',compact('prescriptions'));
    }
    public function archiveStore(Request $request)
    {
        $this->validate($request, [
            'doctor_email'=>'Required',
            'date'=>'Required',
            'file_type'=>'Required',
            'file_input'=>'Required|max:10000'
        ]);
        if ($request->hasFile('file_input')) {
        $file = $request->file('file_input');
        //$name = 'public/storage/'.session('email').time().'.'.$image->getClientOriginalExtension();
        $name = session('email').time().'.'.$file->getClientOriginalExtension();
        //\Storage::put($name,$file);
        $path = $request->file('file_input')->storeAs('public/storage',$name);
        
          $pres  = new Prescription;
          $pres->pdf  = $name;
          $pres->patient_email = session('email');
          $pres->doctor_email = $request->doctor_email;
          $pres->date = $request->date;
          $pres->save();  
        }
        return back();
    }
    public function patientListSingle($id)
    {
        $prescription = Prescription::find($id);
        $dis = Prescription::all();
        $count = count($dis);
        return view('Patient.patientListSingle',compact(['prescription','count']));
    }
    
    public function DoctorSearch(Request $request)
    {
        if($request->ajax())
        {
             $output="";
            /*$users=DB::table('doctor')->where('specialized','LIKE','%'.$request->search.'%')
                    ->orWhere('location','LIKE','%'.$request->search.'%')
                    ->get();*/
            $doctors= DB::table('doctor')
            ->join('user', 'user.email', '=' ,'doctor.email')
            ->where('user.firstname','LIKE','%'.$request->search.'%')
            ->orWhere('user.lastname','LIKE','%'.$request->search.'%')
            ->orWhere('location','LIKE','%'.$request->search.'%')
            ->orwhere('specialized','LIKE','%'.$request->search.'%')
            ->select('doctor.*', 'user.firstname', 'user.lastname','user.image' )
            ->get();
            if($doctors)
            {
                foreach ($doctors as $key => $doctor) {
                /*$output.='<tr>'.
                '<td>'.$product->id.'</td>'.
                '<td>'.$product->name.'</td>'.
                '</tr>';*/
                if($key == 0)
                {
                  $output.='<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$doctor->firstname.' '.$doctor->lastname.'</h5>
                          <small>'.$doctor->degree.'</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="images/'.$doctor->image.'" alt="Card image cap">
                        <p class="mb-1">'.$doctor->specialized.'</p>
                        <p class="mb-1">'.$doctor->location.'</p>
                        <p class="mb-1">'.$doctor->consulting.'</p>
                        <small>'.$doctor->contact.'</small>              
                      </a>';
                }
                else
                {
                    $output.='<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$doctor->firstname.' '.$doctor->firstname.'</h5>
                          <small>'.$doctor->degree.'</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="images/'.$doctor->image.'" alt="Card image cap">
                        <p class="mb-1">'.$doctor->specialized.'</p>
                        <p class="mb-1">'.$doctor->location.'</p>
                        <p class="mb-1">'.$doctor->consulting.'</p>
                        <small>'.$doctor->contact.'</small>              
                      </a>';
                }

                }
            return Response($output);
            }
        }
    }
    public function Speciality(Request $request)
    {
        if($request->ajax())
        {
             $output="";
            $doctors= DB::table('doctor')
            ->join('user', 'user.email', '=' ,'doctor.email')
            ->where('specialized','LIKE','%'.$request->search.'%')
            ->select('doctor.*', 'user.firstname', 'user.lastname','user.image' )
            ->get();
            if($doctors)
            {
                foreach ($doctors as $key => $doctor) {
                /*$output.='<tr>'.
                '<td>'.$product->id.'</td>'.
                '<td>'.$product->name.'</td>'.
                '</tr>';*/
                if($key == 0)
                {
                  $output.='<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$doctor->firstname.' '.$doctor->lastname.'</h5>
                          <small>'.$doctor->degree.'</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="images/'.$doctor->image.'" alt="Card image cap">
                        <p class="mb-1">'.$doctor->specialized.'</p>
                        <p class="mb-1">'.$doctor->location.'</p>
                        <p class="mb-1">'.$doctor->consulting.'</p>
                        <small>'.$doctor->contact.'</small>              
                      </a>';
                }
                else
                {
                    $output.='<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$doctor->firstname.' '.$doctor->firstname.'</h5>
                          <small>'.$doctor->degree.'</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="images/'.$doctor->image.'" alt="Card image cap">
                        <p class="mb-1">'.$doctor->specialized.'</p>
                        <p class="mb-1">'.$doctor->location.'</p>
                        <p class="mb-1">'.$doctor->consulting.'</p>
                        <small>'.$doctor->contact.'</small>              
                      </a>';
                }

                }
            return Response($output);
            }
        }
    }
    public function Location(Request $request)
    {
        if($request->ajax())
        {
             $output="";
            $doctors= DB::table('doctor')
            ->join('user', 'user.email', '=' ,'doctor.email')
            ->where('location','LIKE','%'.$request->search.'%')
            ->select('doctor.*', 'user.firstname', 'user.lastname','user.image' )
            ->get();
            if($doctors)
            {
                foreach ($doctors as $key => $doctor) {
                /*$output.='<tr>'.
                '<td>'.$product->id.'</td>'.
                '<td>'.$product->name.'</td>'.
                '</tr>';*/
                if($key == 0)
                {
                  $output.='<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$doctor->firstname.' '.$doctor->lastname.'</h5>
                          <small>'.$doctor->degree.'</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="images/'.$doctor->image.'" alt="Card image cap">
                        <p class="mb-1">'.$doctor->specialized.'</p>
                        <p class="mb-1">'.$doctor->location.'</p>
                        <p class="mb-1">'.$doctor->consulting.'</p>
                        <small>'.$doctor->contact.'</small>              
                      </a>';
                }
                else
                {
                    $output.='<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$doctor->firstname.' '.$doctor->firstname.'</h5>
                          <small>'.$doctor->degree.'</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="images/'.$doctor->image.'" alt="Card image cap">
                        <p class="mb-1">'.$doctor->specialized.'</p>
                        <p class="mb-1">'.$doctor->location.'</p>
                        <p class="mb-1">'.$doctor->consulting.'</p>
                        <small>'.$doctor->contact.'</small>              
                      </a>';
                }

                }
            return Response($output);
            }
        }
    }
    public function archiveSearch(Request $request)
    {
        if($request->ajax())
        {
             $output="";
            $tests= DB::table('medical_test')
            ->join('user', 'user.email', '=' ,'medical_test.doctor_email')
            ->where('patient_email',session('email'))
            ->select('medical_test.*', 'user.firstname', 'user.lastname')
            ->get();
            if($tests && $request->search == 'report')
            {
                foreach ($tests as $key => $test) {
                /*$output.='<tr>'.
                '<td>'.$product->id.'</td>'.
                '<td>'.$product->name.'</td>'.
                '</tr>';*/
                if($key == 0)
                {
                  $output.='<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$test->firstname.'('.$test->test_name.')</h5>

                          <small>'.$test->created_at.'</small>
                        </div>          
                      </a>';
                }
                else
                {
                    $output.='<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">'.$test->firstname.'('.$test->test_name.')</h5>

                          <small>'.$test->created_at.'</small>
                        </div>          
                      </a>';
                }

                }
            return Response($output);
            }
        }
    }
}



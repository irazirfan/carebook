<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Disease;
use App\Prescription;
use App\Test;
use App\Symptom;
use App\Medicine;
use App\MedicalTest;
use App\Reg;
use PDF;
use DB;


class DoctorController extends Controller
{
	
	public function index()
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$diseases = Disease::all();
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Doctor.index',compact(['diseases','customer']));
	}

	public function prescription()
	{
		if(session('email') == null){
			return redirect()->route('home');
		}

		$email = session('email');
		$doctor= DB::table('doctor')
		->join('user', 'user.email', '=' ,'doctor.email')
		->select('doctor.*', 'user.firstname', 'user.lastname' )
		->first();
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Doctor.prescription',compact(['doctor','customer']));
	}

	public function prescriptionStore(Request $request)
	{
      //dd($request);
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($this->convert_patient_data_to_html($request));
		$content = $pdf->download()->getOriginalContent();
		$orginal_name = $request->doctor_name.date('m-d-Y_hia').'.pdf';
		$name='public/storage/'.$request->doctor_name.date('m-d-Y_hia').'.pdf';
		\Storage::put($name,$content) ;

		$doctor_email = session('email');
		$pres = new Prescription();
		$pres->pdf = $orginal_name;
		$pres->patient_email = $request->patient_email;
		$pres->doctor_email = $doctor_email;
		$pres->date = date('Y-m-d');
		$pres->save();

		

		return redirect()->route('doctor.prescription');
	}

	function convert_patient_data_to_html(Request $request)
	{
      //$request = $this->get_customer_data();
		$output = '
		<div >
		<h1 > CareBook</h1>
		<h3 >CareBook professional team is always here to help you</h3>
		<h4 >We care about you</h4>

		<div >
		<h1 ><b>CareBook Prescription</b></h1> 
		</div>
		<div >
		<ul >
		<li ><b>Name:'.$request->patient_name.'</b></li>
		<li ><b>ID No:</b></li>
		<li ><b>Date/Time:'.$request->date.'</b></li>
		<li ><b>Age/Sex:'.$request->patient_sex.'</b></li>
		<li ><b>Consultant:'.$request->doctor_name.'</b></li>
		</ul>
		</div>
		<br >
		<div >
		<b><hr></b>
		<div >
		<h3><u>Symptoms</u></h3> 
		<table border="0" align="center"  >
		';  
		for ($i=1; $i <=$request->sym_row ; $i++)
		{
			$x = 'sfield_'.$i;
			$output .= '
			<tr>
			<td>'.$request->$x.'</td>
			</tr>
			';
		}
		$output .= '</table>
		</div>
		<div >
		<div >
		<h4>Clinical diagnosis:</h4> 
		<h4>Treatment:</h4> 
		<div >
		<table border="0">
		';
		for ($i=1; $i <=$request->med_row ; $i++)
		{
			$med = 'medicineName_'.$i;
			$morning = 'morning_'.$i;
			$afternoon = 'afternoon_'.$i;
			$evening = 'evening_'.$i;
			$night = 'night_'.$i;
			$days = 'days_'.$i;
			$comment = 'comment_'.$i;
			$output .= '
			<tr>
			<td >'.$request->$med.'('.$request->$morning.'-'.$request->$afternoon.'-'.$request->$evening.'-'.$request->$night.')-'.$request->$days.'days<br>'.$request->$comment.'<br>
			</div>
			</td>
			</tr>
			';
		}
		$output .= '</table>
		</div>
		</div>
		<div >
		<h3>Test:</h3> 
		<table border="0" align="center">
		';
		for ($i=1; $i <=$request->test_row ; $i++)
		{
			$tfield = 'tfield_'.$i;
			$output .= '
			<tr>
			<td>'.$request->$tfield.'</td>
			</tr>
			';
		}
		$output .= '</table>
		<b>Visit after'.$request->timezone.' '.$request->visit.'</b>
		</div>

		</div>

		</div>
		</div>
		';
		return $output;
	}

	public function session(Request $request)
	{
        //session('sym_row') = $request->srow;
        //console.log(session('sym_row'));
		return back("bjhb,kj");
	}
	public function disease($id)
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$disease = Disease::find($id);
		$dis = Disease::all();
		$count = count($dis);
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Doctor.disease',compact(['disease','count','customer']));
	}
	public function profile()
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$user = DB::table('user')->where('email', session('email'))->first();
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Doctor.profile',compact(['user','customer']));
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
	public function patientListSingle($id)
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$prescription = Prescription::find($id);
		$dis = Prescription::all();
		$count = count($dis);
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Doctor.patientListSingle',compact(['prescription','count', 'customer']));
	}
	public function patient()
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$prescriptions= Prescription::join('user', 'user.email', '=' ,'prescription.doctor_email')
		->select('prescription.*', 'user.firstname', 'user.lastname' )
		->get();
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Doctor.patientlist',compact(['prescriptions','customer']));
	}
	public function PatientListSearch(Request $request)
	{
		if($request->ajax())
		{
			$output="";
			$email=DB::table('prescription')->where('patient_email',$request->search)
			->get();
			if($email)
			{
				$prescriptions= DB::table('prescription')
				->join('user', 'user.email', '=' ,'prescription.doctor_email')
				->select('prescription.*', 'user.firstname', 'user.lastname' )
				->get();
				foreach ($prescriptions as $key => $prescription) {
					if($key == 0)
					{
						$output.='<a class="list-group-item list-group-item-action flex-column align-items-start active"  href="#single">
						<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">'.$prescription->firstname.'&nbsp'.$prescription->lastname.
						'</h5>
						<small>
						<small><b>'.$prescription->date.'</b></small>
						<button class="btn btn-sm btn-danger" type="view">
						<i class="fa fa-dot-circle-o"></i> View</button>
						</small>

						</div>          
						</a>';
					}
					else
					{
						$output.='<a class="list-group-item list-group-item-action flex-column align-items-start"  href="#single">
						<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">'.$prescription->firstname.'&nbsp'.$prescription->lastname.
						'</h5>
						<small>
						<small><b>'.$prescription->date.'</b></small>
						<button class="btn btn-sm btn-danger" type="view">
						<i class="fa fa-dot-circle-o"></i> View</button>
						</small>

						</div>          
						</a>';
					}

				}
				return Response($output);
			}
		}
	}
	public function searchPatient(Request $request)
	{
		if($request->ajax())
		{
			$output="";
			$user=DB::table('user')->where('email',$request->search)
			->first();
			if($user)
			{
				$name =$user->firstname.' '.$user->lastname;
				$gender = $user->gender;
				$email = $user->email; 
				$output = array($name, $gender,$email);
				return Response($output);
			}
		}
	}
	public function search(Request $request)
	{
		if($request->ajax())
		{
			$output="";
			$diseases=DB::table('disease')->where('name','LIKE','%'.$request->search.'%')
			->orWhere('origin','LIKE','%'.$request->search.'%')
			->orWhere('effects','LIKE','%'.$request->search.'%')
			->orWhere('symptom','LIKE','%'.$request->search.'%')
			->orWhere('diagnosis','LIKE','%'.$request->search.'%')
			->get();
			if($diseases)
			{
				foreach ($diseases as $key => $disease) {
                /*$output.='<tr>'.
                '<td>'.$product->id.'</td>'.
                '<td>'.$product->name.'</td>'.
                '</tr>';*/
                if($key == 0)
                {
                	$output.='<a class="list-group-item list-group-item-action flex-column align-items-start active" href="doctor/disease/'. $disease->id.'">'.
                	'<div class="d-flex w-100 justify-content-between">'.
                	'<h5 class="mb-1">'.$disease->name.'</h5>'.    
                	'</div>'.
                	'<img class="" style="width: 100px; height: 100px; float: right;" src="theme/Images/'.$disease->image.'" alt="">'.
                	'<p class="mb-1">'. $disease->origin.'</p>'.
                	'<p class="mb-1">'. $disease->effects.'</p>'.
                	'<p class="mb-1">'.$disease->symptom.'</p>'.
                	'<small>'. $disease->diagnosis.'</small>'.              
                	'</a>';
                }
                else
                {
                	$output.='<a class="list-group-item list-group-item-action flex-column align-items-start" href="doctor/disease/'. $disease->id.'">'.
                	'<div class="d-flex w-100 justify-content-between">'.
                	'<h5 class="mb-1">'.$disease->name.'</h5>'.    
                	'</div>'.
                	'<img class="" style="width: 100px; height: 100px; float: right;" src="theme/Images/'.$disease->image.'" alt="">'.
                	'<p class="mb-1">'. $disease->origin.'</p>'.
                	'<p class="mb-1">'. $disease->effects.'</p>'.
                	'<p class="mb-1">'.$disease->symptom.'</p>'.
                	'<small>'. $disease->diagnosis.'</small>'.              
                	'</a>';
                }

            }
            return Response($output);
        }
    }
}
public function InsertSymptom(Request $request)
{
	if($request->ajax())
	{
		$output="";
		$symptom=DB::table('symptom')->where('name',$request->search)
		->get();
		if(count($symptom)<1)
		{
			$symptom = new Symptom();
			$symptom->name = $request->search;
			$symptom->save();
			return Response($output);
		}
	}
}
public function InsertTest(Request $request)
{
	if($request->ajax())
	{
		$output="";
		$test=DB::table('test')->where('name',$request->search)
		->get();
		if(count($test)<1)
		{
			$test = new Test();
			$test->name = $request->search;
			$test->save();

			$last = DB::table('prescription')->latest('id')->first();
			$lastid = $last+1;
			$doctor_email = session('email');
			$medical = new MedicalTest();
			$medical->test_name = $request->search;
			$medical->pat_id = $request->lastid;
			$medical->patient_email = $request->email;
			$medical->doctor_email = $doctor_email;
			$medical->save();
			return Response($output);
		}
	}
}
	public function InsertMedicine(Request $request)
	{
		if($request->ajax())
		{
			$output="";
			$medicine=DB::table('medicine')->where('name',$request->search)
			->get();
			if(count($medicine)<1)
			{
				$medicine = new Medicine();
				$medicine->name = $request->search;
				$medicine->save();
				return Response($output);
			}
		}
	}
	 
}

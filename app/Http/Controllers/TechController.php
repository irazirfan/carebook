<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Reg;
use App\User;
use DB;
use Illuminate\Http\Request;

class TechController extends Controller
{
	public function index()
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$customer = DB::table('user')->where('email', session('email'))->first();
		$tests = DB::table('medical_test')->where('pdf', null)->get();
		//dd($test);
		return view('Tech.index', compact(['tests','customer']));
	}
	public function store(Request $request)
	{
		$this->validate($request, [
            'file_input'=>'Required|max:10000'
        ]);
		if ($request->hasFile('file_input')) {
        $file = $request->file('file_input');
        $name = session('email').time().'.'.$file->getClientOriginalExtension();
        $path = $request->file('file_input')->storeAs('public/storage',$name);
			DB::table('medical_test')
			->where('id', $request->id)
			->update(['pdf' => $name]);	
		}
		return back();
	}
	public function profile()
	{
		if(session('email') == null){
			return redirect()->route('home');
		}
		$user = DB::table('user')->where('email', session('email'))->first();
		$customer = DB::table('user')->where('email', session('email'))->first();
		return view('Tech.profile',compact(['user','customer']));
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
	public function PatSearch(Request $request)
	{
		if($request->ajax())
		{
			$output="";
			$tests = DB::table('medical_test')
					->where('pdf', null)
					->where('patient_email', $request->search)
					->get();
			if($tests)
			{
				foreach ($tests as $key => $test) {
                /*$output.='<tr>'.
                '<td>'.$product->id.'</td>'.
                '<td>'.$product->name.'</td>'.
                '</tr>';*/
                
                	$output.='<form class="form"  method="post" enctype="multipart/form-data">
                    		<meta name="csrf-token" content="{{ csrf_token() }}">
						<div class="d-flex w-100 justify-content-between" style="padding-top: 10px">
							<h5 class="mb-1">
								Prescraption ID:'.$test->pat_id.' 
							</h5>
							'.$test->test_name.'
							<input type="file" name="file_input">
							<input type="text" name="id" value="'.$test->id.'" hidden>
							<small>
								
								<button class="btn btn-sm btn-danger" type="submit">
                                <i class="fa fa-dot-circle-o"></i> submit</button>
							</small>
						</div>
						</form>';
            	}
            	return Response($output);
        	}
    	}
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;
use DB;


class DoctorController extends Controller
{
   
    public function index()
    {
        $diseases = Disease::all();
        return view('Doctor.index',compact('diseases'));
    }

    public function prescription()
    {
        return view('Doctor.prescription');
    }
    public function profile()
    {
        return view('Doctor.profile');
    }

    public function notification()
    {
        return view('Doctor.notification');
    }

    public function patient()
    {
        return view('Doctor.patientlist');
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
                  $output.='<a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">'.
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
                    $output.='<a class="list-group-item list-group-item-action flex-column align-items-start" href="#">'.
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
}

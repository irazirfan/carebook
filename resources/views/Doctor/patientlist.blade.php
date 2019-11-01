@extends('layouts.doctor')
@section('style')

<link href="patientTheme/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application-->
    <link href="{{asset('patientTheme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('patientTheme/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    
@endsection

 @section('nav')
    <ul>
      <li ><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
      <li ><a href="{{route('doctor.prescription')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
      <li class="active"><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
      <li><a href="{{route('doctor.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
    </ul>
  @endsection
  
@section('content')
 
      <div class="container-fluid">
        <div class="row justify-content-center" style="margin-right: 200px; margin-top: 50px; margin-left:50px">
          <div class="col-sm-12 col-xl-12" >
                <div class="card" >
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Previous Patient
                    <small>custom content</small>
                    <div style="float: right">
                      <button class="btn btn-success" id="search">Search</button>
                    </div>
                    <div style="float: right;margin-right: 30px">
                      <input type="text" name="email" id="email" placeholder="Write Patient Email">
                    </div>
                    
                  </div>
                  <div class="card-body" >
                    <div class="list-group">
                      @php
                        $count=0;
                      @endphp
                      @foreach ($prescriptions as $prescription)
                        {{-- expr --}}
                        @if ($count == 0)
                      <a class="list-group-item list-group-item-action flex-column align-items-start active"  href="{{route('patientlist.single', [$prescription->prescription_id])}}">
                        @else
                        <a class="list-group-item list-group-item-action flex-column align-items-start "  href="{{route('patientlist.single', [$prescription->prescription_id])}}">
                        @endif
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">{{$prescription->firstname}} &nbsp {{$prescription->lastname}}
                          </h5>
                          <small>
                             <small><b>{{$prescription->date}}</b></small>
                            <button class="btn btn-sm btn-danger" type="view">
                                <i class="fa fa-dot-circle-o"></i> View</button>
                          </small>

                        </div>          
                      </a>
                      @php
                        $count++;
                      @endphp
                      @endforeach
                    </div>
                    <nav aria-label="..." style="float: right;">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">2
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
$('#search').on('click',function(){
$value=$('#email').val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('doctor/patient/search')}}',
data:{'search':$value},
success:function(data){
console.log(data);
$('#pname').attr("value",data[0]);
$('#patient_name').attr("value",data[0]);
$('#patient_sex').attr("value",data[1]);
$('#pat_email').attr("value",data[2]);
console.log(data[2]);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
@section('script')
@endsection


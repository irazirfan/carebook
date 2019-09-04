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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
@endsection

@section('nav')
    <ul>
      <li class="active"><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
      <li ><a href="{{route('doctor.prescription')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
      <li ><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
      <li><a href="{{route('doctor.notification')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Notification</span><i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">0</span></a></li>
      <li><a href="{{route('doctor.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
    </ul>
  @endsection
  
@section('content')
  
    <div class="container-fluid">
      <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">{{$disease->name}}</div>
              <div class="card-body">
                <img class="" style="width: 500px; height: 200px;" src="{{asset('theme/Images')}}/{{$disease->image}}" alt="{{$disease->image}}">
                 <div class="bd-example">
                  <dl class="row">
                    <dt class="col-sm-3">Origin</dt>
                    <dd class="col-sm-9">{{$disease->origin}}</dd>
                    <dt class="col-sm-3">Effects</dt>
                    <dd class="col-sm-9">
                      <p>{{$disease->effects}}</p>
                    </dd>
                    <dt class="col-sm-3">symptoms</dt>
                    <dd class="col-sm-9">{{$disease->symptom}}</dd>
                    <dt class="col-sm-3 text-truncate">Diagnosis</dt>
                    <dd class="col-sm-9">{{$disease->diagnosis}}</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
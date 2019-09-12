@extends('layouts.patient')
@section('breadcrumb')
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item ">
            <a class="" href="{{route('patient')}}">
              Dashboard
            </a>
          </li>
          <li class="breadcrumb-item active">DoctorList</li>
          <!-- Breadcrumb Menu-->
          
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="{{route('signout')}}">
                <i class="icon-settings"></i>  Sign-Out</a>
            </div>
          
          </li> 
        </ol>
@endsection
@section('body')
  
    <div class="container-fluid">
      <div class="animated fadeIn">
          <div class="row">
            <div class="card" style="background-color:lightblue; width: 100%; margin-top: 0px; padding-top: 0px">
              <div class="card-body">
                <div align="center" style="padding-left: 0px">
                  <img class="" style="width: 200px; height: 200px;" align="center" src="{{asset('images')}}/{{$doctor->image}}" alt="{{$doctor->image}}">
                </div>
                <div style="text-align: center">
                  <h2 style="color: white">{{$doctor->firstname}} {{$doctor->lastname}}</h2>
                  <h3 style="color: white">{{$doctor->specialized}}</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="card">
                  <div class="card-header" style="text-align: center"><h3 style="color: blue;">Specialist in</h3></div>
                  <div class="card-body">
                    <div style="text-align: center">
                      <h4>{{$doctor->specialized}}</h4>
                    </div>
                    <hr>
                    <div style="text-align: center">
                      <h4>{{$doctor->degree}}</h4>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="card">
                 <div class="card-header" style="text-align: center"><h3 style="color: blue;">Chambers</h3></div>
                  <div class="card-body">
                    <div style="text-align: center">
                      <h4>{{$doctor->contact}}</h4>
                    </div>
                    <hr>
                    <div style="text-align: center">
                      <h4>{{$doctor->location}}</h4>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
@endsection
@extends('layouts.patient')
@section('breadcrumb')
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          
          <li class="breadcrumb-item active">
            <a href="#">Notification</a>
          </li>
          
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
        <div class="row justify-content-center" style="">
          <div class="col-sm-12 col-xl-12" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Notification
                    <small>custom content</small>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      @php
                        $count =0;
                      @endphp
                      @foreach ($prescriptions as $prescription)
                      @if ($count==0)
                      <a class="list-group-item list-group-item-action flex-column align-items-start active" href="{{route('patient.notification.single', [$prescription->prescription_id])}}">
                      @else
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="{{route('patient.notification.single', [$prescription->prescription_id])}}">
                      @endif
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">New Notice Posted By {{$prescription->firstname}}</h5>

                          <small>{{$prescription->date}}</small>
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
@endsection
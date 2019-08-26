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

@section('content')
  @section('nav')
    <ul>
      <li class="active"><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
      <li ><a href="{{route('doctor.prescription')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
      <li ><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
      <li><a href="{{route('doctor.notification')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Notification</span></a></li>
      <li><a href="{{route('doctor.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
    </ul>
  @endsection
    
      <!--<body class="app flex-row align-items-center">-->

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="clearfix">
        
             <h4 class="pt-3" align="center">Search Anything </h4>
        
            </div>
            <div class="input-prepend input-group">
              <div class="input-group-prepend">
                 <span class="input-group-text">
                  <i class="fa fa-search"></i>
                </span>
               </div>
              <input class="form-control" id="prependedInput" size="16" type="text" placeholder="Search">
              <span class="input-group-append">
                <button class="btn btn-info" type="button">Search</button>
              </span>
            </div>
            <legend>
              <font size="3">
                <b>Check Result</b>
              </font>
            </legend>

            <select name="group">
                <option value="PHYSICAL MEDICINE & REHABILITATION"> PHYSICAL MEDICINE & REHABILITATION</option>
                
            </select>
   
           
          </div>  
        </div>

        <div class="row justify-content-center" style="padding-top: 20px">
          <div class="col-sm-4 col-xl-4">
          <div class="card" style="">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Daily Task
                    <!-- <small>custom content</small> -->
                  </div>
                  <div class="card-body" style="margin-bottom: 40px">
                   <textarea rows="17" cols="35" name="textarea"></textarea>
                  </div>

                  <div>
                   <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

                   <button class="btn btn-lg btn-danger" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Clear</button>
                  </div> 
              </div>
        </div>
          <div class="col-sm-8 col-xl-8" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Emerging Diseases
                    <!-- <small>custom content</small> -->
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Sars</h5>
                          
                        </div>

                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('theme/Images/sars.jpg')}}" alt="Card image cap">
                        <p class="mb-1"> Europe</p>
                        <p class="mb-1"> Contagious and potentially fatal respiratory illness.</p>
                        <p class="mb-1">Aches, chills, diarrhea, dry coughing, and shortness of breath</p>
                        <small> SARS-CoV/ RT-PCR</small>              
                      </a>
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Ebola</h5>
                         
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('theme/Images/ebola.jpg')}}" alt="Card image cap">
                        <p class="mb-1"> Africa</p>
                        <p class="mb-1"> Contagious and potentially fatal respiratory illness.</p>
                        <p class="mb-1">Aches, chills, diarrhea, dry coughing, and shortness of breath</p>
                        <small> SARS-CoV/ RT-PCR</small>
                      </a>
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Avian Flu</h5>
                         
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('theme/Images/avian_flu.jpg')}}" alt="Card image cap">
                        <p class="mb-1"> America</p>
                        <p class="mb-1"> Contagious and potentially fatal respiratory illness.</p>
                        <p class="mb-1">Aches, chills, diarrhea, dry coughing, and shortness of breath</p>
                        <small> SARS-CoV/ RT-PCR</small>
                      </a>
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

             
@endsection
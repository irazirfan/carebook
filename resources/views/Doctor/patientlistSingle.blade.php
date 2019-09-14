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
                <div class="card" style="height: 900px; width: 700px" >
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Previous Patient
                    <small>custom content</small>
                  </div>
                  <div class="card-body" id="main" >
                    
                  </div>
                  <div class="card-footer">
                    <nav aria-label="..." style="float: right;">
                      <ul class="pagination">
                        @if ($prescription->prescription_id-1 > 0)
                          {{-- expr --}}
                        <li class="page-item">
                          <a class="page-link" href="{{route('patientlist.single', [$prescription->prescription_id-1])}}">Previous</a>
                        </li>
                        @endif
                        @if ($prescription->prescription_id < $count)
                          {{-- expr --}}
                        
                        <li class="page-item">
                          <a class="page-link" href="{{route('patientlist.single', [$prescription->prescription_id+1])}}">Next</a>
                        </li>
                        @endif
                      </ul>
                    </nav>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/pdfobject.min.js')}}"></script>
 <script>
        /*var viewer = $('#viewpdf');
        PDFObject.embed('sample.pdf', viewer);*/
       /*$( document ).ready(function() {*/
          //document.querySelector('.bg-modal').style.display = "flex";
          var viewer = $('#main');
        PDFObject.embed('{{asset('storage/storage')}}/{{$prescription->pdf}}', viewer);
        var x = "{{ $prescription->pdf}}";
        console.log(x);
        //document.querySelector('#main').style.display = "none";
        /*});*/
    </script>
@endsection


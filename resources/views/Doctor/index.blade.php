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
    
    <link href="{{asset('theme/CSS/bootstrap.min.css')}}">
    <script src="{{asset('theme/JS/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/JS/jquery-3.4.1.min.js')}}"></script>
    
    <!-- Sticky Notes -->

   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=1">

   <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
   <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
   <!-- For first-generation iPad: -->
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
   <!-- For iPhone 4 with high-resolution Retina display: -->
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">

   <!-- CSS -->
   <link rel="stylesheet" href="{{asset('doctorTheme/css/main.css?version=1')}}" />
   <link rel="stylesheet" href="{{asset('doctorTheme/css/html5sticky.css?version=1')}}" />

   <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' />

   <!-- JavaScript -->
   <!--[if IE]><![endif]-->
   <!--[if lt IE 9]>
   <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
    
   <script src="{{asset('theme/JS/jquery-1.6.2.min.js')}}"></script>
   <script>!window.jQuery && document.write(unescape('%3Cscript src="doctorTheme/js/jquery1.6.2.js"%3E%3C/script%3E'))</script>

   <script src="{{asset('doctorTheme/js/respond.min.js')}}"></script>
   <script src="{{asset('doctorTheme/js/modernizr.custom.23610.js')}}"></script>
   <script src="{{asset('doctorTheme/js/html5sticky.js')}}"></script>
   <script src="{{asset('doctorTheme/js/prettyDate.js')}}"></script>

   
    
@endsection

@section('content')
  @section('nav')
    <ul>
      <li class="active"><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
      <li ><a href="{{route('doctor.prescription')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
      <li ><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
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
              <input class="form-control" id="search" size="16" type="text" placeholder="Search">
             <!--  <span class="input-group-append">
               <button class="btn btn-info" type="button">Search</button>
             </span> -->
            </div>
            <legend>
              <font size="3">
                <b>Check Result</b>
              </font>
            </legend>

           <!--  <select name="group">
               <option value="PHYSICAL MEDICINE & REHABILITATION"> PHYSICAL MEDICINE & REHABILITATION</option>
               
           </select> -->
   
           
          </div>  
        </div>

        <div class="row justify-content-center" style="padding-top: 20px">
          <div class="col-sm-4 col-xl-4">
            <div class="card" style="">
                <header id="head" style="">

                  <!-- <a href="index.html">
                     <h1>HTML5Sticky <br /><small>sticky notes for web !</small></h1>
                  </a>
                   -->
                  <div class=" topsection" style="margin-left: 0px; padding-left: 0px;  float: left">
                     <a href="#" id="addnote" class=" " style="padding-right: 20x"><img src="{{asset('doctorTheme/img/add.png')}}" alt="Add a new sticky note"></a>
                     <a href="#" id="removenotes" class=" "><img src="{{asset('doctorTheme/img/remove.png')}}" alt="Remove all sticky notes"></a>
                  </div>

                  <div class=" topsection" style="margin-left: 0px; padding-left: 0px; float: left;">
                     <a href="#" id="shrink" class=" "><img src="{{asset('doctorTheme/img/decrease.png')}}" alt="Shrink"></a>
                     <a href="#" id="expand" class=" "><img src="{{asset('doctorTheme/img/increase.png')}}" alt="Expand"></a>
                  </div>

                </header><!-- #head -->

               <div id="main"></div>

               <div class="clear">&nbsp;</div>
               <div class="clear">&nbsp;</div>

               <footer>
                  <a href="http://twitter.com/share" class="twitter-share-button" data-text="#HTML5Sticky - #Sticky #Notes for the #Web ! An #HTML5 App" data-count="horizontal" data-via="sarfraznawaz">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

                  <!-- Place this tag where you want the +1 button to render -->
               
                  <!-- Place this tag after the last plusone tag -->
                  <script>
                    (function() {
                      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                      po.src = 'https://apis.google.com/js/plusone.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                  </script>      
               </footer>
            </div>
        </div>
          <div class="col-sm-8 col-xl-8" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Emerging Diseases
                    <!-- <small>custom content</small> -->
                  </div>
                  <div class="card-body">
                    <div class="list-group" id="disease">
                      @php
                        $count=0;
                      @endphp
                      @foreach ($diseases as $disease)
                        {{-- expr --}}
                        @if ($count == 0)
                          <a class="list-group-item list-group-item-action flex-column align-items-start active" href="{{route('disease', [$disease->id])}}">
                          @else
                            <a class="list-group-item list-group-item-action flex-column align-items-start " href="#">
                        @endif
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">{{$disease->name}}</h5>  
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('theme/Images')}}/{{$disease->image}}" alt="{{$disease->image}}">
                        <p class="mb-1"> {{$disease->origin}}</p>
                        <p class="mb-1"> {{$disease->effects}}</p>
                        <p class="mb-1">{{$disease->symptom}}</p>
                        <small> {{$disease->diagnosis}}</small>              
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
<script>
  (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script src="{{asset('theme/JS/jquery-1.6.2.min.js')}}"></script>
<script type="text/javascript" >
$('#search').live('keyup',function(){
$value=$(this).val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('doctor/search')}}',
data:{'search':$value},
success:function(data){
console.log(data);
$('#disease').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
             
@endsection
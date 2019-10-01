@extends('layouts.patient')
@section('breadcrumb')
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          
          <li class="breadcrumb-item active">Dashboard</li>
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
      <!--<body class="app flex-row align-items-center">-->

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="clearfix">
        
             <h4 class="pt-3" align="center">Search Your Preferred Doctor</h4>
        
            </div>
            <div class="input-prepend input-group">
              <div class="input-group-prepend">
                 <span class="input-group-text">
                  <i class="fa fa-search"></i>
                </span>
               </div>
              <input class="form-control"  size="16" type="text" id="search" placeholder="Search Doctor">
              <!-- <span class="input-group-append">
                <button class="btn btn-info" id="search_btn" type="button">Search</button>
              </span> -->
            </div>
            <div id="div1"></div>
            <legend>
              <font size="3">
                <b>Search By Speciality</b>
              </font>
            </legend>

            <select name="group" id="speciality">
                <option value="Allergy & Immunology">ALLERGY & IMMUNOLOGY</option>
                <option value="Anesthesiology">ANESTHESIOLOGY</option>
                <option value="Dermatology">DERMATOLOGY+</option>
                <option value="Diagnostic Radiology">DIAGNOSTIC RADIOLOGY</option>
                <option value="Medicine">MEDICINE</option>
                <option value="Medical Genetics">MEDICAL GENETICS</option>
                <option value="Neurology">NEUROLOGY</option>
                <option value="Neuro Medicine"> NEURO MEDICINE</option>
                <option value="Obstetrics And Gynecology"> OBSTETRICS AND GYNECOLOGY</option>
                <option value="Opthalmology"> OPHTHALMOLOGY</option>
                <option value="Pathology"> PATHOLOGY</option>
                <option value="Pediatrics"> PEDIATRICS</option>
                <option value="Physical Medicine & Rehbilitation"> PHYSICAL MEDICINE & REHABILITATION</option>
                <option value="Psychiatry">PSYCHIATRY</option>
            </select>
   
            <legend>
              <font size="3">
                  <b>Search By Location</b>
              </font>
            </legend>

            <select name="group_location" id="location">
              <option value="Dhaka">Dhaka</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Khulna ">Khulna </option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Sylhet">Sylhet</option>
              <option value="Barisal">Barisal</option>
              <option value="Rangpur">Rangpur</option>
              <option value="Thakurgaon">Thakurgaon</option>
              <option value="Dinajpur"> Dinajpur </option>
              <option value="Rangamati "> Rangamati </option>
              <option value="Noakhali "> Noakhali </option>
              <option value="Khagrachari"> Khagrachari</option>
              <option value="Feni"> Feni</option>
              <option value="Cox's Bazar">Cox's Bazar</option>
              <option value="Comilla"> Comilla</option>
              <option value="Chandpur"> Chandpur</option>
              <option value="Brahmanbaria"> Brahmanbaria</option>
              <option value="Bandarban"> Bandarban</option>
              <option value="Perojpur"> Perojpur</option>
              <option value="Patuakhali"> Patuakhali</option>
              <option value="Barguna"> Barguna</option>
              <option value="Sunamganj"> Sunamganj</option>
              <option value="Moulvibazar"> Moulvibazar</option>
              <option value="Habiganj"> Habiganj</option>
              <option value="Sirajganj"> Sirajganj</option>
              <option value="Natore"> Natore</option>
              <option value="Naogaon"> Naogaon</option> 
              <option value="Joypurhat"> Joypurhat</option>     
            </select>
          </div>  
        </div>
        <div class="row justify-content-center" style="margin-left: 0px">
          <div class="col-sm-12 col-xl-12" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Doctor
                    <small>custom content</small>
                  </div>
                  <div class="card-body">
                    <div class="list-group" id="tbody">
                      @php
                        $count = 0;
                      @endphp
                      @foreach ($doctors as $doctor)
                      
                        @if ($count == 0)
                      <a class="list-group-item list-group-item-action flex-column align-items-start active" href="{{route('patient.doctorlist', [$doctor->id])}}">
                        @else
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="{{route('patient.doctorlist', [$doctor->id])}}">
                        @endif
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">{{$doctor->firstname}}&nbsp {{$doctor->lastname}}</h5>
                          <small>{{$doctor->degree}}</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('images')}}/{{$doctor->image}}" alt="Card image cap">
                        <p class="mb-1">{{$doctor->specialized}}</p>
                        <p class="mb-1">{{$doctor->location}}</p>
                        <p class="mb-1">{{$doctor->consulting}}</p>
                        <small>{{$doctor->contact}}</small>              
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
                        <li class="page-item active">
                          <a class="page-link" href="#">1
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="page-item ">
                          <a class="page-link" href="#">2
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
     <script src="{{asset('theme/JS/bootstrap.min.js')}}"></script>
     <script src="{{asset('theme/JS/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript">
  $('#search').on('keyup',function(){
$value=$(this).val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('patient/doctorlist')}}',
data:{'search':$value},
success:function(data){   
    console.log(data);
$('#tbody').html(data);
}
});
})


$('#speciality').on('change',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('patient/doctorlist/speciality')}}',
data:{'search':$value},
success:function(data){
$('#tbody').html(data);
}
});
})

$('#location').on('change',function(){
$value=$(this).val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('patient/doctorlist/location')}}',
data:{'search':$value},
success:function(data){
$('#tbody').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection    
    


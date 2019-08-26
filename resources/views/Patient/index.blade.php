@extends('layouts.patient')
@section('breadcrumb')
   <main class="main">
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

      </main>
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
              <span class="input-group-append">
                <button class="btn btn-info" id="search" type="button">Search</button>
              </span>
            </div>
            <div id="div1"></div>
            <legend>
              <font size="3">
                <b>Search By Speciality</b>
              </font>
            </legend>

            <select name="group">
                <option value="ALLERGY & IMMUNOLOGY">ALLERGY & IMMUNOLOGY</option>
                <option value="ANESTHESIOLOGY">ANESTHESIOLOGY</option>
                <option value="DERMATOLOGY">DERMATOLOGY+</option>
                <option value="DIAGNOSTIC RADIOLOGY">DIAGNOSTIC RADIOLOGY</option>
                <option value="MEDICINE">MEDICINE</option>
                <option value="MEDICAL GENETICS">MEDICAL GENETICS</option>
                <option value="NEUROLOGY">NEUROLOGY</option>
                <option value="NUCLEAR MEDICINE"> NUCLEAR MEDICINE</option>
                <option value="OBSTETRICS AND GYNECOLOGY"> OBSTETRICS AND GYNECOLOGY</option>
                <option value="OPHTHALMOLOGY"> OPHTHALMOLOGY</option>
                <option value="PATHOLOGY"> PATHOLOGY</option>
                <option value="PEDIATRICS"> PEDIATRICS</option>
                <option value="PHYSICAL MEDICINE & REHABILITATION"> PHYSICAL MEDICINE & REHABILITATION</option>
                <option value="PSYCHIATRY">PSYCHIATRY</option>
            </select>
   
            <legend>
              <font size="3">
                  <b>Search By Location</b>
              </font>
            </legend>

            <select name="group">
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
        <div class="row justify-content-center" style="margin-left: 200px">
          <div class="col-sm-12 col-xl-12" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Doctor
                    <small>custom content</small>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      @foreach ($doctors as $doctor)
                      <?php $name="abc"; ?>
                        @foreach ($users as $user)
                        <?php
                          if ($doctor->email == $user->email)
                            $name = $user->firstname;
                          $image = $user->image;
                          ?>
                        @endforeach
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">{{$name}}</h5>
                          <small>{{$doctor->degree}}</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{Storage::url($image)}}" alt="Card image cap">
                        <p class="mb-1">{{$doctor->specialized}}</p>
                        <p class="mb-1">{{$doctor->location}}</p>
                        <p class="mb-1">{{$doctor->consulting}}</p>
                        <small>{{$doctor->contact}}</small>              
                      </a>
                      @endforeach
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Dr. Md.Rezaul Haq</h5>
                          <small>MBBS(DU), FCPS(UK), MD(USA)</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('theme/Images/3.jpg')}}" alt="Card image cap">
                        <p class="mb-1"> Neuro Medicine</p>
                        <p class="mb-1"> Lab Aid Hospital, Panthpath, Dhaka.</p>
                        <p class="mb-1">3pm-8pm</p>
                        <small> 01454511511</small>
                      </a>
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Dr. Md.Rezaul Haq</h5>
                          <small>MBBS(DU), FCPS(UK), MD(USA)</small>
                        </div>
                        <img class="" style="width: 100px; height: 100px; float: right;" src="{{asset('theme/Images/3.jpg')}}" alt="Card image cap">
                        <p class="mb-1"> Neuro Medicine</p>
                        <p class="mb-1"> Lab Aid Hospital, Panthpath, Dhaka.</p>
                        <p class="mb-1">3pm-8pm</p>
                        <small> 01454511511</small>
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
      </div>
      <script type="text/javascript">
$('#search').on('change',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('search')}}',
data:{'search':$value},
success:function(data){
$('tbody').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection    
    


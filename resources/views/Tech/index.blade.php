@extends('layouts.tech')
@section('style')

<link href="patientTheme/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application-->
    <link href="{{asset('patientTheme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('patientTheme/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
     <script src="{{asset('theme/JS/jquery-3.4.1.min.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    
@endsection

 @section('nav')
    <ul>
      <li ><a href="{{route('tech')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
      <li><a href="{{route('tech.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
    </ul>
  @endsection
  
@section('content')
 
      <div class="container-fluid">
        <div class="row justify-content-center" style="margin-right: 200px; margin-top: 50px; margin-left:50px">
          <div class="col-sm-12 col-xl-12" >
                <div class="card" >
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Medical Test
                    <small>Upload here ducoment</small>
                    <div style="float: right">
                      <button class="btn btn-success" id="search">Search</button>
                    </div>
                    <div style="float: right;margin-right: 30px">
                      <input type="text" name="email" id="email" placeholder="Write Patient Email">
                    </div>
                    
                  </div>
                  <div class="card-body" >
                  	 <div class="list-group"id="body">
                  	 	@foreach ($tests as $test)
                  	 		{{-- expr --}}
                  	 	<form class="form"  method="post" enctype="multipart/form-data">
                    		@csrf
						<div class="d-flex w-100 justify-content-between" style="padding-top: 10px">
							<h5 class="mb-1">
								Prescraption ID: {{$test->pat_id}} 
							</h5>
							{{$test->test_name}}
							<input type="file" name="file_input">
							<input type="text" name="id" value="{{$test->id}}" hidden>
							<small>
								
								<button class="btn btn-sm btn-danger" type="submit">
                                <i class="fa fa-dot-circle-o"></i> submit</button>
							</small>
						</div>
						</form>
						@endforeach
						@if($errors->any())
		                    @foreach($errors->all() as $err)
		                    <span style="background-color: red">{{$err}}</span> <br>
		                    @endforeach
		                @endif
                  	 </div>
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
url : '{{URL::to('tech/search')}}',
data:{'search':$value},
success:function(data){
/*console.log(data);*/
$('#body').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection


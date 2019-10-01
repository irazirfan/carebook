@extends('layouts.doctor')
@section('style')
<title>Prescription</title>
<link rel="stylesheet" href="{{asset('css/all.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/autocomplete.css')}}">
<link rel="stylesheet" href="{{asset('theme/CSS/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('theme/CSS/DoctorHomeStyle.css')}}">

<link href="patientTheme/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
<link href="patientTheme/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
<link href="patientTheme/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="patientTheme/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<!-- Main styles for this application-->
<link href="{{asset('patientTheme/css/style.css')}}" rel="stylesheet">
<link href="{{asset('patientTheme/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics-->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
 <!-- profiler content -->
 <link href="{{asset('theme/CSS/bootstrap.min.css')}}" >
<script src="{{asset('theme/JS/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/JS/jquery-3.4.1.min.js')}}"></script>

<style>

	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td {
		border: 1px solid #05d1ff;
		text-align: left;
		padding: 0px;
	}

	tr:nth-child(even) {
		background-color: #a3eeff;
	}
	.symtom_table  td {
		border: 0px solid ;
		text-align: left;
		padding: 0px;
	}
	.med_table td {
		border: 0px solid ;
		text-align: left;
		padding: 0px;
	}
	.test_table td {
		border: 0px solid ;
		text-align: left;
		padding: 0px;
	}
	.symtom_table tr:nth-child(even) {
		background-color: ;
	}
	.test_table tr:nth-child(even) {
		background-color: ;
	}
	.med_table  tr:nth-child(even) {
		background-color: ;
	}
	.even  tr:nth-child(even) {
		background-color: ;
	}
	.button {
		background-color: #0260f7;
		border: none;
		color: white;
		padding: 10px 30px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}
	.container{
		border: 1px solid black;
		background-color: white;
		height: 800px;
		width: 50%;
		margin: 0 auto;
		margin-top: 50px;

	} 

	.top-section{

		background: gray;
		height :40px;
		width: 70%;
		margin : 0 auto;
		margin-top: 50px;
		border-radius: 10px;
	}
	.main{
		list-style: none; 
	}
	.main li{
		float: left;
		height: 50px;
		width: 30%;

	}
	.horizontal-line{
		height:525px;
		left: 50px;
		position: absolute;
		float: left;
	}
	.vertical-line{
		height:500px;
		border-left: 1px black solid;
		right: 400px;
		position: absolute;
		float: right;


	}
</style>
@endsection
@section('content')
<!------------------- header part start------------------------->
@section('nav')
<ul>
	<li ><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
	<li class="active"><a href="{{route('doctor.prescription')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
	<li><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
	<li><a href="{{route('doctor.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
	<li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
</ul>
@endsection
<div class="container bootstrap snippet">
	<div class="row" style="padding-left:20px; padding-right: 20px">
		<div class="prescription1">
              	{{$doctor->firstname}} &nbsp {{$doctor->lastname}} <br>
              	{{$doctor->specialized}}<br>
              	{{$doctor->degree}}<br>
              	{{$doctor->location}}<br>

        </div> 
              <!-- doctor info block end-->
        <div class="prescription2">

        </div>
        <div class="prescription3">
              	<div id="date_val">

              	</div><br>

              	Prescription id: <br>

          </div> 
	</div>
	<div class="row">
		<div class="col-sm-12">
				<ul class="nav nav-tabs">
	                <li class="active"><a data-toggle="tab" href="#home">Dashboard</a></li>
	                <li><a data-toggle="tab" href="#symptom">Symptoms</a></li>
	                <li><a data-toggle="tab" href="#test">Tests</a></li>
	                <li><a data-toggle="tab" href="#medicine">Medicine</a></li>
	                <li><a data-toggle="tab" href="#press">Prescription</a></li>
	            </ul>
			
            <div class="tab-content">
                <div class="tab-pane active" id="home" style="height: 300px; ">
                	<hr>
                	<div class="" style="padding-left: 20px;">
                		<div class="form-group">
                    		<div class="col-xs-8">
                                <label for="patient_email"><h4>Patient email:</h4></label>&nbsp;
                                <input type="text" name="patientId" id="patientid" value="">&nbsp;
              					<button type="submit" class="btn btn-info" id='pat_search' name="pat_search">Search</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <label for="patient_name"><h4>Patient Name:</h4></label>
                                <input type="text" name="pname" id="pname" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <label for="patient_age"><h4>Age</h4></label>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b>
                                <input type="number" name="age" value="">
                            </div>
                        </div>
                      </div>
                      <nav aria-label="..." style="float: right; padding-top: 20px;padding-right: 10px">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#symptom">Next</a>
                        </li>
                      </ul>
                    </nav>    
                    	
                </div>
                <div class="tab-pane" id="symptom" style="height: 400px">
                    <hr>
                    <div class="row">
	                    <div class="col-sm-6">
	                    	<div class="form-group">
	                    		<div class="col-xs-8">
	                                <label for="new_password"><h4>Symptomps:</h4></label>
	                                <input type="text" name="s_field1" id="s_field" style="height:30px"  placeholder="Write here" >
	                                
	                            </div>
	                            <div class="col-xs-8" style="padding-top: 20px; padding-left: 120px ">
	                            	<button type="button" class="btn btn-info" onclick="addNewSymtoms()" id="add_symptom">Add Symtoms</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-3" style="height: 230px">
							<h3><u>Symptoms</u></h3> 
	 						<table border="0" align="center" id="symtom_table1" class="symtom_table">
	 						</table>
	                    </div>
                    </div>
                    <nav aria-label="..." style="float: right; padding-top: 0px;padding-right: 10px">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#symptom" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#test">Next</a>
                        </li>
                      </ul>
                    </nav> 
                </div>
                <div class="tab-pane " id="test" style="height: 400px">
                    <hr>
                    <div class="row">
	                    <div class="col-sm-6">
	                    	<div class="form-group">
	                    		<div class="col-xs-8"> 
		                            <label for="Test"><h4>Test:</h4></label>&nbsp; &nbsp;
		                            <input type="text" name="t_field" id="t_field" style="height:30px" placeholder="Write here"> 
	                            </div>
	                            <div class="col-xs-8" style="padding-top: 20px; padding-left: 100px ">
	                            	<button type="button" class="btn btn-info" onclick="addNewTest()" id="add_test">Add Test</button>
	                            </div>  
	                        </div>
	                    </div>
	                    <div class="col-sm-3" style="height: 230px">
							<h3><u>Tests</u></h3> 
	 						<table border="0" align="center" id="test_table1" class="test_table">
	 						</table>
	                    </div>
                    </div>
                    
                    <nav aria-label="..." style="float: right; padding-top: 0px;padding-right: 10px">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#test" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#medicine">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
                <div class="tab-pane " id="medicine" style="height: 630px">
                    <hr>
                    <div class="row">
	                    <div class="col-sm-6">
	                    	<div class="form-group">
	                    		<div class="col-xs-8"> 
		                            <label for="Test"><h4>Medicine:</h4></label>
		                            <input type="text" name="medicineName" id="medicineName" placeholder="Write medicine name here">
	                            </div>  
	                        </div>
	                        <div class="form-group">
	                        	<div class="col-xs-8"> 
		                            <label for="Test"><h4>Days:</h4></label>
		                            <input type="number" name="days" id="days">
	                            </div>  
	                        </div>
	                        <div class="form-group">
	                        	<div class="col-xs-8"> 
		                            <label for="Test"><h4>Morning:</h4></label>
		                            <input type="number" name="morning" id="morning" placeholder="Morning">
	                            </div>  
	                        </div>
	                        <div class="form-group">
	                        	<div class="col-xs-8"> 
		                            <label for="Test"><h4>Afternoon:</h4></label>
		                            <input type="number" name="afternoon" id="afternoon" placeholder="afternoon">
		                        </div>  
	                        </div>
	                        <div class="form-group">
	                        	<div class="col-xs-8"> 
		                            <label for="Test"><h4>Evening:</h4></label>
		                            <input type="number" name="evening" id="evening" placeholder="evening">
	                            </div>  
	                        </div>
	                        <div class="form-group">
	                        	<div class="col-xs-8"> 
		                            <label for="Test"><h4>Night:</h4></label>
		                            <input type="number" name="night" id="night" placeholder="night">
	                            </div>  
	                        </div>
	                        <div class="form-group">
	                        	<div class="col-xs-8"> 
		                            <label for="Test"><h4>Comment:</h4></label>
		                            <input type="text" name="comment" id="comment" placeholder="Comment">
	                            </div>  
	                        </div>
	                        <div class="form-group">
								<div class="col-xs-8">
	              					<label for="Test"><h4>Visit me after</h4></label>
	              					 <input type="number" name="time" id="time">
	              					<select id="duration">
	              						<option value="days">days</option>
	              						<option value="month">months</option>
	              					</select>
	              					<button type="button" class="btn btn-info" id="add_visit">Add Visits</button>  
								</div>
	              			</div>
	              			<div class="form-group">
	              				<div class="col-xs-8" style="padding-top: 20px; padding-left: 20px ">
	                            	<button type="button" class="btn btn-info" onclick="addNewMedicine()" id="add_medicine">Add Medicine</button>
	                            </div>
	              			</div>
	                    </div>
	                    <div class="col-sm-3">
							<h3><u>Medicines:</u></h3> 
	 						<table border="0"  id="med_table1" class="med_table">
	 						</table>
	                    </div>
                    </div>
                     <nav aria-label="..." style="float: right; padding-top: 0px;padding-right: 10px">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#medicine" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" data-toggle="tab" href="#press">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
                <div class="tab-pane " id="press" style="height: 1100px">
                	<div class="container" style="width: 1000px; height: 900px">
			 			<h1 align="center"> CareBook</h1>
			 			<h3 align="center">CareBook professional team is always here to help you</h3>
			 			<h4 align="center">We care about you</h4>

			 			<div class="top-section">
			 				<h2 align="center"><b>CareBook Prescription</b></h2>

			 			</div>
			 			<form  method="post" autocomplete="off" onsubmit="return presSave()">
			 				@csrf
			 				<div class="nav">
			 					<ul class="main">
			 						<li><b>Name:</b><input type="text" name="patient_name" id="patient_name" style="border-color: transparent; width: 200px" readonly></li>
			 						<li><b>ID No:</b></li>
			 						<li><b>Date/Time:</b><input type="text" name="date" id="date" style="border-color: transparent" readonly></li>
			 						<li><b>Age/Sex:</b><input type="text" name="patient_sex" id="patient_sex" style="border-color: transparent" readonly></li>
			 						<li><b>Consultant:</b><input type="text" name="doctor_name" style="border-color: transparent" value="{{$doctor->firstname}}" readonly ></li>
			 					</ul>
			 				</div>
			 				<br clear="all">

			 				<div class="note">
			 					<b><hr></b>
			 					<div class="horizontal-line" style="float: left; padding-left:30px">
			 						<h3><u>Symptoms</u></h3> 
			 						<table border="0" align="center" id="symtom_table" class="symtom_table">


			 						</table>
			 					</div>
			 					<div class="vertical-line" style="float: right">
			 						<div  style=" width: 70%; margin-left:30px; " >
			 							<h4>Clinical diagnosis:</h4> 
			 							<h4>Treatment:</h4> 
			 							<div class="mainp4" style="padding-left: 150px">
			 								<table border="0"  id="med_table" class="med_table">


			 								</table>
			 							</div>
			 						</div>
			 						<div style=" width: 70%; padding-left: 30px">
			 							<h3>Test:</h3> 
			 							<table border="0" align="center" id="test_table" class="test_table">


			 							</table>
			 							<b>Visit after <input type="text" name="timezone" id="timezone" style="border-color: transparent; width: 20px" readonly> <input type="text" name="visit" id="visit" style="border-color: transparent; width: 40px" readonly></b>
			 						</div>
 								</div>
 							</div>
				 			<input type="text" name="patient_email" id="pat_email" hidden>
				 			<input type="number" name="sym_row" id="sym_row" hidden>
				 			<input type="number" name="test_row" id="test_row" hidden>
				 			<input type="number" name="med_row" id="med_row" hidden>
				 			
				 			
					</div>
					<div id="action_block">
				 		<input type="submit" class="button" name="save" id="save" value="Save">
				 		<input type="submit" class="button" name="discard" value="Discard">
				 	</div>
				 	</form>
           		</div>
			</div>
		</div>
	</div>
</div>

 		<script type="text/javascript">
 			$('#save').on('click',function(){
 				console.log( "ready!" );
 				var symTableRow = document.getElementById('symtom_table').rows.length;
 				var tesTableRow = document.getElementById('test_table').rows.length;
 				var medTableRow = document.getElementById('med_table').rows.length;
 				console.log(symTableRow);
 				$("#sym_row").attr("value",symTableRow);
 				$("#test_row").attr("value",tesTableRow);
 				$("#med_row").attr("value",medTableRow);


    /*document.getElementById('test_row').value = tesTableRow;
    document.getElementById('med_row').value = medTableRow;*/
});
</script>
<script type="text/javascript" >
	$('#pat_search').on('click',function(){
		$value=$('#patientid').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('doctor/press/search')}}',
			data:{'search':$value},
			success:function(data){
				$('#pname').attr("value",data[0]);
				$('#patient_name').attr("value",data[0]);
				$('#patient_sex').attr("value",data[1]);
				$('#pat_email').attr("value",data[2]);
				console.log(data[2]);

			}
		});
	})

	$('#add_symptom').on('click',function(){
		$value=$('#s_field').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('doctor/press/symptom')}}',
			data:{'search':$value},
			success:function(data){
			}
		});
	})

	$('#add_test').on('click',function(){
		$value=$('#t_field').val();
		$email=$('#patientid').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('doctor/press/test')}}',
			data:{'search':$value, 'email':$email},
			success:function(data){
			}
		});
	})

	$('#add_medicine').on('click',function(){
		$value=$('#medicineName').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('doctor/press/medicine')}}',
			data:{'search':$value},
			success:function(data){
			}
		});
	})
	$('#add_visit').on('click',function(){
		$time=$('#time').val();
  //console.log($time);
  $duration=$('#duration').val();
  $("#timezone").attr("value",$time);
  $("#visit").attr("value",$duration);
})
</script>
<script type="text/javascript">
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
@section('script')
<script src="{{asset('theme/JS/jquery.min.js')}}"></script>
<script src="{{asset('theme/JS/pdfobject.min.js')}}"></script>
<script src="{{asset('theme/JS/pres.js')}}"></script>
<!-- <script src="pres.js"></script> -->
@endsection
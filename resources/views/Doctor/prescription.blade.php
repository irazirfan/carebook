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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

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
    height: 900px;
    width: 60%;
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
    left: 100px;
    position: absolute;
    float: left;
  }
  .vertical-line{
    height:500px;
    border-left: 1px black solid;
    right: 500px;
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
    <div class="full-wrapper prescription-bg">
            <div class="wrapper prescription-item">
               <!-- <div class="prescription-header">
                  <h2>Prescription</h2>
               </div> -->
               <div class="prescription1">
                {{$doctor->firstname}} &nbsp {{$doctor->lastname}} <br>
            {{$doctor->specialized}}<br>
            {{$doctor->degree}}<br>
            {{$doctor->location}}<br>
                   
               </div> 
               <!-- doctor info block end-->
               <div class="prescription2">
                   
               </div> 
               <!-- prescription info block start-->
               <div class="prescription3">
                   <div id="date_val">
                    
                   </div><br>
               
               Prescription id: <br>
                   
               </div> 
               <!-- prescription info block end-->
               <div class="clr"></div>

        
        <!--- patient info block-->
        <div class="patient1">
          <table border="0" align="center">

        <tr>
          <td>Patient email:</td>
          <td> <input type="text" name="patientId" id="patientid" value=""></td>
         <td><button type="submit" class="button" id='pat_search' name="pat_search">Search</button></td>
        </tr>
        <tr>
        <td>Patient Name:</td>
        <td> <input type="text" name="pname" id="pname" value=""> </td>
        <td><input type="submit" class="button" name="history" value="View history"></td>
         </tr>
        <tr>
         <td>Age</td>
         <td colspan="2"> <input type="number" name="age" value=""></td>
        </tr>
        
        
      
       </table>
                   
               </div>  
            
               <!-- patient info block end-->
               <div class="clr"></div>

               <!--- main prescription info block-->
          
              
              <table>
              
                <tr>
                  <td>
                    <table>
                      <tr>
                        <td>
                          <div class="mainp2">
                            Symtoms: 
                    <table border="0" align="center" id="symtom">
                              
                      <tr><td>
                        <div class="autocomplete" style="position: relative;">
                         <input type="text" name="s_field1" id="s_field"  placeholder="Write here" >
                        </div>
                      </td></tr> 
                    </table>
                    <button type="button" onclick="addNewSymtoms()" id="add_symptom">Add Symtoms</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="mainp3">
                            Tests:
                            <table border="0" align="center" id="">
                                <tr><td>
                                  <div class="autocomplete">
                                  <input type="text" name="t_field" id="t_field" placeholder="Write here">
                                  </div>
                                  
                                </td></tr>
                            </table>
                            <button type="button" onclick="addNewTest()" id="add_test">Add Test</button>
                        </div>  
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td>
                    <div class="mainp4" id="medicine_block">
                    <table id="">
                      <tr>
                        <td>
                          
                          <div id="m_field" class="design">
                          <div class="autocomplete">
                          <input type="text" name="medicineName" id="medicineName" placeholder="Write medicine name here"> 
                          </div>
                          days<input type="number" name="days" id="days"> <br>
                          
                          
                          <input type="number" name="morning" id="morning" placeholder="Morning"> 
                          <input type="number" name="afternoon" id="afternoon" placeholder="afternoon">
                          <input type="number" name="evening" id="evening" placeholder="evening">
                          <input type="number" name="night" id="night" placeholder="night"> 
                          <input type="text" name="comment" id="comment" placeholder="Comment"><br>
                        
                        </div>
                      
                        </td>
                      </tr>
                    </table>
                    <button type="button" onclick="addNewMedicine()" id="add_medicine">Add Medicine</button> <br>
            </div>
                  </td>
                </tr>
              </table>
             <div id="footer_block">
              
    
      <tr><td>Visit me after <input type="number" name="time" id="time"> 
      <select id="duration">
        <option>days</option>
        <option>months</option>
      </select>
      </td></tr>  
    
  </div>
  
 <!--  <div class="card">
   <div class="card-body" style="margin-bottom: 40px"> -->
      <div class="container">
      <h1 align="center"> CareBook</h1>
      <h3 align="center">CareBook professional team is always here to help you</h3>
      <h4 align="center">We care about you</h4>

      <div class="top-section">
        <h1 align="center"><b>CareBook Prescription</b></h1>
        
      </div>
 <form  method="post" autocomplete="off" onsubmit="return presSave()">
                @csrf
      <div class="nav">
        <ul class="main">
          <li><b>Name:</b><input type="text" name="patient_name" id="patient_name" style="border-color: transparent" readonly></li>
          <li><b>ID No:</b></li>
          <li><b>Date/Time:</b><input type="text" name="date" id="date" style="border-color: transparent" readonly></li>
          <li><b>Age/Sex:</b><input type="text" name="patient_sex" id="patient_sex" style="border-color: transparent" readonly></li>
          <li><b>Consultant:</b><input type="text" name="doctor_name" style="border-color: transparent" value="{{$doctor->firstname}}" readonly ></li>
        </ul>
      </div>
      <br clear="all">
      
      <div class="note">
          <b><hr></b>
        <div class="horizontal-line" style="float: left">
          <h3><u>Symptoms</u></h3> 
          <table border="0" align="center" id="symtom_table" class="symtom_table">
                              
            
          </table>
        </div>
        <div class="vertical-line" style="float: right">
           <div  style=" width: 100%; margin-left:30px; float: right" >
              <h4>Clinical diagnosis:</h4> 
              <h4>Treatment:</h4> 
                <div class="mainp4" style="padding-left: 30px">
                  <table border="0"  id="med_table" class="med_table">
                                      
                    
                  </table>
                </div>
           </div>
           <div style=" width: 100%; padding-left: 30px">
             <h3>Test:</h3> 
              <table border="0" align="center" id="test_table" class="test_table">
                                  
                
              </table>
              <b>Visit after <input type="text" name="timezone" id="timezone" hidden> &nbsp <input type="text" name="visit" id="visit" hidden></b>
           </div>
           
        </div>
        
      </div>
  </div>
  <input type="text" name="patient_email" id="pat_email" hidden>
  <input type="number" name="sym_row" id="sym_row" hidden>
      <input type="number" name="test_row" id="test_row" hidden>
      <input type="number" name="med_row" id="med_row" hidden>
    <div id="action_block">
        <input type="submit" class="button" name="save" id="save" value="Save">
        <input type="submit" class="button" name="discard" value="Discard">
    </form>
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

    $time=$('#time').val();
    $duration=$('#duration').val();
     $("#timezone").attr("value",time);
    $("#visit").attr("value",duration);
    /*document.getElementById('test_row').value = tesTableRow;
    document.getElementById('med_row').value = medTableRow;*/
    });
  </script>
  <script type="text/javascript" >
$('#pat_search').on('click',function(){
$value=$('#patientid').val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('doctor/press/search')}}',
data:{'search':$value},
success:function(data){
console.log(data);
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
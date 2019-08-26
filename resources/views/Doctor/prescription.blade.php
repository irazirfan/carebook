@extends('layouts.doctor')
@section('style')
    <title>Prescription</title>
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/autocomplete.css')}}">
        <link rel="stylesheet" href="{{asset('theme/CSS/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/CSS/DoctorHomeStyle.css')}}">
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
    </style>
    @endsection
    @section('content')
    <!------------------- header part start------------------------->
        @section('nav')
            <ul>
                <li ><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
                <li class="active"><a href="{{route('doctor.prescription')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
                <li><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
                <li><a href="{{route('doctor.notification')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Notification</span></a></li>
                <li><a href="{{route('doctor.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                <li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
            </ul>
        @endsection
    <div class="full-wrapper prescription-bg">
            <div class="wrapper prescription-item">
               <div class="prescription-header">
                  <h2>Prescription</h2>
               </div>
               <div class="prescription1">
                Doctor name <br>
            Degrees <br>
            Additional info<br>
                   
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
            <form action="patientData.php" method="post">
        <tr>
          <td>Patient email:</td>
          <td> <input type="text" name="patientId" id="patient_id" value"></td>
         <td><button type="submit" class="button" id='pat_search' name="pat_search">Search</button></td>
        </tr>
        <tr>
        <td>Patient Name:</td>
        <td> <input type="text" name="pname" value=""> </td>
        <td><input type="submit" class="button" name="history" value="View history"></td>
         </tr>
        <tr>
         <td>Age</td>
         <td colspan="2"> <input type="number" name="age" value=""></td>
        </tr>
        
        </form>
        
      
       </table>
                   
               </div>  
            
               <!-- patient info block end-->
               <div class="clr"></div>

               <!--- main prescription info block-->
          
               <form action="presInsert.php" method="post" autocomplete="off" onsubmit="return presSave()">
              <table>
              
                <tr>
                  <td>
                    <table>
                      <tr>
                        <td>
                          <div class="mainp2">
                            Symtoms: 
                    <table border="0" align="center" id="symtom_table">
                              
                      <tr><td>
                        <div class="autocomplete" style="position: relative;">
                         <input type="text" name="s_field_1" id="s_field_1"  placeholder="Write here" >
                        </div>
                      </td></tr> 
                      <tr><td>
                      <div class="autocomplete">
                        <input type="text" name="s_field_2" id="s_field_2" placeholder="Write here"> 
                      </div>
                      </td></tr>
                      <tr><td>
                      <div class="autocomplete">
                        <input type="text" name="s_field_3" id="s_field_3" placeholder="Write here"> 
                      </div>
                      </td></tr>
                      <tr><td>
                      <div class="autocomplete">
                        <input type="text" name="s_field_4" id="s_field_4" placeholder="Write here">
                      </div>
                      </td></tr> 
                    </table>
                    <button type="button" onclick="addNewSymtoms()">Add new field</button>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="mainp3">
                            Tests:
                            <table border="0" align="center" id="test_table">
                                <tr><td>
                                  <div class="autocomplete">
                                  <input type="text" name="t_field_1" id="t_field_1" placeholder="Write here">
                                  </div>
                                  
                                </td></tr>
                                <tr><td>
                                <div class="autocomplete">
                                  <input type="text" name="t_field_2" id="t_field_2" placeholder="Write here">
                                </div>
                                </td></tr>
                                <tr><td>
                                <div class="autocomplete">
                                  <input type="text" name="t_field_3" id="t_field_3" placeholder="Write here">
                                  </div>
                                </td></tr>
                                <tr><td>
                                <div class="autocomplete">
                                  <input type="text" name="t_field_4" id="t_field_4" placeholder="Write here">
                                  </div>
                                </td></tr>
                            </table>
                            <button type="button" onclick="addNewTest()">Add new field</button>
                        </div>  
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td>
                    <div class="mainp4" id="medicine_block">
                    <table id="med_table">
                      <tr>
                        <td>
                          
                          <div id="m_field_1" class="design">
                          <div class="autocomplete">
                          <input type="text" name="medicineName_1" id="medicineName_1" placeholder="Write medicine name here"> 
                          </div>
                          days<input type="number" name="days_1"> <br>
                          
                          
                          <input type="number" name="morning_1" placeholder="Morning"> 
                          <input type="number" name="afternoon_1" placeholder="afternoon">
                          <input type="number" name="evening_1" placeholder="evening">
                          <input type="number" name="night_1" placeholder="night"> 
                          <input type="text" name="comment_1" placeholder="Comment"><br>
                        
                        </div>
                      
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <div id="m_field_2">
                        <div class="autocomplete">
                        <input type="text" name="medicineName_2" id="medicineName_2" placeholder="Write medicine name here">
                        </div>
                         days <input type="number_2" name="days_2"> <br>
                        
                        <input type="number" name="morning_2" placeholder="Morning"> 
                        <input type="number" name="afternoon_2" placeholder="afternoon">
                        <input type="number" name="evening_2" placeholder="evening">
                        <input type="number" name="night_2" placeholder="night"> 
                        <input type="text" name="comment_2" placeholder="Comment"><br>
                    </div>              
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div id="m_field_3">
                           <div class="autocomplete">
                        <input type="text" name="medicineName_3" id="medicineName_3" placeholder="Write medicine name here"> 
                        </div>
                        days <input type="number_3" name="days_3"> <br>
                        
                        <input type="number" name="morning_3" placeholder="Morning"> 
                        <input type="number" name="afternoon_3" placeholder="afternoon">
                        <input type="number" name="evening_3" placeholder="evening">
                        <input type="number" name="night_3" placeholder="night"> 
                        <input type="text" name="comment_3" placeholder="Comment"><br>
                    </div>
                        </td>
                      </tr>
                    </table>
                    <button type="button" onclick="addNewMedicine()">Add new field</button> <br>
            </div>
                  </td>
                </tr>
              </table>
             <div id="footer_block">
              
    
      <tr><td>Visit me after <input type="number" name="value"> 
      <select>
        <option>days</option>
        <option>months</option>
      </select>
      </td></tr>  
  
  
  </div>
  <div id="action_block">
    
      <tr><td>
        <input type="submit" class="button" name="save" value="Save">
        <input type="submit" class="button" name="discard" value="Discard">
    </td>
    </tr>
    </form>
  </div>
@endsection
@section('script')
    <script src="{{asset('theme/JS/jquery.min.js')}}"></script>
    <script src="{{asset('theme/JS/pdfobject.min.js')}}"></script>
    <script src="{{asset('js/press.js')}}"></script>
    <!-- <script src="pres.js"></script> -->
@endsection
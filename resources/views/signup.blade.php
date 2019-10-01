<html>
<head>
<meta charset="utf-8">
<title>CareBook</title>
<link href="{{asset('theme/CSS/SignUp.css')}}" rel="stylesheet"  > 
<link rel="stylesheet" href="{{asset('theme/CSS/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('theme/CSS/CareBookHomeStyle.css')}}">
<script src="{{asset('theme/CSS/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- <script src="{{asset('theme/JS/signup.js')}}"></script> -->
<style type="text/css">
  .doctor{
    display: none;
  }
  .tech{
    display: none;
  }
</style>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-inverse bg-light">
      <a class="navbar-brand" href="/">CareBook</a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler toggler-example purple darken-3" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent41" aria-controls="navbarSupportedContent41" aria-expanded="false"
        aria-label="Toggle navigation"><span class="white-text"><i class="fas fa-bars fa-1x"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.pricing')}}">Pricing</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home.signup')}}">Sign up</a>
            </li>
        </ul>
      </div>
    </nav>
<div class="container" >
            <form class="form-horizontal" role="form" method="post" >
                @csrf
                <h2>Registration</h2>
                <div  id="main">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name"  name="firstname"  class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" placeholder="Last Name" name="lastname" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" name="email" class="form-control" name= "email" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_assword" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="cpassword" placeholder="Confirm Password" name="compass"  class="form-control" autofocus required>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate" id="uday" onblur="datechk()" class="form-control" autofocus required>
                    </div> -->
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="text" id="phoneNumber" placeholder="Phone number" name="phone" onblur="getPhone()" class="form-control" autofocus required>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female"> Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="Male"> Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="otherRadio" value="Other"> Other
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
				<div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" id="address" name="address" onkeydown="genderValid()" placeholder="Address" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group" id="">
                    <label for="nid" class="col-sm-3 control-label">NID* </label>
                    <div class="col-sm-9">
                        <input type="number" id="nid" placeholder="1098657893" name="nid" class="form-control">
                        <span class="help-block">Your NID Number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">SignUp As* </label>
                    <div class="col-sm-9">
                        <select name="usertype" id="usertype">
                            <option value="none" selected disabled>Please select an option</option>
                            <option value="Patient">Patient</option>
              							<option value="Doctor">Doctor</option>
              							<option value="Technation">Technation</option>
            						</select>
                    </div>
                </div>
                <div class="doctor" id="doctor">
                    <div class="form-group" >
                        <label for="nid" class="col-sm-3 control-label">BMDC No.* </label>
                        <div class="col-sm-9">
                            <input type="number" id="bmdc" placeholder="1098657893" name="bmdc" class="form-control">
                            <span class="help-block">Your BMDC Number won't be disclosed anywhere </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="degree" class="col-sm-3 control-label">Degree*</label>
                        <div class="col-sm-9">
                            <input type="text" id="degree" name="degree" placeholder="Degree" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="specialized" class="col-sm-3 control-label">Specialized*</label>
                        <div class="col-sm-9">
                            <input type="text" id="specialized" name="specialized" placeholder="Specialized" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="consulting" class="col-sm-3 control-label">Consulting*</label>
                        <div class="col-sm-9">
                            <input type="text" id="consulting" name="consulting" placeholder="Consulting hours" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Location/Chambers*</label>
                        <div class="col-sm-9">
                            <input type="text" id="location" name="location" placeholder="Location/Chambers" class="form-control" autofocus>
                        </div>
                    </div>

                </div>
                <div class="form-group tech" id="tech">
                    <label for="center" class="col-sm-3 control-label">Center Number*</label>
                    <div class="col-sm-9">
                        <input type="number" id="center" name="center" placeholder="Center No." class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                </div>
                
                 <input type="submit" name="submit" value="submit">
            </form> <!-- /form -->
        </div> <!-- ./container -->
<script>
  $('#usertype').on('change',function(){
    //$("#doctor").hide();
    $value=$('#usertype').val();
    console.log($value);
  
    if($value == "Doctor")
      {
        $("#doctor").show();

        $('#bmdc').attr('required','true');
        $('#degree').attr('required','true');
        $('#specialized').attr('required','true');
        $('#consulting').attr('required','true');
        $('#location').attr('required','true');

        $("#tech").hide();
        //$("#doctor").style.display="block";
    }
    else if($value == "Technation")
    {
      $("#doctor").hide();
      $("#tech").show();
    }
    else
    {
      $("#doctor").hide();
      $("#tech").hide();
    }
});
</script>

</body>
</html>
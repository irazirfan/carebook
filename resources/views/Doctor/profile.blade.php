@extends('layouts.doctor')
@section('style')

<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('patientTheme/js/profile.js')}}">

    <link href="{{asset('theme/CSS/bootstrap.min.css')}}">
    <script src="{{asset('theme/JS/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/JS/jquery-3.4.1.min.js')}}"></script>
    <!-- for nav bar -->
    <link href="patientTheme/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('patientTheme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('patientTheme/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

    
    
@endsection

@section('content')
  @section('nav')
    <ul>
      <li ><a href="{{route('doctor')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
      <li ><a href="{{route('doctor.prescription')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Prescription</span></a></li>
      <li ><a href="{{route('doctor.patient')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Patient</span></a></li>
      <li class="active"><a href="{{route('doctor.profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
    </ul>
  @endsection

<!------ Include the above in your HEAD tag ---------->


<hr> 
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>User name</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <form class="form"  method="post" enctype="multipart/form-data">
                @csrf
            <div class="text-center">
                @if ($user->image == null)
                    {{-- expr --}}
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                @else
                <img src="{{asset('images')}}/{{$user->image}}" class="avatar img-circle img-thumbnail" alt="{{$user->image}}"> 
                @endif
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload" name="image">
            </div></hr><br>
        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
                <li><a data-toggle="tab" href="#edit-profile">Edit Profile</a></li>
                <li><a data-toggle="tab" href="#change-password">Change Password</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="profile" style="height: 400px">
                    <hr>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <br>
                                <label>{{$user->firstname}}</label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <br/>
                                <label>{{$user->lastname}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <br/>
                                <label>{{$user->email}}</label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <br>
                                <label>{{$user->phone}}</label>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="gender"><h4>Gender</h4></label>
                                <br>
                                <label>{{$user->gender}}</label>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="address"><h4>Address</h4></label>
                                <br>
                                <label>{{$user->address}}</label>
                            </div>
                        </div>


                </div><!--/tab-pane-->
                <div class="tab-pane" id="edit-profile" style="height: 400px">

                    <h2></h2>

                    <hr>
                    
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>First name</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" value="{{$user->firstname}}" title="enter your first name if any." required>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name"><h4>Last name</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" value="{{$user->lastname}}" title="enter your last name if any." required>
                            </div>
                        </div>

                       <!--  <div class="form-group">
                       
                           <div class="col-xs-6">
                               <label for="email"><h4>Email</h4></label>
                               <input type="email" class="form-control" name="email" id="email" value="" title="enter your email." required>
                           </div>
                       </div> -->

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}" title="enter your phone number if any." required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="address"><h4>Address</h4></label>
                                <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}" title="enter an address" required>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            </div>
                        </div> -->

                </div><!--/tab-pane-->
                <div class="tab-pane" id="change-password" style="height: 400px">

                    <hr>

                            <div class="col-xs-7">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password." required><span id="error"></span>
                            </div>

                        <div class="form-group">

                            <div class="col-xs-7">
                                <label for="new_password"><h4>New Password</h4></label>
                                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="new password" title="enter your new password." required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-7">
                                <label for="confirm_password"><h4>Confirm Password</h4></label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm password" title="enter your confirm password." required>
                            </div>
                        </div>
                        

            </div><!--/tab-pane-->
            <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-left" type="submit" id="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                        </div>
                    </form>
            <div>
                @if($errors->any())
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                @endif
            </div>
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->
</div>
<script type="text/javascript">
$('#new_password').on('click',function(){
$value=$('#password').val();
$.ajax({
type : 'get',
url : '{{URL::to('doctor/profile/search')}}',
data:{'search':$value},
success:function(data){   
    if(data == 'true'){
        $('#submit').prop('disabled', true);
        $('#error').text('Current Password is wrong!');
    }
    if(data != 'true'){
        $('#submit').prop('disabled', false);
        $('#error').text('');
    }
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Technation | Carebook</title>
    @yield('style')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link rel="stylesheet" href="{{asset('css/doctor.css')}}">
    <script type="text/javascript" src="{{asset('js/doctor.js')}}"></script>
    <link href="patientTheme/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body class="home ">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{asset('patientTheme/img/brand/log3.png')}}" width="89" height="25" alt="CareBook Logo">
      </a>

      <ul class="nav navbar-nav ml-auto" style="">

        <li class="nav-item dropdown" style="padding-left: 1000px">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{asset('images')}}/{{$customer->image}}" alt="fahim@gmail.com">
          </a>
        </li>

      </ul>

    </header>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
               
                <div class="navi" style="height: 540px">
                    @yield('nav')
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">

                <div class="user-dashboard">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- <footer class="app-footer">
          <div>
            <a href="#">CareBook</a>
            <span>&copy; 2019-SUMMER-SP2</span>
          </div>
          <div class="ml-auto">
            <span>Powered by</span>
            <a href="#">CareBook</a>
          </div>
        </footer> -->
    </div>

@yield('script')
</body>
</html>

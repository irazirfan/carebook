<!DOCTYPE html>

<html lang="en">

  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Patient | Carebook</title>
    <!-- Icons-->
    <link href="patientTheme/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="patientTheme/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('patientTheme/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('patientTheme/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    @yield('style')
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
.container {
   position: absolute;
   top: 100px;
   right : 30px;

}
.table{
  position: absolute;
  top: 350px;
  left :90px;

}
.sort{
  position: absolute;
  top: 180px;
  
  right: 460px;

}
table, th, td {
  border: 2px solid black;
}

</style>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{asset('patientTheme/img/brand/log3.png')}}" width="89" height="25" alt="CareBook Logo">
      </a>

      <ul class="nav navbar-nav ml-auto">

        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">0</span>
          </a>
        </li>

        <!-- <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li> -->

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{asset('patientTheme/img/avatars/9.jpg')}}" alt="fahim@gmail.com">
          </a>
        </li>

      </ul>

      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('patient')}}">
                <i class="nav-icon icon-speedometer"></i> Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('patient.profile')}}">
                <i class="nav-icon icon-drop"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('patient.archive')}}">
                <i class="nav-icon icon-pencil"></i> Archive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('patient.notification')}}">
                <i class="nav-icon icon-pencil"></i> Notifications</a>
            </li>       
          </ul>
      </div>
     @yield('breadcrumb');

      <aside class="aside-menu">

    </div>

    
    @yield('body')

    <footer class="app-footer">
      <div>
        <a href="#">CareBook</a>
        <span>&copy; 2019-SUMMER-SP2</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="#">CareBook</a>
      </div>
    </footer>

    <!-- CoreUI and necessary plugins-->
    
    <script src="patientTheme/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="patientTheme/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="patientTheme/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="patientTheme/node_modules/pace-progress/pace.min.js"></script>
    <script src="patientTheme/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="patientTheme/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    
    <script type="text/javascript">
$('#search').on('click',function(){
$value=$('#search1').val();
console.log($value);
$.ajax({
type : 'get',
url : '{{URL::to('search')}}',
data:{'search':$value},
success:function(data){
  console.log(data);
$('#div1').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

  </body>
</html>
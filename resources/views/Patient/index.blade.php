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
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
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
        <img class="navbar-brand-full" src="{{asset('patientTeme/img/brand/log3.png')}}" width="89" height="25" alt="CareBook Logo">
      </a>

      <ul class="nav navbar-nav ml-auto">

        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">0</span>
          </a>
        </li>

        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>

        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{asset('patientTeme/img/avatars/9.jpg')}}" alt="fahim@gmail.com">
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
              <a class="nav-link" href="#">
                <i class="nav-icon icon-speedometer"></i> Home

                <!--<span class="badge badge-primary">NEW</span>-->

              </a>
            </li>
              <a class="nav-link" href="{{route('patient.profile')}}">
                <i class="nav-icon icon-drop"></i> Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon icon-pencil"></i> Archive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('patient.notification')}}">
                <i class="nav-icon icon-pencil"></i> Notification</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="nav-icon icon-pencil"></i> Settings</a>
            </li>
            
              </ul>
            </li>
           
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Patient</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Sign-Out</a>
            </div>
          
          </li> 
        </ol>

      </main>

      <aside class="aside-menu">

    </div>


    
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
              <input class="form-control" id="prependedInput" size="16" type="text" placeholder="Search Doctor">
              <span class="input-group-append">
                <button class="btn btn-info" type="button">Search</button>
              </span>
            </div>
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
                      <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
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
    

  </body>
</html>

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
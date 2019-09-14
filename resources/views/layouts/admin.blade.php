<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>CareBook - Admin</title>

    <!-- Favicons -->
    <link href="{{asset('admin/img/favicon.png')}}" rel="icon">
    <link href="{{asset('admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/lib/gritter/css/jquery.gritter.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('admin/lib/chart-master/Chart.js')}}"></script>

</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{route('admin')}}" class="logo"><b>CARE<span>BOOK</span></b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">Logout</a></li>
            </ul>
        </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
       <ul class="sidebar-menu" id="nav-accordion">
    <h5 class="centered">Iraz Irfan</h5>
    <li class="mt">
        <a class="active" href="{{route('admin')}}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="{{route('admin.notification')}}">
            <i class="fa fa-cogs"></i>
            <span>Notifications</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-desktop"></i>
            <span>User Info</span>
        </a>
        <ul class="sub">
            <li><a href="{{route('admin.doctorList')}}">Doctor</a></li>
            <li><a href="{{route('admin.patientList')}}">Patient</a></li>
            <li><a href="{{route('admin.technicianList')}}">Technician</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span>Extra</span>
        </a>
        <ul class="sub">
            <li><a href="{{route('admin.todo')}}">Todo List</a></li>
            <li><a href="{{route('admin.gallery')}}">Gallery</a></li>
        </ul>
    </li>

        <!-- sidebar menu end-->
      </div>
    </aside>

    @yield('content')

<footer class="site-footer">
    <div class="text-center">
        <p>
            &copy; Copyrights <strong>CareBook</strong>. All Rights Reserved
        </p>
        <a href="index.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/lib/jquery.sparkline.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('admin/lib/common-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/lib/gritter-conf.js')}}"></script>
<!--script for this page-->
<script src="{{asset('admin/lib/sparkline-chart.js')}}"></script>
<script src="{{asset('admin/lib/zabuto_calendar.js')}}"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
</body>

</html>

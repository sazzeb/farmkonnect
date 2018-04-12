<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FarmKonnect Nigeria</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
     <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
   
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style_dark.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

</head>
<body>
    <div id="app">
        <main class="py-4">
                    <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('admins.include.adminleft')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                @include('admins.include.admintop')
                <!-- Top Bar End -->



                <!-- Start Page content -->
                @yield('content')

                <footer class="footer text-right">
                    2018 © Farmkonnect Nigeria
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        </main>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    <!-- Flot chart -->
    <script src="{{asset('plugins/flot-chart/jquery.flot.min.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/jquery.flot.time.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/curvedLines.js')}}"></script>
    <script src="{{asset('plugins/flot-chart/jquery.flot.axislabels.js')}}"></script>

    <!-- KNOB JS -->
    <script src="{{asset('plugins/footable/js/footable.all.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.footable.js')}}"></script>
    <!--[if IE]>
    <script type="text/javascript" src="asset('plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.js')}}"></script>
    
    
    

    <!-- Dashboard Init -->
    <script src="{{asset('assets/pages/jquery.dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/jquery.app.js')}}"></script>

</body>
</html>

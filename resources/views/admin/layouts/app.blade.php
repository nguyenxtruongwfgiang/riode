<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Riode - Admin</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <!-- jvectormap -->
        <link href="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/assets/plugins/fullcalendar/vanillaCalendar.css') }}" rel="stylesheet" type="text/css"  />
        
        <link href="{{ asset('admin/assets/plugins/morris/morris.css') }}" rel="stylesheet">

        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layouts.navbar')

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    @include('admin.layouts.header')

                    @yield('content')

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 Zoter by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/detect.js') }}"></script>
        <script src="{{ asset('admin/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('admin/assets/js/waves.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jquery.nicescroll.js') }}"></script>

        <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        
        <script src="{{ asset('admin/assets/plugins/skycons/skycons.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/fullcalendar/vanillaCalendar.js') }}"></script>
        
        <script src="{{ asset('admin/assets/plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script> 
         
        <script src="{{ asset('admin/assets/pages/dashborad.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    </body>
</html>
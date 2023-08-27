<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>
            @yield('title', 'Admin Dashboard')
        </title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('client/images/logo.png') }}">

        @stack('styles')

        <link href="{{ asset('be/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('be/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('be/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layouts.partials.navbar')

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    @include('admin.layouts.partials.header')

                    @yield('content')

                </div> <!-- content -->

                @include('admin.layouts.partials.footer')

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('be/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('be/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('be/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('be/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('be/assets/js/detect.js') }}"></script>
        <script src="{{ asset('be/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('be/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('be/assets/js/waves.js') }}"></script>
        <script src="{{ asset('be/assets/js/jquery.nicescroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('be/assets/js/app.js') }}"></script>

        @stack('scripts')
    </body>
</html>

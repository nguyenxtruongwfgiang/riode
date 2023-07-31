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

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-lg.png" alt="" class="logo-large">
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner niceScrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Advanced UI </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-rating.html">Rating</a></li>
                                    <li><a href="advanced-alertify.html">Alertify</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Calendar </span></a>
                            </li>

                            <li class="menu-title">Components</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> UI Elements </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms </span> <span class="badge badge-pill badge-info float-right">8</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gauge"></i><span> Charts </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Chart</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cards-outline"></i> <span> Icons </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table"></i><span> Tables </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-marker-multiple"></i><span> Maps </span> <span class="badge badge-pill badge-danger float-right">2</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <!-- language-->
                                <li class="list-inline-item hide-phone app-search">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="list-inline-item dropdown notification-list hide-phone">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-email noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ti-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">23</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>                                
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round">
                                                                <i class="mdi mdi-eye"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 align-self-center text-right">
                                                            <div class="m-l-10">
                                                                <h5 class="mt-0">18090</h5>
                                                                <p class="mb-0 text-muted">Visits Today <span class="badge bg-soft-success"><i class="mdi mdi-arrow-up"></i>2.35%</span></p>
                                                            </div>
                                                        </div>                                                                                          
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round">
                                                                <i class="mdi mdi-account-multiple-plus"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 text-right align-self-center">
                                                            <div class="m-l-10 ">
                                                                <h5 class="mt-0">562</h5>
                                                                <p class="mb-0 text-muted">New Users</p>
                                                            </div>
                                                        </div>                                                                                                                
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="search-type-arrow"></div>
                                                    <div class="d-flex flex-row">
                                                        <div class="col-3 align-self-center">
                                                            <div class="round ">
                                                                <i class="mdi mdi-cart"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 align-self-center text-right">
                                                            <div class="m-l-10 ">
                                                                <h5 class="mt-0">7514</h5>
                                                                <p class="mb-0 text-muted">New Orders</p>
                                                            </div>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="progress mt-3" style="height:3px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Every Day Revenue</h4>
                                            <p class="text-muted mb-4 font-14"></p>        
                                            <div id="morris-bar-stacked" class="morris-chart"></div> 
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">                                 
                                            <div class="row">
                                                <div class="col-8">
                                                    <h3> $ 40214.00</h3>
                                                    <h6 class="text-lightdark">Total Sele</h6>
                                                    <span class="text-muted"> <small>Last 6 Month</small></span>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <h5><i class="mdi mdi-airplane-takeoff mr-2 text-danger font-20"></i> 80%</h5>
                                                    <h6 class="text-lightdark">Export</h6>
                                                    <span class="text-muted"> <small>2018 to 2019</small></span>
                                                </div>                                                
                                            </div>
                                        </div><!--end card-body-->
                                        <div class="card-body p-0 mb-n5"> 
                                            <div class="mb-0 area-chart-map" id="morris-area-chart"></div>
                                        </div>
                                        <div class="card mb-0 bg-map">
                                            <div class="card-body ">
                                                <div id="world-map-markers" class="dash-map"></div>
                                            </div>
                                        </div><!--end card-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->

                            
                            <div class="row"> 
                                <div class="col-xl-4 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0  mb-3">Summary</h5>                                
                                            <div id="donut-example"></div>
                                            <ul class="list-unstyled text-center text-muted mt-2 mb-0">
                                                <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Laptops</li>
                                                <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-info mr-2"></i>Iphones</li>
                                                <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-light mr-2"></i>Tablets</li>
                                            </ul>            
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                                             
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0 mb-0">Weather</h5>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 text-center align-self-center">    
                                                    <h6 class="">San Francisco, California</h6>                                                      
                                                    <p class="text-muted">SUNDAY <span>25<sup>th</sup> Jan</span></p>
                                                    <canvas id="clear-day" width="50" height="50"></canvas>
                                                    <h5 class="mt-0 "><b>32°</b></h5>
                                                    <p class="text-muted  font-12">Clear Day</p>
                                                    <p class="text-muted">There are many variations of passages of 
                                                        Lorem Ipsum available, but the majority have suffered alteration.
                                                    </p>
                                                </div> 
                                            </div>
                                            <div class="row ">
                                                <div class="col-4  text-center align-self-center">
                                                    <h6 class="text-muted mt-0 font-14">MON</h6>
                                                    <canvas id="rain" width="28" height="18"></canvas>
                                                    <h6 class="text-muted font-14 mb-0">28°<i class="wi-degrees"></i></h6>
                                                </div>
                                                <div class="col-4  text-center align-self-center">
                                                    <h6 class="text-muted mt-0 font-14">TUE</h6>
                                                    <canvas id="wind" width="35" height="18"></canvas>
                                                    <h6 class="text-muted font-14 mb-0">32°<i class="wi-degrees"></i></h6>
                                                </div>
                                                <div class="col-4  text-center align-self-center">
                                                    <h6 class="text-muted mt-0 font-14">WEN</h6>
                                                    <canvas id="snow" width="35" height="18"></canvas>
                                                    <h6 class="text-muted font-14 mb-0">10°<i class="wi-degrees"></i></h6>
                                                </div>                               
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                
                                
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0 mb-3">Calendar</h5>                                
                                            <div id="v-cal">
                                                <div class="vcal-header">
                                                    <button class="vcal-btn" data-calendar-toggle="previous">
                                                        <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                                        </svg>
                                                    </button>
                                    
                                                    <div class="vcal-header__label" data-calendar-label="month">
                                                        March 2017
                                                    </div>
                                    
                                    
                                                    <button class="vcal-btn" data-calendar-toggle="next">
                                                        <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="vcal-week">
                                                    <span>Mon</span>
                                                    <span>Tue</span>
                                                    <span>Wed</span>
                                                    <span>Thu</span>
                                                    <span>Fri</span>
                                                    <span>Sat</span>
                                                    <span>Sun</span>
                                                </div>
                                                <div class="vcal-body" data-calendar-area="month"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->           
                            </div> <!-- end row --> 

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body new-user">
                                            <h5 class="header-title mb-4 mt-0">New Users</h5>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">Users</th>
                                                            <th class="border-top-0">Name</th>
                                                            <th class="border-top-0">Country</th>                               
                                                            <th class="border-top-0">Reviews</th>
                                                            <th class="border-top-0">Socials</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="user" width="30"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                            </td>                           
                                                            <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="assets/images/users/avatar-3.jpg" alt="user" width="30"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">William A. Johnson</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/french_flag.jpg" alt="" class="img-flag">
                                                            </td>                            
                                                            <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="assets/images/users/avatar-4.jpg" alt="user" width="30"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Bobby M. Gray</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/spain_flag.jpg" alt="" class="img-flag">
                                                            </td>                            
                                                            <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="assets/images/users/avatar-5.jpg" alt="user" width="30"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Robert N. Carlile</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/russia_flag.jpg" alt="" class="img-flag">
                                                            </td>                               
                                                            <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="assets/images/users/avatar-6.jpg" alt="user" width="30"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/italy_flag.jpg" alt="" class="img-flag">
                                                            </td>                               
                                                            <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="assets/images/users/avatar-2.jpg" alt="user" width="30"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                            </td>                           
                                                            <td>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star text-warning"></i>
                                                                    <i class="mdi mdi-star-half text-warning"></i>
                                                                    <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline mb-0">
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                                
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body new-user">
                                            <h5 class="header-title mb-4 mt-0">Order List</h5>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">Product</th>
                                                            <th class="border-top-0">Pro Name</th>
                                                            <th class="border-top-0">Country</th>
                                                            <th class="border-top-0">Order Date/Time</th>
                                                            <th class="border-top-0">Pcs.</th>                                    
                                                            <th class="border-top-0">Amount ($)</th>
                                                            <th class="border-top-0">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="assets/images/products/pro1.png" alt="user"> </td>
                                                            <td>
                                                                Chair
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                            </td>
                                                            <td>3/09/2018 4:29 PM</td>
                                                            <td>2</td>                                   
                                                            <td> $ 50</td>
                                                            <td>                                                                        
                                                                <span class="badge badge-boxed  badge-success">Shipped</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="assets/images/products/pro2.png" alt="user"> </td>
                                                            <td>
                                                                Mobile
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/french_flag.jpg" alt="" class="img-flag">
                                                            </td>
                                                            <td>3/15/2018 1:09 PM</td>
                                                            <td>1</td>                                   
                                                            <td> $ 70</td>
                                                            <td>
                                                                <span class="badge badge-boxed  badge-danger">Delivered</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="assets/images/products/pro3.png" alt="user"> </td>
                                                            <td>
                                                                LED
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/spain_flag.jpg" alt="" class="img-flag">
                                                            </td>
                                                            <td>3/18/2018 12:09 PM</td>
                                                            <td>3</td>                                   
                                                            <td> $ 200</td>
                                                            <td>
                                                                <span class="badge badge-boxed badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="assets/images/products/pro4.png" alt="user"> </td>
                                                            <td>
                                                                Chair
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/russia_flag.jpg" alt="" class="img-flag">
                                                            </td>
                                                            <td>3/27/2018 8:27 PM</td>
                                                            <td>2</td>                                   
                                                            <td> $ 20</td>
                                                            <td>                                                                                                                                              
                                                                <span class="badge badge-boxed  badge-success">Shipped</span>                                                                    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="assets/images/products/pro2.png" alt="user"> </td>
                                                            <td>
                                                                Mobile
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/italy_flag.jpg" alt="" class="img-flag">
                                                            </td>
                                                            <td>4/01/2018 5:09 PM</td>
                                                            <td>1</td>                                   
                                                            <td> $ 150</td>
                                                            <td>
                                                                <span class="badge badge-boxed badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="assets/images/products/pro1.png" alt="user"> </td>
                                                            <td>
                                                                Chair
                                                            </td>
                                                            <td>                                                                
                                                                <img src="assets/images/flags/us_flag.jpg" alt="" class="img-flag">
                                                            </td>
                                                            <td>3/09/2018 4:29 PM</td>
                                                            <td>2</td>                                   
                                                            <td> $ 50</td>
                                                            <td>                                                                        
                                                                <span class="badge badge-boxed  badge-success">Shipped</span>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>                                                
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div> <!--end row-->               

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

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
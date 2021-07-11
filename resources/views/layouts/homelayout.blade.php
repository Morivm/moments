<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Crypto Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>

    <link rel="apple-touch-icon" href="{{asset('images/apple-icon-120.png')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors.min.css')}}" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/components.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome-master/dist/line-awesome/css/line-awesome.min.css')}}" />
    
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/line-awesome/line-awesome.css')}}"> -->
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vertical-menu-modern.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/vertical-menu-modern.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/palette-gradient.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/cryptocoins.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/apexcharts.css')}}" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('home') }}"><img class="brand-logo" alt="modern admin logo" src=" {{ asset('images/logo.png' )}}">
                            <h3 class="brand-text">{{ env('APP_NAME') }}</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1 user-name text-bold-700"> {{ Auth::user()->name }}</span>
                                <span class="avatar avatar-online"><img src="{{asset('images/kaneki.jpg')}}" alt="avatar"><i></i></span>
                            </a>
                      
                            <div class="dropdown-menu dropdown-menu-right">
                            
                                <a class="dropdown-item" href="#">
                                    <i class="ft-user"></i>
                                     Edit Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="ft-clipboard"></i>
                                    Todo
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="ft-check-square"></i>
                                    Task
                                </a>
                                <div class="dropdown-divider">
                                
                                </div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="ft-power"></i> 
                                    {{ __('Logout') }}
                                </a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
<!--             
                    <ul class="navbar-nav ml-auto">
  
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> -->
                            
                            
                            <!-- <div class="dropdown-menu dropdown-menu-right">
                            
                                <a class="dropdown-item" href="#">
                                    <i class="ft-user"></i>
                                     Edit Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="ft-clipboard"></i>
                                    Todo
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="ft-check-square"></i>
                                    Task
                                </a>
                                <div class="dropdown-divider">
                                
                                </div>
                                <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="{{ url('home')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="Crypto Dashboard">Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Crypto">Crypto</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Crypto"></i>
                </li>
                <li class=" nav-item"><a href="{{ url('uploadfile')}}"><i class="la la-list"></i><span class="menu-title" data-i18n="">Upload File</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-currency-exchange.html"><i class="la la-money"></i><span class="menu-title" data-i18n="Currency Exchange">Currency Exchange</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-trading.html"><i class="la la-dollar"></i><span class="menu-title" data-i18n="Trading">Trading</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-wallet.html"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="Wallet">Wallet</span></a>
                </li>
                <li class=" nav-item"><a href="crypto-history.html"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="History">History</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title" data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="component-alerts.html"><i></i><span data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a class="menu-item" href="component-callout.html"><i></i><span data-i18n="Callout">Callout</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i></i><span data-i18n="Buttons">Buttons</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="component-buttons-basic.html"><i></i><span data-i18n="Basic Buttons">Basic Buttons</span></a>
                                </li>
                                <li><a class="menu-item" href="component-buttons-extended.html"><i></i><span data-i18n="Extended Buttons">Extended Buttons</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="component-carousel.html"><i></i><span data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a class="menu-item" href="component-collapse.html"><i></i><span data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a class="menu-item" href="component-dropdowns.html"><i></i><span data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="menu-item" href="component-list-group.html"><i></i><span data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a class="menu-item" href="component-modals.html"><i></i><span data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a class="menu-item" href="component-navs-component.html"><i></i><span data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tabs-component.html"><i></i><span data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pills-component.html"><i></i><span data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a class="menu-item" href="component-tooltips.html"><i></i><span data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                        <li><a class="menu-item" href="component-popovers.html"><i></i><span data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a class="menu-item" href="component-badges.html"><i></i><span data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-pill-badges.html"><i></i><span>Pill Badges</span></a>
                        </li>
                        <li><a class="menu-item" href="component-progress.html"><i></i><span data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="menu-item" href="component-media-objects.html"><i></i><span data-i18n="Media Objects">Media Objects</span></a>
                        </li>
                        <li><a class="menu-item" href="component-scrollable.html"><i></i><span data-i18n="Scrollable">Scrollable</span></a>
                        </li>
                        <li><a class="menu-item" href="component-spinners.html"><i></i><span data-i18n="Spinners">Spinners</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="login-with-bg-image.html" target="_blank"><i></i><span>Login</span></a>
                        </li>
                        <li><a class="menu-item" href="register-with-bg-image.html" target="_blank"><i></i><span>SignIn</span></a>
                        </li>
                        <li><a class="menu-item" href="recover-password.html" target="_blank"><i></i><span>Forgot Password</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="Form Layouts">Form Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-layout-basic.html"><i></i><span data-i18n="Basic Forms">Basic Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-horizontal.html"><i></i><span data-i18n="Horizontal Forms">Horizontal Forms</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span data-i18n="Hidden Labels">Hidden Labels</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-form-actions.html"><i></i><span data-i18n="Form Actions">Form Actions</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-row-separator.html"><i></i><span data-i18n="Row Separator">Row Separator</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-bordered.html"><i></i><span data-i18n="Bordered">Bordered</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span data-i18n="Striped Rows">Striped Rows</span></a>
                        </li>
                        <li><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span data-i18n="Striped Labels">Striped Labels</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span data-i18n="Circle Style">Circle Style</span></a>
                        </li>
                        <li><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span data-i18n="Notification Style">Notification Style</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="Bootstrap Tables">Bootstrap Tables</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="table-basic.html"><i></i><span data-i18n="Basic Tables">Basic Tables</span></a>
                        </li>
                        <li><a class="menu-item" href="table-border.html"><i></i><span data-i18n="Table Border">Table Border</span></a>
                        </li>
                        <li><a class="menu-item" href="table-sizing.html"><i></i><span data-i18n="Table Sizing">Table Sizing</span></a>
                        </li>
                        <li><a class="menu-item" href="table-styling.html"><i></i><span data-i18n="Table Styling">Table Styling</span></a>
                        </li>
                        <li><a class="menu-item" href="table-components.html"><i></i><span data-i18n="Table Components">Table Components</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title" data-i18n="Chartjs">Chartjs</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartjs-line-charts.html"><i></i><span data-i18n="Line charts">Line charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-bar-charts.html"><i></i><span data-i18n="Bar charts">Bar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i></i><span data-i18n="Pie &amp; Doughnut charts">Pie &amp; Doughnut charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-scatter-charts.html"><i></i><span data-i18n="Scatter charts">Scatter charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i></i><span data-i18n="Polar &amp; Radar charts">Polar &amp; Radar charts</span></a>
                        </li>
                        <li><a class="menu-item" href="chartjs-advance-charts.html"><i></i><span data-i18n="Advance charts">Advance charts</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
 


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
    
            @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('js/app.js')}}"></script>
    <!-- <script src="{{asset('js/vendors.min.js')}}"></script> -->
    
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('js/chart.min.js')}}"></script>
    <script src="{{asset('js/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('js/app-menu.js')}}"></script>
    <!-- <script src="{{asset('js/app.js')}}"></script> -->
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="{{asset('js/dashboard-crypto.js')}}"></script> -->

    <script src="{{ asset('js/custom.js') }}" defer></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

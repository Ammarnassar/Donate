<!DOCTYPE html>
<html @if(App::getLocale() == 'ar') lang="ar" dir="rtl" @else lang="en" @endif >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}} | {{__('Dashboard')}}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{assert('temp/dashboard/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('temp/dashboard/plugins/summernote/summernote-bs4.min.css')}}">

    @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('temp/dashboard/dist/css/custom-rtl.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('temp/dashboard/dist/css/custom-ltr.css')}}">

    @endif
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav custom-navbar-left">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link" target="_blank">{{__('Visit Site')}}</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav custom-navbar-right">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 {{__('Notifications')}}</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-globe "></i>
                </a>
                <div class="dropdown-menu p-0">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item text-center" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('temp/dashboard/dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right w-auto p-1">
                   <li class="dropdown-item d-flex align-items-center ">
                       <i class="fas fa-user-alt"> </i>
                       <span class="ml-2">Profile</span>
                   </li>
                    <li class="dropdown-divider">

                    </li>
                    <li class="dropdown-item d-flex align-items-center ">
                        <a href="{{route('logout')}}" class="text-dark">
                            <i class="fas fa-sign-out-alt"> </i>
                            <span class="ml-2">Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-fuchsia elevation-1">
        <!-- Brand Logo -->
        <a  class="brand-link align-items-center d-flex justify-content-center ">
            <img src="{{asset('temp/nivo/assets/img/favicon.png')}}" alt="Donate Logo" class="mx-1 brand-image img-circle " style="opacity: .8">
            <span class="brand-text font-weight-light">{{config('app.name')}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin.index')}}" class="nav-link @if(Route::currentRouteName() == 'admin.index') active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                {{__('Dashboard')}}
                            </p>
                        </a>

                    </li>
                    <li class="nav-item  {{in_array(Route::currentRouteName() , ['admin.request.index' , 'admin.request.create'])?'menu-open':'' }} ">
                        <a href="" class="nav-link {{in_array(Route::currentRouteName() , ['admin.request.index' , 'admin.request.create'])?'active':'' }}">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                {{__('Causes')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.request.create')}}" class="nav-link @if(Route::currentRouteName() == 'admin.request.create') active @endif">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>{{__('New Case')}}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.request.index')}}" class="nav-link @if(Route::currentRouteName() == 'admin.request.index') active @endif">
                                    <i class="far fa-clone nav-icon"></i>
                                    <p>{{__('All Causes')}}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>
                                {{__('Posts')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link active">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>{{__('New Post')}}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-clone nav-icon"></i>
                                    <p>{{__('All Posts')}}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-donate"></i>
                            <p>
                                {{__('Donations')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-clone nav-icon"></i>
                                    <p>{{__('All Donations')}}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-hands-helping"></i>
                            <p>
                                {{__('Volunteers')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-clone nav-icon"></i>
                                    <p>{{__('All Volunteers')}}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">{{__('Other')}}</li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>
                                {{__('Admins')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link active">
                                    <i class="fas fa-plus-circle nav-icon"></i>
                                    <p>{{__('New Admin')}}</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-clone nav-icon"></i>
                                    <p>{{__('All Admins')}}</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pb-5">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @yield('main')
    </div>


</div>

@livewireScripts

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<x-livewire-alert::scripts />

@stack('scripts')
<!-- jQuery -->
<script src="{{asset('temp/dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('temp/dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('temp/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('temp/dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('temp/dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('temp/dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('temp/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('temp/dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('temp/dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('temp/dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('temp/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('temp/dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('temp/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('temp/dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('temp/dashboard/dist/js/demo.js')}}"></script>

<script src="{{asset('temp/dashboard/dist/js/pages/dashboard.js')}}"></script>

</body>
</html>

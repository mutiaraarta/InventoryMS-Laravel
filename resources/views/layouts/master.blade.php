<!DOCTYPE html>
<html>
<head>
    <title>INV | RPS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    
    <!-- ICONS -->
    <link rel="fav-touch-icon" sizes="100x100" href="{{asset('assets/img/fav-icon.jpg')}}">
    <link rel="icon" type="image/jpg" sizes="150x150" href="{{asset('assets/img/fav-icon.jpg')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/skin-green.min.css') }}">
    <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('top')
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">
        <a href="{{ url('/home') }}" class="logo">
            <span class="logo-mini"><b>I</b>MS</span>
            <span class="logo-lg"><b>Inventory</b> System</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('user-profile.png') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ \Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{ asset('user-profile.png') }}" class="img-circle" alt="User Image">
                                <p>
                                    {{ \Auth::user()->name }}
                                    <small>{{ \Auth::user()->email }}</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a class="btn btn-danger btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper" style="
        background: linear-gradient(rgba(249, 253, 249, 0.74), rgba(22, 12, 151, 0.4)),
                    url('{{ asset('assets/img/back-dashboard.jpg') }}') center center / cover no-repeat;
        background-attachment: fixed;
        min-height: calc(150vh - 150px);
    ">
        <section class="content container-fluid">
            @yield('content')
        </section>
    </div>

    <div class="control-sidebar-bg"></div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
@yield('bot')
</body>
</html>

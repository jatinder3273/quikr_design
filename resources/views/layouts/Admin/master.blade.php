<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{url('../../plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('plugins/summernote/summernote-bs4.min.css')}}">
    <style>
    .images {
        position: relative;
        align: center;
    }

    .edit {
        position: absolute;
        top: -10px;
        color: black;
        font-size:20px;
        align:center;
        right:1090px;
        
    }

    .edit2 {
        position: absolute;
        top: -10px;
        color: black;
        right:1090px;
        font-size: 20px;

    }

    .fa-plus {
    vertical-align: middle;
    margin-top: 0;
    text-align: center;
}

    .fa-edit {
        vertical-align: middle;
        margin-top: 8px;
        text-align: center;
    }

    .fa-minus {
        vertical-align: middle;

        text-align: center;
    }

    .fa-minus {
        vertical-align: middle;

        text-align: center;
    }
    .btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    box-shadow: none;
    height:40px;
    width:40px;
    margin-top: 10px;
}
.card-footer {
    padding: .75rem 1.25rem;
    background-color:white;
    width:100%;
}
.buttons{
    display:flex;
}

    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- /.navbar -->
        @include('layouts.Admin.Partials.topnav')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('layouts.Admin.Partials.sidenav')

        @yield('content')
        @include('layouts.Admin.Partials.footer')
  </div>

</body>
        @yield('script')

</html>
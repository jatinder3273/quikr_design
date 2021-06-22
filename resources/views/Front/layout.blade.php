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
    img.slider_img {
        height: 550px !important;
        width: 100% ! important;
        background: rgba(0, 0, 0, 0);
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

   
    .carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 200px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}
    .images {
        position: relative;
        align: center;
    }

    .edit {
        position: absolute;
        top: -10px;
        color: black;
        font-size: 20px;
        align: center;
        right: 1090px;

    }

    .edit2 {
        position: absolute;
        top: -10px;
        color: black;
        right: 950px;
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
        height: 40px;
        width: 40px;
        margin-top: 10px;
    }

    .card-footer {
        padding: .75rem 1.25rem;
        background-color: white;
        width: 100%;
    }

    .buttons {
        display: flex;
    }

    header {
    height: 550px;
    width: 100%;
    background: black;
    overflow: hidden;
}

img {
   /* object-fit: cover; */
   /* opacity: 0.4; */
}
.message{
  width:100%;
}
.msg{
  width:100%;
  float:right;
}
.msg-wrap {
    width: 100%;
    height: fit-content;
}
.box-right {
  float: right;
  background-color: rgb(170, 190, 121);
}
.box-left {
  float: left;
  background-color: rgb(231, 195, 161);
}
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
html {

	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
body {
	margin: 0;
}

html, body {
	width: 100%;
	height: 100%
}
article, aside, details, figcaption, figure, footer, header, main, menu, nav, section, summary {
	display: block;
}
audio, canvas, progress, video {
	display: inline-block;
	vertical-align: baseline;
}
audio:not([controls]) {
	display: none;
	height: 0;
}

a {
	background-color: transparent;
	text-decoration: none;
}
a:active, a:hover {
	outline: 0;
}

h1,h2,h3,h4,h5,h6,p,ul,ol{ margin:0px; padding:0px;}
.content-item{
    display:none;
}

.content-item.active{
    display:block !important;
}
.sidebar li a:hover + .show{
    background-color: green;
    display:block;
    }
/***********************  TOP Bar ********************/
.sidebar{ 
    width:400px;
    position:fixed; 
    background-color:rgb(240, 238, 238);
    transition: all 0.5s  ease-in-out;
    }
.bg-defoult{
    background-color:rgb(252, 249, 249);
    }
.sidebar ul{
    list-style:none;
    overflow-y:auto;
    height:100vh;margin:0px; 
    padding:0px;
    }
.sidebar li a,.sidebar li a.collapsed.active{ 
    display:block; 
    padding:8px 12px; 
    color:rgb(141, 137, 137);
    border-left:0px solid #cfc9c9;  
    text-decoration:none}
.sidebar li a.active{
    background-color:rgb(237, 243, 238);
    border-left:5px solid #dedede; 
    transition: all 0.5s  ease-in-out
    }

.sidebar li a i{
    padding-right:5px;
    }
.sidebar ul li .sub-menu li a{
    position:relative
    }
.sidebar ul li .sub-menu li a:before{
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
    vertical-align: middle;
}
.sidebar ul li .sub-menu li a:hover:after {
    content: "";
    position: absolute;
    left: -5px;
    top: 0;
    width: 5px;
    background-color: #111;
    height: 100%;
}
.sidebar ul li .sub-menu li a:hover{ background-color:#222; padding-left:20px; transition: all 0.5s  ease-in-out}
.sub-menu{ border-left:5px solid #dedede;}
	.sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}
	

	.sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ display:none;transition: all 0.5s  ease-in-out}
	.sidebar.fliph {
    width: 42px;transition: all 0.5s  ease-in-out;
   
}
	
.sidebar.fliph li{ position:relative}
.sidebar.fliph .sub-menu {
    position: absolute;
    left: 39px;
    top: 0;
    background-color: #222;
    width: 150px;
    z-index: 100;
}

    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="container">
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div>

            <!-- /.navbar -->
            @include('Front.Partials.topnav')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
           
           
            
            @yield('content')
       
        </div>
    </div>    

</body>
@yield('script')

</html>
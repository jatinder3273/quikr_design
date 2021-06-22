@extends('Front/layout')
@section('content')

@if(session('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
</div>
@endif
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:2px solid rgb(238, 225, 225)">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Assured Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Mobiles & Teblets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Kids & Toys
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Furniture & Decor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Sports,hobbies & Fashion
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Electronics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Home Appliance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://campaign.kuikr.com/qb/qb_2020/Furniture_sale.jpg" alt="hnl_banner" style="height:350px;width:100%" >
    </div>
    <div class="carousel-item">
     <img src="https://campaign.kuikr.com/qb/qb_2020/bed_1.jpg" alt="hnl_banner" style="height:350px;width:100%" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class ="container my-3">
    <center><p><b>Furniture</b>&nbsp;&nbsp;Quality Assured|&nbsp;&nbsp;Seamless & Conveninet|&nbsp;&nbsp;Value Of Money</p></center>
    <div class="row"style="width:100%">
        <div class="card"style="width:100%;padding:2px;">
          <h6>Residential and Commercial Properties</h6>
            <div class ="row" >
              @for($i=0;$i<6;$i++) 
              <div class="col-md-2 my-3 ">
                <div class="card p-2" style="width:100px; height:100px; radius:50%;">
                  <img class="rounded" src="https://teja8.kuikr.com/public/core/images/carousel_images/Apartments_for_Rent.jpg" alt="Card image" height="100px" width="100px;radius:50%;">
                  <div class="card-text">
                    <center><a href="#">Furniture</a></center>
                  </div>
                </div>
              </div> 
              @endfor    
            </div>
        </div>
                   
    </div>
</div>
<section>
  <h4 style="margin-left:5px;">Assured Furniture</h4>
  <div class="container-fluid my-3" style="border:2px solid rgb(240, 236, 236)">
    <div class="card">
      <div class="top" style="display:flex;">
      <a href="#" style="margin:10px;">All Furniture </a>
        <a href="#" class="btn btn-primary" style="margin-left:auto;">View All</a>
      </p>
      </div>
      <div class="row">
          <div class="col-md-3 my-3">
            <div class="card" style="width: 16rem; height:280px; border:2px solid rgb(235, 226, 226)">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)" >Soffa Sets</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Bed Sets</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Dining Table</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Office Furniture</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Center Tabels</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Dining Table</a></li>
              </ul>
            </div>
          </div>
       
        <div class="col-md-8">
          <div class="row">
            @for($i=0;$i<3; $i++)
            <div class="col-md-4 my-3 ">
              <div class="card" style="width:13rem;">
                <img class="card-img-top" src="https://teja9.kuikr.com/i4/20210617/Eclipse-Iron-Frame-Glass-Top-Coffee-Table-by-Perfect-Homes-VB201705171774173-ak_LWBP1878466122-1623930148.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title"><a href="{{ url('category/detail') }}">Eclipse Iron Frame Glass</a></h6>
                  <p class="card-text"><b>Rs.599</b></p>
                  <a href="#" class="btn btn-outline-primary">Buy Now</a>
                </div>
              </div>
            </div> 
           @endfor
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <h4 style="margin-left:5px;">Assured Electronics</h4>
  <div class="container-fluid my-3" style="border:2px solid rgb(240, 236, 236)">
    <div class="card">
      <div class="top" style="display:flex;">
      <a href="#" style="margin:10px;">All Electronics </a>
        <a href="#" class="btn btn-primary" style="margin-left:auto;">View All</a>
      </p>
      </div>
      <div class="row">
          <div class="col-md-3 my-3">
            <div class="card" style="width: 16rem; height:280px; border:2px solid rgb(235, 226, 226)">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)" >Leptop</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Tv</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Refrigretor</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Washing Machine</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Cooler</a></li>
                <li class="list-group-item"><a href="#" style="color:rgb(58, 56, 56)">Air Conditioners</a></li>
              </ul>
            </div>
          </div>
       
        <div class="col-md-8">
          <div class="row">
            @for($i=0;$i<3; $i++)
            <div class="col-md-4 my-3 ">
              <div class="card" style="width:13rem;">
                <img class="card-img-top" src="https://teja9.kuikr.com/i6/20200815/LG-32-Inch-HD-Ready-Smart-LED-TV-VB201705171774173-ak_LWBP981589949-1597467079.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title"><a href="#">LG 32 Inch HD Ready Smart LED TV</a></h6>
                  <p class="card-text"><b>Rs.5990</b></p>
                  <a href="#" class="btn btn-outline-primary">Buy Now</a>
                </div>
              </div>
            </div> 
           @endfor
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('plugins/moment/moment.min.js')}}"></script>
<script src="{{url('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('dist/js/pages/dashboard.js')}}"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#file').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function() {
        readURL(this);
    });

})

$('.btn-success').click()

function({
    $('#cardchat').show();
}).
</script>
@endsection
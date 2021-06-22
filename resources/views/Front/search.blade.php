@extends('Front/layout')
@section('content')

@if(session('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
</div>
@endif


<div class="carousel-inner">

    <div class="item ">
        <a href="">
            <header>
                <img class="slider_img"
                    src="{{url('https://www.quickerads.com/wp-content/uploads/2018/07/quicker-1.jpeg')}}" alt="Chania"
                    style="object-fit: cover; opacity: 0.4;">
                <section class='hero-header-text'>
                    <div class="carousel-caption slider-text ">
                        <h1>Over 95,00,000 Classified Ads Listing</h1> &nbsp;&nbsp;
                        <p>Search from largest classifieds & Post unlimited classifieds for free!</p>
                        <!-- <form action="post/search" method="post">
                            <input type="text" style="width:70%; height:60px;">
                            <button class="btn btn-success"
                                style="margin-top:-5px; margin-left:-5px; width:70px; height:58px;background:orange;"><i
                                    class="fa fa-search" aria-hidden="true"></i></button>
                        </form> -->
                    </div>
                </section>
            <header>
    </div>
    </a>
</div>
<div class="container-fluid my-5">

    <div class="row">
        @foreach($data as $product)
        <div class="col-md-3 my-3">

            <div class="card" style="width: 18rem; length:100px; border:2px solid grey">
                <h5 class="card-title">{{$product->title}}</h5>
                <img src="{{url('users')}}/{{$product->image_name}}" height=50%>
                <div class="card-body">

                    <p class="card-text"><b>Rs.</b>{{$product->price}}</p>
                    <p class="card-text">{{$product->Description}}</p>
                    <a href="{{url('post/detail')}}/{{$product->id}}" class="btn btn-primary"
                        style="background:orange">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

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
@endsection
@extends('Front/layout')
@section('content')

@if(session('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
</div>
@endif
<section>
    <div class="container">
        <div class="card" style="border:2px solid rgb(240, 224, 224);">
            <div class="row">
                <div class = col-md-4>
                    <div class="sidebar left">
                        <ul class="list-sidebar bg-white">
                            <li class="list-group-item" data-id="01"><a href="#" style="color:black;"><i class="fa fa-diamond"></i> <span class="nav-label"></i><b></b>Select a Category<b></b></span></a> </li>

                            <li class="list-group-item" id="cars" data-id="02"><a href="{{ url('product/addcar') }}"><i class="fa fa-cars"></i> <span class="nav-label"><i class="fab fa-product-hunt"></i>Cars & Bikes</span></a> </li>

                            <li class="list-group-item" data-id="03"><a href="{{ url('product/addmobile') }}"><i class="fa fa-pie-chart"></i> <span class="nav-label"><i class="fas fa-couch"></i>Mobile & Tablets</span> </a></li>

                            <li class="list-group-item" data-id="04"><a href="{{ url('product/addelectronics') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-refrigerator"></i>Electronics & Appliances</span></a> </li>

                            <li class="list-group-item" data-id="05"> <a href="{{ url('product/addrealestate') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fab fa-servicestack"></i>Real Estate</span></a> </li>

                            <li class="list-group-item" data-id="06"> <a href="{{ url('product/addhome') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-user-md"></i>Home & Lifestyle</span></a> </li>

                            <li class="list-group-item" data-id="07"> <a href="{{ url('product/addeducation') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-home"></i>Education & Tranning</span></a> </li>

                            <li class="list-group-item" data-id="08"> <a href="{{ url('product/addentertainment') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-mobile"></i>Entertainment</span></a> </li>

                            <li class="list-group-item" data-id="09" > <a href="{{ url('product/addpets') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-gifts"></i>Pets & Petcare</span></a> </li>
                        </ul>
                    </div>  
                </div>
               
                <div class="col-md-6 mx-5" >
                    <div class="content-items">
                        <div class="content-item active" id="01">
                            <h1>Post Free Ads</h1>
                            <h4>Select A Categories</h4>
                           <center><img style="margin-top:10px; margin-left:20px;" src="https://teja9.kuikr.com/images/newlayout/blue-arrow.png" width="401px" height="142px"></center>
                        </div>
                        <div class="content-item" id="02">
                            <h1>Post Free Ads</h1>
                            <h4>Select A Categories</h4>
                            <ul class="list-sidebar bg-white">
                                <li class="list-group-item"><a href="{{ url('product/addcar') }}">Bikes & Scooter</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addcar') }}">Bikes & Scooter</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addcar') }}">Bikes & Scooter</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addcar') }}">Bikes & Scooter</a></li>
                            </ul>
                        </div>
                        <div class="content-item" id="03">
                            <h1>Post Free Ads</h1>
                            <h4>Select A Categories</h4>
                            <ul class="list-sidebar bg-white">
                                <li class="list-group-item"><a href="{{ url('product/addmobile') }}">Mobiles</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addmobile') }}">Teblets</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addmobile') }}">laptop</a></li>
                                <li class="list-group-item"><a href="#">Apple laptop</a></li>
                            </ul>
                        </div>

                        <div class="content-item" id="04">
                            <h1>Post Free Ads</h1>
                            <h4>Select A Categories</h4>
                            <ul class="list-sidebar bg-white">
                                <li class="list-group-item"><a href="{{ url('product/addelectronics') }}">Tv</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addelectronics') }}">LED</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addelectronics') }}">Refrigretor</a></li>
                                <li class="list-group-item"><a href="{{ url('product/addelectronics') }}">Washing Machine</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')
<!-- jQuery -->
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('../../plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('plugins/sparklines/sparkline.js')}}"></script>

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

<script>
// $("p").on('mouseenter',function(){
//     alert("hello");
// });
$('li.list-group-item').on('mouseenter',function(){
    let id = $(this).attr('data-id');
    $('div.content-item').removeClass('active');
    $("#"+id).addClass('active');
});

</script>
@endsection
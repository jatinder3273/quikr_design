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
                    <div class="sidebar-l left" style="color:rgb(194, 186, 186)">
                        <ul class="sidebar-l bg-white" style="width:300px; background-color:white;">
                            <li class="list-group-item" data-id="01"><a href="#" style="color:black;"><i class="fa fa-diamond"></i> <span class="nav-label"></i><b></b>My Account<b></b></span></a> </li>
                            
                            <li class="list-group-item" data-id="03"style="color:rgb(161, 155, 155);"><a href="{{ url('product/addmobile') }}"><i class="fa fa-pie-chart"></i> <span class="nav-label"><i class="fas fa-couch"></i>View Matching Leads</span> </a></li>

                            <li class="list-group-item" data-id="04" style="color:rgb(161, 155, 155);"><a href="{{ url('product/addelectronics') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-refrigerator"></i>My Ads</span></a> </li>

                            <li class="list-group-item" data-id="05" style="color:rgb(161, 155, 155);"> <a href="{{ url('product/addrealestate') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fab fa-servicestack"></i>Messages And Notification</span></a> </li>

                            <li class="list-group-item" data-id="06" style="color:rgb(161, 155, 155);"> <a href="{{ url('product/addhome') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-user-md"></i>Orders And Payment Details</span></a> </li>

                            <li class="list-group-item" data-id="06" style="color:rgb(161, 155, 155);"> <a href="{{ url('product/addhome') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-user-md"></i>Buy Ads Packs</span></a> </li>
                            
                            <li class="list-group-item" data-id="06" style="color:rgb(161, 155, 155);"> <a href="{{ url('product/addhome') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-user-md"></i>Verify Your Accounts</span></a> </li>

                            <li class="list-group-item" data-id="06" style="color:rgb(161, 155, 155);"> <a href="{{ url('product/addhome') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-user-md"></i>Education Leads</span></a> </li>      
                            
                        </ul>
                    </div>  
                </div>
               <div class="col-md-8">
                   <div class="container">
                       <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="row">
                                        <i class="fas fa-user-circle"style="font-size:50px; background-color:white;color:skyblue;"></i>
                                       &nbsp;&nbsp; <h2>{{ Auth::guard('user')->user()->name }}</h2>
                                       <p class="address my-3" style="color:rgb(173, 162, 162);">(kurukshetra)</p>
                                       {{-- <p>{{ Auth::guard('user')->user()->address }}</p> --}}
                                
                                    </div>
                                    <div class="row">
                                        <p>{{ Auth::guard('user')->user()->contact_number }}87897766</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p>{{ Auth::guard('user')->user()->email }}</p>
                                    </div>
                                  <p> <i class="fas fa-wallet"></i>₹100 Your Current Balance in Q-CASH</p>
                                  <a href="#" class="btn btn-primary">view</a>
                                </div>
                                <div class="col">
                                    
                                </div>
                               <a href="" class="btn btn-primary" style="height:40px;" >View Profile</a>&nbsp;&nbsp;
                                <a href="" class="btn btn-primary" style="height:40px;">Edit</a>
                            </div>
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
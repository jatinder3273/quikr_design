@extends('Front/layout')
@section('content')

@if(session('message'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
</div>
@endif
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background: white;">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Bazaar</a></li>
    <li class="breadcrumb-item"><a href="#">Home & Lifestyle</a></li>
    <li class="breadcrumb-item"><a href="#">Home & Office Furniture</a></li>
    <li class="breadcrumb-item"><a href="#">Refurbished Study Table</a></li>
   </ol>
</nav>
<section>
 
  <div class="container-fluid my-3" style="border:2px solid rgb(240, 236, 236)">
    <div class="row">
        <div class="col-md-6 my-3">
            <img src="https://teja9.kuikr.com/i4/20210617/Eclipse-Iron-Frame-Glass-Top-Coffee-Table-by-Perfect-Homes-VB201705171774173-ak_LWBP1878466122-1623930148.jpeg" alt="..." class="img-thumbnail" style="height:300px;max-width:200%;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="height:70px;width:100%;">
                    <div class="carousel-item active">
                   <div class="row">
                       @for($i=0;$i<5;$i++)
                       <div class="col-md-2">
                           <div class="card">
                              <img src="https://teja8.kuikr.com/i6/20210419/Presto-Solid-Storage-Coffee-Table-by-Nilkamal-VB201705171774173-ak_LWBP463719749-1618811091_lg.webp" alt="..." class="img-thumbnail" style="height:50px;width:90px;">   
                           </div>
                       </div>
                       @endfor
                   </div>
                    </div>
                    <div class="carousel-item">
                   <div class="row">
                       @for($i=0;$i<5;$i++)
                       <div class="col-md-2">
                           <div class="card">
                              <img src="https://teja8.kuikr.com/i6/20210419/Finn-Glass-Top-Side-Table-VB201705171774173-ak_LWBP1562878583-1618817792_lg.webp" alt="..." class="img-thumbnail" style="height:50px;width:90px;">  
                           </div>
                       </div>
                       @endfor
                   </div>
                    </div>
                    <div class="carousel-item">
                    <div class="row">
                       @for($i=0;$i<5;$i++)
                       <div class="col-md-2">
                           <div class="card">
                            <img src="https://teja8.kuikr.com/i6/20210419/Presto-Solid-Storage-Coffee-Table-by-Nilkamal-VB201705171774173-ak_LWBP463719749-1618811091_lg.webp" alt="..." class="img-thumbnail" style="height:50px;width:90px;">  
                           </div>
                       </div>
                       @endfor
                   </div>
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="margin-left:50px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <h5><b style="color:green">BRAND NEW:</b><b>Presto Solid Storage Coffee Table by Nilkamal</b></h5>
            
            <p style="font-size: 12px;">Delivery in 6 days* |14 views Ad |Id: 354121433</p>
            <div class="row my-3">
               <h3 style="color:rgb(8, 141, 218)"><b><i class="fas fa-rupee-sign"></i>589</b></h3><p>/month EMI Options </p>
            </div>
            <div class="row my-3">
                <h4 style="color:rgb(4, 15, 20)"><b><i class="fas fa-rupee-sign"></i>6,589</b></h4><del style="color:rgb(177, 163, 163);font-size:15px;">&nbsp;&nbsp;<i class="fas fa-rupee-sign"></i>  15000</del>&nbsp;&nbsp;
                <a href="#">(50 % off)</a>&nbsp;&nbsp;
                <a href="#"><i class="fas fa-bell"></i>&nbsp;&nbsp;Set price alert</a>
            </div>

            <div class="row my-3">
                <div class="col-md-6">
                    <a href="#" class="btn btn-primary" style="height:100%;width:100%; font-size:20px;">Buy Now</a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-outline-primary"style="height:100%;width:100%; font-size:20px;">Make Offer & Chat</a>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">
                            <i class="fas fa-rupee-sign"style="color:white;background:green;font:40px;"></i>
                            </div>
                            <div class="col-md-5">
                            <h5><b>Earn</b></h5>
                            <p style="font-size:12px;">Buy this product and earn upto ₹65 Qcash</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fas fa-save"style="color:blue;background:white;font:40px;"></i>
                            </div>
                            <div class="col-md-5">
                                <h5><b>Save</b></h5>
                                <p style="font-size:12px;">Special deal help to save ₹8401 from the MRP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Product Details</h4>
                    <p>condition</p>
                    <p>Posted By</p>
                    <p>Furniture By</p>
                    <p>Brand name</p>
                    <p>Quantity</p>
                </div>
                <div class="col-md-6 my-4">
                    
                    <p>New</p>
                    <p>sonia</p>
                    <p>soia</p>
                    <p>Hyundai</p>
                    <p>1</p>
                </div>
            </div>
            <p style="font-size:20px;">Description</p>
            <div class="detail">
                <p>Color : Brown</p>
                <p>Dimension : W * D * H 119 x 60 x 46 cm (47 x 23.5 x 18 inch)</p>
                <p>This is a flawless product with no defects.</p>
            </div>
            <h4 style="margin-top:12px;">Seller Details</h4>
            <div class="row">
                <div class="col-md-6">
                    <p>Name</p>
                    <p>Email</p>
                    <p>Contact Number</p>
                    <p>Address</p>
                    
                </div>
                <div class="col-md-6">
                    
                    <p>Sonia</p>
                    <p>sonia@gmail.com</p>
                    <p>7687986</p>
                    <p>bakama,hs,gsuchd</p>
                    
                </div>
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
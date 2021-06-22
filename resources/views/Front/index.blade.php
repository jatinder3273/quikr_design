@extends('Front/layout')
@section('content')

@if(session('message'))
<!-- <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
</div>
@endif
<div class="container my-5">
    <div class="card " style="padding:20px;">
        <form>
            <h4>Enter Product Details</h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Produc Name</label>
                    <input type="email" class="form-control" id="inputEmail4" name ="name" placeholder="Product Name">
                </div>
                <div class="form-group col-md-6">
                    <label>Select Categories</label>
                    <select class="select2" multiple="multiple" name ="category_id" data-placeholder="Select a State" style="width: 100%;">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Select Color</label>
                    <select class="select2" multiple="multiple" name ="color_id" data-placeholder="Select a State" style="width: 100%;">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Price</label>
                    <input type="email" class="form-control" id="inputEmail4" name ="price" placeholder="Product Name">
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Image</label>
                    <input type="file" class="form-control" id="inputEmail4" name ="file" placeholder="Product Image">
                </div>
            </div>
            <div class="container">
                <h4>Seller Details</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Seller Name</label>
                        <input type="name" class="form-control" id="inputEmail4" placeholder="Seller Name" name="name" value ="{{Auth::guard('users')->user()->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Seller Email" value ="{{Auth::guard('users')->user()->email}}">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Phone" value ="{{Auth::guard('users')->user()->phone}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Address</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Address"value ="{{Auth::guard('users')->user()->address}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4"></label>
                        <input type="hidden" class="form-control" id="inputEmail4" placeholder="Address"value ="{{Auth::guard('users')->user()->id}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div> -->
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


})
</script>
@endsection
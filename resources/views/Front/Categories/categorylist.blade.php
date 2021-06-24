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
                            <li class="list-group-item" data-id ="01"><a ><i class="fa fa-cars"></i> <span class="nav-label"><i class="fab fa-product-hunt"></i>Select Category</span></a> </li>

                            @foreach($category as $data)
                            <li class="list-group-item" data-id ="{{ $data->id }}"><a  onclick ="showsubcategory('{{ $data->id}}')"><i class="fa fa-cars"></i> <span class="nav-label"><i class="fab fa-product-hunt"></i>{{$data->name}}</span></a> </li>
                            @endforeach
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

                        @foreach($category as $data)
                       <div class="content-item" id ="{{ $data->id }}">
                            <h1>Post Free Ads</h1>
                            <h4>Select A Categories</h4>
                            <ul class="list-sidebars bg-white" id="subcategory">
                            </ul>
                        </div>
                        @endforeach
                        
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
$('li.list-group-item').on('click',function(){
    let id = $(this).attr('data-id');
    // console.log(id);
    $('div.content-item').removeClass('active');
    $("#"+id).addClass('active');
    

});

function showsubcategory(category_id)
{
    //console.log(category_id);
    $.ajax({
    
      data:{id:category_id},
      type:'GET',
      url:'{{ url('category/subcategory/list')}}',
      //console.log(url);
      success:function(response)
      {
        console.log(response);
        $('.list-sidebars').html('');
        $.each(response.sub,function(index,subcategory)
        {
        var urls ='http://localhost:8000/subcategory/' + subcategory.category_id + '/' + subcategory.subcategory_id + '/add';
        //console.log(response);
        $('.list-sidebars').append('<li class="list-group-item"><a href= '+ urls+ '>'+subcategory.subcategory_name+'</a></li>')
        });
      }
    });
}
</script>
@endsection
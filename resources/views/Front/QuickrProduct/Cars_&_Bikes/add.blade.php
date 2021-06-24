@extends('Front.QuickrProduct.quikrlayout.layout')
@section('content')

@if(session('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
    </div>
@endif
<div class="container-fluid my-3" style="background:rgb(224, 220, 220)">
    <div class="row">
        <div class="col-md-8">
            <div class="container my-3">
                <div class="card p-3" style="border:2px solid rgb(223, 212, 212)">
                    <form action="{{ url('product/addcar') }}" method="post" style="width:50%">
                        @csrf
                        <div class="form-group">
                           
                            <input type="hidden" class="form-control" name="cat_id" value="{{$cat_id->id}}">
                        </div>
                         <div class="form-group">
                            
                        <input type="hidden" class="form-control" name="subcat_id" value={{$subcat_id->id}}>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Your Brand</label>
                            <select class="form-control" id="brand_id" name="brand" placeholder="your brand">
                                <option selected>Your Brand</option>
                                @foreach($brand as $data)
                                <option id ="{{ $data->brand_id }}" value="{{ $data->brand_id }}" onclick="showmodel()">{{$data->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Model</label>
                            <select class="form-control" id="model">
                                <option selected>Your Model</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Year Of Registartion</label>
                            <input type="text" class="form-control" name="year" placeholder="Year Of Registration">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Kms Driven</label>
                            <input type="text" class="form-control" name="year" placeholder="Year Of Registration">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">City</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Your City</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Selling Price</label>
                            <input type="text" class="form-control" name="year" placeholder="Year Of Registration">
                        </div>
                       <button type="submit" class="btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
          <div class="col-md-4 my-3">
            <h6>India's most trusted auto classifieds</h6>
            <div class="row">
                <div class="col-md-2 my-3">
                    <img src="https://teja9.kuikr.com/i4/20210617/Eclipse-Iron-Frame-Glass-Top-Coffee-Table-by-Perfect-Homes-VB201705171774173-ak_LWBP1878466122-1623930148.jpeg" alt="..." class="circle-rounded" style="height:50px;max-width:80%;">
                   
                </div>
                <div class="col-md-2 my-3">
                   <h6>2.5 MillionUnique Visitors</h6>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="container-fluid my-3" style="background:rgb(224, 220, 220)">
    <div class="row">
        <div class="col-md-8">
            <h3>Seller Details</h3>
           <div class="container my-3">
                    <div class="card p-3" style="border:2px solid rgb(223, 212, 212)">
                        <form action="" meyhod="" style="width:50%">
                        <div class="form-group">
                                <label for="exampleFormControlSelect2"> Name </label>
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{Auth::guard('user')->user()->name }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="mobile" value="{{Auth::guard('user')->user()->contact_number}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email" value="{{Auth::guard('user')->user()->email }}">
                            </div>
                            
                        </form>

                    </div>
                </div>
            
        </div>
        <div class="col-md-4">
            <h5>India's most trusted auto classifieds</h5>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- jQuery -->
<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ url('../../plugins/select2/js/select2.full.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.js')}}"></script>

<script>

$(document).ready(function ()
{
$('#brand_id').on('change',function(e) 
{
    //alert("hello"); 
   var brand_id = e.target.value;
   console.log(brand_id);
    $.ajax({
    
      data:{id:brand_id},
      type:'GET',
      url:'http://localhost:8000/subcategory/showmodel',
      //console.log(url);
      success:function(response)
      {
        console.log(response);
        $('.model').html('');
        $.each(response.model,function(index,model)
        {
        
        //console.log(response);
        $('#model').append('<option value="'+model.model_id+'">'+model.model_name+'</option>');
        });
      }
    });
});
});
</script>
@endsection
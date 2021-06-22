@extends('Front/layout')
@section('content')

@if(session('message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
    </div>
@endif
<section>
    <div class="row my-0">
        <div class="col-md-3">
            <div class="sidebar left" style="width:340px;">
                <ul class="list-sidebar bg-white">
                    <li class="list-group-item"><a href="{{ url('category/view') }}"><i class="fa fa-diamond"></i> <span class="nav-label"><i class="fab fa-product-hunt"></i>Quicker Assured Products</span></a> </li>

                    <li class="list-group-item"><a href="{{ url('category/view') }}"><i class="fa fa-pie-chart"></i> <span class="nav-label"><i class="fas fa-couch"></i>Furniture & Decor</span> </a></li>
                        
                    <li class="list-group-item"><a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-refrigerator"></i>Application,Ac</span></a> </li>


                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-car"></i>Cars</span></a> </li>

                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-motorcycle"></i>Bikes</span></a> </li>

                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-home"></i>Homes</span></a> </li>

                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-mobile"></i>Mobiles & Tablets</span></a> </li>

                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-gifts"></i>Gift Cards</span></a> </li>

                                
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fal fa-credit-card-blank"></i>Personal Loan</span></a> </li>
                                
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-tennis-ball"></i>Sports,Hobbies,Fashion</span></a> </li>
                                
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-child"></i>Kids & Toys</span></a> </li>
                                
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-book-open"></i>Education</span></a> </li>
                                    
                    <li class="list-group-item"><a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-dumpster-fire"></i>Commercial Real Estate</span></a> </li>
                                    
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-dog"></i>Pets & Pet Care</span></a> </li>
                        
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label">B2B Suppliers</span></a> </li>
                                        
                    <li class="list-group-item"><a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-tv"></i>Entertainment</span></a> </li>
                                        
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-blender-phone"></i>Community</span></a> </li>
                                        
                    <li class="list-group-item"> <a href="{{ url('category/view') }}"><i class="fa fa-files-o"></i> <span class="nav-label"><i class="fas fa-calendar-alt"></i>Events</span></a> </li>
                                        
                </ul>
            </div>  
        </div>
        
        <div class="col-md-9">
            <div class="carousel-inner" style="margin-left:54px;">
                <div class="item ">
                    <header>
                        <img class="slider_img"
                                src="{{url('https://www.quickerads.com/wp-content/uploads/2018/07/quicker-1.jpeg')}}" alt="Chania"
                                style="object-fit: cover;width:450px; opacity: 0.4;">
                        <section class='hero-header-text'>
                            <div class="carousel-caption slider-text ">
                                <h1>Over 95,00,000 Classified Ads Listing</h1> &nbsp;&nbsp;
                                <p>Search from largest classifieds & Post unlimited classifieds for free!</p>
                                
                            </div>
                        </section>
                    <header>
                </div>
               
            </div>
            <div class="container m-5">
                <div class ="row">
                    @for($i=0;$i<6;$i++)
                    <div class="col-md-4 my-3">
                        <div class="card" style="width: 18rem;">
                        
                            <div class="card-header">
                                <img alt="Quikr" style="width:115px;" class="hidden-xs" src="https://teja8.kuikr.com/module_assets/images/quikr_bazaar_logo.png">
                            </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href ="#" style="color:rgb(112, 110, 110)">Cras justo odio</a></li>
                                    <li class="list-group-item"><a href ="#" style="color:rgb(112, 110, 110)">Cras justo odio</a></li>
                                   <li class="list-group-item"><a href ="#" style="color:rgb(112, 110, 110)">Cras justo odio</a></li>
                                </ul>
                        </div>
                    </div>
                    @endfor
                </div>

                <div class="row">
                    <div class="card p-2">
                        <h6>Residential and Commercial Properties</h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="https://teja8.kuikr.com/public/core/images/carousel_images/Apartments_for_Rent.jpg" alt="Card image" height="150px" width="200px;radius:20px;">
                                       <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="card p-2">
                        <h6>Everything about Cars & Bikes!</h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="https://teja8.kuikr.com/public/core/images/carousel_images/popular_suv.png" alt="Card image" height="150px" width="200px;radius:20px;">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="card p-3">
                        <h6>Verified Household Service Experts</h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="https://teja8.kuikr.com/public/core/images/carousel_images/interior-designing1.jpg" alt="Card image" height="150px" width="200px;radius:20px;">
                                      <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                    </div>
                </div>
                <div class="row">
                     <div class="card p-3">
                        <h6>Get Your Dream Gadgets Explore Mobiles</h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="https://teja8.kuikr.com/public/core/images/carousel_images/iphone.png" alt="Card image" height="150px" width="200px;radius:20px;">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                    </div>
                </div>
                    <div class="row">
                    
                        <div class="card p-3">
                            <h6>Electronics You’ll Love</h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="	https://teja8.kuikr.com/public/core/images/carousel_images/Computer-peripherals.jpg" alt="Card image" height="150px" width="200px;radius:20px;">
                                         <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    
                        <div class="card p-3">
                            <h6>All About Educations</h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="		https://teja8.kuikr.com/public/core/images/carousel_images/career-counselling.jpg" alt="Card image" height="150px" width="200px;radius:20px;">
                                         <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                        </div>
                    </div>

                     <div class="row">
                    
                        <div class="card p-3">
                            <h6>Design Your Lifestyle
                            </h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="		https://teja8.kuikr.com/public/core/images/carousel_images/Villa_for_Sale.jpg" alt="Card image" height="150px" width="200px;radius:20px;">
                                       <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                        </div>
                    </div>


                     <div class="row">
                    
                        <div class="card p-3">Gift Card
                            </h6>
                            <div class ="row">
                                @for($i=0;$i<4;$i++) 
                                <div class="col-md-3 my-3 ">
                                    <div class="card" style="width:200px; height:150px; radius:10px;">
                                        <img class="card-img-top" src="		https://teja10.kuikr.com/images/mqdp/icons/peter_england.png" alt="Card image" height="150px" width="200px;radius:20px;">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title"></h4>
                                          <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                            
                                        </div>
                                    </div>
                                </div> 
                                @endfor    
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        
                            <div class="card p-3">
                                <h6>Find A Job - Simple & Easy</h6>
                                <div class ="row">
                                    @for($i=0;$i<4;$i++) 
                                    <div class="col-md-3 my-3 ">
                                        <div class="card" style="width:200px; height:150px; radius:10px;">
                                            <img class="card-img-top" src="https://teja8.kuikr.com/public/core/images/carousel_images/distance-learning.jpg" alt="Card image" height="150px" width="200px;radius:20px;">
                                            <div class="card-img-overlay">
                                                <h4 class="card-title"></h4>
                                            <a href=""><p class="card-text" style="align:center;">latest home</p></a>
                                                
                                            </div>
                                        </div>
                                    </div> 
                                    @endfor    
                                </div>
                            </div>
                    
                    </div>


                    <div class="row">
                        
                            <div class="card p-3">
                                <h6>Other Quicker Brands</h6>
                                <div class ="row">
                                    @for($i=0;$i<4;$i++) 
                                    <div class="col-md-3 my-3 ">
                                        <div class="card" style="width:200px; height:150px; radius:10px;">
                                            <img class="card-img-top" src="	https://teja9.kuikr.com/public/core/images/gc_sprite1.png" alt="Card image" height="150px" width="200px;radius:20px;">
                                            <div class="card-img-overlay">
                                                <h4 class="card-title"></h4>
                                                <a href="#"><p class="card-text" style="align:center;">latest home</p></a>
                                                
                                            </div>
                                        </div>
                                    </div> 
                                    @endfor    
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
<script>
    $(document).ready(function(){
   $('button').click(function(){
       $('.sidebar').toggleClass('fliph');
   });
  
  
   
});
</script>
@endsection
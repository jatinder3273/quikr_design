<nav class="navbar navbar-expand-lg navbar-light bg-white">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="color:black; text-decoration:none;">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}"><i class="fas fa-business-time" style="color:rgb(221, 216, 216);"></i>For Buisness<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-download"  style="color:rgb(221, 216, 216);"></i>Download The App</a>
            </li>

        </ul>
       
        <div class="navbar">
        <a class="" href="#" 
               style="color:grey" ><i class="fas fa-rupee-sign"
               style="color:rgb(71, 221, 66)"></i>
                Qcash
            </a>
        </div>
         <div class="navbar">
            <a class="" href="#" 
               style="color:grey" >
               <i class="fab fa-accessible-icon"></i>
                Deals
            </a>
        </div>
        <div class="navbar">
            <a class="" href="#" 
               style="color:grey" >
               <i class="fas fa-store"style="color:rgb(221, 216, 216);"></i>
                Visit Our Store
            </a>
        </div>

           <div class="navbar">
            <a class="" href="#" 
               style="color:grey" >
               <i class="fas fa-rupee-sign"
               style="color:rgb(71, 221, 66)"></i>
                Discounts On Premium
            </a>
        </div>
         <div class="navbar">
            <a class="" href="#" 
               style="color:grey" >
               <i class="fas fa-cart-plus" style="color:rgb(221, 216, 216);"></i>
                Cart
            </a>
        </div>

        <div class="navbar">
            <a class="" href="#" 
               style="color:grey" >
               <i class="fas fa-comments" style="color:rgb(221, 216, 216);"></i>Nxt
            </a>
        </div>
        
        </div>
       

    </div>

</nav>

<nav class="navbar sticky-top  navbar-expand-lg navbar-light bg-white" style="border-bottom:2px solid rgb(236, 231, 231)">

    <div class="logo-area">
        <!-- menu logo -->
        <i class="fas fa-bars"></i>
        <a href="/" class="logo" id="quikrLogo"><img alt="Quikr" style="width:115px;" class="hidden-xs" src="https://teja8.kuikr.com/module_assets/images/quikr_logo.png"></a>
        </a>
    </div>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="color:black; text-decoration:none;">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-house"></i>
          All India
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
           
                <form action="{{url('post/search')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <form class="form-inline">
    <div class="input-group" ">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">All Categories</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
                </form>
           
        </ul>
        @if(Auth::guard('user')->check())
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ URL::asset('users/bed.jpg')}}"  style="width: 60px;height: 60px; padding: 10px; margin: 0px; border-radius:50%">
                    {{-- <img src="{{ URL::asset('user')}}/{{ (Auth::guard('user')->user()->file == '') ? 'user.jpg' : Auth::guard('user')->user()->file}}"
                        style="width: 60px;height: 60px; padding: 10px; margin: 0px; border-radius:50%"> --}}

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('user\profile')}}">Profile Page</a>
                    <a class="dropdown-item" href="{{url('user\logout')}}">Logout</a>
                </div>

            </li>
        </ul>

        <a href="{{url('category/list')}}" class="btn btn-light" style="background:orange; height:50px;padding-top:13px;">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Post AD </a>
        @else
        <div class="dropdown show">
         
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" style="color:grey" >
                <i class="fas fa-user-circle" style="font-size:20px;"></i>
                Assured
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{url('user\login')}}">Login as User</a>
                <a class="dropdown-item" href="{{url('vendor\login')}}">Login as Vendor</a>
                
            </div>
        </div>
        <div class="dropdown show">
         
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" style="color:grey" >
                <i class="fas fa-user-circle" style="font-size:20px;"></i>
                Login/Register
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{url('user\login')}}">Login as User</a>
                <a class="dropdown-item" href="{{url('vendor\login')}}">Login as Vendor</a>
                
            </div>
        </div>
        {{-- <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" style="color:grey" >
                Register
            </a>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('user\register')}}">Register as User</a>
                <a class="dropdown-item" href="{{url('vendor\register')}}">Register as Vendor</a>
                
            </div>
        </div> --}}
       
        <a href="{{url('category/list')}}" class="btn btn-light" style="background:#fcec52; height:50px;padding-top:13px;">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Post AD </a>
        @endif
    </div>
</nav>
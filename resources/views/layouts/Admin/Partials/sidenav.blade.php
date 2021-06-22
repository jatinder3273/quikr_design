<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('storage/userimage.jpg')}}" class="img-circle elevation-2" alt="User Image">


            </div>
            <div class="info">

                
            </div>
        </div>



        <!--side nav -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item ">
                    <a href="{{url('/dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item ">
                    <a href="{{url('/user/list')}}" class="nav-link">
                    <i class="fas fa-users" aria-hidden="true"></i>
                        <p>
                            User

                        </p>
                    </a>

                </li>

                <li class="nav-item ">
                    <a href="{{url('vendor/list')}}" class="nav-link">
                    <i class="fas fa-users" aria-hidden="true"></i>
                        <p>
                            Vendors

                        </p>
                    </a>

                </li>


                <li class="nav-item ">
                    <a href="{{url('admin/post/list')}}" class="nav-link ">
                    <i class="fa fa-building"></i>
                        <p>
                            Products
                        </p>
                    </a>

                </li>

                <li class="nav-item ">
                    <a href="{{url('/category')}}" class="nav-link ">
                    <i class="fas fa-list"></i></i>
                        <p>
                            Categories
                        </p>
                    </a>

                </li>

                <li class="nav-item ">
                    <a href="{{url('/subcategory')}}" class="nav-link ">
                    <i class="fas fa-store"></i>
                        <p>
                            SubCategories
                        </p>
                    </a>

                </li>

                
                <li class="nav-item ">
                    <a href="{{url('admin/logout')}}" class="nav-link ">
                    <i class="fas fa-sign-out-alt" aria-hidden="true" style="font-color:white;"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
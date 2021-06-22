@extends('layouts.Admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">SubCategory</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">SubCategory</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check">{{session('message')}}</i></h5>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">SubCategory Management System</h3>
                            <div class="text-right" style="float:right;">
                                <form method="get" action="subcategory" id="search" class="form-inline my-2 my-lg-0">
                                    @csrf

                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search" name="search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    &nbsp;&nbsp;&nbsp;
                                    <h3 class="card-title">Add SubCategory</h3>
                                    <a href="/subcategory/create" class="btn btn-primary" id="add">
                                        <center>
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </center>
                                    </a>
                                </form>
                            </div>
                            </nav>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($SubCategory as $k => $sub)
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">

                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{++$k}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        
                                        <td>{{$sub->name}}</td>
                                        <td>{{$sub->category_name->name}}</td>

                                        <td>
                                        <div class ="buttons">
                                            <a>
                                                <a href="{{ URL::to('subcategory/' . $sub->id . '/edit') }}"
                                                    class="btn btn-primary btn-sm" style="height:40px;width:40px;">
                                                    <center><i class="fa fa-edit" aria-hidden="true"></i></center>
                                                </a>
                                                &nbsp;&nbsp;&nbsp;


                                                <form action="{{ route('subcategory.destroy', $sub->id) }}"
                                                    method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-danger minus"
                                                        style="height:40px;width:40px; margin-top:0;"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    {{-- Pagination --}}
<div class="d-flex justify-content-center">
    {!! $SubCategory->links() !!}
</div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
@endsection
<!-- ./wrapper -->
@section('script')
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
@endsection
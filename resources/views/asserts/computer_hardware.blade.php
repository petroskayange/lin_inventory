@extends('layouts.app') 
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Computer Hardware</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Computer Hardware</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable For Computer Hardware</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <div class="table_btn"> 
                  <div class="btn-group">
                    <button type="button" class="btn btn-info">Action</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="#">Move assert</a>
                      <a class="dropdown-item" href="#">Extend date</a>
                      <a class="dropdown-item" href="#">Print barcode</a>
                      <a class="dropdown-item" href="#">Repair</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-block bg-gradient-info"> <i class="fas fa-plus"></i> Add Assert</button>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox"></th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Project</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                    <td>U</td>
                    <td>U</td>
                    <td>U</td>
                    <td>U</td>
                  </tr>
                  </tbody>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('script')
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      }).container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     
    });
  </script>
@endsection
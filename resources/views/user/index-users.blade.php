<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset ('img/logo.jpg')}}" alt="DISKOMINFO KOTA SEMARANG" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 13px;">DISKOMINFO KOTA SEMARANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      @include('template.main_sidebar')
      <!-- End Sidebar Menu -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('users')}}">Master Users</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="row">
           <div class="col-md-6">
            <form action="{{ route('search-users') }}" method="GET" class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Cari Data Users" aria-label="Cari" aria-describedby="button-addon">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>



            <div class="col-md-6 text-right">
              <a href="{{ route('create-users') }}" class="btn btn-success">Add <i class="fas fa-plus-square"></i></a>
            </div>
          </div>
        </div>

        <div class="card-body" style="overflow-x: auto;">
          <table class="table table-boardered">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No Handphone</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>Image</th>
              <th>Level</th>
              <th>Posisi</th>
              <th>Aksi</th>
            </tr>
            @foreach ($users as $key =>$user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->no_hp }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->jenis_kel }}</td>
                <td>
                  @if ($user->foto)
                   <img src="{{ asset('foto_users/' . $user->foto) }}" alt="User Image" width="50">
                  @else
                      No Image
                  @endif
              </td>
              <td>{{ $user->level }}</td>
              <td>{{ $user->posisi }}</td>
              <td>
                <a href="{{ route('edit-users-byadmin', $user->id)}}" class="edit-icon"><i class="fas fa-edit"></i></a>
                <a href="#" class="edit-icon" onclick="confirmDeleteUser({{ $user->id }})">
                    <i class="fas fa-trash text-danger"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <!-- Previous Page -->
            <li class="page-item {{ $users->onFirstPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>

            <!-- Current Page -->
            <li class="page-item active">
              <span class="page-link">{{ $users->currentPage() }}</span>
            </li>

            <!-- Next Page -->
            <li class="page-item {{ $users->hasMorePages() ? '' : 'disabled' }}">
              <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- / End content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- / End control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer')
  <!-- End Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('template.script')
</body>
</html>

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
            <h1 class="m-0 text-dark">Master Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route ('users')}}">Master Laporan</a></li>
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
            <form action="{{ route('search-laporan') }}" method="GET" class="input-group mb-3">
                <select name="bulan" class="form-control">
                    <option value="">Pilih Bulan</option>
                    @foreach ($bulanOptions as $bulanOption)
                        <option value="{{ $bulanOption }}" {{ request('bulan') == $bulanOption ? 'selected' : '' }}>
                            {{ $bulanOption }}
                        </option>
                    @endforeach
                </select>
                <select name="tahun" class="form-control">
                    <option value="">Pilih Tahun</option>
                    @foreach ($tahunOptions as $tahunOption)
                        <option value="{{ $tahunOption }}" {{ request('tahun') == $tahunOption ? 'selected' : '' }}>
                            {{ $tahunOption }}
                        </option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon">
                        <i class="fas fa-search"></i> Filter
                    </button>
                </div>
            </form>
        </div>
          </div>
        </div>

        <div class="card-body" style="overflow-x: auto;">
          <table class="table table-boardered">
            <thead>
        <tr>
            <th>File Name</th>
            <th>Bulan</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item['bulan'] }}</td>
                <td>{{ $item['tahun'] }}</td>
                <td>
                    <a href="{{ route('view-file', ['filename' => $item['filename']]) }}">
                        {{ $item['filename'] }}
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
          </table>
        </div>
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <!-- Previous Page -->
            <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>

            <!-- Current Page -->
            <li class="page-item active">
              <span class="page-link">{{ $data->currentPage() }}</span>
            </li>

            <!-- Next Page -->
            <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}">
              <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
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

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
                <img src="{{asset ('img/logo.jpg')}}" alt="DISKOMINFO KOTA SEMARANG" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                                    <h1 class="m-0 text-dark">Master Website</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Master Website</a></li>
                                        <li class="breadcrumb-item"><a href="#">Web Kecamatan</a></li>
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
                                        <form action="{{ route('search-website') }}" method="GET" class="input-group mb-3">
                                            <input type="text" name="search" class="form-control" placeholder="Cari Data Website" aria-label="Cari" aria-describedby="button-addon">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon"><i class="fas fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="{{ route('create-website') }}" class="btn btn-success">Tambah <i class="fas fa-plus-square"></i></a>
                                        <a href="{{ route('download.all') }}" class="btn btn-success">Download <i class="fas fa-download"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body" style="overflow-x: auto;">
                                <table class="table table-boardered">
                                    <tr>
                                        <th>No</th>
                                        <th>Website</th>
                                        <th>kategori</th>
                                        <th>Kode WHM</th>
                                        <th>status</th>
                                        <th>Tgl Pemantauan</th>
                                        <th>Tgl Last Update</th>
                                        <th>Berita</th>
                                        <th>Logo</th>
                                        <th>CMS</th>
                                        <th>Keamanan</th>
                                        <th>Error</th>
                                        <th>Keterangan Error</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($data as $key => $website)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a href="{{ $website->link }}">{{ $website->link }}</a></td>
                                        <td>{{ $website->kategori }}</td>
                                        <td>{{ $website->kd_whm }}</td>
                                        <td>{{ $website->status }}</td>
                                        <td>{{ $website->tgl_pemantauan }}</td>
                                        <td>{{ $website->tgl_last_update }}</td>
                                        <td>{{ $website->berita }}</td>
                                        <td>{{ $website->logo }}</td>
                                        <td>{{ $website->cms }}</td>
                                        <td>{{ $website->keamanan }}</td>
                                        <td>{{ $website->error }}</td>
                                        <td>{{ $website->ket_error }}</td>
                                        <td>
                                            <a href="{{ route('edit-website', ['id' => $website->id]) }}" class="edit-icon"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="delete-icon" onclick="confirmDelete({{ $website->id }})">
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    @for ($i = 1; $i <= $data->lastPage(); $i++)
                                        <li class="page-item {{ $i == $data->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                                        </li>
                                        @endfor
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

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
            <h1 class="m-0 text-dark">Manage Website</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Website</a></li>
              <li class="breadcrumb-item active">Update Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-body">
          <form action="{{ route('update-website', $website->id) }}" method="POST">
            @method('PUT')
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <div class="form-group">
              <label>Link Website</label>
              <input type="text" id="link" name="link" class="form-control" placeholder="Link Website" value="{{ $website->link ?? old('link') }}">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" name="kategori" id="kategori">
                    @if ($website)
                        <option value="Bidang Pendidikan" {{ $website->kategori === 'Bidang Pendidikan' ? 'selected' : '' }}>Bidang Pendidikan</option>
                        <option value="Bidang Infrastruktur" {{ $website->kategori === 'Bidang Infrastruktur' ? 'selected' : '' }}>Bidang Infrastruktur</option>
                        <option value="Bidang Pemerintahan" {{ $website->kategori === 'Bidang Pemerintahan' ? 'selected' : '' }}>Bidang Pemerintahan</option>
                        <option value="Bidang Layanan Publik" {{ $website->kategori === 'Bidang Layanan Publik' ? 'selected' : '' }}>Bidang Layanan Publik</option>
                        <option value="Bidang Integrasi Sistem" {{ $website->kategori === 'Bidang Integrasi Sistem' ? 'selected' : '' }}>Bidang Integrasi Sistem</option>
                        <option value="Web OPD" {{ $website->kategori === 'Web OPD' ? 'selected' : '' }}>Web OPD</option>
                        <option value="Web Kecamatan" {{ $website->kategori === 'Web Kecamatan' ? 'selected' : '' }}>Web Kecamatan</option>
                        <option value="Web Kelurahan" {{ $website->kategori === 'Web Kelurahan' ? 'selected' : '' }}>Web Kelurahan</option>
                        <option value="Web SD" {{ $website->kategori === 'Web SD' ? 'selected' : '' }}>Web SD</option>
                        <option value="Web SMP" {{ $website->kategori === 'Web SMP' ? 'selected' : '' }}>Web SMP</option>
                    @endif
                </select>
            </div>


            <div class="form-group">
              <label for="kd_whm">Kode WHM</label>
              <select class="form-control" name="kd_whm" id="kd_whm" required>
                  <option value="Tidak Ada" {{ $website && $website->kd_whm === 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                  <option value="WHM 1" {{ $website && $website->kd_whm === 'WHM 1' ? 'selected' : '' }}>WHM 1</option>
                  <option value="WHM 2" {{ $website && $website->kd_whm === 'WHM 2' ? 'selected' : '' }}>WHM 2</option>
                  <option value="WHM 3" {{ $website && $website->kd_whm === 'WHM 3' ? 'selected' : '' }}>WHM 3</option>
              </select>
            </div>

            <div class="form-group">
              <label for="tgl_pemantauan">Tanggal Pemantauan</label>
              <input class="form-control" type="date" id="tgl_pemantauan" name="tgl_pemantauan" value="{{ $website ? $website->tgl_pemantauan : old('tgl_pemantauan') }}">
          </div>

          <div class="form-group">
              <label for="tgl_last_update">Tanggal Last Update</label>
              <input class="form-control" type="date" id="tgl_last_update" name="tgl_last_update" value="{{ $website ? $website->tgl_last_update : old('tgl_last_update') }}">
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="status">Status</label>
                <div>
                    <input type="radio" name="status" id="status1" value="Ada" {{ $website && $website->status === 'Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal; margin-right: 20px;" for="status1">Ada</label>
                    <input type="radio" name="status" id="status2" value="Tidak Ada" {{ $website && $website->status === 'Tidak Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal;" for="status2">Tidak Ada</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="berita">Berita</label>
                <div>
                    <input type="radio" name="berita" id="berita1" value="Ada" {{ ($website->berita ?? '') === 'Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal; margin-right: 20px;">Ada</label>
                    <input type="radio" name="berita" id="berita2" value="Tidak Ada" {{ ($website->berita ?? '') === 'Tidak Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal;">Tidak Ada</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="logo">Logo</label>
                <div>
                    <input type="radio" name="logo" id="logo1" value="Ada" {{ ($website->logo ?? '') === 'Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal; margin-right: 20px;" for="logo1">Ada</label>
                    <input type="radio" name="logo" id="logo2" value="Tidak Ada" {{ ($website->logo ?? '') === 'Tidak Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal;" for="logo2">Tidak Ada</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cms">CMS</label>
                <div>
                    <input type="radio" name="cms" id="cms1" value="Ada" {{ ($website->cms ?? '') === 'Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal; margin-right: 20px;" for="cms1">Ada</label>
                    <input type="radio" name="cms" id="cms2" value="Tidak Ada" {{ ($website->cms ?? '') === 'Tidak Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal;" for="cms2">Tidak Ada</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="keamanan">Keamanan</label>
                <div>
                    <input type="radio" name="keamanan" id="keamanan1" value="Ada" {{ ($website->keamanan ?? '') === 'Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal; margin-right: 20px;" for="keamanan1">Ada</label>
                    <input type="radio" name="keamanan" id="keamanan2" value="Tidak Ada" {{ ($website->keamanan ?? '') === 'Tidak Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal;" for="keamanan2">Tidak Ada</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="error">Error</label>
                <div>
                    <input type="radio" name="error" id="error1" value="Ada" {{ ($website->error ?? '') === 'Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal; margin-right: 20px;" for="error1">Ada</label>
                    <input type="radio" name="error" id="error2" value="Tidak Ada" {{ ($website->error ?? '') === 'Tidak Ada' ? 'checked' : '' }}>
                    <label style="font-weight: normal;" for="error2">Tidak Ada</label>
                </div>
              </div>
            </div>
          </div>
          
            <div class="form-group">
                <label for="ket_error">Deskripsi Error</label>
                <textarea id="ket_error" name="ket_error" class="form-control" placeholder="Deskripsi Error" value="{{ $website->ket_error ?? old('ket_error') }}"></textarea>
            </div>

            <input type="hidden" name="submitted" value="{{ auth()->user()->nama }}">

            <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
            </form>
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

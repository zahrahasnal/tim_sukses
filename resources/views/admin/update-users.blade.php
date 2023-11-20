
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
            <h1 class="m-0 text-dark">Edit Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('users') }}">Manage Users</a></li>
              <li class="breadcrumb-item active">Edit Users</li>
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
          <form action="{{ route('update-users', ['id' => $users->id]) }}" method="POST">
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
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" value="{{ $users->nama ?? old('nama') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $users->email ?? old('email') }}">
            </div>

            <div class="form-group">
                <label for="no_hp">No Handphone</label>
                <input type="text" name="no_hp" class="form-control" value="{{ $users->no_hp ?? old('no_hp') }}">
            </div>

            <div class="form-group">
                <label for="jenis_kel">Jenis Kelamin</label>
                <select name="jenis_kel" class="form-control">
                    <option value="Laki-laki" {{ $users->jenis_kel === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $users->jenis_kel === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                @method('PUT')
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control-file">
                <p class="text-danger">*Max:2mb, Fortmat:jpg,jpeg,png</p>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control">{{ $users->alamat ?? old('alamat') }}</textarea>
            </div>

            <div class="form-group">
                <label for="level">Level</label>
                <select name="level" class="form-control">
                    <option value="Admin" {{ $users->level === 'Admin' ? 'selected' : '' }}>Admin</option>
                    <option value="User" {{ $users->level === 'User' ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <div class="form-group">
                <label for="posisi">Posisi</label>
                <select name="posisi" class="form-control">
                    <option value="Magang" {{ $users->posisi === 'Magang' ? 'selected' : '' }}>Magang</option>
                    <option value="Karyawan" {{ $users->posisi === 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="{{ $users->password ?? old('password') }}">
                <p class="text-danger">*Kata sandi yang dimasukkan harus minimum 8 karakter dari kombinasi huruf kapital, huruf kecil, dan angka</p>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
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


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php echo $__env->make('template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php echo $__env->make('template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(asset ('img/logo.jpg')); ?>" alt="DISKOMINFO KOTA SEMARANG" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 13px;">DISKOMINFO KOTA SEMARANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <?php echo $__env->make('template.main_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Sidebar Menu -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('users')); ?>">Users</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                          <?php
                          $profileImage = Auth::user()->foto; // Mengambil path gambar dari data pengguna yang sudah login
                          ?>
                          <img src="<?php echo e(asset('storage/' . $profileImage)); ?>" class="card-img-top" alt="Foto Profil">
                          <h5 class="card-title"><strong><?php echo e(Auth::user()->nama); ?></strong></h5>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table">
                                  <tr>
                                    <th style="border-top: none;"> </th>
                                    <td style="text-align: right; border-top: none;">
                                        <a href="<?php echo e(route('edit-users', $user->id)); ?>" class="edit-icon"><i class="fas fa-edit"></i></a>
                                    </td>
                                  </tr>
                                    <tr>
                                        <th>Name:</th>
                                        <td><?php echo e(Auth::user()->nama); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td><?php echo e(Auth::user()->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number:</th>
                                        <td><?php echo e(Auth::user()->no_hp); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td><?php echo e(Auth::user()->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gender:</th>
                                        <td><?php echo e(Auth::user()->jenis_kel); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Password:</th>
                                        <td>*****</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
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
  <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php echo $__env->make('template.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/admin/profile-users.blade.php ENDPATH**/ ?>
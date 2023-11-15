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
            <h1 class="m-0 text-dark">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route ('users')); ?>">Manage Users</a></li>
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
    <form action="<?php echo e(route('search-users')); ?>" method="GET" class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari di seluruh kolom" aria-label="Cari" aria-describedby="button-addon">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>



            <div class="col-md-6 text-right">
              <a href="<?php echo e(route('create-website')); ?>" class="btn btn-success">Add <i class="fas fa-plus-square"></i></a>
              <a href="<?php echo e(route('download.all')); ?>" class="btn btn-success">Download <i class="fas fa-download"></i></a>
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
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($user->nama); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->no_hp); ?></td>
                <td><?php echo e($user->alamat); ?></td>
                <td><?php echo e($user->jenis_kel); ?></td>
                <td>
                  <?php if($user->foto): ?>
                      <img src="<?php echo e(asset('storage/app/public/foto/' . $user->foto)); ?>" alt="User Image" width="200">
                  <?php else: ?>
                      No Image
                  <?php endif; ?>
              </td>
              <td><?php echo e($user->level); ?></td>
              <td><?php echo e($user->posisi); ?></td>
              <td>
                <a href="<?php echo e(route('edit-users', $user->id)); ?>" class="edit-icon"><i class="fas fa-edit"></i></a>
                  <a href="<?php echo e(route('delete-users', $user->id)); ?>" class="edit-icon"><i class="fas fa-trash text-danger"></i></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item <?php echo e($users->onFirstPage() ? 'disabled' : ''); ?>">
                    <a class="page-link" href="<?php echo e($users->previousPageUrl()); ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for($i = 1; $i <= $users->lastPage(); $i++): ?>
                    <li class="page-item <?php echo e($i == $users->currentPage() ? 'active' : ''); ?>">
                        <a class="page-link" href="<?php echo e($users->url($i)); ?>"><?php echo e($i); ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php echo e($users->hasMorePages() ? '' : 'disabled'); ?>">
                    <a class="page-link" href="<?php echo e($users->nextPageUrl()); ?>" aria-label="Next">
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
  <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php echo $__env->make('template.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/admin/index-users.blade.php ENDPATH**/ ?>

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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card py-3 px-3">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::count()); ?></h3>
                <p>Total</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('dashboard')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Bidang Integrasi Sistem')->count()); ?></h3>
                <p>Bidang Integrasi Sistem</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('integrasi-sistem')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Bidang Insfrastruktur')->count()); ?></h3>
                <p>Bidang Insfrastruktur</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('infrastruktur')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Bidang Pemerintahan')->count()); ?></h3>
                <p>Bidang Pemerintahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('pemerintahan')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Bidang Layanan Publik')->count()); ?></h3>
                <p>Bidang Layanan Publik</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('layanan-publik')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Bidang Pendidikan')->count()); ?></h3>
                <p>Bidang Pendidikan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('pendidikan')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Web OPD')->count()); ?></h3>
                <p>Web OPD</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('web-opd')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Web Kecamatan')->count()); ?></h3>
                <p>Web Kecamatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('web-kecamatan')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Web Kelurahan')->count()); ?></h3>
                <p>Web Kelurahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('web-kelurahan')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Web SMP')->count()); ?></h3>
                <p>Web SMP</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('web-smp')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(\App\Models\Website::where('kategori', 'Web SD')->count()); ?></h3>
                <p>WebSD</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo e(route('web-sd')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>


      <!-- Pie Chart -->
      

  <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
            <a href="<?php echo e(route('create-website')); ?>" class="btn btn-success">Add <i class="fas fa-plus-square"></i></a>
             <a href="<?php echo e(route('download.all')); ?>" class="btn btn-success">Download <i class="fas fa-download"></i></a>
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
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($key + 1); ?></td>
              <td><a href="<?php echo e($website->link); ?>"><?php echo e($website->link); ?></a></td>
              <td><?php echo e($website->kategori); ?></td>
              <td><?php echo e($website->kd_whm); ?></td>
              <td><?php echo e($website->status); ?></td>
              <td><?php echo e($website->tgl_pemantauan); ?></td>
              <td><?php echo e($website->tgl_last_update); ?></td>
              <td><?php echo e($website->berita); ?></td>
              <td><?php echo e($website->logo); ?></td>
              <td><?php echo e($website->cms); ?></td>
              <td><?php echo e($website->keamanan); ?></td>
              <td><?php echo e($website->error); ?></td>
              <td><?php echo e($website->ket_error); ?></td>
              <td>
                  <a href="<?php echo e(route('edit-website', ['id' => $website->id])); ?>" class="edit-icon"><i class="fas fa-edit"></i></a>
                  <a href="<?php echo e(route('delete-website', $website->id)); ?>" class="edit-icon"><i class="fas fa-trash text-danger"></i></a>
              </td>

            </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item <?php echo e($data->onFirstPage() ? 'disabled' : ''); ?>">
                  <a class="page-link" href="<?php echo e($data->previousPageUrl()); ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              <?php for($i = 1; $i <= $data->lastPage(); $i++): ?>
                  <li class="page-item <?php echo e($i == $data->currentPage() ? 'active' : ''); ?>">
                      <a class="page-link" href="<?php echo e($data->url($i)); ?>"><?php echo e($i); ?></a>
                  </li>
              <?php endfor; ?>
              <li class="page-item <?php echo e($data->hasMorePages() ? '' : 'disabled'); ?>">
                  <a class="page-link" href="<?php echo e($data->nextPageUrl()); ?>" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                  </a>
              </li>
          </ul>
      </div>
    </div>
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
<?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/admin/index.blade.php ENDPATH**/ ?>
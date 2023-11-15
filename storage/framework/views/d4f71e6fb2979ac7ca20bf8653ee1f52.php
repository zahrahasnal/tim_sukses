<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="user-panel mt-3 pb-3 mb-3 d-flex">
        <a href="<?php echo e(route('profile')); ?>" class="d-flex">
           <div class="info">
              <?php echo e(Auth::user()->nama); ?>

          </div>
          <div class="image">
              <?php if(Auth::user()->foto): ?>
                  <img src="<?php echo e(asset('storage/app/public/foto/' . Auth::user()->foto)); ?>" class="img-circle elevation-2" alt="User Image">
              <?php else: ?>
                  No Image
              <?php endif; ?>
          </div>

        </a>
    </li>
</ul>

</nav><?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/template/navbar.blade.php ENDPATH**/ ?>
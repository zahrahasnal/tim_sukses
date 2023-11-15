<nav class="mt-2"> 
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>

          <?php if(Auth::user() && Auth::user()->level === 'Admin'): ?>
          <li class="nav-item">
              <a href="<?php echo e(route('users')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-user-shield"></i>
                  <p>Manage User</p>
              </a>
          </li>
          <?php endif; ?>

          <li class="nav-item">
              <a href="<?php echo e(route('website')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-globe"></i>
                  <p>Manage Website</p>
                  <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pendidikan')); ?>">
                <p>Bidang Pendidikan</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('infrastruktur')); ?>">
                <p>Bidang Infrastruktur</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pemerintahan')); ?>">
                <p>Bidang Pemerintahan</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('layanan-publik')); ?>">
                <p>Bidang Layanan Publik</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('integrasi-sistem')); ?>">
                <p>Bidang Integrasi Sistem</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('web-opd')); ?>">
                <p>Web OPD</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('web-kecamatan')); ?>">
                <p>Web Kecamatan</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('web-kelurahan')); ?>">
                <p>Web Kelurahan</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('web-smp')); ?>">
                <p>Web SMP</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('web-sd')); ?>">
                <p>Web SD</p>
            </a>
        </li>
    </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH D:\Projek\bismillah jadi\web_monitoring\resources\views/template/main_sidebar.blade.php ENDPATH**/ ?>
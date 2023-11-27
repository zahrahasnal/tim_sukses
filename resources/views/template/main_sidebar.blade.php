<nav class="mt-2"> 
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>

          @if (Auth::user() && Auth::user()->level === 'Admin')
          <li class="nav-item">
              <a href="{{ route('users') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-shield"></i>
                  <p>Master User</p>
              </a>
          </li>
          @endif

          <li class="nav-item">
              <a href="{{ route('website') }}" class="nav-link">
                  <i class="nav-icon fas fa-globe"></i>
                  <p>Master Website</p>
                  <i class="nav-item right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website') }}">
                        <p>Semua Data Website</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pendidikan') }}">
                        <p>Bidang Pendidikan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('infrastruktur') }}">
                        <p>Bidang Infrastruktur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pemerintahan') }}">
                        <p>Bidang Pemerintahan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('layanan-publik') }}">
                        <p>Bidang Layanan Publik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('integrasi-sistem') }}">
                        <p>Bidang Integrasi Sistem</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web-opd') }}">
                        <p>Web OPD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web-kecamatan') }}">
                        <p>Web Kecamatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web-kelurahan') }}">
                        <p>Web Kelurahan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web-smp') }}">
                        <p>Web SMP</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web-sd') }}">
                        <p>Web SD</p>
                    </a>
                </li>
            </ul>
          </li>
           <li class="nav-item">
              <a href="{{ route('laporan') }}" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Master Laporan</p>
              </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
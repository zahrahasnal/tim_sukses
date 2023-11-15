
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
                <h3>{{ \App\Models\Website::count() }}</h3>
                <p>Total</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Bidang Integrasi Sistem')->count() }}</h3>
                <p>Bidang Integrasi Sistem</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('integrasi-sistem')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Bidang Insfrastruktur')->count() }}</h3>
                <p>Bidang Insfrastruktur</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('infrastruktur')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Bidang Pemerintahan')->count() }}</h3>
                <p>Bidang Pemerintahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('pemerintahan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Bidang Layanan Publik')->count() }}</h3>
                <p>Bidang Layanan Publik</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('layanan-publik')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Bidang Pendidikan')->count() }}</h3>
                <p>Bidang Pendidikan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('pendidikan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Web OPD')->count() }}</h3>
                <p>Web OPD</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('web-opd')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Web Kecamatan')->count() }}</h3>
                <p>Web Kecamatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('web-kecamatan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Web Kelurahan')->count() }}</h3>
                <p>Web Kelurahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('web-kelurahan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Web SMP')->count() }}</h3>
                <p>Web SMP</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('web-smp')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ \App\Models\Website::where('kategori', 'Web SD')->count() }}</h3>
                <p>WebSD</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('web-sd')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>


      <!-- Pie Chart -->
      {{-- <div class="card mx-2 my-2">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="chart1" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="chart2" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="chart3" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="chart4" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="chart5" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="chart6" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="chart7" width="200" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="chart8" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data untuk pie charts (ganti dengan data yang sesuai)
        var kategoriData = @json($kategoriData);
        var kategoriPercentages = @json($kategoriPercentages);
        var kdWhmData = @json($kdWhmData);
        var kdWhmPercentages = @json($kdWhmPercentages);
        var statusData = @json($statusData);
        var statusPercentages = @json($statusPercentages);
        var beritaData = @json($beritaData);
        var beritaPercentages = @json($beritaPercentages);
        var logoData = @json($logoData);
        var logoPercentages = @json($logoPercentages);
        var cmsData = @json($cmsData);
        var cmsPercentages = @json($cmsPercentages);
        var keamananData = @json($keamananData);
        var keamananPercentages = @json($keamananPercentages);
        var errorData = @json($errorData);
        var errorPercentages = @json($errorPercentages);

        // Opsi untuk pie charts (misalnya, warna)
        var options = {
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgba(0, 0, 0, 0.1)',
        };

        // Membuat pie charts
        new Chart(document.getElementById("chart1"), {
            type: 'pie',
            data: {
                labels: Object.keys(kategoriData),
                datasets: [{
                    data: Object.values(kategoriData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(kategoriData).map(kategori => kategoriPercentages[kategori].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart2"), {
            type: 'pie',
            data: {
                labels: Object.keys(kdWhmData),
                datasets: [{
                    data: Object.values(kdWhmData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(kdWhmData).map(kdWhm => kdWhmPercentages[kdWhm].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart3"), {
            type: 'pie',
            data: {
                labels: Object.keys(statusData),
                datasets: [{
                    data: Object.values(statusData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(statusData).map(status => statusPercentages[status].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart4"), {
            type: 'pie',
            data: {
                labels: Object.keys(beritaData),
                datasets: [{
                    data: Object.values(beritaData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(beritaData).map(berita => beritaPercentages[berita].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart5"), {
            type: 'pie',
            data: {
                labels: Object.keys(logoData),
                datasets: [{
                    data: Object.values(logoData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(logoData).map(logo => logoPercentages[logo].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart6"), {
            type: 'pie',
            data: {
                labels: Object.keys(cmsData),
                datasets: [{
                    data: Object.values(cmsData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(cmsData).map(cms => cmsPercentages[cms].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart7"), {
            type: 'pie',
            data: {
                labels: Object.keys(keamananData),
                datasets: [{
                    data: Object.values(keamananData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(keamananData).map(keamanan => keamananPercentages[keamanan].toFixed(2) + '%'),
                }],
            },
            options: options
        });

        new Chart(document.getElementById("chart8"), {
            type: 'pie',
            data: {
                labels: Object.keys(errorData),
                datasets: [{
                    data: Object.values(errorData),
                    backgroundColor: chartColors,
                    borderColor: options.borderColor,
                    // Menambahkan data persentase sebagai label
                    labels: Object.keys(errorData).map(error => errorPercentages[error].toFixed(2) + '%'),
                }],
            },
            options: options
        });
    </script>

@endsection --}}

  <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
            <a href="{{ route('create-website') }}" class="btn btn-success">Add <i class="fas fa-plus-square"></i></a>
             <a href="{{ route('download.all') }}" class="btn btn-success">Download <i class="fas fa-download"></i></a>
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
                  <a href="{{ route('delete-website', $website->id) }}" class="edit-icon"><i class="fas fa-trash text-danger"></i></a>
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

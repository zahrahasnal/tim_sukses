<nav class="main-header navbar navbar-expand navbar-white navbar-light position-relative">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="user-panel mt-3 pb-3 mb-3 d-flex">
            <a href="{{ route('profile') }}" class="d-flex">
                <div class="info">
                    {{ Auth::user()->nama }}
                </div>
                <div class="image">
                    @if(Auth::user()->foto)
                        <img src="{{ asset('public/storage/foto/' . Auth::user()->foto) }}" class="img-circle elevation-2" alt="User Image">
                    @else
                        No Image
                    @endif
                </div>
            </a>
        </li>
    </ul>

    <!-- Margin-top 4 -->
    <div class="alert-section position-absolute top-0 end-0 mt-4">
        @if(session()->has('success') || session()->has('error'))
            <div class="row">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                </div>
            </div>
        @endif
    </div>
</nav>

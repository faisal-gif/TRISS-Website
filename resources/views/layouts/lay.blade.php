<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRISS Website</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">TRISS Website</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">User</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
        @section('nav') 
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index2.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">Barang</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Stok Barang
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/stok" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stok</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pages/examples/contact-us.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact us</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">Transaksi</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Transaksi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Penjualan</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pages/examples/contact-us.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Pembelian</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pages/examples/contact-us.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cetak Laporan</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">Katalog</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Katalog
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Katalog</p>
                  </a>
                </li>

               
              </ul>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Isis\ content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
          
            @yield('content')
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @section('footer')
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
  <script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UnixAdmin | Menu Order</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets//plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets//dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-shopping-cart"></i>
          <span class="badge badge-warning navbar-badge">2</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">2 Items</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="###ICON"></i> Item 1
            <span class="float-right text-muted text-sm">Rp.12.000</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="###ICON"></i> Item 2
            <span class="float-right text-muted text-sm">Rp.12.000</span>
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Unix POS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('menuOrder')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Menu Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('menuMgmt')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Menu Management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('income')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Pendapatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('adminMgmt')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Admin Management
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row justify-content-start">

      <!-- Default box -->
      <div class="card col-3 mx-3">
        <div class="card-header">
          <h3 class="card-title">Americano</h3>
        </div>
        <div class="card-body">
          <img src="{{asset('assets/dist/kopi.png')}}" alt="kopi">
          Lorem, ipsum dolor.
        </div>
        <div class="card-footer">
          <button class="btn-primary">Order</button>
        </div>
      </div>
      <!-- /.box -->

      <!-- Default box -->
        <div class="card col-3 mx-3">
           <div class="card-header">
            <h3 class="card-title">Americano 2</h3>
          </div>
          <div class="card-body">
            Lorem, ipsum dolor.
          </div>
          <div class="card-footer">
            <button class="btn-primary">Order</button>
          </div>
        </div>
      <!-- /.box -->

      <!-- Default box -->
      <div class="card col-3 mx-3">
        <div class="card-header">
          <h3 class="card-title">Title</h3>
        </div>
        <div class="card-body">
          Lorem, ipsum dolor.
        </div>
        <div class="card-footer">
          <button class="btn-primary">Order</button>
        </div>
      </div>
      <!-- /.box -->

      <!-- Default box -->
        <div class="card col-3 mx-3">
           <div class="card-header">
            <h3 class="card-title">Title</h3>
          </div>
          <div class="card-body">
            Lorem, ipsum dolor.

          </div>
          <div class="card-footer">
            <button class="btn-primary">Order</button>
          </div>
        </div>
      <!-- /.box -->

      <!-- Default box -->
      <div class="card col-3 mx-3">
        <div class="card-header">
          <h3 class="card-title">Title</h3>
        </div>
        <div class="card-body">
          Lorem, ipsum dolor.

        </div>
        <div class="card-footer">
          <button class="btn-primary">Order</button>
        </div>
      </div>
      <!-- /.box -->

      <!-- Default box -->
        <div class="card col-3 mx-3">
           <div class="card-header">
            <h3 class="card-title">Title</h3>
          </div>
          <div class="card-body">
            Lorem, ipsum dolor.

          </div>
          <div class="card-footer">
            <button class="btn-primary">Order</button>
          </div>
        </div>
      <!-- /.box -->

    </div>

      <!-- /.card -->

      <button class="btn-primary mx-2 rounded">
        Checkout
      </button>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Unix POS</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
</body>
</html>

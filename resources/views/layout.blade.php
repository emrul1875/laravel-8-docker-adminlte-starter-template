<html>
    <head>
        <title>Docker App | Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>        
        <style>
          .pagination {
            float: right !important;
            padding: 20px !important;
          }
        </style>
    </head>
    <body>
        <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li> -->
  </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ url('/') }}" class="brand-link">
    <span class="brand-text font-weight-light">Docker App</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="data:image/png;base64,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" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ url('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper" style="min-height: 1342.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          @yield("pageheader")
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          @yield('pagecontent')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
         <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script>
          $('#customerSel').select2({
          width: '100%',
          placeholder: "Select Customer",
          allowClear: true
        });
      </script>
      {!! Toastr::message() !!}

    </body>
</html>
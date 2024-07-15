<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KOPEGMAR | TES</title>
    
    {{-- CK Editor 5 --}}

    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/lte3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/lte3/fontawesome-free2/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte3/dist/css/adminlte.min.css">
    {{-- bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
    @yield('css-after')

</head>
<body class="hold-transition sidebar-mini">
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
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Profile </a></li>
                    <li><hr class="dropdown-divider"></li>
                    
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
    <img src="/img/kpm2.png" alt="" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">Kopegmar</span>
    </a>

        <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="/lte3/dist/img/user3-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="/" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">EXAMPLES List</li>
                <li class="nav-item">
                    
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-gauge"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mypost" class="nav-link {{ Request::is('mypost*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-ghost"></i>
                    <p> My Post</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="ckeditor" class="nav-link {{ Request::is('editor*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-file-lines"></i>
                    <p> CKeditor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/sekolah" class="nav-link {{ Request::is('student*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-shirt"></i>
                    <p> Student </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/product" class="nav-link {{ Request::is('product*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-bag-shopping"></i>
                    <p> Products </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/employe" class="nav-link {{ Request::is('employe*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-image"></i>
                    <p> CRUD </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/items" class="nav-link {{ Request::is('item*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-headphones"></i>
                    <p> Items </p>
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
        <div class="content-header">
            @yield('container')
        </div>
            <!-- Main content -->
            
            <!-- content -->
    </div>
    <!-- /.content-wrapper -->
    
    

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/lte3/plugins/jquery/jquery.min.js"></>
    <!-- Bootstrap 4 -->
    <script src="/lte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/lte3/dist/js/adminlte.min.js"></script>

    <script type="text/javascript" src="/js/trix.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

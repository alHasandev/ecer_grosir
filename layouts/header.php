<?php

session_start();
$user = @$_SESSION['user'];


if (!$user) {
  header('Location: login.php');
  die;
}

require_once "./app/helpers.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ecer Grosir Harga Pangan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">
  <!-- Custom style -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- jQuery -->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./assets/js/form-modal.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">About</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-uppercase font-weight-bold" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <!-- <i class="fas fa-th-large"></i> -->
            <?= $user['hak_akses'] ?>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary bg-success elevation-4" style="background-color: rgb(139,69,19);">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link" style="border-bottom: 1px solid rgba(255,255,255,.8);">
        <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ecer Grosir</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid rgba(255,255,255,.8);">
          <div class="image">
            <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $user['username'] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link <?= activeLink('index') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>

            <li class="nav-header">PENCATATAN</li>
            <li class="nav-item">
              <a href="#" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-cart-arrow-down"></i>
                <p>
                  Daftar Harga
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./barang_keluar.php" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-truck"></i>
                <p>
                  Pasokan
                </p>
              </a>
            </li>

            <li class="nav-header">DATA MASTER</li>
            <li class="nav-item">
              <a href="data_komoditas.php" class="nav-link <?= activeLink('data_komoditas') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-warehouse"></i>
                <p>
                  Data Komoditas
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="data_pemasok.php" class="nav-link <?= activeLink('data_pemasok') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-quote-right"></i>
                <p>
                  Data Pemasok
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="data_kategori.php" class="nav-link <?= activeLink('data_kategori') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-quote-right"></i>
                <p>
                  Data Kategori
                  <!-- <i class="fas fa-angle-left right"></i> -->
                </p>
              </a>
            </li>

            <li class="nav-header">LAPORAN</li>
            <li class="nav-item">
              <a href="#" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan Mingguan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan Data Grosir
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan Data Eceran
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Perbandingan Data
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link <?= activeLink('#') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Perubahan Harga
                </p>
              </a>
            </li>

            <li class="nav-header">APLIKASI</li>
            <li class="nav-item has-treeview <?= activeLink(['data_admin', 'data_karyawan']) ? 'menu-open' : '' ?>">
              <a href="#" class="nav-link <?= activeLink(['data_admin', 'data_karyawan']) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="data_admin.php" class="nav-link <?= activeLink('data_admin') ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="data_karyawan.php" class="nav-link <?= activeLink('data_karyawan') ? 'active' : '' ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Karyawan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Logout</p>
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

      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid pt-3">
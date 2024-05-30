<?php
session_start();

$_SESSION['loggedin'] = true;
$_SESSION['role'] = 'admin';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
        background-color: #4682b4;
        font-family: Arial, sans-serif;
        color: #fff;
    }

    .container {
        margin: 50px auto;
        padding: 20px;
        border: 2px solid #708090;
        border-radius: 10px;
        max-width: 600px;
        text-align: center;
        background-color: #708090;
    }

    .book-of-the-week {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .book-img {
        width: 300px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .quote {
        font-style: italic;
    }
  </style>

  <?php include "ortak_sayfalar/baslik.php"; ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <?php include "ortak_sayfalar/gsmmenu.php"; ?>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <?php include "ortak_sayfalar/mesaj.php"; ?>

      <!-- Notifications Dropdown Menu -->

      <?php include "ortak_sayfalar/bildirimler.php"; ?>

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

    <?php include "ortak_sayfalar/logo.php"; ?>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->

      <?php include "ortak_sayfalar/userpanel.php"; ?>

      <!-- SidebarSearch Form -->

      <?php include "ortak_sayfalar/arama.php"; ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

      <?php include "ortak_sayfalar/solmenu.php"; ?>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php include "ortak_sayfalar/projebilgi.php"; ?>

    <!-- Main content -->
    <section class="content">

    <div class="container">
      <h1>Haftanın Kitabı</h1>
      <img src="https://img.kitapyurdu.com/v1/getImage/fn:1109383/wh:true/wi:500" alt="Haftanın Kitabı" class="book-img">
      <div class="book-of-the-week">Harry Potter ve Felsefe Taşı</div>
      <div class="quote">"Kırılmasın hiç umutlar, gün doğmadan neler doğar."</div>
    </div>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php include "ortak_sayfalar/altbilgi.php"; ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

</html>

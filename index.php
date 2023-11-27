<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Tiket Bus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Bus Daring</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="gambar/logoKominfo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Administrator</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="main/blank.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="main/blank.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/index.php') {
                    echo 'nav-link';
                  } else {
                    echo 'nav-link collapsed';
                  } ?>" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Menu</li>

      <li class="nav-item">
        <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/kelasbus.php') {
                    echo 'nav-link';
                  } else {
                    echo 'nav-link collapsed';
                  } ?>" href="data/kelasbus.php">
          <i class="bi bi-person"></i>
          <span>Kelas Bus</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/daftarharga.php') {
                    echo 'nav-link';
                  } else {
                    echo 'nav-link collapsed';
                  } ?>" href="data/daftarharga.php">
          <i class="bi bi-person"></i>
          <span>Daftar Harga</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/pesantiket.php') {
                    echo 'nav-link';
                  } else {
                    echo 'nav-link collapsed';
                  } ?>" href="data/pesantiket.php">
          <i class="bi bi-file-earmark"></i>
          <span>Pemesanan Tiket</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/admin.php') {
                    echo 'nav-link';
                  } else {
                    echo 'nav-link collapsed';
                  } ?>" href="data/admin.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Admin</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Administrasi Pemesanan Tiket Online</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row row-cols-6 row-cols-md-6">
        <div class="card-group" style="margin-top: 15px;">
          <div class="card">
            <img car src="gambar/tayo.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class=" text-center"><a href="data/admin.php">Admin</a></h5>
            </div>
            <div class="card-body">
              <h5 class=" text-center"><a href="data/pesantiket.php">Pemesan</a></h5>
            </div>
          </div>
          <!-- End Card with an image on top -->
        </div>
      </div>

    </section>
    <!-- End Services Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer fixed-bottom" style="background-color: white;">
    <div class="copyright">
      &copy; Copyright <strong><span>Digitalent</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
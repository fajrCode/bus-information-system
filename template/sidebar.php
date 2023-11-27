<?php

require_once 'nav.php';

?>

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/index.php') {
                                echo 'nav-link';
                            } else {
                                echo 'nav-link collapsed';
                            } ?>" href="../index.php">
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
                            } ?>" href="../data/kelasbus.php">
                    <i class="bi bi-person"></i>
                    <span>Kelas Bus</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/daftarharga.php') {
                                echo 'nav-link';
                            } else {
                                echo 'nav-link collapsed';
                            } ?>" href="../data/daftarharga.php">
                    <i class="bi bi-person"></i>
                    <span>Daftar Harga</span>
                </a>
            </li><!-- End Profile Page Nav -->


            <li class="nav-item">
                <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/pesantiket.php') {
                                echo 'nav-link';
                            } else {
                                echo 'nav-link collapsed';
                            } ?>" href="../data/pesantiket.php">
                    <i class="bi bi-file-earmark"></i>
                    <span>Pemesanan Tiket</span>
                </a>
            </li><!-- End Blank Page Nav -->

            <li class="nav-item">
                <a class="<?php if ($_SERVER['REQUEST_URI'] == '/Pemograman%20web/Pelatihan/Assessment/data/admin.php') {
                                echo 'nav-link';
                            } else {
                                echo 'nav-link collapsed';
                            } ?>" href="../data/admin.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Admin</span>
                </a>
            </li><!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
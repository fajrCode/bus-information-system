<?php

require_once '../main/function.php';

$table = 'bus';
$show = showAllData($table);

require_once '../template/sidebar.php';

?>

<div class="pagetitle">
  <h1>Daftar Harga Tiket Bus</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Beranda</a></li>
      <li class="breadcrumb-item active">Daftar Harga</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="pesantiket.php" class="m-0 font-weight-bold float-right btn btn-primary">Pesan Tiket</a>
          </div>
          <div class="card-body pb-5">
            <table class="table datatable" width="100%" cellspacing="0">
              <thead>

                <tr>
                  <th>No</th>
                  <th>Kelas</th>
                  <th>Harga</th>
                  <th>Gambar Bus</th>
                  <th>Gambar Interior</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $number = 1;
                foreach ($show as $r) { ?>
                  <tr>
                    <td>
                      <?php
                      echo ($number++);
                      ?>
                    </td>
                    <td><?php echo $r["kelas"] ?></td>
                    <td><?php echo "Rp. " . number_format($r["harga"], 0, ",", ".") ?></td>
                    <td><img src="../gambar/<?php echo $r["gambar"] ?>" width="100 "></td>
                    <td><img src="../gambar/<?php echo $r["gambar2"] ?>" width="100"></td>
                  </tr>
                <?php }; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
  </div>

</section>

<?php require_once '../template/footer.php' ?>
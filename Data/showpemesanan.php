<?php

require_once '../main/function.php';

$table = 'pemesanan';
$show = showAllData($table);

require_once '../template/sidebar.php';

?>

<div class="pagetitle">
  <h1>Daftar Pemesanan Tiket</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Beranda</a></li>
      <li class="breadcrumb-item active">Pemesanan</li>
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
            <a href="pesantiket.php" class="m-0 font-weight-bold text-primary float-right">Tambah Data</a>
          </div>
          <div class="card-body pb-5">
            <table class="table datatable" width="100%" cellspacing="0">
              <thead>

                <tr>
                  <th>No</th>
                  <th>idtiket</th>
                  <th>Nama Pemesan</th>
                  <th>Nomor Identitas</th>
                  <th>No. Hp</th>
                  <th>Kelas Penumpang</th>
                  <th>Jadwal berangkat</th>
                  <th>Jumlah Penumpang</th>
                  <th>Jumlah Penumpang Lansia</th>
                  <th>Harga Tiket</th>
                  <th>Total Bayar</th>
                  <th>Aksi</th>
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
                    <td><?php echo $r["idtiket"] ?></td>
                    <td><?php echo $r["nama"] ?></td>
                    <td><?php echo $r["nik"] ?></td>
                    <td><?php echo $r["no_hp"] ?></td>
                    <td><?php echo $r["kelas_penumpang"] ?></td>
                    <td><?php echo $r["jadwal_berangkat"] ?></td>
                    <td><?php echo $r["qty"] ?></td>
                    <td><?php echo $r["qty_lansia"] ?></td>
                    <td><?php echo "Rp. " . number_format($r["harga"], 0, ",", ".") ?></td>
                    <td><?php echo "Rp. " . number_format($r["total"], 0, ",", ".") ?></td>
                    <td>
                      <!-- <a class="btn btn-outline-primary" href="updatepemesanan.php?idtiket=<?php echo $r["idtiket"] ?>">Ubah</a> -->
                      <button class="btn btn-outline-danger" onclick="sweetConfirm('hapuspemesanan.php?idtiket=<?php echo $r['idtiket'] ?>')">Hapus</button>
                    </td>
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
<?php

require_once '../main/function.php';

if (isset($_POST['batal'])) {
  header("Location: showbus.php");
  exit;
}
require_once '../template/sidebar.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
  if (addTiket($_POST) > 0) {
    echo "<script>
            alertSuccesGo('Selamat, data berhasil ditambahkan','kelasbus.php')
          </script>";
  } else {
    echo "<script>
            alertFailGo('Maaf, pemesanan anda gagal, silahkan cek dan ulangi kembali', 'pesantiket.php')
          </script>";
    echo mysqli_error($conn);
  }
}

?>

<section class="section profile">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body pt-1">
          <h5 class="card-title">Halaman Admin</h5>
          <div class="tab-content pt-2">
  
              <div class="text-center">
                <button><a href="showbus.php">Tampilkan Data Bus</a></button>
                <button><a href="showpemesanan.php">Tampilkan Data Pemesanan Tiket</a></button>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php require_once '../template/footer.php'; ?>
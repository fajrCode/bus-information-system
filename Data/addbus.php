<?php

require_once '../main/function.php';

if (isset($_POST['batal'])) {
  header("Location: showbus.php");
  exit;
}
require_once '../template/sidebar.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
  if (addBus($_POST) > 0) {
    echo "<script>
            alertSuccesGo('Selamat, data berhasil ditambahkan','kelasbus.php')
          </script>";
  } else {
    echo "<script>
            alertFailGo('Maaf, data gagal tambahkan, silahkan cek dan ulangi kembali', 'addPemateri.php')
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
          <h5 class="card-title">Tambah Data Bus</h5>
          <div class="tab-content pt-2">

            <form action="" method="POST" enctype="multipart/form-data">

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Kelas Bus</label>
                <div class="col-md-1 col-lg-3">
                  <select class="form-select" aria-label="Default select example" name="kelas" id="">
                    <option value="">-Pilih Kelas Bus-</option>
                    <?php
                    $ktg = ['Ekonomi', 'Bisnis', 'Eksekutif'];
                    foreach ($ktg as $key) {
                      echo "<option value='" . $key . "'>" . $key . "</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Harga Tiket</label>
                <div class="col-md-8 col-lg-10">
                  <div class="input-group mb-1">
                    <span class="input-group-text">Rp. </span>
                    <input type="number" name='harga' class="form-control">
                  </div>
                </div>
              </div>
              
              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Gambar Bus</label>
                <div class="col-md-8 col-lg-10">
                  <input type="file" name="gambar" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Gambar Interior Bus</label>
                <div class="col-md-8 col-lg-10">
                  <input type="file" name="gambar2" class="form-control">
                </div>
              </div>

              <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
                <button class="btn btn-danger" name="batal">Batal</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once '../template/footer.php'; ?>
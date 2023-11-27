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
            alertSuccesGo('Selamat, tiket anda berhasil dipesan','daftarharga.php')
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
          <h5 class="card-title">Form Pemesanan</h5>
          <div class="tab-content pt-2">
            <form method="post">
              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Nama Lengkap <sup>(*)</sup></label>
                <div class="col-md-8 col-lg-10">
                  <input class="form-control" type="text" name="nama" required>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Nomor Identitas <sup>(*)</sup></label>
                <div class="col-md-8 col-lg-10">
                  <input class="form-control" type="number" name="nik" required>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">No. Hp <sup>(*)</sup></label>
                <div class="col-md-8 col-lg-10">
                  <input class="form-control" type="number" name="no_hp" required>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Kelas Penumpang <sup>(*)</sup></label>
                <div class="col-md-1 col-lg-3">
                  <select class="form-select" aria-label="Default select example" name="kelas" id="kelas" required>
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
                <label class="col-md-3 col-lg-2 col-form-label">Jadwal Keberangkatan <sup>(*)</sup></label>
                <div class="col-md-2 col-lg-3">
                  <input class="form-control" type="date" name="jadwal_berangkat" value="<?php echo date("Y-m-d") ?>" required>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label" for="quantity">Jumlah Penumpang</label>
                <div class="col-md-8 col-lg-10">
                  <input class="form-control" type="number" name="qty" id="qty" value="0">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Jumlah Penumpang Lansia</label>
                <div class="col-md-8 col-lg-10">
                  <input class="form-control" type="number" name="qty_lansia" id="qty_lansia" value="0">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Harga Tiket</label>
                <div class="col-md-8 col-lg-10">
                  <div class="input-group mb-1">
                    <span class="input-group-text">Rp. </span>
                    <input type="text" name='harga' id="harga" class="form-control" readonly>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Total Bayar</label>
                <div class="col-md-8 col-lg-10">
                  <div class="input-group mb-1">
                    <span class="input-group-text">Rp. </span>
                    <input type="number" name='bayar' id="bayar" class="form-control" step="0.1" readonly>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="form-check" style="margin-left: 15px;">
                  <input class="form-check-input" type="checkbox" name="cek" value="true" required>
                  <label class="form-check-label" for="rememberMe">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yan gtelah ditetapkan</label>
                </div>
              </div>

              <div class="text-center">
                <button class="btn btn-primary" type="button" onclick="calculateTotal()">Hitung Total Bayar</button>
                <button class="btn btn-primary" type="submit" name="submit">Pesan Tiket</button>
                <button class="btn btn-danger"><a href="daftarharga.php" style="color: white;">Cancel</a></button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php require_once '../template/footer.php'; ?>
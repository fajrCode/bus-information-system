<?php

require_once '../main/function.php';

// ambil id di url
$table = "bus";
$field = "idbus";
$isi_field = $_GET['idbus'];

//query data bus
$show = querySelect($table, $field, $isi_field)[0];

if (isset($_POST['batal'])) {
  header('Location: showbus.php');
  exit;
}

require_once '../template/sidebar.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
  if (updatebus($_POST) > 0) {
    echo "<script>
            alertSuccesGo('Selamat, data berhasil diubah','showbus.php')
          </script>";
  } else {
    echo "<script>
            alertFailGo('maaf, data gagal diubah, silahkan cek dan ulangi kembali', 'updatebus.php?idbus=$isi_field')
          </script>";
  }
}

?>
<section class="section profile">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body pt-1">
          <h5 class="card-title">Update Data Bus</h5>
          <div class="tab-content pt-2">

            <form action="" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="idbus" value="<?php echo $show["idbus"] ?>">
              <input type="hidden" name="gambarLama" value="<?php echo $show["gambar"] ?>">
              <input type="hidden" name="gambarLama2" value="<?php echo $show["gambar2"] ?>">

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Kelas Bus</label>
                <div class="col-md-1 col-lg-3">
                  <select class="form-select" aria-label="Default select example" name="kelas">
                    <?php
                     $ktg = ['Ekonomi', 'Bisnis', 'Eksekutif'];
                    foreach ($ktg as $key) { ?>
                      <option <?= $key == $show['kelas'] ? 'selected' : '' ?> value=<?= $key ?>> <?= $key ?> </option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Harga Tiket</label>
                <div class="col-md-8 col-lg-10">
                  <div class="input-group mb-1">
                    <span class="input-group-text">Rp. </span>
                    <input type="number" name='harga' class="form-control" value="<?php echo $show["harga"] ?>">
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Gambar Bus</label>
                <div class="col-md-8 col-lg-10">
                  <img src="../gambar/<?php echo $show["gambar"] ?>" width="75px">
                  <div class="input-group mb-3">
                    <input type="file" name="gambar" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-md-3 col-lg-2 col-form-label">Gambar Interior</label>
                <div class="col-md-8 col-lg-10">
                  <img src="../gambar/<?php echo $show["gambar2"] ?>" width="75px">
                  <div class="input-group mb-3">
                    <input type="file" name="gambar2" class="form-control">
                  </div>
                </div>
              </div>

              <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Perbaharui</button>
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
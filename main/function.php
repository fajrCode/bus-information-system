<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbbus";
$conn = mysqli_connect($host, $user, $pass, $db);

$now = date("Y-m-d");

// validasi koneksi db
if (!$conn) {
  die("Koneksi dengan database gagal: " . mysqli_connect_error());
}

//function hapus data damin berdsarkan id
function hapusData($table, $field, $isi_field)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM $table WHERE $field = '$isi_field'");
  return mysqli_affected_rows($conn);
}

// function upload gambar ke repositori
function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $sizeFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 0) {

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $explodeGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($explodeGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
              alert('Hanya boleh upload gambar (jpg, jpeg, png)!');
            </script>";
      return false;
    }

    //cek jika ukuran besar 2,5mb
    if ($sizeFile > 20000000) {
      echo "<script>
              alert('Ukuran file terlalu besar (max 2.5mb');
            </script>";
      return false;
    }
  }

  // generate nama file gambar baru, supaya tidak double saat simpan di repositori
  $newFile = random_int(1, 999);
  $newFile .= '-';
  $newFile .= reset($explodeGambar);
  $newFile .= '.';
  $newFile .= $ekstensiGambar;


  // lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, '../gambar/' . $newFile);

  return $newFile;
}

// function upload gambar2 ke repositori
function upload2()
{
  $namaFile = $_FILES['gambar2']['name'];
  $sizeFile = $_FILES['gambar2']['size'];
  $error = $_FILES['gambar2']['error'];
  $tmpName = $_FILES['gambar2']['tmp_name'];

  // cek apakah tidak ada gambar2 yang diupload
  if ($error === 0) {

    //cek apakah yang diupload adalah gambar2
    $ekstensigambar2Valid = ['jpg', 'jpeg', 'png'];
    $explodegambar2 = explode('.', $namaFile);
    $ekstensigambar2 = strtolower(end($explodegambar2));
    if (!in_array($ekstensigambar2, $ekstensigambar2Valid)) {
      echo "<script>
              alert('Hanya boleh upload gambar2 (jpg, jpeg, png)!');
            </script>";
      return false;
    }

    //cek jika ukuran besar 2,5mb
    if ($sizeFile > 20000000) {
      echo "<script>
              alert('Ukuran file terlalu besar (max 2.5mb');
            </script>";
      return false;
    }
  }

  // generate nama file gambar2 baru, supaya tidak double saat simpan di repositori
  $newFile = random_int(1, 999);
  $newFile .= '-';
  $newFile .= reset($explodegambar2);
  $newFile .= '.';
  $newFile .= $ekstensigambar2;


  // lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, '../gambar/' . $newFile);

  return $newFile;
}

//function query select all data users
function queryShow($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// function query pagination, menampilkan select data
function showAllData($table)
{
  $query = "SELECT * FROM $table";
  $show = queryShow($query);
  return $show;
}

//function query select data berdasarkan id
function querySelect($table, $field, $isi_field)
{
  global $conn;
  $result = mysqli_query($conn, "SELECT * FROM $table WHERE $field='$isi_field'");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row; //hasil array multi dimensi
  }
  return $rows;
}

//function query select data users berdasarkan id
function select($table, $field, $isi_field)
{
  $show = queryShow("SELECT * FROM $table WHERE $field = $isi_field");

  return $show;
}

//function bus
function addBus($query)
{
  global $conn;
  $kelas = htmlspecialchars($query['kelas']);
  $harga = htmlspecialchars($query['harga']);

  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  //upload gambar 2
  $gambar2 = upload2();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO bus VALUES 
                  ('',
                  '$kelas',
                  '$harga',
                  '$gambar',
                  '$gambar2'
                  )";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// function update data pemateri berdasarkan id
function updatebus($query)
{
  global $conn;

  $idbus = htmlspecialchars($query['idbus']);
  $kelas = htmlspecialchars($query['kelas']);
  $harga = htmlspecialchars($query['harga']);

  $gambarLama = $query['gambarLama'];
  $gambarLama2 = $query['gambarLama2'];

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    //upload gambar
    $gambar = upload();
    if (!$gambar) {
      return false;
    }
  }

  // cek apakah user pilih gambar 2 baru atau tidak
  if ($_FILES['gambar2']['error'] === 4) {
    $gambar2 = $gambarLama2;
  } else {
    //upload gambar
    $gambar2 = upload2();
    if (!$gambar2) {
      return false;
    }
  }

  $query = "UPDATE bus SET 
            kelas='$kelas',
            harga='$harga',
            gambar='$gambar',
            gambar2='$gambar2'
            WHERE 
            idbus = '$idbus'";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// Kumpulan Function Workshop

//Function tambah workshop
function addTiket($query)
{
  global $conn;
  $nama = htmlspecialchars($query['nama']);
  $nik = htmlspecialchars($query['nik']);
  $no_hp = htmlspecialchars($query['no_hp']);
  $kelas = htmlspecialchars($query['kelas']);
  $jadwal = $query['jadwal_berangkat'];

  if ($jadwal < date("Y-m-d")) {
    echo "<script>
              alert('Maaf jadwal sudah terlewat!');
            </script>";
    return false;
  }

  $qty = $query['qty'];
  $qtyLansia = $query['qty_lansia'];

  if ($qty <= 0) {
    if ($qtyLansia <= 0) {
      echo "<script>
              alert('Maaf tolong input jumlah penumpang!');
            </script>";
      return false;
    }
  }


  $harga = $query['harga'];
  $total = $query['bayar'];

  $query = "INSERT INTO pemesanan VALUES 
                  ('',
                  '$nama',
                  '$nik',
                  '$no_hp',
                  '$kelas',
                  '$jadwal',
                  '$qty',
                  '$qtyLansia',
                  '$harga',
                  '$total'
                  )";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

?>

<!-- numpang script js di sini untuk sweet alert hehe -->
<script text="text/javascript">
  
  // function untuk hitung biaya tiket
  function calculateTotal() {

    let kelas = document.getElementById("kelas").value;
    let price;

    <?php
    $show = showAllData("bus");
    ?>

    if (kelas === "Ekonomi") {
      price = 100000;
    } else if (kelas === "Bisnis") {
      price = 250000;
    } else {
      price = 300000;
    }

    let qty = document.getElementById("qty").value;
    let qtyLansia = document.getElementById("qty_lansia").value;
    let qtyMuda = qty * price;
    let qtyTua = (qtyLansia * price) - ((qtyLansia * price) * 0.1);
    let total = qtyMuda + qtyTua;
    document.getElementById("harga").value = price;
    document.getElementById("bayar").value = total.toFixed(1);
  }


  function pesan(kata) {
    swal({
      text: kata,
      button: false,
    });
  }

  function sweetConfirm(alamat) {
    Swal.fire({
      title: 'Ciuss niih?',
      text: "Yakin, sama pilihannya?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, yakin',
      cancelButtonText: 'Batalkan'
    }).then((result) => {
      if (result.value) {
        window.location.href = alamat;
      }
    });
  }

  function alertSucces(kata) {
    swal({
      icon: "success",
      text: kata,
    });
  }

  function alertFail(kata) {
    swal({
      icon: "error",
      text: kata,
    });
  }

  function alertSuccesGo(kata, alamat) {
    swal({
      icon: "success",
      text: kata,
    }).then(function() {
      window.location.href = alamat;
    });
  }

  function alertFailGo(kata, alamat) {
    swal({
      icon: "error",
      text: kata,
    }).then(function() {
      window.location.href = alamat;
    });
  }
</script>
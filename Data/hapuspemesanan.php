<?php

require_once '../main/function.php';

require_once '../template/sidebar.php';


$table = "pemesanan";
$field = "idtiket";
$isi_field = $_GET['idtiket'];

if (hapusData($table, $field, $isi_field) > 0) {
  echo '<script> function showAlert() {
          swal({icon: "success",
                text: "Selamat, Data Berhasil di Hapus",
                showConfirmButton: false,
              }).then(function() {window.location.href = "showpemesanan.php";});
          }
          showAlert();
          </script>';
} else {
  echo '<script> function showAlert() {
          swal({icon: "error",
                text: "Maaf, Data Gagal di Hapus",
                showConfirmButton: false,
              }).then(function() {window.location.href = "showpemesanan.php";});
          }
          showAlert();
          </script>';
}

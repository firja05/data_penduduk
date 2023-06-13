<?php
include 'koneksi.php';

if (isset($_POST['id_kecamatan']) && isset($_POST['nama_kecamatan']) && isset($_POST['selected_kabupaten'])) {
  $id_kecamatan = $_POST['id_kecamatan'];
  $nama_kecamatan = $_POST['nama_kecamatan'];
  $selected_kabupaten = $_POST['selected_kabupaten'];

  $query = "INSERT INTO kec (id_kecamatan, nama_kecamatan, id_kabupaten) VALUES ('$id_kecamatan', '$nama_kecamatan', '$selected_kabupaten')";

  if (mysqli_query($connect, $query)) {
    header("Location: tambah_kecamatan.php?status=berhasil");
    exit;
  } else {
    header("Location: tambah_kecamatan.php?status=gagal");
    exit;
  }
} else {
  header("Location: tambah_kecamatan.php?status=gagal");
  exit;
}
?>

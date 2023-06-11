<?php
include 'koneksi.php';

$id_kabupaten = $_GET['id_kabupaten'];

$kec = mysqli_query($connect, "SELECT * FROM kec WHERE id_kabupaten = '$id_kabupaten'");
echo "<option value=''>Pilih Kecamatan</option>";
while ($kece = mysqli_fetch_assoc($kec)) {
  echo "<option value='" . $kece['id_kecamatan'] . "'>" . $kece['nama_kecamatan'] . "</option>";
}
?>

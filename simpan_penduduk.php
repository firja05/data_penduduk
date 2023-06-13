<?php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$id_kabupaten = $_POST['id_kabupaten'];
$id_kecamatan = $_POST['id_kecamatan'];
$golongan_darah = $_POST['golongan_darah'];
$id_pekerjaan = $_POST['id_pekerjaan'];

include('koneksi.php');

$check_query = "SELECT nik FROM penduduk WHERE nik = '$nik'";
$check_result = mysqli_query($connect, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    $status = "gagal";
    header("location:tambah_penduduk.php?status=" . $status);
    exit();
}

$query = "INSERT INTO penduduk(nik, nama, alamat, id_kabupaten, id_kecamatan, golongan_darah, id_pekerjaan)
VALUES('$nik', '$nama', '$alamat', '$id_kabupaten', '$id_kecamatan', '$golongan_darah', '$id_pekerjaan')";

$insert = mysqli_query($connect, $query);

if ($insert) {
    $status = "berhasil";
} else {
    $status = "gagal";
}

header("location:tambah_penduduk.php?status=" . $status);
?>

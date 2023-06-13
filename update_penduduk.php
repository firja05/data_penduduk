<?php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$id_kabupaten = $_POST['id_kabupaten'];
$id_kecamatan = $_POST['id_kecamatan'];
$golongan_darah = $_POST['golongan_darah'];
$id_pekerjaan = $_POST['id_pekerjaan'];

include('koneksi.php');

$query = "UPDATE penduduk SET nama=?, alamat=?, id_kabupaten=?, id_kecamatan=?, golongan_darah=?, id_pekerjaan=? WHERE nik=?";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, "ssiissi", $nama, $alamat, $id_kabupaten, $id_kecamatan, $golongan_darah, $id_pekerjaan, $nik);
$update = mysqli_stmt_execute($stmt);

if ($update) {
    $status = "berhasil";
} else {
    $status = "gagal";
    // Tampilkan pesan kesalahan spesifik
    echo "Error: " . mysqli_error($connect);
}

mysqli_stmt_close($stmt);
mysqli_close($connect);

header("location: edit_penduduk.php?status=".$status."&nik=".$nik);
exit();

?>

<?php
$id_kecamatan = $_GET['id_kecamatan'];
include ('koneksi.php');
$delete = mysqli_query($connect, "DELETE FROM kec WHERE id_kecamatan = '$id_kecamatan'");
if ($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:kecamatan.php?status=".$status);
?>
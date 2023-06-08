<?php
$nik = $_GET['nik'];
include ('koneksi.php');
$delete = mysqli_query($connect,"delete from penduduk where nik='$nik'");
if ($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);
?>
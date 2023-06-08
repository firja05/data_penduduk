<?php
$id_kabupaten = $_GET['id_kabupaten'];
include ('koneksi.php');
$delete = mysqli_query($connect,"delete from kab where id_kabupaten='$id_kabupaten'");
if ($delete){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:kabupaten.php?status=".$status);
?>
<?php
$id_kabupaten        = $_POST['id_kabupaten'];
$nama_kabupaten      = $_POST['nama_kabupaten'];
 

include ('koneksi.php');

$check_query = "SELECT nama_kabupaten FROM kab WHERE nama_kabupaten = '$nama_kabupaten'";
$check_result = mysqli_query($connect, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    $status = "gagal";
    header("location:tambah_kabupaten.php?status=" . $status);
    exit();
}

$query = "INSERT INTO kab(id_kabupaten, nama_kabupaten)
VALUES('$id_kabupaten', '$nama_kabupaten')";
$insert = mysqli_query($connect,$query);

if ($insert){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:tambah_kabupaten.php?status=".$status);   
?>
<?php
$id_kabupaten        = $_POST['id_kabupaten'];
$nama_kabupaten      = $_POST['nama_kabupaten'];
 

include ('koneksi.php');
$query = "INSERT INTO kab(id_kabupaten, nama_kabupaten)
VALUES('$id_kabupaten', '$nama_kabupaten')";
$insert = mysqli_query($connect,$query);

if ($insert){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);   
?>
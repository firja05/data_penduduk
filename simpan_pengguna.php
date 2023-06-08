<?php
$id        = $_POST['id'];
$nama       = $_POST['nama'];
$usernama      = $_POST['usernama'];
$passwordt   = md5($_POST['password']);
 

include ('koneksi.php');
$query = "INSERT INTO pengguna(id, nama, usernama, password)
VALUES('$id', '$nama', '$usernama', '$passwordt')";
$insert = mysqli_query($connect,$query);

if ($insert){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:list_pengguna.php?status=".$status);   
?>
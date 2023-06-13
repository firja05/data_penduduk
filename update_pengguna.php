<?php
$id        = $_POST['id'];
$nama       = $_POST['nama'];
$usernama   = $_POST['usernama'];
$passwordt   = md5($_POST['password']);

include ('koneksi.php');
$query = "UPDATE pengguna SET id='$id', nama='$nama',usernama='$usernama', password='$passwordt'
where id='$id'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:edit_pengguna.php?status=".$status."&id=".$id);   
?>
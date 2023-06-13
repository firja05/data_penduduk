<?php
$id_kabupaten        = $_POST['id_kabupaten'];
$nama_kabupaten       = $_POST['nama_kabupaten'];


include ('koneksi.php');
$query = "UPDATE kab SET id_kabupaten='$id_kabupaten', nama_kabupaten='$nama_kabupaten'
where id_kabupaten='$id_kabupaten'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:edit_kabupaten.php?status=".$status."&id_kabupaten=".$id_kabupaten);   
?>
<?php
$id_kecamatan        = $_POST['id_kecamatan'];
$id_kabupaten       = $_POST['id_kabupaten'];
$nama_kecamatan       = $_POST['nama_kecamatan'];


include ('koneksi.php');
$query = "UPDATE kec SET id_kecamatan='$id_kecamatan', id_kabupaten='$id_kabupaten', nama_kecamatan='$nama_kecamatan'
where id_kecamatan='$id_kecamatan'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:edit_kecamatan.php?status=".$status."&id_kecamatan=".$id_kecamatan);   
?>
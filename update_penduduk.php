<?php
$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$alamat      = $_POST['alamat'];
$id_kabupaten   = $_POST['id_kabupaten'];
$id_kecamatan   = $_POST['id_kecamatan'];
$golongan_darah   = $_POST['golongan_darah'];
$id_pekerjaan   = $_POST['id_pekerjaan'];

include ('koneksi.php');
$query = "UPDATE penduduk SET nik='$nik', nama='$nama',alamat='$alamat', id_kabupaten='$id_kabupaten',id_kecamatan='$id_kecamatan', golongan_darah='$golongan_darah', id_pekerjaan='$id_pekerjaan' 
where nik='$nik'";

$update = mysqli_query($connect,$query);
if ($update){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);   
?>
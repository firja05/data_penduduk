<?php
$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$alamat      = $_POST['alamat'];
$id_kabupaten   = $_POST['id_kabupaten'];
$id_kecamatan   = $_POST['id_kecamatan'];
$golongan_darah   = $_POST['golongan_darah'];
$id_pekerjaan   = $_POST['id_pekerjaan'];


include ('koneksi.php');
$query = "INSERT INTO penduduk(nik, nama, alamat, id_kabupaten, id_kecamatan, golongan_darah, id_pekerjaan)
VALUES('$nik', '$nama', '$alamat', '$id_kabupaten', '$id_kecamatan', '$golongan_darah', '$id_pekerjaan')";
$insert = mysqli_query($connect,$query);    

if ($insert){
    $status = "berhasil";

}else{
    $status = "gagal";
}
header("location:index.php?status=".$status);   
?>
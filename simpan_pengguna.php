<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$usernama = $_POST['usernama'];
$passwordt = md5($_POST['password']);

include('koneksi.php');

$check_id_query = "SELECT id FROM pengguna WHERE id = '$id'";
$check_id_result = mysqli_query($connect, $check_id_query);

$check_usernama_query = "SELECT id FROM pengguna WHERE usernama = '$usernama'";
$check_usernama_result = mysqli_query($connect, $check_usernama_query);

if (mysqli_num_rows($check_id_result) > 0) {
    $status = "gagal_id";
    header("location:tambah_pengguna.php?status=" . $status);
    exit();
} elseif (mysqli_num_rows($check_usernama_result) > 0) {
    $status = "gagal_usernama";
    header("location:tambah_pengguna.php?status=" . $status);
    exit();
}

$query = "INSERT INTO pengguna(id, nama, usernama, password) VALUES('$id', '$nama', '$usernama', '$passwordt')";
$insert = mysqli_query($connect, $query);

if ($insert) {
    $status = "berhasil";
} else {
    $status = "gagal";
}
header("location:tambah_pengguna.php?status=" . $status);
?>

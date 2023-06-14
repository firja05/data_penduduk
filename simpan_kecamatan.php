<?php
include 'koneksi.php';

if (isset($_POST['id_kecamatan']) && isset($_POST['nama_kecamatan']) && isset($_POST['selected_kabupaten'])) {
    $id_kecamatan = $_POST['id_kecamatan'];
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $selected_kabupaten = $_POST['selected_kabupaten'];

    $check_query = "SELECT nama_kecamatan FROM kec WHERE nama_kecamatan = '$nama_kecamatan'";
    $check_result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $status = "gagal_nama_kecamatan";
        header("location:tambah_kecamatan.php?status=" . $status);
        exit();
    }

    $query = "INSERT INTO kec (id_kecamatan, nama_kecamatan, id_kabupaten) VALUES ('$id_kecamatan', '$nama_kecamatan', '$selected_kabupaten')";
    $insert = mysqli_query($connect, $query);

    if ($insert) {
        $status = "berhasil";
    } else {
        $status = "gagal";
    }

    header("location:tambah_kecamatan.php?status=".$status);
}
?>

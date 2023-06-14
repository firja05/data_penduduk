<?php
$usernameTxt = $_POST['usernama'];
$passwordTxt = md5($_POST['password']);

include 'koneksi.php';

$pengguna = mysqli_query($connect, "SELECT * FROM pengguna WHERE usernama='$usernameTxt' AND password='$passwordTxt'");

$check = mysqli_num_rows($pengguna);

if ($check > 0) {
    session_start();
    $penggunaRow = mysqli_fetch_array($pengguna);
    $_SESSION['usernama'] = $penggunaRow['usernama'];
    $_SESSION['nama'] = $penggunaRow['nama'];
    header("location:index.php?status=berhasil_login");
} else {
    header("location:login.php?status=gagal_login");
}
?>

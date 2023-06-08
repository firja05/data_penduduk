<?php
$usernameTxt    = $_POST['usernama'];
$passwordTxt    = md5($_POST['password']);

include 'koneksi.php';

$pengguna=mysqli_query($connect,"select * from pengguna where usernama='$usernameTxt' and password='$passwordTxt'");

$check=mysqli_num_rows($pengguna);

if ($check>0){
    session_start();
    $penggunaRow = mysqli_fetch_array($pengguna);
    $_SESSION['usernama'] = $penggunaRow['usernama'];
    $_SESSION['nama']   = $penggunaRow['nama'];
    header("location:index.php");
}else{
    header("location:login.php");
}
?>
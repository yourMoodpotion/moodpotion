<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$magic_shop = mysqli_query($koneksi, "select * from data where username='$username' and password='$password'");
$cek = mysqli_num_rows($magic_shop);
if ($cek > 0) {
    $data = mysqli_fetch_assoc($magic_shop);
    if ($data['level'] == "user") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        header("location: hal_user.php");
    } else {
        header("location: index.php?pesan=gagal");
    }
} else {
    header("location: index.php?pesan=gagal");
}
?>
<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Ambil data user dari database
$query = "SELECT * FROM tb_admin WHERE username='$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($data) {
    // Verifikasi password (pakai password_verify)
    if (password_verify($password, $data['password'])) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['status'] = "login";
        header("Location: index.php");
    } else {
        header("Location: login.php?pesan=gagal"); // Password salah
    }
} else {
    header("Location: login.php?pesan=gagal"); // Username nggak ditemukan
}
?>

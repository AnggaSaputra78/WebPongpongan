<?php
// File ini menghubungkan ke database MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "desa_pongpongan";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
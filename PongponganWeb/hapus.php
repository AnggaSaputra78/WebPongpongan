<?php
include 'koneksi.php';
$id = $_GET['id'];
$conn->query("DELETE FROM data_warga WHERE id=$id");
header("Location: index.php");
?>
<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $dusun = $_POST['dusun'];
    $status_pekerjaan = $_POST['status_pekerjaan'];

    $sql = "INSERT INTO data_warga (nik, nama, jenis_kelamin, alamat, dusun, status_pekerjaan)
            VALUES ('$nik', '$nama', '$jenis_kelamin', '$alamat', '$dusun', '$status_pekerjaan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect balik ke halaman utama
        exit;
    } else {
        echo "Gagal menyimpan data: " . $conn->error;
    }
}
?>

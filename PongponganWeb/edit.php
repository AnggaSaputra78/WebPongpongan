<?php include 'header.php'; ?>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$warga = $conn->query("SELECT * FROM data_warga WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $stmt = $conn->prepare("UPDATE data_warga SET nik=?, nama=?, jenis_kelamin=?, alamat=?, dusun=?, status_pekerjaan=? WHERE id=?");
  $stmt->bind_param("ssssssi", $_POST['nik'], $_POST['nama'], $_POST['jk'], $_POST['alamat'], $_POST['dusun'], $_POST['pekerjaan'], $id);
  $stmt->execute();
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Warga</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    textarea,
    select {
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button[type="submit"] {
      background-color: #218838;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #218838;
    }

    a.kembali {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
      text-align: center;
    }

    a.kembali:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      .container {
        padding: 20px;
      }

      input[type="text"],
      textarea,
      select,
      button[type="submit"] {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Edit Data Warga</h1>
    <form method="post">
      <input type="text" name="nik" value="<?= $warga['nik'] ?>" placeholder="NIK" required>
      <input type="text" name="nama" value="<?= $warga['nama'] ?>" placeholder="Nama" required>
      
      <select name="jk" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option <?= $warga['jenis_kelamin']=='Laki-laki'?'selected':'' ?> value="Laki-laki">Laki-laki</option>
        <option <?= $warga['jenis_kelamin']=='Perempuan'?'selected':'' ?> value="Perempuan">Perempuan</option>
      </select>
      
      <textarea name="alamat" placeholder="Alamat" required><?= $warga['alamat'] ?></textarea>
      <input type="text" name="dusun" value="<?= $warga['dusun'] ?>" placeholder="Dusun" required>
      <input type="text" name="pekerjaan" value="<?= $warga['status_pekerjaan'] ?>" placeholder="Status Pekerjaan" required>

      <button type="submit">Update</button>
    </form>
    <a href="index.php" class="kembali">&laquo; Kembali</a>
  </div>
</body>
</html>
<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>
<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:login.php");
    exit;
}
?>  

<style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  .wrapper {
    min-height: 100%;
    display: flex;
    flex-direction: column;
  }

  .content {
    flex: 1;
  }

  .container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
  }

  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .actions {
    text-align: right;
    margin-bottom: 15px;
  }

  .btn-tambah {
    background-color: #28a745;
    color: white;
    padding: 10px 14px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
  }

  .btn-tambah:hover {
    background-color: #218838;
  }

  .tabel-warga {
    width: 100%;
    border-collapse: collapse;
  }

  .tabel-warga th, .tabel-warga td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
  }

  .tabel-warga th {
    background-color: #f8f9fa;
    color: #333;
  }

  .btn-edit {
    background-color: #007bff;
    color: white;
    padding: 6px 10px;
    text-decoration: none;
    border-radius: 4px;
  }

  .btn-edit:hover {
    background-color: #0056b3;
  }

  .btn-hapus {
    background-color: #dc3545;
    color: white;
    padding: 6px 10px;
    text-decoration: none;
    border-radius: 4px;
  }

  .btn-hapus:hover {
    background-color: #bd2130;
  }

  @media (max-width: 768px) {
    .container {
      padding: 10px;
    }

    .tabel-warga th, .tabel-warga td {
      font-size: 12px;
      padding: 8px;
    }

    .btn-edit, .btn-hapus, .btn-tambah {
      font-size: 12px;
      padding: 6px 8px;
    }

    h1 {
      font-size: 20px;
    }
  }
</style>

<div class="wrapper">
  <div class="content">
    <div class="container">
      <h1>Data Warga Desa Pongpongan</h1>

      <div class="actions">
        <a href="tambah.php" class="btn-tambah">+ Tambah Data Warga</a>
      </div>

      <table class="tabel-warga">
        <thead>
          <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Dusun</th>
            <th>Status Pekerjaan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $conn->query("SELECT * FROM data_warga");
          if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$row['nik']}</td>
                      <td>{$row['nama']}</td>
                      <td>{$row['jenis_kelamin']}</td>
                      <td>{$row['alamat']}</td>
                      <td>{$row['dusun']}</td>
                      <td>{$row['status_pekerjaan']}</td>
                      <td>
                        <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                        <a href='hapus.php?id={$row['id']}' class='btn-hapus' onclick=\"return confirm('Hapus data ini?')\">Hapus</a>
                      </td>
                    </tr>";
            }
          } else {
            echo "<tr><td colspan='7'>Belum ada data warga.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</div>

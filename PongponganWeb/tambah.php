<?php include 'header.php'; ?>

<h2 class="judul-form">Input Data Warga</h2>

<form action="proses_input.php" method="post" class="form-warga">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" required>

  <label for="alamat">Alamat:</label>
  <input type="text" id="alamat" name="alamat" required>

  <label for="no_kk">No KK:</label>
  <input type="text" id="no_kk" name="no_kk" required>

  <label for="nik">NIK:</label>
  <input type="text" id="nik" name="nik" required>

  <button type="submit">Simpan</button>

  <a href="index.php" class="tombol-kembali">&laquo; Kembali</a>
</form>

<?php include 'footer.php'; ?>

<style>
  .judul-form {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    color: #1E5128;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .form-warga {
    width: 90%;
    max-width: 600px;
    margin: 0 auto 40px auto;
    padding: 20px;
    background-color: #F5F5F5;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .form-warga label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
  }

  .form-warga input {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #CCC;
    border-radius: 5px;
  }

  .form-warga button {
    background-color: #1E5128;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
  }

  .form-warga button:hover {
    background-color: #14591D;
  }

  .tombol-kembali {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    color: #1E5128;
    font-weight: bold;
    transition: color 0.2s;
  }

  .tombol-kembali:hover {
    color: #0c3614;
    text-decoration: underline;
  }
</style>

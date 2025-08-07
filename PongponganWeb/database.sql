-- Buat database dan tabel
CREATE DATABASE IF NOT EXISTS desa_pongpongan;
USE desa_pongpongan;

CREATE TABLE IF NOT EXISTS data_warga (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nik VARCHAR(16) NOT NULL UNIQUE,
  nama VARCHAR(100) NOT NULL,
  jenis_kelamin ENUM('Laki-laki','Perempuan') NOT NULL,
  alamat TEXT NOT NULL,
  dusun VARCHAR(100) NOT NULL,
  status_pekerjaan VARCHAR(100) NOT NULL
);

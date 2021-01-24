<?php

require_once 'app/koneksi.php';

$query = "INSERT INTO users (username, password, nama, kontak, alamat, hak_akses) VALUE ('$_POST[username]', '$_POST[password]', '$_POST[nama]', '$_POST[kontak]', '$_POST[alamat]', '$_POST[hak_akses]')";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_karyawan.php");
} else {
  die("Gagal menambah karyawan: " . $conn->error);
}

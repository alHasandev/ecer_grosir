<?php

require_once 'app/koneksi.php';

$password = $_POST['password'];

if ($password === '') {
  $user = $conn->query("SELECT * FROM users WHERE id = '$_POST[id]'")->fetch_assoc();
  $password = $user['password'];
}

$query = "UPDATE users SET username = '$_POST[username]', password = '$password', nama = '$_POST[nama]', kontak = '$_POST[kontak]', alamat = '$_POST[alamat]' WHERE id = '$_POST[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_karyawan.php");
} else {
  die("Gagal mengupdate karyawan: " . $conn->error);
}

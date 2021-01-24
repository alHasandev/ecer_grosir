<?php

require_once 'app/koneksi.php';

$query = "INSERT INTO users (username, password, nama, hak_akses) VALUE ('$_POST[username]', '$_POST[password]', '$_POST[nama]', '$_POST[hak_akses]')";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_admin.php");
} else {
  die("Gagal menambah user: " . $conn->error);
}

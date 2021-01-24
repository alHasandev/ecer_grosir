<?php

require_once 'app/koneksi.php';

$password = $_POST['password'];

if ($password === '') {
  $user = $conn->query("SELECT * FROM users WHERE id = '$_POST[id]'")->fetch_assoc();
  $password = $user['password'];
}

$query = "UPDATE users SET username = '$_POST[username]', password = '$password', nama = '$_POST[nama]' WHERE id = '$_POST[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_admin.php");
} else {
  die("Gagal mengupdate admin: " . $conn->error);
}

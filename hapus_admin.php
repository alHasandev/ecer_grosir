<?php

require_once 'app/koneksi.php';

$query = "DELETE FROM users WHERE id = '$_GET[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_admin.php");
} else {
  die("Gagal menghapus admin: " . $conn->error);
}

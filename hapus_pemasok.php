<?php

require_once 'app/koneksi.php';

$query = "DELETE FROM pemasok WHERE id = '$_GET[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_pemasok.php");
} else {
  die("Gagal menghapus pemasok: " . $conn->error);
}

<?php

require_once 'app/koneksi.php';

$query = "DELETE FROM komoditas WHERE id = '$_GET[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_komoditas.php");
} else {
  die("Gagal menghapus komoditas: " . $conn->error);
}

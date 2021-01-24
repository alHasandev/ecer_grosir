<?php

require_once 'app/koneksi.php';

$query = "INSERT INTO kategori (kode, nama, keterangan) VALUE ('$_POST[kode]', '$_POST[nama]', '$_POST[keterangan]')";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_kategori.php");
} else {
  die("Gagal menambah kategori: " . $conn->error);
}

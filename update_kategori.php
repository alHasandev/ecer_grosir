<?php

require_once 'app/koneksi.php';

$query = "UPDATE kategori SET kode = '$_POST[kode]', nama_kategori = '$_POST[nama_kategori]', keterangan = '$_POST[keterangan]' WHERE id = '$_POST[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_kategori.php");
} else {
  die("Gagal mengupdate kategori: " . $conn->error);
}

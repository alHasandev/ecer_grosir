<?php

require_once 'app/koneksi.php';

$query = "INSERT INTO komoditas (kode, nama, id_kategori, harga, stok, keterangan) VALUE ('$_POST[kode]','$_POST[nama]', '$_POST[id_kategori]', '$_POST[harga]', '$_POST[stok]', '$_POST[keterangan]')";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_komoditas.php");
} else {
  die("Gagal menambah komoditas: " . $conn->error);
}

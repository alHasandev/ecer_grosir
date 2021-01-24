<?php

require_once 'app/koneksi.php';

$query = "UPDATE komoditas SET kode = '$_POST[kode]', nama = '$_POST[nama]', id_kategori = '$_POST[id_kategori]', harga = '$_POST[harga]', stok = '$_POST[stok]', keterangan = '$_POST[keterangan]' WHERE id = '$_POST[id]'";

$hasil = $conn->query($query);

if ($hasil) {
  header("Location: data_komoditas.php");
} else {
  die("Gagal mengupdate komoditas: " . $conn->error);
}

<?php

require_once "layouts/header.php";
require_once "app/koneksi.php";

?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <!-- tombah tambah data -->
        <div class="row">
          <div class="col-md-6">
            <!-- Judul Halaman -->
            <h4>Data Komoditas</h4>
          </div>
          <div class="col-md-6 text-right">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#formModal">TAMBAH</a>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tableMenuItem" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th>Komoditas</th>
              <th class="text-center">Kategori</th>
              <th>Harga</th>
              <th class="text-center">Stok</th>
              <th>Keterangan</th>
              <th class="text-center">Operasi</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $no = 1;
            $komoditas = $conn->query("SELECT komoditas.*, kategori.kode as kode_kategori FROM komoditas LEFT JOIN kategori ON komoditas.id_kategori = kategori.id");
            while ($data = $komoditas->fetch_assoc()) :

            ?>
              <tr>
                <td class="text-center"><?= $no; ?></td>
                <td>[<?= $data['kode'] ?>] <?= $data['nama'] ?></td>
                <td class="text-center"><?= $data['kode_kategori'] ?></td>
                <td><?= rupiah($data['harga']) ?></td>
                <td class="text-center"><?= $data['stok'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td class="text-center">
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#formModal" onclick='editForm(`<?= json_encode($data) ?>`)'>
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal" onclick='deleteModal(`hapus_komoditas.php?id=<?= $data["id"] ?>`, `Komoditas: [<?= $data["kode"] ?>] <?= $data["nama"] ?>`)'>
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<!-- Modal -->

<!-- Form Modal untuk tambah dan Edit Data -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!-- atur form disini -->
    <form action="tambah_komoditas.php" method="POST" id="form" class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-light" id="formModalLabel">Tambah Data Komoditas</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="resetForm('tambah_komoditas.php', 'Tambah Data Komoditas')">
          <span aria-hidden="true" class="text-light">×</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- edit untuk mengubah isi form -->
        <input type="hidden" name="id" id="id" value="">
        <div class="row">
          <div class="form-group col-md-3">
            <label for="kode">Kode</label>
            <input type="text" name="kode" id="kode" class="form-control">
          </div>
          <div class="form-group col-md-9">
            <label for="nama">Nama Komoditas</label>
            <input type="text" name="nama" id="nama" class="form-control">
          </div>
        </div>
        <!-- text input -->
        <div class="form-group">
          <label for="id_kategori">Pilih Kategori</label>
          <select class="form-control select2" name="id_kategori" id="id_kategori" style="width: 100%;">
            <?php

            $kategori = $conn->query("SELECT * FROM kategori");
            while ($data = $kategori->fetch_assoc()) :

            ?>
              <option value="<?= $data['id'] ?>">[<?= $data['kode'] ?>] <?= $data['nama'] ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="harga">Harga Komoditas</label>
          <input type="number" name="harga" id="harga" class="form-control">
        </div>
        <div class="form-group">
          <label for="stok">Stok</label>
          <input type="number" name="stok" id="stok" class="form-control" value="0" disabled>
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <!-- ubah tombol form -->
        <button class="btn btn-secondary" type="reset" data-dismiss="modal" onclick="resetForm('tambah_komoditas.php', 'Tambah Data Komoditas')">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Tambah">
      </div>
    </form>
  </div>
</div>


<!-- coding untuk form edit -->
<script>
  // fungsi untuk edit siswa
  function editForm(data) {
    // parse json data menjadi objek
    data = JSON.parse(data);
    // ikuti pola sesuaikan dengan id pada form modal data

    // ubah action dari form menjadi edit
    // let editAction = window.location.href + '&aksi=edit';
    let editAction = 'update_komoditas.php';
    // console.log(window.location);
    $('#form').attr('action', editAction);

    // ubah judul form
    $('#formModalLabel').html('Edit Data Komoditas');

    // ubah tombol tambah menjadi edit
    $('#form input[type=submit]').val('Edit');

    // ubah dan tambahkan sesuai form kalian
    $('#id').val(data.id);
    $('#kode').val(data.kode);
    $('#nama').val(data.nama);
    $('#id_kategori').val(data.id_kategori);
    $('#harga').val(data.harga);
    $('#stok').val(data.stok);
    $('#keterangan').val(data.keterangan);

  }
</script>

<?php require_once "layouts/footer.php" ?>
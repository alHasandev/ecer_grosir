</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; {Nama} {Tahun}.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark text-center">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5 class="text-uppercase"><?= $user['username'] ?></h5>
    <p><?= $user['nama'] ?></p>
    <a href="logout.php" class="">LOGOUT</a>
  </div>
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Modal Hapus Data-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus !</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="resetForm()">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="deleteBody">Anda Yakin Akan Menghapus <span>Data</span> ?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm()">Cancel</button>
        <a href="<?= base_url() ?>" class="btn btn-danger" id="deleteLink">Hapus</a>
      </div>
    </div>
  </div>
</div>

<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/js/adminlte.min.js"></script>
</body>

</html>
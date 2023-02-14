<?= $this->session->flashdata('pesan'); ?>

<div class="card">
  <div class="card-header">
    <a href="<?= base_url('siswa/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah
      Siswa</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table align-items-center table-bordered table-striped">
      <thead>
        <tr class="text-center">
          <th>No</th>
          <th>Nama Siswa</th>
          <th>Kelas Siswa</th>
          <th>Alamat Siswa</th>
          <th>Nomor Telepon</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php
      $no = 1;
      foreach ($siswa as $ssw): ?>
        <tbody>
          <tr class="text-center">
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?= $ssw->nama_siswa ?>
            </td>
            <td>
              <?= $ssw->kelas_siswa ?>
            </td>
            <td>
              <?= $ssw->alamat_siswa ?>
            </td>
            <td>
              <?= $ssw->nomor_telepon ?>
            </td>
            <td>
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editSiswa<?= $ssw->id_siswa ?>"><i
                  class="fas fa-edit"></i></button>
              <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
    </table>
  </div>
</div>



<!-- Modal -->
<?php foreach ($siswa as $ssw): ?>
  <div class="modal fade" id="editSiswa<?= $ssw->id_siswa ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('siswa/edit/' . $ssw->id_siswa) ?>" method="POST">
            <div class="form-group">
              <label for="nama_siswa">Nama Siswa</label>
              <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $ssw->nama_siswa ?>">
              <?= form_error('nama_siswa', '<div class="text-danger text-small">') ?>
            </div>
            <div class="form-group">
              <label for="kelas_siswa">Kelas Siswa</label>
              <input type="text" class="form-control" id="kelas_siswa" name="kelas_siswa"
                value="<?= $ssw->kelas_siswa ?>">
              <?= form_error('kelas_siswa', '<div class="text-danger text-small">') ?>
            </div>
            <div class="form-group">
              <label for="alamat_siswa">Alamat Siswa</label>
              <textarea name="alamat_siswa" id="alamat_siswa" class="form-control"> <?= $ssw->alamat_siswa ?></textarea>
              <?= form_error('alamat_siswa', '<div class="text-danger text-small">') ?>
            </div>
            <div class="form-group">
              <label for="nomor_telepon">No. Telp</label>
              <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                value="<?= $ssw->nomor_telepon ?>">
              <?= form_error('nomor_telepon', '<div class="text-danger text-small">') ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times"></i>
                Close</button>
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save changes</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
<?php endforeach; ?>
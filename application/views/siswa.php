<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Siswa
    </h3>
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
              <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
              <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
    </table>
  </div>
</div>
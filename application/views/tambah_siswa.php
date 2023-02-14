<form action="<?= base_url('siswa/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label for="nama_siswa">Nama Siswa</label>
        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
        <?= form_error('nama_siswa', '<div class="text-danger text-small">') ?>
    </div>
    <div class="form-group">
        <label for="kelas_siswa">Kelas Siswa</label>
        <input type="text" class="form-control" id="kelas_siswa" name="kelas_siswa">
        <?= form_error('kelas_siswa', '<div class="text-danger text-small">') ?>
    </div>
    <div class="form-group">
        <label for="alamat_siswa">Alamat Siswa</label>
        <textarea name="alamat_siswa" id="alamat_siswa" class="form-control"></textarea>
        <?= form_error('alamat_siswa', '<div class="text-danger text-small">') ?>
    </div>
    <div class="form-group">
        <label for="nomor_telepon">No. Telp</label>
        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
        <?= form_error('nomor_telepon', '<div class="text-danger text-small">') ?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Reset</button>
</form>
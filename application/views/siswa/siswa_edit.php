<div class="content-wrapper">
  <section class="content-header">
      <h1>
        Siswa
        <small>Edit Data</small>
      </h1>
    </section>
  <section class="content">
    <?= form_open('siswa/edit_aksi'); ?>
      <div class="form-group">
        <label for="nama">Nama Siswa</label>
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $siswa['id']; ?>" required>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" required>
      </div>
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" value="<?= $siswa['nim']; ?>" required>
      </div>
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>" required>
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="select" class="form-control" id="jurusan" name="jurusan" value="<?= $siswa['jurusan']; ?>" required>
      </div>
      <div class="form-group">
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    <?= form_close(); ?>
  </section>
</div>
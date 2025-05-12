<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Siswa</button>
        <table class="table" >
            <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JURUSAN</th>
                    <th class="text-center">AKSI</th>
                </tr>
                <?php 
                $no = 1;
                foreach($siswa as $s): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $s['nama']; ?></td>
                        <td><?= $s['nim']; ?></td>
                        <td><?= $s['tgl_lahir']; ?></td>
                        <td><?= $s['jurusan']; ?></td>
                        <td class="text-center" style="white-space: nowrap;">
                          <?php echo form_open('siswa/hapus_aksi', ['class' => 'd-inline-block m-0']); ?>
                            <input type="hidden" name="id" value="<?= $s['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm me-1" onclick="return confirm('Yakin?')">
                              <i class="fa fa-trash"></i>
                            </button>
                          <?php echo form_close(); ?>

                          <a href="<?= site_url('siswa/edit/'.$s['id']); ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                          </a>
                        </td>

                    </tr>
                <?php endforeach;?>
        </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('siswa/tambah_aksi');  ?>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama:</label>
              <input type="text" class="form-control" id="recipient-name" name="nama">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">NIM:</label>
              <input type="text" class="form-control" id="message-text" name="nim">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Tanggal Lahir:</label>
              <input type="date" class="form-control" id="message-text" name="tgl_lahir">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Jurusan:</label>
              <input type="text" class="form-control" id="message-text" name="jurusan">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>
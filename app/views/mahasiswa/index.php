<div class="container mt-4">
  <h3 class="text-center">Daftar Buku</h3>
  <div class="card ">

    <div class="card-header bg-dark text-white">
      Data Buku
    </div>
    <div class="card-body">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
      </button>
      <table class="table table-bordered table-striped table-hover text-center d-flex justify-content-center">
        <tr>
          <th>No.</th>
          <th>Judul Buku</th>
          <th>Penerbit</th>
          <th>Pengarang</th>
          <th>Tahun Terbit</th>
          <th>Harga Buku</th>
          <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($data['buku'] as $buku) : ?>
          <tr>
            <td><?= $buku['id']; ?></td>
            <td><?= $buku['judul']; ?></td>
            <td><?= $buku['penerbit']; ?></td>
            <td><?= $buku['pengarang']; ?></td>
            <td><?= $buku['tahun']; ?></td>
            <td><?= $buku['harga']; ?></td>
            <td>
              <a href="#" class="btn btn-warning">Ubah</a>
              
            </td>
            <td>
              <a href="#" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
      <!-- Modal -->
      <div class="modal fade modal-lg" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="formModalLabel">Form Data Mahasiswa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="formCrud.php" method="POST">
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Judul</label>
                  <input type="text" class="form-control" name="tnim" placeholder="Masukan NIM Anda!">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Penerbit</label>
                  <input type="text" class="form-control" name="tnama" placeholder="Masukan Nama Penerbit!">
                </div>
                <!-- <div class="mb-3">
                  <label class="form-label">Alamat</label>
                  <textarea class="form-control" name="talamat" rows="3"></textarea>
                </div> -->
                <div class="mb-3">
                  <label class="form-label">Nama Pengarang Buku</label>
                  <input type="text" class="form-control" name="temail" placeholder="Masukan Nama Pengarang Buku!">
                </div>
                <div class="mb-3">
                  <label class="form-label">Tahun Terbit</label>
                  <input type="Date" class="form-control" name="temail" placeholder="Masukan Tahun Terbit!">
                </div>
                <!-- <div class="mb-3">
                  <label class="form-label">Jurusan</label>
                  <select class="form-select" name="tjurusan">
                    <option></option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                  </select>
                </div> -->
                
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" name="bkeluar">Keluar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
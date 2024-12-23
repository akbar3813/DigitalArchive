<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Siswa</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
          <!-- // Form -->
          <form action="./store.php" method="POST">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>Nama siswa:</td>
                <td><input class="form-control" type="nama_siswa" name="nama_siswa"></td>
              </tr>

              <tr>
                <td>Tempat Lahir:</td>
                <td><input class="form-control" type="text" name="tempat_lahir"></td>
              </tr>

              <tr>
                <td>Tanggal Lahir:</td>
                <td><input class="form-control" type="date" name="tanggal_lahir"></td>
              </tr>
              <tr>

              <tr>
                <td>Alamat:</td>
                <td><input class="form-control" type="text" name="alamat"></td>
              </tr>

              <tr>
                <td>NISN:</td>
                <td><input class="form-control" type="number" name="nisn" required></td>
              </tr>

              <tr>
                <td>Nama Orang Tua:</td>
                <td><input class="form-control" type="text" name="nama_ortu" required></td>
              </tr>

              <tr>
                <td>No Orang tua:</td>
                <td><input class="form-control" type="number" name="no_ortu" required></td>
              </tr>

              <tr>
                <td>Nama Wali Murid:</td>
                <td><input class="form-control" type="text" name="nama_wali" placeholder="--Masukkan Bila Ada--"></td>
              </tr>

              <tr>
                <td>No Wali murid:</td>
                <td><input class="form-control" type="number" name="no_wali" placeholder="--Masukkan Bila Ada--"></td>
              </tr>

              <tr>
                  <td>Foto Pribadi</td>
                  <td><input type="file" name="foto" class="form-control" accept="image/*" required></td>
                  </tr>

                  <tr>
                  <td>Raport</td>
                  <td><input type="file" name="raport" class="form-control" accept="image/*" required></td>
                  </tr>

                <td>Kelas:</td>
                <td>
                  <select class="form-control" name="kelas" id="kelas" required>
                    <option value="">--Pilih Kelas--</option>
                    <option value="1">Kelas 1</option>
                    <option value="2">Kelas 2</option>
                    <option value="3">Kelas 3</option>
                    <option value="4">Kelas 4</option>
                    <option value="5">Kelas 5</option>
                    <option value="6">Kelas 6</option>
                  </select>
                </td>
              </tr>
      
             
                    
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
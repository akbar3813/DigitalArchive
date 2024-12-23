<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM kelas_5 WHERE id='$id'");
$data=mysqli_fetch_array($query);
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Siswa</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update5.php" method="POST">
            

            <table cellpadding="8" class="w-100">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
              <tr>
                <td>Nama siswa:</td>
                <td><input class="form-control" type="nama_siswa" name="nama_siswa" value="<?= $data['nama_siswa']; ?>"></td>
              </tr>

              <tr>
                <td>Tempat Lahir:</td>
                <td><input class="form-control" type="text" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>"></td>
              </tr>

              <tr>
                <td>Tanggal Lahir:</td>
                <td><input class="form-control" type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>"></td>
              </tr>
              <tr>

              <tr>
                <td>Alamat:</td>
                <td><input class="form-control" type="text" name="alamat" value="<?= $data['alamat']; ?>"></td>
              </tr>

              <tr>
                <td>NISN:</td>
                <td><input class="form-control" type="number" name="nisn" value="<?= $data['nisn']; ?>"required></td>
              </tr>

              <tr>
                <td>Nama Orang Tua:</td>
                <td><input class="form-control" type="text" name="nama_ortu" value="<?= $data['nama_ortu']; ?>"required></td>
              </tr>

              <tr>
                <td>No Orang tua:</td>
                <td><input class="form-control" type="number" name="no_ortu" value="<?= $data['no_ortu']; ?>"required></td>
              </tr>

              <tr>
                <td>Nama Wali Murid:</td>
                <td><input class="form-control" type="text" name="nama_wali" value="<?= $data['nama_wali']; ?>"></td>
              </tr>

              <tr>
                <td>No Wali murid:</td>
                <td><input class="form-control" type="number" name="no_wali" value="<?= $data['no_wali']; ?>"></td>
              </tr>

              <tr>
                  <td>Foto Pribadi</td>
                  <td><input type="file" name="foto" class="form-control" accept="image/*" ></td>
                  </tr>

                  <tr>
                  <td>Raport</td>
                  <td><input type="file" name="raport" class="form-control" accept="image/*" ></td>
                  </tr>
               
              </tr>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  <td>
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
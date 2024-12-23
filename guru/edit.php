<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM guru WHERE id='$id'");
$data=mysqli_fetch_array($query);
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Guru</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
               <table cellpadding="8" class="w-100">
               <input type="hidden" name="id" value="<?= $data['id']; ?>">
              <tr>
                <td>Nama Guru</td>
                <td><input class="form-control" type="text" name="nama" size="20" value="<?= $data['nama'] ?> " required></td>
              </tr>

            <tr>
                <td>Nomer Pekerja</td>
                <td><input class="form-control" type="number" name="no_pekerja" size="20" value="<?= $data['no_pekerja'] ?> " required></td>
              </tr>

              <tr>
                <td>Tempat Lahir</td>
                <td><input class="form-control" type="text" name="tempat_lahir" size="20" value="<?= $data['tempat_lahir'] ?> " required></td>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <td><input class="form-control" type="date" name="tanggal_lahir" size="20" value="<?= $data['tanggal_lahir'] ?> "required></td>
              </tr>

              <tr>
                <td>Golongan</td>
                <td>
                  <select class="form-control" name="golongan" id="golongan" value="<?= $data['golongan'] ?> "required>
                  <option value="">--Pilih Jenis Golongan--</option>  
                  <option value="PNS">PNS</option>
                    <option value="PPPK">PPPK</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <td>
                  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?> "required>
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email" size="20" value="<?= $data['email'] ?> "required></td>
              </tr>

              <tr>
                <td>Alamat</td>
                <td colspan="3"><textarea class="form-control" name="alamat" id="alamat" value="<?= $data['alamat'] ?> "required></textarea></td>
              </tr>
              <br>
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
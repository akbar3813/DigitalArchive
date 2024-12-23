<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM kelas_1");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Siswa</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>NISN</th>
                  <th>Nama Orang Tua</th>
                  <th>Nomor Orang Tua</th>
                  <th>Nama Wali</th>
                  <th>Nomor Wali</th>
                  <th>Foto</th>
                  <th>Raport</th>

                  
                  
                  <th style="width: 100">Aksi</th>
                </tr>
              </thead>
              <tbody>

              <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                  <tr>
                    <td><?= $data['nama_siswa'] ?></td>
                    <td><?= $data['tempat_lahir'] ?></td>
                    <td><?= $data['tanggal_lahir'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['nisn'] ?></td>
                    <td><?= $data['nama_ortu'] ?></td>
                    <td><?= $data['no_ortu'] ?></td>
                    <td><?= $data['nama_wali'] ?></td>
                    <td><?= $data['no_wali'] ?></td>
                    <td><?= $data['foto'] ?></td>
                    <td><?= $data['raport'] ?></td>
                   
                    <td>
                      
                      </a>
                      <a class="btn btn-sm btn-success" href="export.php?id=<?= $data['id'] ?>">
                        <i class="fas fa-download fa-fw"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                  $no++;
                endwhile;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>
<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>List Kelas</h1>
        <a href="./create.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="column">
        <div class="row">
            <!-- Kelas 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" onclick="goToPage('kelas1.php')">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas 1</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kelas 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" onclick="goToPage('kelas2.php')">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas 2</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kelas 3 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" onclick="goToPage('kelas3.php')">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas 3</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kelas 4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" onclick="goToPage('kelas4.php')">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas 4</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" onclick="goToPage('kelas5.php')">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas 5</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1" onclick="goToPage('kelas6.php')">
                    <div class="card-icon bg-primary">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas 6</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Script untuk Navigasi Halaman -->
<script>
    function goToPage(page) {
        window.location.href = page;
    }
</script>


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